<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="Resource-type" content="Document" />

	<?
	$this->load->view("pages/inc/meta-header")
	?>

</head>
<body>
	
	

	<section class="section-header" style="">

		


		<?
		$this->load->view("pages/inc/header-index")
		?>

		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?=base_url()?>images/bg/bg-1.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?=base_url()?>images/bg/bg-2.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?=base_url()?>images/bg/bg-3.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?=base_url()?>images/bg/bg-4.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?=base_url()?>images/bg/bg-5.png" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>


		<div class="content-header">
			BANGKOK ABSOLUTE ELECTRIC AND CON
		</div>

	</section>

	<div class="sticky-right">
		<a href="#" class="btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="Shop.bangkokab">
			<img src="<?=base_url()?>images/icon/shop.png" style="width: 50px; height: 50px; z-index: 999;">
		</a>
		<a href="#" class="btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="YOUTUBE">
			<img src="<?=base_url()?>images/icon/youtube.png" style="width: 50px; height: 50px;">
		</a>
		<a href="#" class="btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="INSTRAGRAM">
			<img src="<?=base_url()?>images/icon/instragram.png" style="width: 50px; height: 50px;">
		</a>
		<a href="#" class="btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="LINE ID">
			<img src="<?=base_url()?>images/icon/line.png" style="width: 50px; height: 50px;">
		</a>
		<a href="#" class="btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="FACEBOOK">
			<img src="<?=base_url()?>images/icon/facebook.png" style="width: 50px; height: 50px;">
		</a>
	</div>


	<section class="content-home">
		<div class="container">
			<!-- *************** Brand *************** -->
			<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="we-are-dis" style="">
						<?=lang('We are distributors of world-class brands')?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					<img src="<?=base_url()?>images/banner/banner-large-1.png" class="img-width-100" alt="">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					<img src="<?=base_url()?>images/banner/banner-large-2.png" class="img-width-100" alt="">
				</div>
			</div>
			<div class="row" style="margin: 20px 0">
				<div class="col-md-3 col-6">
					<img src="<?=base_url()?>images/banner/banner-small-1.png" class="img-width-100" alt="">
				</div>
				<div class="col-md-3 col-6">
					<img src="<?=base_url()?>images/banner/banner-small-2.png" class="img-width-100" alt="">
				</div>
				<div class="col-md-3 col-6">
					<img src="<?=base_url()?>images/banner/banner-small-3.png" class="img-width-100" alt="">
				</div>
				<div class="col-md-3 col-6">
					<img src="<?=base_url()?>images/banner/banner-small-4.png" class="img-width-100" alt="">
				</div>
			</div>
			<!-- *************** Promotion *************** -->
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<div class="font-title" >
						<?=lang("promotion")?>
					</div>
					<div style="text-align:center;">
						<img src="<?=base_url()?>images/line-bottom.png" class="img-width-100">
					</div>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="margin: 50px 0;">
					<div class="owl-carousel owl-carousel-promotion">
						
						<? foreach ($promotions as $promotion) { ?>


							<div class="item">
								<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Promotion">
									<img src="<?=base_url()?>images/promotion/<?=$promotion->promotion_name_img?>"  class="img-width-100">
								</a>
							</div>

							<?
						}
						?>
						

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 d-md-block d-sm-none d-none">
					
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="font-title" >
						<?=lang("Examples and past achievements")?>

					</div>
					<div style="text-align:center;">
						<img src="<?=base_url()?>images/line-bottom-2.png"  class="img-width-100">
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 d-md-block  d-sm-none d-none">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="margin: 50px 0;">
					<div class="owl-carousel owl-carousel-port">

						<? foreach ($portfolios as $port) { 
							// $filepath = base_url().'../images/port/'.$port->portfolio_name_img;
							?>
							<div class="item">
								<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Achievements/detail/<?=$port->portfolio_id?>">
									<img src="<?=base_url()?>images/port/<?=$port->portfolio_name_img?>"class="img-width-100">
								</a>
							</div>
							<?
						}
						?>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">

				</div>
				<div class="col-md-6">
					<div class="font-title" >
						<?=lang("product-service-us")?>
					</div>
					<div style="text-align:center;">
						<img src="<?=base_url()?>images/line-bottom-2.png"  class="img-width-100">
					</div>
				</div>
				<div class="col-md-3">

				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="margin: 50px 0;">
					<div class="owl-carousel owl-carousel-products">


						<?foreach ($services as $service) { ?>

							<div class="item">


								

								<?
									// $pathfileservice = '../images/service/'.$service->service_name_img;
									// echo $pathfileservice;
									// if(is_file($pathfileservice)) {
									// 	echo "<img src=".$pathfileservice."> ";
									// }
								if($service->service_name_img != ''){
									?>
									<img src="<?=base_url()?>images/service/<?=$service->service_name_img?>" class="img-width-100">
									<?
								}
								?>


								<!-- <img src="<?=base_url()?>images/products/pro-1.png"> -->

								<div style="margin: 40px 0;">
									<a href="<?=$service->link_external?>" class="name-product">
										<?=$service->service_name?>
									</a>
								</div>
								<div class="pro-about">
									<?=$service->service_description?>
								</div>
								<a href="<?=$service->link_external?>" class="btn btn-go-ptoduct">
									<div class="about-btn">
										<img src="<?=base_url()?>images/icon/box-arrow-in-right.png" class="icon-right-products">
										<?=lang("see-more")?>
									</div>
								</a>
							</div>
							<?
						}
						?>



					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="font-title" >
						<?=lang("knowledge")?>
					</div>
					<div style="text-align: left;">
						<img src="<?=base_url()?>images/line-bottom-left.png"  class="img-width-100">
					</div>
					<div class="row">

						<? foreach ($blogs as $blog ) { ?>


							<div class="col-md-12 space-know">
								<div class="row">
									<div class="col-md-6 ">

										<? foreach ($blog->images as $key => $images) { ?>
											<? if ($key==0) { ?>
												<img class="img-width-100" src="<?=base_url()?>images/website/<?=$images->filename?>_414.<?=$images->extension?>" alt="<?=$blog->blog_name?>">
											<? } ?>
										<? } ?>

									</div>
									<div class="col-md-6">
										<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Blog/detail/<?=$blog->blog_id?>" class="know-name">
											<?=$blog->blog_name?>
										</a>
										<p class="know-about">
											<?=$blog->blog_desc_short?>
										</p>
										<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Blog/detail/<?=$blog->blog_id?>" class="btn btn-know">
											<div class="about-btn">
												<img src="<?=base_url()?>images/icon/box-arrow-in-right.png" class="icon-right-products">
												<?=lang("see-more")?>
											</div>
										</a>
									</div>
								</div>
							</div>

							<?	
						}
						?>


					</div>
				</div>
				<div class="col-md-6">
					<div class="font-title" >
						<?=lang("news and activities")?>
					</div>
					<div style="text-align: left;">
						<img src="<?=base_url()?>images/line-bottom-left.png"  class="img-width-100">
					</div>
					<div class="row">

						<?foreach ($news as $new) { ?>
							


							<div class="col-md-6 space-know">

								<? foreach ($new->images as $key => $images) { ?>
									<? if ($key==0) { ?>
										<img class="img-width-100" src="<?=base_url()?>images/website/<?=$images->filename?>_303.<?=$images->extension?>" alt="<?=$blog->blog_name?>">
									<? } ?>
								<? } ?>

							
								<a href="<?=base_url($this->session->userdata('site_lang_name').'/News/detail/'.$new->news_id)?>" class="news-name">
									<div style="margin: 20px 0;">
										<?=$new->news_name?>
									</div>
								</a>
								<div class="news-about">
									<?=$new->news_desc_short?>
								</div>
								<a href="<?=base_url($this->session->userdata('site_lang_name').'/News/detail/'.$new->news_id)?>" class="btn btn-know">
									<div class="about-btn">
										<img src="<?=base_url()?>images/icon/box-arrow-in-right.png" class="icon-right-products">
										<?=lang("see-more")?>
									</div>
								</a>
							</div>

							<?
						}
						?>

						

					</div>
				</div>
			</div>
		</div>
	</section>


	<style type="text/css">
	.section-header {

		background-size: 100% auto;
		height: 958px; 
		background-repeat: no-repeat;
	}
	@media(min-width:  300px) and (max-width:  767px){
		.section-header{
			height: 200px;
		}
	}
	@media(min-width: 768px) and (max-width: 1023px){
		.section-header{
			height:380px;
		}
	}
	@media(min-width:  1024px) and (max-width:  1359px) {
		.section-header{
			height:510px;
		}
	}
	@media(min-width:  1360px) and (max-width:  1600px) {
		.section-header{
			height: 685px;
		}
	}
	@media(min-width:  1601px) {

	}


</style>


<script type="text/javascript">

	$(document).on('scroll', function(){
		if ( $(window).scrollTop() > 30) {
			$('#header').addClass('header-active');
		} else {
			$('#header').removeClass('header-active');
		}
	});




</script>


<?
$this->load->view("pages/inc/footer")
?>

<?
$this->load->view("pages/inc/footer-js")
?>

</body>
</html>