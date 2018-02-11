@extends('index')

@section('content')
@include('header')
@include('nav')
@include('slider')
@include('latest_broduct')
<?Php
//print_r($products);
//print_r($lastproduct);

?>


@include('show_products')
@include('our_team')
@include('our_clients')
@include('footer')


      <!--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>


            </div>
        </div>
    -->


        @endsection('content')