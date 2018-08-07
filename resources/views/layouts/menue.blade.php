        <div class="navbar-fixed-top">
            <div class="container-fluid">
                    <div class="row" style="background: #e6e6ff;margin-top:0px">
                            <div class="col-sm-4"> 
                                    <a class="logo"  href="#"><img src="{{asset('img/logo.jpg')}}" class="wow bounceInLeft"></a>
                            </div>
                            <div class="col-sm-2">
                                <div class="check">
                                    <div><p>Check Rate</p></div>
                                    <div>
                                    <img src="{{asset('img/flagus.jpg')}}">
                                    <img src="{{asset('img/flaguk.jpg')}}">
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="check">
                                <!-- hereeeee -->
                                <span></span><a href="{{route('shoppingcart')}}" >Shoping Cart</a>
                                    <span class="badge badge_cart" >{{ Session::has('cartt') ? Session::get('cartt')->totalQty : '' }}
                                    </span>                                   
                                </div>
                            </div>
                          
                        </div>
                   </div>