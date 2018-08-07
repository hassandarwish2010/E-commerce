@extends('layouts.index')

@section('content')


<div class="container-fluid">
    <div class="row">
        @include('user.product.product_left')
        @include('user.product.product_center')

        <div class="col-md-2 ">
            
        </div>

    </div>
</div>
   
@endsection
@section('script')


<script>
            jQuery('#accordion').accordion({ collapsible:true, active:false, autoHeight:         false, disabled:true});
jQuery('#accordion h3.accordion-header').click(function(){
      jQuery(this).next().slideToggle();
});
jQuery('.accordion').click(function(){
      jQuery('#accordion h3.accordion-header').next().slideDown();
});
        </script>        
   <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);
                        
                        function plusSlides(n) {
                          showSlides(slideIndex += n);
                        }
                        
                        function currentSlide(n) {
                          showSlides(slideIndex = n);
                        }
                        
                        function showSlides(n) {
                          var i;
                          var slides = document.getElementsByClassName("mySlides");
                          var dots = document.getElementsByClassName("demo");
                          var captionText = document.getElementById("caption");
                          if (n > slides.length) {slideIndex = 1}
                          if (n < 1) {slideIndex = slides.length}
                          for (i = 0; i < slides.length; i++) {
                              slides[i].style.display = "none";
                          }
                          for (i = 0; i < dots.length; i++) {
                              dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";
                          dots[slideIndex-1].className += " active";
                          captionText.innerHTML = dots[slideIndex-1].alt;
                        }
                     </script>
@endsection

