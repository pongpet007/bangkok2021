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
							<li class="breadcrumb-item"><a href="#" class="btn-breadcrumb"><?=lang("home")?></a></li>
							<li class="breadcrumb-item active" aria-current="page"><?=lang("product-service")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-12">
						<div class="menu-brand">
							<?=lang("brand")?>
						</div>
						<ul class="menu-product-brand">
							<li>
								<a href="#">
									<input type="checkbox" name="checkbox" value="" onclick="">
								</a>
								<a class="a-name-brand">ABB</a>
							</li>
							
							<li>
								<a href="#">
									<input type="checkbox" name="checkbox" value="" onclick="">
								</a>
								<a class="a-name-brand">BCC</a>
							</li>
						</ul>
						<hr>
						<div class="menu-category-product">
							<div class="category-title">
								<?=lang("category")?>
							</div>
							<div class="category-menu">
								
								<a href="#" class="name-category">
									-&nbsp;&nbsp;AIR CIRCUIT BREAKDERS
								</a>
								
								
								<a href="#" class="name-category">
									-&nbsp;&nbsp;MOULDED CASE CIRCUIT BREAKERS
								</a>
								
								
								<a href="#" class="name-category">
									-&nbsp;&nbsp;AUTOMATICC TRANSFER  SWITCH
								</a>
								
							</div>
							
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="product-space">
									<img src="<?=base_url()?>images/products/product-1.png" class="img-width-100" alt="product-bangkok-absolute">
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
										<?=lang("price")?>&nbsp;0,000.-
									</h3>
									<a href="#" class="quotation-pro">
										* <?=lang("quotation")?>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="product-space">
									<img src="<?=base_url()?>images/products/product-2.png" class="img-width-100" alt="product-bangkok-absolute">
									<p class="brand-product">
										Brands
									</p>
									<p class="name-product-o">
										Name S202M-C3 
										product S202M-C3
									</p>
									<h3 class="price-pro">
										ราคา 0,000.- 
									</h3>
									<a href="#" class="quotation-pro">
										* <?=lang("quotation")?>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="product-space">
									<img src="<?=base_url()?>images/products/product-2.png" class="img-width-100" alt="product-bangkok-absolute">
									<p class="brand-product">
										Brands
									</p>
									<p class="name-product-o">
										Name S202M-C3 
										product S202M-C3
									</p>
									<h3 class="price-pro">
										ราคา 0,000.- 
									</h3>
									<a href="#" class="quotation-pro">
										* <?=lang("quotation")?>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="product-space">
									<img src="<?=base_url()?>images/products/product-2.png" class="img-width-100" alt="product-bangkok-absolute">
									<p class="brand-product">
										Brands
									</p>
									<p class="name-product-o">
										Name S202M-C3 
										product S202M-C3
									</p>
									<h3 class="price-pro">
										ราคา 0,000.- 
									</h3>
									<a href="#" class="quotation-pro">
										* <?=lang("quotation")?>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="product-space">
									<img src="<?=base_url()?>images/products/product-2.png" class="img-width-100" alt="product-bangkok-absolute">
									<p class="brand-product">
										Brands
									</p>
									<p class="name-product-o">
										Name S202M-C3 
										product S202M-C3
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
