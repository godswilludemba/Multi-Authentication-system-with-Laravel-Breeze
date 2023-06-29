<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    public function Index()
    {
        return view('seller.seller_login_form');
    } //end method

    public function SellerDashboard()
    {
        return view('seller.seller_index');
    } //end method

    public function SellerLogin(Request $request)
    {
      $check = $request->all();

      if(Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']])){
        return redirect()->route('seller.dashboard')->with('error', 'Seller LoggedIn successfully');
      }else {
        return redirect()->back()->with('error', 'Wrong Email Or Password');
      }
    } // end method
    
    public function SellerLogout()
    {
        Auth::guard('seller')->logout();
        return redirect()->route('seller_login_form')->with('error', 'seller LoggedOut successfully');
    } // end method

    public function SellerRegister()
    {
        return view('seller.seller_register');
    }  // end method

    public function CreateSellerRegister(Request $request)
    {
        Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()
    
           ]);
           return redirect()->route('seller_login_form')->with('error', 'Seller Creation Success, Login Now');
    }// end method
}
