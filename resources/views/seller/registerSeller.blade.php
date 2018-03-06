

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <link rel="stylesheet"  href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet"  href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet"  href="{{ asset('css/styleregister.css') }}">
        <style type="text/css">
            input {
                margin-bottom:20px;
            }
        </style>
        
    </head>
    <body style="background:#fff url({{ asset('img/imgpsh_fullsize.jpg') }}) repeat top left;">
        <div class="container">
           
            <header>
                <h1 class="text-center"> Registration </h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="{{ route('registerSeller') }}" method="post" > 
                                {{ csrf_token() }}
                                {{ csrf_field() }}
                                <h1> Registration</h1> 
                                  
                                    <input  name="company_name" required="required" type="text" placeholder="Enter company Name"/>
                                 
                                    <input  name="name" type="text" placeholder="Enter Name" /> 
                                    <input  placeholder="Enter Email" required="required" name="email" type="email"/> 
                                    <input  name="password"  type="password" placeholder="Enter password" /> 
                                    <input name="phone" type="text" placeholder="Enter Phone" />

                                   
                                    <input name="address" type="text"  placeholder="Enter Address" /> 
                                    
                                    <button type="submit" class="btn btn-danger" >Submit</button>
                                
                                
                            </form>
                        </div>

                       
						
                    </div>
                </div>  
            </section>
        </div>
        <script src="{{ asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>