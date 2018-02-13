<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Website seller | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="
  {{ asset('css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="
  {{ asset('css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="
  {{ asset('Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">
<<<<<<< HEAD
=======
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="
  {{ asset('jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


>>>>>>> 84c11d2c81513f5b101551d04005838ce6177ae4
  @yield('header')
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
<<<<<<< HEAD
          <img src="" class="img-circle" alt="User Image">
=======
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
>>>>>>> 84c11d2c81513f5b101551d04005838ce6177ae4
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        
        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Man</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
<<<<<<< HEAD
            <li><a href="{{route('showproduct',array('Categ_name'=>'Shirts'))}}"><i class="fa fa-circle-o"></i> Shirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Polos</a></li
            <li><a href="#"><i class="fa fa-circle-o"></i> T-Shirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> jeans&Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> shorts</a></li>
=======
            <li><a href="#"><i class="fa fa-circle-o"></i> Shirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Polos</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> T-Shirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> jeans&Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>shorts</a></li>
>>>>>>> 84c11d2c81513f5b101551d04005838ce6177ae4
            <li><a href="#"><i class="fa fa-circle-o"></i> Swimwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Underwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sleepwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> jackets,Coats&Hoodies</a></li>

          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Woman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> dress</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> jumpsuits</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Tops</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Jeans & Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Leggings</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> skirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Swimwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lingerie</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sleepwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Cardigans & Kimonos</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Jackets&Coats</a></li>
          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Kides-boys 0-3</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="#"><i class="fa fa-circle-o"></i> Tops</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Underwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Blankets& Throws</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Swimwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Sportswear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Sleepswear</a></li>
          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Kides-boys 3-6</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="#"><i class="fa fa-circle-o"></i> Tops</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Underwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Shorts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sleepwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Jackets & Coats</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Swimwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Suits</a></li>
          </ul>
        </li>




        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Kides-boys 6-12</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Tops</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Underwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Shorts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sleepwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Jackets & Coats</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Swimwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Sportswear</a></li>


          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Kides-girls 0-3</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Towels</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Underwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Sleepwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Blankets & Throws</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Tops</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Baby Clothes & Shoes</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Jackets & Coats</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pants</a></li>

          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Kides-girls  3-6</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Tops</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Underwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Dresses</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Skirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Jackets & Coats</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sleepwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Shorts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Shorts</a></li>


          </ul>
        </li>




        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Kides-girls 6-12</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Tops</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Underwear </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Dresses</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Jackets & Coats</a></li>
            <li><a href="#l"><i class="fa fa-circle-o"></i> Skirts </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Shorts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sleepwear</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>  Jumpsuits, Rompers</a></li>

          </ul>
        </li>



        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa gfa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>


        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>

        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>





<div class="content-wrapper">


@yield('content')


<<<<<<< HEAD
</div>
=======
  </div>


>>>>>>> 84c11d2c81513f5b101551d04005838ce6177ae4

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

<<<<<<< HEAD
=======
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
         
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        
        <!-- /.control-sidebar-menu -->








      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>





>>>>>>> 84c11d2c81513f5b101551d04005838ce6177ae4
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
<!-- jQuery 3 -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<<<<<<< HEAD
=======
<!-- Morris.js charts -->
<script src="{{ asset('raphael/raphael.min.js') }}"></script>
<script src="{{ asset('morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('fastclick/lib/fastclick.js') }}"></script>
>>>>>>> 84c11d2c81513f5b101551d04005838ce6177ae4
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<<<<<<< HEAD
 <!-- jQuery -->
{{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<!-- Bootstrap JavaScript -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>
<!-- icheck checkboxes -->
<script type="text/javascript" src="{{ asset('icheck/icheck.min.js') }}"></script>




    <!-- Delay table load until everything else is loaded -->
@yield('footer')
@yield('script')
=======
@yield('footer')
>>>>>>> 84c11d2c81513f5b101551d04005838ce6177ae4

</body>
</html>
