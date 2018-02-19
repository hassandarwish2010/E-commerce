<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="_token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Website seller | @yield('title')</title>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet"  href="{{ asset('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">
<<<<<<< HEAD
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


=======
  <link rel="stylesheet" href="{{ asset('jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}"> 
  
  <link rel="stylesheet" href="{{ asset('icheck/square/yellow.css') }}">
 
>>>>>>> 8bffa27201ffc14165e22e79768d795ad3641c80
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
          <img src="" class="img-circle" alt="User Image">
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
            <li><a href="#"><i class="fa fa-circle-o"></i> Shirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Polos</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> T-Shirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> jeans&Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>shorts</a></li>
=======
            <li><a href="{{route('showproduct',array('Categ_name'=>'Shirts'))}}"><i class="fa fa-circle-o"></i> Shirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Polos</a></li
            <li><a href="#"><i class="fa fa-circle-o"></i> T-Shirts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> jeans&Pants</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> shorts</a></li>
>>>>>>> 8bffa27201ffc14165e22e79768d795ad3641c80
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
            <li><a href="{{ route('showproduct',array('categ_name'=>'Dresses','group_name'=>'Woman')) }}"><i class="fa fa-circle-o"></i> Dresses</a></li>
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



      

        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>





<div class="content-wrapper">

@yield('content')

</div>



<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
 

<script src="{{ asset('js/jquery-3.2.1.min.js') }}" ></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<<<<<<< HEAD
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<!-- icheck checkboxes -->
<script type="text/javascript" src="{{ asset('icheck/icheck.min.js') }}"></script>
    <!-- Delay table load until everything else is loaded -->
  <script src="http://malsup.github.com/jquery.form.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
    
@yield('footer')
@yield('script')
=======
<script src="{{ asset('js/adminlte.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('toastr/toastr.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('icheck/icheck.min.js') }}"></script>
>>>>>>> 8bffa27201ffc14165e22e79768d795ad3641c80

@yield('script')
</body>
</html>
