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

							<?
							if($cat_name != '') {
								?>
								<li class="breadcrumb-item">
									<a href="<?=base_url($this->session->userdata('site_lang_name').'/Products')?>" class="btn-breadcrumb">
										<?=lang("product-service")?>
									</a>									
								</li>
								<li class="breadcrumb-item active-page">
									<?=$cat_name?>
								</li>
								<?
							} else {
								?>
								<li class="breadcrumb-item active-page" aria-current="page">
									<?=lang("product-service")?>
								</li>
								<?
							}
							?>


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


							<? 
							foreach ($brands as $brand) {
								$brand_name = $brand->brand_name;
								$brand_name = str_replace(array(':','\\','/',',','.','%20',' ','(',')'),'',$brand_name);
								?>
								<li>
									<? if (array_key_exists($brand->brand_id, $_SESSION["brand"])) { ?>
										<input type="checkbox" data-administration="" data-dosage="" data-date="" OnClick="
										if(this.checked){}else{location.href='<? echo base_url($this->session->userdata('site_lang_name')."/Products/uset/{$brand->brand_id}") ?>';}" checked/>
									<? }else{ ?>
										<input type="checkbox" name="chk" value="1" OnClick="
										if(this.checked){location.href='<? echo base_url($this->session->userdata('site_lang_name')."/bid:{$brand->brand_id}".'_'.$brand_name) ?>';}else{alert('Un Checked');}">
									<? } ?>
									
									<a class="a-name-brand">
										<?=$brand->brand_name?>
									</a>
								</li>
								<?
							}
							?>


						</ul>
						<hr>
						<div class="menu-category-product">
							<div class="category-title">
								<?=lang("category")?>
							</div>
							<div class="category-menu">

								<? foreach ($categorys as $category) { 
									$cname = $category->cat_name;
									$cname = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$cname);
									?>
									<a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:<?=$category->cat_id?>_<?=$cname?>" class="name-category">
										-&nbsp;&nbsp;<?=$cname?>
									</a>

								<? } ?>


							</div>

						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-12">
						<div class="row">

							<? 
							foreach ($products as $product) { 
								?>

								<div class="col-lg-3 col-md-3 col-sm-6 col-6">
									<div class="product-space">

										<?php foreach ($product->images as $key => $images) { ?>
											<? if ($key==0) { ?>
												<?php $i = json_decode($images->resolution); ?>
												<picture>
													<?php foreach ($i as $key => $newi) { ?>
														<source media="(min-width:<?=$key;?>px)" srcset="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>">
														<?php } ?>
														<img class="img-width-100" data-src="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$images->show_admin?>.<?=$images->extension ?>" alt="<?= $product->pro_name?>" style="width: 100%;">
													</picture>
												<? } ?>
											<? } ?> 


											<p class="brand-product">
												<?
												$brand_name = $product->brand_name;
												$brand_name = str_replace(array(':','\\','/',',','.','%20',' ','(',')'),'',$brand_name);
												?>
												<a href="<?=base_url($this->session->userdata('site_lang_name').'/bid:'.$brand->brand_id.'_'.$brand_name)?>">
													<?=$product->brand_name?>
												</a>
											</p>
											<p class="name-product-o">
												<a href="<?=base_url($this->session->userdata('site_lang_name').'/Products/detail/'.$product->pro_id)?>">
													<?=$product->pro_name?>
												</a>
											</p>
											<h3 class="price-pro">
												<?=lang("price")?>&nbsp;<?=$product->pro_price?>.-
											</h3>
											<a href="#" class="quotation-pro">
												* <?=lang("quotation")?>
											</a>
										</div>
									</div>


									<?
								}
								?>


							</div>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12" style="float: right;"> 
									<?=$links?>
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
