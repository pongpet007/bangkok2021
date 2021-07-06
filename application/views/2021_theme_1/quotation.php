<!DOCTYPE html>
<html lang="th">
	<? $this->load->view('2021_theme_1/inc/header-meta') ?>
	<body>
		<? $this->load->view('2021_theme_1/inc/header1/header3') ?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="container header-top  mb-5">
						<div class="row">
							<div class="col-lg-12 " style="padding: 0;" >
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item color-menu"><a href="<?=base_url()?>"><?=lang('Home')?></a></li>
										<li class="breadcrumb-item  color-menu-active active" aria-current="page"><?=lang('Quotation')?></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<!--/////breadcrumb -->
					<hr>
					<div class="quotation-head">
						<h5>
							<?=lang('Quotation')?>
						</h5>
					</div>
					<form name="frmsendRequest" id="frmsendRequest" class="cart" action="<?=base_url("Favorite/sendmail")?>" method="post">
						<table class="table-quotation " style="margin-top: 20px;" width="100%">
							<thead>
								<tr class="head-join ">
									<td class="text-position">
										<h5 class="my-4"><?= lang('img-products')?></h5>
									</td>
									<td class="text-count">
										<h5 class="my-4"><?=lang('product')?></h5>
									</td>
									<td class="text-detail">
										<h5 class="my-4"><?=lang('count')?></h5>
									</td>
									<!-- <td class="text-delete">
										<h3>ลบ</h3>
									</td> -->
								</tr>
								<!-- Wait code Loop -->
								<tr class="quotation-detail-tr-1">
									<td class="img-products-quotation">
										<? foreach ($product->images as $key => $images) { ?>
										<? if ($key==0) { ?>
										<?php $i = json_decode($images->resolution); ?>
										<picture>
											<?php foreach ($i as $key => $newi) { ?>
											<source media="(min-width:<?=$key;?>px)" srcset="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>">
											<?php } ?>
											<img class="lazy img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" data-src="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$images->show_admin?>.<?=$images->extension ?>" alt="<?=$product->pro_name?>">
										</picture>
										<? } ?>
										<? } ?>
									</td>
									<td class="count-job">
										<p><?= $product->pro_name?></p>
									</td>
									<td class="detail-job">
										<div class="quotation-count">
											<p class="pr-2"><?=lang('count')?></p>
											<input type="text" name="qty" value="1" class="pro-cart"> 
										</div>
									</td>
									<!-- <td class="detail-job">
										<a href="#">
											<h3>ลบ</h3>
										</a>
									</td> -->
								</tr>
								<!-- End Loop -->
							</thead>
						</table>
						<div class="cart-tax">
							<div class="">
								<h5 class="cart-bottom-title section-bg-white pb-3"><?=lang('data-contact')?></h5>
							</div>
							<div class="tax-wrapper">
								<div class="tax-select-wrapper">
									<div class="tax-select">
										<input type="text" name="fullname" placeholder="<?=lang('name-contact')?>" value="" required=""> 
									</div>
									<div class="tax-select">
										<input type="text" name="company_name" placeholder="<?=lang('name-company')?>" value="" required=""> 
									</div>
									<div class="tax-select">
										<input type="email" name="email" placeholder="<?=lang('e-mail')?>" value="" required="">
									</div>
									<div class="tax-select">
										<input type="text" name="telephone" placeholder="<?=lang('Phone number')?>" value="" required=""> 
										<input style="display: none;" class="hidden" type="text" name="pro_id" placeholder="โทร" value="<?=$pro_id?>"> 
									</div>
									<div class="tax-select">
										<textarea name="detail" placeholder="<?=lang('detail-contact')?>"></textarea>
									</div>
									<?php echo $widget;?>
                                        <?php echo $script;?>
									<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=onload&amp;hl=en" async="" defer=""></script>                                        <br>
									<div style="text-align: left;">
										<button class="cart-btn-2" type="submit" style="padding-left: 30px;padding-right: 30px;background-color: #174ea9;color: #fff; font-size: 20px;border-color: #fff0;"><?=lang('sent-quotation')?></button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?
			$this->load->view('2021_theme_1/inc/footer1/footer2')
			?>
		<script src="<?=base_url()?>assets/aos-master/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
		<script>
			$(document).ready(function() {
				var owl = $('.owl-carousel-job-about');
				owl.owlCarousel({
					margin: 10,
					loop: true,
					responsive: {
						0: {
							items: 2
						},
						600: {
							items: 3
						},
						1000: {
							items: 4
						}
					}
				})
			})
		</script>
		<script src="<?=base_url()?>assets/owlcarousel/highlight.js"></script>
		<script src="<?=base_url()?>assets/owlcarousel/app.js"></script>
		<script type="text/javascript">
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>