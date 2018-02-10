<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet"  href="css/font-awesome.min.css">
        <link rel="stylesheet"  href="css/style.css">
        <link rel="stylesheet"  href="css/custom.css">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 

        <title>
    Clothes

  @yield('title')

        </title>

        @yield('header')
   
    </head>
    <body>
            @yield('content')

       

            @yield('footer')
    
    
            <script src="js/jquery-3.2.1.min.js"></script>
    
            <script src="js/bootstrap.min.js"></script>
            <script src="js/custom.js"></script>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"></script>
        </body>
    </html>