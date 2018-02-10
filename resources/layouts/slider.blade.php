@extends('index')
<div class="container">
    <div id="first-slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <div class="carousel-inner" role="listbox">
                <!-- Item 1 -->
                <div class="item active slide1">
                    <div class="row">
                       <div class="container">
                        <div class="text-right">
                            <img data-animation="animated zoomInLeft" src="img/main-banner3.jpg">
                        </div>
                        </div>
                    </div>
                 </div> 
                <!-- Item 2 -->
                <div class="item slide2">
                    <div class="row">
                       <div class="container">
                        <div class="text-right">
                            <img data-animation="animated zoomInLeft" src="img/main-banner3.jpg">
                        </div>
                       </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="item slide3">
                    <div class="row">
                        <div class="container">
                            <div class="text-right">
                                <img data-animation="animated zoomInLeft" src="img/main-banner3.jpg">
                            </div>     
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="item slide4">
                    <div class="row">
                        <div class="container">
                            <div class="text-right">
                                <img data-animation="animated zoomInLeft" src="img/main-banner3.jpg">
                            </div>  
                        </div>
                    </div>
                </div>
                <!-- End Item 4 -->
        
            </div>
            <!-- End Wrapper for slides-->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
</div>