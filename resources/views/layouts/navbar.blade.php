<div class="container-fluid">
    <nav class="navbar navbar-default" style="z-index:2; background-color:#575757; ">
           <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span> 
             </button>
            
           </div>
           <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav">
                 <li><a href="{{route('product')}}">Home</a></li>
                 <li id="wm">
                     <a href="{{ url('get_category/Woman') }}">Women</a>
                 </li>
                 <li id="mn">
                    <a href="{{ url('get_category/Men') }}">Men </a>
                </li>
                 <li><a href="{{ url('get_category/Babies') }}">Babies</a>
                </li>
                 <li><a href="{{route('contactt')}}">Contact Us</a></li>
                 <li><a href="{{route('about')}}">About</a></li>
              
             </ul>
             <!--<ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                         <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                         <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                     </ul>
                 </li>
              
             </ul>-->
                 
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest

                    <li><a class="" href="#" id="auth"
                        onclick="document.getElementById('authentication').style.display='block'">Login Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul style="background-color: #708090" class="dropdown-menu" role="menu">
                            <li >
                                <a href="{{ route('logout') }}">
                                    <i class="fa fa-btn fa-sign-out"></i>Logout
                                </a>
    
                                <form id="logout-form" action="#" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
  
           </div>
       </nav>
    </div>
    </div>

    @include('layouts.sign_in')
    @include('layouts.login');