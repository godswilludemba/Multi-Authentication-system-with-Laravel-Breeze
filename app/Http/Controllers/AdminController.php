<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Index()
    {
        return view('admin.admin_login');
    } //end method

    public function Dashboard()
    {
       return view('admin.admin_index');
    } //end method

    public function Login(Request $request)
    {
      $check = $request->all();

      if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
        return redirect()->route('admin.dashboard')->with('error', 'Admin LoggedIn successfully');
      }else {
        return redirect()->back()->with('error', 'Wrong Email Or Password');
      }
    } // end method

    public function AdminLogout()
    {
       Auth::guard('admin')->logout();

       return redirect()->route('login_form')->with('error', 'Admin LoggedOut successfully');
    } // end Method

    public function AdminRegister()
    {
      return view('admin.admin_register');
    } //end method

    public function CreateAdminRegister(Request $request)
    {
       Admin::insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now()

       ]);
       return redirect()->route('login_form')->with('error', 'Admin Creation Success, Login Now');
    } //end method
}
