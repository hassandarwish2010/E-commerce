<!-- start section  footer -->
<div class="container-fluid">
	<section class="footer">
	 <div class="row">
		 <div class="col-md-6">
			 <h3 style="margin-left: 30px">Sitemap</h3>
			 <ul class="list-unstyled three-columns" style="margin-left: 30px">
				 <li> Home</li>
				 <li> About</li>
				 <li> Account</li>
				 <li> Contact Us</li> 					
			 </ul>
		 </div>
		 <div class="col-md-6">
			 <h3>contact information</h3>
			 <div class="media">
				 
				 <div class="media-body">
					<div class="col-md-6">
		

						<hr style="width: 50%">
					<a href="https://www.googleplus.com/">	<li class="fa fa-google-plus fa-3x" style="padding: 10px"></li></a>
					<a href="https://www.facebook.com/">	<li class="fa fa-facebook fa-3x" style="padding: 10px"></li></a>
					<a href="https://www.twitter.com/"><li class="fa fa-twitter fa-3x" style="padding: 10px"></li></li></a>
					<a href="https://www.youtube.com/"><li class="fa fa-youtube fa-3x" style="padding: 10px"></li></a>
					</div>
				 </div>
			 </div>
		 </div>
	 </div>
	</section>
 </div>	
<!-- end section  footer -->    





	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"></script> --}}
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	

	<script>
new WOW().init();
</script>
	


@yield('script')    

</body>
</html>