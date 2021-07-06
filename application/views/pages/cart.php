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
							<li class="breadcrumb-item active" aria-current="page"><?=lang("shopping-cart")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12 space-cart-pro">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="pro-relate">
											<img src="<?=base_url()?>images/products/product-2-s.png">
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="name-pro-cart">
											Name S202M-C3 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										</div>
										<div class="go-brand">
											<a href="#" class="btn btn-cart-brand">
												ABB
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<h3 class="price-pro">
											ราคา 0,000.- 
										</h3>
										<a href="#" class="quotation-pro">
											* <?=lang("quotation")?>
										</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<input type="number" name="amout" placeholder="1" class="btn btn-amout-cart">
										<span style="padding: 0 20px;"><?=lang("amount")?></span>
									</div>
								</div>
							</div>
							
							
							<span class="line-cart">
								<!-- Line -->
							</span>
							
							
							
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-12 space-cart-pro">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="pro-relate">
											<img src="<?=base_url()?>images/products/product-2-s.png">
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="name-pro-cart">
											Name S202M-C3 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										</div>
										<div class="go-brand">
											<a href="#" class="btn btn-cart-brand">
												ABB
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<h3 class="price-pro">
											ราคา 0,000.- 
										</h3>
										<a href="#" class="quotation-pro">
											* <?=lang("quotation")?>
										</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<input type="number" name="amout" placeholder="1" class="btn btn-amout-cart">
										<span style="padding: 0 20px;"><?=lang("amount")?></span>
									</div>
								</div>
							</div>


						</div>
						
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="conclude">
							<div class="title-conclude">
								<?=lang("Summary of all items")?>
							</div>
							<div class="total-cart">
								<div class="to-tal-main">
									<div class="to-tal-1">
										<?=lang("total")?>
									</div>
									<div class="to-tal-2">
										2 <?=lang("list")?>
									</div>
									
								</div>
							</div>
							<hr>
							<div class="">
								<?=lang("overall")?>
							</div>
						</div>
						<div class="warpper">
							<div class="card">
								<img src="https://images.unsplash.com/photo-1477666250292-1419fac4c25c?auto=format&fit=crop&w=667&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" class="img-nn">
								<div class="info">
									<h1>Mountain</h1>
									<p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
									<button class="btn-nn">Read more</button>
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
