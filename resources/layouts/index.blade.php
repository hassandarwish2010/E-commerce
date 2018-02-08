<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet"  href="bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet"  href="bootstrap/css/style.css">
        <link rel="stylesheet"  href="bootstrap/css/custom.css">
      

        <title>
    Clothes

  @yield('title')

        </title>

        @yield('header')
   
    </head>
    <body>
            @yield('content')

       

            @yield('footer')
    
    
            <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <script src="bootstrap/js/custom.js"></script>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"></script>
        </body>
    </html>