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
				<?=lang('achievements')?>
			</div>
		</div>
		<div class="breadcrumb-nav">
			<div class="container">
				<div class="row">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url()?>" class="btn-breadcrumb"><?=lang("home")?></a></li>
							<li class="breadcrumb-item"><a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Achievements" class="btn-breadcrumb"><?=lang("achievements")?></a></li>
							<li class="breadcrumb-item active-page" aria-current="page">SUVARNABHUMI AIRPORT</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="title-name-page">
						SUVARNABHUMI AIRPORT
					</div>
					<div class="detail-achievements">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium leo eu tellus lobortis, ut vulputate nunc pellentesque. Mauris elementum metus dolor, vel auctor nisi aliquet non. Praesent id nibh nec arcu elementum vehicula at eu felis. Ut nec consequat risus, eget lacinia ante. Donec aliquam porttitor lacus, nec iaculis odio finibus sit amet. Maecenas gravida hendrerit dignissim. Donec a lacus in diam vehicula elementum.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="space-achievements">
							<img src="<?=base_url()?>images/achievements/achievement-1.png" alt="promotion">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="space-achievements">
							<img src="<?=base_url()?>images/achievements/achievement-1.png" alt="promotion">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="space-achievements">
							<img src="<?=base_url()?>images/achievements/achievement-1.png" alt="promotion">
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
