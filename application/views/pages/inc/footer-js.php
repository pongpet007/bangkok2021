<script src="<?=base_url()?>assets/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>

<script src="<?=base_url()?>assets/owlcarousel/highlight.js"></script>
<script src="<?=base_url()?>assets/owlcarousel/app.js"></script>


<!-- Tooltip -->
<script type="text/javascript">
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})
</script>

<script>
	var owl = $('.owl-carousel-promotion');
	owl.owlCarousel({
		margin: 10,
		loop: false,
		responsiveClass:true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 2,
				// nav:true
			}
		}
	})
</script>

<script>
	var owl = $('.owl-carousel-port');
	owl.owlCarousel({
		margin: 10,
		loop: false,
		responsiveClass:true,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 1
			},
			1000: {
				items: 4,
				// nav:true
			}
		}
	})
</script>
<script>
	var owl = $('.owl-carousel-products');
	owl.owlCarousel({
		margin: 10,
		loop: false,
		responsiveClass:true,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 2
			},
			1000: {
				items: 3,
				// nav:true
			}
		}
	})
</script>
<script>
	var owl = $('.owl-carousel-relate-product');
	owl.owlCarousel({
		margin: 10,
		loop: false,
		responsiveClass:true,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 2
			},
			1000: {
				items: 4,
				// nav:true
			}
		}
	})
</script>




<!-- Navbar mobile -->
<script type="text/javascript">
	
</script>