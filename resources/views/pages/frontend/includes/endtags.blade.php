@section('endtags')




	<!-- fraimwork - jquery include -->
	<script src="{{URL::to('assets/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{URL::to('assets/js/popper.min.js')}}"></script>
	<script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>

	<!-- carousel jquery include -->
	<script src="{{URL::to('assets/js/slick.min.js')}}"></script>
	<script src="{{URL::to('assets/js/owl.carousel.min.js')}}"></script>

	<!-- map jquery include -->
	<script src="{{URL::to('assets/js/gmap3.min.js')}}"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

	<!-- calendar jquery include -->
	<script src="{{URL::to('assets/js/atc.min.js')}}"></script>

	<!-- others jquery include -->
	<script src="{{URL::to('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{URL::to('assets/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{URL::to('assets/js/jarallax.min.js')}}"></script>
	<script src="{{URL::to('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{URL::to('assets/js/lightcase.js')}}"></script>
	

	<!-- gallery img loaded - jqury include -->
	<script src="{{URL::to('assets/js/imagesloaded.pkgd.min.js')}}"></script>

	<!-- multy count down - jqury include -->
	<script src="{{URL::to('assets/js/jquery.countdown.js')}}"></script>
	<script src="{{URL::to('assets/js/progress-counter.min.js')}}"></script>


	<!-- color panal - jqury include -->
	<!-- <script src="assets/js/style-switcher.js"></script> -->

	<!-- custom jquery include -->
	<script src="{{URL::to('assets/js/custom.js')}}"></script>

	@yield('scripts')

</body>
</html>	


@endsection