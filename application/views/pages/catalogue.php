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
	<section class="content-about-us">
		<div class="header-about" style="">
			<div class="title-about">
				<?=lang('catalogue')?>
			</div>
		</div>
		<div class="breadcrumb-nav">
			<div class="container">
				<div class="row">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#" class="btn-breadcrumb"><?=lang("home")?></a></li>
							<li class="breadcrumb-item active-page" aria-current="page"><?=lang("catalogue")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-6">
						<div class="space-catalogue">
							<img src="<?=base_url()?>images/promotion/promotion-1.png" alt="promotion">
							<h4>Name Title</h4>
							<span class="download-catalogue"> 
								<i class="fas fa-download"></i>
								<a href="#">
									<?=lang("download-catalogue")?>
								</a>
							</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-6">
						<div class="space-catalogue">
							<img src="<?=base_url()?>images/promotion/promotion-1.png" alt="promotion">
							<h4>Name Title</h4>
							<span class="download-catalogue"> 
								<i class="fas fa-download"></i>
								<a href="#">
									<?=lang("download-catalogue")?>
								</a>
							</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-6">
						<div class="space-catalogue">
							<img src="<?=base_url()?>images/promotion/promotion-1.png" alt="promotion">
							<h4>Name Title</h4>
							<span class="download-catalogue"> 
								<i class="fas fa-download"></i>
								<a href="#">
									<?=lang("download-catalogue")?>
								</a>
							</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-6">
						<div class="space-catalogue">
							<img src="<?=base_url()?>images/promotion/promotion-1.png" alt="promotion">
							<h4>Name Title</h4>
							<span class="download-catalogue"> 
								<i class="fas fa-download"></i>
								<a href="#">
									<?=lang("download-catalogue")?>
								</a>
							</span>#80090F
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-6">
						<div class="space-catalogue">
							<img src="<?=base_url()?>images/promotion/promotion-1.png" alt="promotion">
							<h4>Name Title</h4>
							<span class="download-catalogue"> 
								<i class="fas fa-download"></i>
								<a href="#">
									<?=lang("download-catalogue")?>
								</a>
							</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-6">
						<div class="space-catalogue">
							<img src="<?=base_url()?>images/promotion/promotion-1.png" alt="promotion">
							<h4>Name Title</h4>
							<span class="download-catalogue"> 
								<i class="fas fa-download"></i>
								<a href="#">
									<?=lang("download-catalogue")?>
								</a>
							</span>
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
