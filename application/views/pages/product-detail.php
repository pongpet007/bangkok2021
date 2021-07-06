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

	<section style="background-color: #80090F;">
		<?
		$this->load->view("pages/inc/header")
		?>
	</section>
	<section class="content-products">
		<div class="header-products" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-12">
						<div style="position: relative;	display: flex; flex-wrap: wrap; align-items: stretch;">
							<input type="text" name="search" placeholder="<?=lang('search-product and service')?>" class="input-search">
							<button type="" class="btn btn-seach">
								<img src="<?=base_url()?>images/icon/search.png" style="width: 24px; height: 24px;">
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="breadcrumb-nav">
			<div class="container">
				<div class="row">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="<?=base_url($this->session->userdata("site_lang_name"))?>/Home" class="btn-breadcrumb">
									<?=lang("home")?>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="<?=base_url($this->session->userdata("site_lang_name"))?>/Products" class="btn-breadcrumb">
									<?=lang("product-service")?>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#" class="btn-breadcrumb">
									หมวดสินค้า
								</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">
								ชื่อสินค้า
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-12">
						<div class="img-pro">
							<img src="<?=base_url()?>images/products/product-1-l.png" >
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-12">
						<div class="space-pro-de-head">
							<p class="name-pro-de">
								Name S202M-C3 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
							</p>
							<div class="go-brand">
								<a href="#" class="btn btn-brand-de-pro">
									ABB
								</a>
							</div>
							<p class="price-pro-2">
								<?=lang("price")?>&nbsp;0,000.-
							</p>
							<p class="quotation-pro-de">
								* <?=lang("quotation")?>
							</p>
							<div class="quotation-de" >
								<input type="number" name="count-quotation" placeholder="1">
								&nbsp;
								<?=lang("amount")?>
							</div>
							<div class="space-quota">
								<a href="#" class="btn btn-add-quotation">
									<img src="<?=base_url()?>images/icon/cart.png">
									<?=lang("add to cart")?>
								</a>
								<a href="#" class="btn btn-quick-contact">
									<img src="<?=base_url()?>images/icon/comment.png" style="">
									<?=lang("quick-contact")?>
								</a>
							</div>
							<div class="share-pro">
								<span>
									<?=lang("share")?>
								</span>
								<a href="#" class="btn btn-share">
									<img src="<?=base_url()?>images/icon/line-button.png">
								</a>
								<a href="#" class="btn btn-share">
									<img src="<?=base_url()?>images/icon/facebook-button.png">
								</a>
								<a href="#" class="btn btn-share">
									<img src="<?=base_url()?>images/icon/twitter-button.png">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-12">
						<div class="title-detail-pro">
							<?=lang("Product details")?>
						</div>
						<div class="detail-pro">
							Modular enclosure (Consumer unit) - ABB (System Pro M) - CU SCP 16 - Rated voltage 250 / 440Vac - Rated current 100A - IP20 - 16 outgoing (modules)
							Order code: GJF1710215R2210-T - Model: SCP16
						</div>
						<div class="spec-product">
							<?=lang("spec-product")?>
						</div>
						<div class="detail-spec-pro">
							orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Itorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Itorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially 
							unchanged.
							<div class="see-more">
								
							</div>
							<a href="#">
								<?=lang("see-more")?>
							</a>
						</div>
						<div class="relate-product-title">
							<?=lang("relate-product")?>
						</div>

						<div>
							<div class="owl-carousel owl-carousel-relate-product">
								<div class="item">
									<div class="space-relate-pro">
										<div class="pro-relate">
											<img src="<?=base_url()?>images/products/product-2-s.png">
										</div>
										<p class="brand-product">
											<a href="#">Brands</a>
										</p>
										<p class="name-product-o">
											<a href="#">
												Name S202M-C3 
												product S202M-C3
											</a>
										</p>
										<h3 class="price-pro">
											ราคา 0,000.- 
										</h3>
										<a href="#" class="quotation-pro">
											* <?=lang("quotation")?>
										</a>
									</div>
								</div>
								<div class="item">
									<div class="space-relate-pro">
										<div class="pro-relate">
											<img src="<?=base_url()?>images/products/product-2-s.png">
										</div>
										<p class="brand-product">
											<a href="#">Brands</a>
										</p>
										<p class="name-product-o">
											<a href="#">
												Name S202M-C3 
												product S202M-C3
											</a>
										</p>
										<h3 class="price-pro">
											ราคา 0,000.- 
										</h3>
										<a href="#" class="quotation-pro">
											* <?=lang("quotation")?>
										</a>
									</div>
								</div>
								<div class="item">
									<div class="space-relate-pro">
										<div class="pro-relate">
											<img src="<?=base_url()?>images/products/product-2-s.png">
										</div>
										<p class="brand-product">
											<a href="#">Brands</a>
										</p>
										<p class="name-product-o">
											<a href="#">
												Name S202M-C3 
												product S202M-C3
											</a>
										</p>
										<h3 class="price-pro">
											ราคา 0,000.- 
										</h3>
										<a href="#" class="quotation-pro">
											* <?=lang("quotation")?>
										</a>
									</div>
								</div>
								<div class="item">
									<div class="space-relate-pro">
										<div class="pro-relate">
											<img src="<?=base_url()?>images/products/product-2-s.png">
										</div>
										<p class="brand-product">
											<a href="#">Brands</a>
										</p>
										<p class="name-product-o">
											<a href="#">
												Name S202M-C3 
												product S202M-C3
											</a>
										</p>
										<h3 class="price-pro">
											ราคา 0,000.- 
										</h3>
										<a href="#" class="quotation-pro">
											* <?=lang("quotation")?>
										</a>
									</div>
								</div>

							</div>
						</div>
						<div class="title-tag-product">
							<?=lang("product-label")?>
						</div>
						<div class="space-tag-product">
							<div class="tag-all">
								<ul>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											gtggjbn
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											asdddddd
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											asdddddddd
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											asdddddddd
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											asdddddddd
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											asdddddddd
										</a>
									</li>

									<li class="tag-skip">
										<a href="#">
											asdddddddd
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											asdddddddd
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											asdddddddd
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											asdddddddd
										</a>
									</li>
									
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>

									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>
									<li class="tag-skip">
										<a href="#">
											tag 1
										</a>
									</li>

								</ul>
						
							</div>
						</div>
						
					</div>
				</div>
			</div>

		</div>

	</section>

	<?
	$this->load->view("pages/inc/footer")
	?>

	<?
	$this->load->view("pages/inc/footer-js")
	?>

</body>
</html>
