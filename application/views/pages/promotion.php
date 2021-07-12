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
		<div class="header-all" style="">
			<div class="title-about">
				<?=lang('promotion')?>
			</div>
		</div>
		<div class="breadcrumb-nav">
			<div class="container">
				<div class="row">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#" class="btn-breadcrumb"><?=lang("home")?></a></li>
							<li class="breadcrumb-item active-page" aria-current="page"><?=lang("promotion")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="space-about-page">
			<div class="container">
				<div class="row">

					<?
					foreach ($promotions as $promotion) {
						?>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="space-promotion">

								<img src="<?=base_url()?>images/promotion/<?=$promotion->promotion_name_img?>" alt="promotion">
							</div>
						</div>
						<?
					}
					?>
					
				</div>

				<div class="row">
					<div class="col-md-12 col-12">
						<?=$links?>
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
