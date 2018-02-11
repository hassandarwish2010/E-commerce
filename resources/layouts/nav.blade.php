<div class="container">
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
               <li><a href="#">Home</a></li>
               <li id="wm">
                   <a href="#">Women
                       <div id="showwomen" style="width:300%;background-color:#575757; display:none; position:absolute;z-index:1 ;opacity:0.9;margin-left:17%;margin-top:-2%;">
                           <div class="row">
                               <div class="col-md-6">
                                   <ul id="submenu">
                                       <li><a href="">Dresses</a></li>
                                       <li><a href="">Tops &amp; T-Shirts</a></li>
                                       <li><a href="">Shirts &amp; Blouses</a></li>
                                       <li><a href="">Skirts</a></li>
                                       <li><a href="">Trousers &amp; Shorts</a></li>
                                       <li><a href="">Leggings &amp; Hosiery</a></li>
                                       <li><a href="">Playsuits &amp; Jumpsuits </a></li>
                                       <li><a href="">Jeans</a></li>
                                   </ul>
                               </div>
                               <div class="col-md-6">
                                   <ul>
                                       <li><a href="">Sportswear &amp; Joggers </a></li>
                                       <li><a href="">Swim &amp; Beachwear </a></li>
                                       <li><a href="">Blazer &amp; Jackets </a></li>
                                       <li><a href="">Knitwear</a></li>
                                       <li><a href="">Onesies &amp; Nightwear</a></li>
                                       <li><a href="">Lingerie </a></li>
                                       <li><a href="">Suit</a></li>
                                       <li><a href="">Sale</a></li>
                                   </ul>
                               </div>  
                           </div>
                       </div>        
                   </a>
               </li>
               <li><a href="#">Men</a></li>
               <li><a href="#">Babies</a></li>
               <li><a href="#">Contact Us</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Account</a></li>
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

<!--Login Modal -->
<div id="authentication" class="w3-modal">
		<span
			onclick="document.getElementById('authentication').style.display='none'"
			class="w3-closebtn w3-grey w3-hover-red w3-container w3-padding-16 w3-display-topright">X</span>

		<div class="w3-modal-content w3-card-8 w3-animate-zoom"
			style="max-width: 600px">

			<div class="col-md-6 w3-card-8 w3-teal" onclick="openForm('Login')">
				<h3>Sign In</h3>
			</div>
			<div class="col-md-6 w3-card-8 w3-teal"
				onclick="openForm('Register')">
				<h3>Sign Up</h3>
			</div>
			<div style="margin-top: 25px !important;">
				<div id="Login" class="w3-container form">
					<div class="w3-container ">
						<div class="w3-section">
							<br> <br>@if (count($errors->login) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->login->all() as $error)
									<P>{{ $error }}</p>
									@endforeach
								</ul>
							</div>
							@endif 
							@if (Session::has('message'))
							<div class="alert alert-warning">{{ Session::get('message') }}</div>
							@endif
							<form action="{{ route('login') }}" method="post">
								{{ csrf_field() }} <input type="hidden" name="redirurl"
									value="{{ $_SERVER['REQUEST_URI'] }}"> <label><b>Username</b></label>
								<input name="username"
									class="w3-input w3-border w3-margin-bottom" type="text"
									placeholder="Enter Username" required> <label><b>Password</b></label>
								<input class="w3-input w3-border w3-margin-bottom"
									name="password" type="password" placeholder="Enter Password"
									required> <input type="submit"
									class="w3-btn w3-btn-block w3-green" value="Login"> <input
									class="w3-check w3-margin-top" type="checkbox"
									checked="checked"> Remember me
							</form>
						</div>
					</div>
					<div class="w3-container w3-border-top w3-padding-16 ">
						<button
							onclick="document.getElementById('authentication').style.display='none'"
							type="button" class="w3-btn w3-red">Cancel</button>
						<span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
					</div>
				</div>
			</div>
			<div id="Register" class="w3-container form ">
				<div class="w3-container">
					<div class="w3-section">

						<br> <br> 
						@if (count($errors->register) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->register->all() as $error)
								<P>{{ $error }}</p>
								@endforeach
							</ul>
						</div>
						@endif
						<form action="{{ route('register')}} " method="POST" id="regForm">
							{{ csrf_field() }} <input type="hidden" name="redirurl"
                                value="{{ $_SERVER['REQUEST_URI'] }}"> 
                            <label><b>Email</b></label>
							<input class="w3-input w3-border w3-margin-bottom" type="text"
								name="email" placeholder="Enter Email"
                                value="{{ old('email') }}" required>

                            <label><b>Username</b></label>
							<input class="w3-input w3-border w3-margin-bottom" type="text"
								name="name" placeholder="Enter username" required
                                value="{{ old('name') }}">
                                 
                            <label><b>Address</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="text"
                                name="address" placeholder="Enter address" required
                                value="{{ old('address') }}"> 
                            
                            <label><b>Phone</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="text"
                                name="phone" placeholder="Enter phone" required
                                value="{{ old('phone') }}">                                     

                            <label><b>Password</b></label> 
                            <input class="w3-input w3-border w3-margin-bottom" type="password"
                                name="password" required placeholder="Enter Password"> 
                            <label><b>Confirm Password</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" required
								type="password" name="password_confirmation"
								placeholder="Enter Password">
							<button type="submit" class="w3-btn w3-btn-block w3-green">SignUp</button>
						</form>
					</div>
				</div>
				<div class="w3-container w3-border-top w3-padding-16 ">
					<button
						onclick="document.getElementById('authentication').style.display='none'"
						type="button" class="w3-btn w3-red">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<div class="fluid-container"></div>
	<script>	
openForm("Login");
function openForm(formName) {
    
    var x = document.getElementsByClassName("form");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(formName).style.display = "block";  
}
</script>
@if (Session::has('message'))
	<script>  $('#auth').click(); </script>
	@endif @if($errors->login->any())
	<script>  $('#auth').click();</script>
	@endif @if($errors->register->any())
	<script>  $('#auth').click(); openForm('Register');</script>
	@endif
