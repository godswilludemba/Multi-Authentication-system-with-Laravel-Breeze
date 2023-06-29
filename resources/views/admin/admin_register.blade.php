<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('panel/assets/images/favicon.png')}}" >
        <!--Page title-->
        <title>Admin Asuma Learning</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="{{asset('panel/assets/css/bootstrap.min.css')}}">
        <!--font awesome-->
        <link rel="stylesheet" href="{{asset('panel/assets/css/all.min.css')}}">
        <!-- metis menu -->
        <link rel="stylesheet" href="{{asset('panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css')}}">
        <!-- chart -->
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{asset('panel/assets/css/style.css')}}">
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="panel/assets/images/preloader.gif" alt="">
        </div>

        
         <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                <!-- page content -->
                <div class="registration_page center_container">
                    <div class="center_content">
                        <div class="logo">
                            <img src="panel/assets/images/logo.png" alt="" class="img-fluid">
                        </div>

                        <form action="{{route('create.admin.register')}} " method="post">
                           @csrf
                            <div class="form-group icon_parent">
                                <label for="uname">Username</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                                    <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                            </div>
                            
                            <div class="form-group icon_parent">
                                <label for="email">E-mail</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                                <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                            </div>

                            <div class="form-group icon_parent">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">                
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>

                            <div class="form-group icon_parent">
                                <label for="cpassword">Re-type Password</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>

                            <div class="form-group">
                                <a class="registration" href=" ">Already have an account</a><br>
                                <button type="submit" class="btn btn-blue">Signup</button>
                            </div>

                        </form>
                        <div class="footer">
                            <p>Copyright &copy; 2023<a href="https://easylearningbd.com/">Asuma Learning</a>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div><!--/ content wrapper -->
        </div><!--/ wrapper -->


        
        <!-- jquery -->
        <script src="{{asset('panel/assets/js/jquery.min.js')}}"></script>
        <!-- popper Min Js -->
        <script src="{{asset('panel/assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap Min Js -->
        <script src="{{asset('panel/assets/js/bootstrap.min.js')}}"></script>
        <!-- Fontawesome-->
        <script src="{{asset('panel/assets/js/all.min.js')}}"></script>
        <!-- metis menu -->
        <script src="{{asset('panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js')}}"></script>
        <script src="{{asset('panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js')}}"></script>
        <!-- nice scroll bar -->
        <script src="{{asset('panel/assets/plugins/scrollbar/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('panel/assets/plugins/scrollbar/scroll.active.js')}}"></script>
        <!-- counter -->       
         <script src="{{asset('panel/assets/plugins/counter/js/counter.js')}}"></script>
        <!-- chart -->
        <script src="{{asset('panel/assets/plugins/chartjs-bar-chart/Chart.min.js')}}"></script>
        <script src="{{asset('panel/assets/plugins/chartjs-bar-chart/chart.js')}}"></script>
        <!-- pie chart -->
        <script src="{{asset('panel/assets/plugins/pie_chart/chart.loader.js')}}"></script>
        <script src="{{asset('panel/assets/plugins/pie_chart/pie.active.js')}}"></script>
        <!-- Main js -->
        <script src="{{asset('panel/assets/js/main.js')}}"></script> 
    
     


    </body>
</html>