<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet"  href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet"  href="{{ asset('css/font-awesome.min.css') }}">
      <link rel="stylesheet"  href="{{ asset('css/stylecontact.css') }}">
</head>
<body >



<div class="container main-section" style="background:url({{ asset('img/imgpsh_fullsize.jpg') }})
 no-repeat;   background-size:100% 100%;" >
<div class="row">
    <div class="col-md-4 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-2 login-image-main text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 user-image-section">
                <img src="{{ asset('img/businessman.png') }}">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 user-login-box">
               <form method="post" action=" {{ route('loginSeller') }} "> 
                    {{ csrf_token() }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="User Name" id="name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="password">
                    </div>
                    <button class="btn btn-defualt" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>