

<!-- js -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>




<!-- gallery js -->
<script type="text/javascript">
$(document).ready(function() {
	$('#gallery').simplegallery({
		galltime: 400,
		gallcontent: '.main_image',
		gallthumbnail: '.thumbnail',
		gallthumb: '.thumb'
	});
});
</script>

<!-- owl -->
<script>
$('.owl-carousel').owlCarousel({
	loop: true,
	navRewind: true,
	margin: 10,
	nav: true,
	dots: false,
	navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i> '],
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 3
		},
		1000: {
			items: 5
		}
	}
})
</script>
</body>

</html>