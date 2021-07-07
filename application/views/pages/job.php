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
				<?=lang('join-with-us')?>
			</div>
		</div>
		<div class="breadcrumb-nav">
			<div class="container">
				<div class="row">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url()?>" class="btn-breadcrumb"><?=lang("home")?></a></li>
							<li class="breadcrumb-item active-page" aria-current="page"><?=lang("join-with-us")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="space-about-page">
			<div class="container">
				<div class="row">


					<div class="col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="space-work-us">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-12">
									<img src="<?=base_url()?>images/job/job-1.png" class="img-width-100">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="detail-job-all">
										<h4>
											Title name
										</h4>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting indus
										</p>
										<a class="btn btn-goto-blog" href="<?=base_url($this->session->userdata('site_lang_name'))?>/Job/detail/1">
											<img src="<?=base_url()?>images/icon/box-arrow-in-right.png">
											&nbsp;&nbsp;
											<?=lang("see-more")?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="space-work-us">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-12">
									<img src="<?=base_url()?>images/job/job-1.png" class="img-width-100">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="detail-job-all">
										<h4>
											Title name
										</h4>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting indus
										</p>
										<a class="btn btn-goto-blog" href="<?=base_url($this->session->userdata('site_lang_name'))?>/Job/detail/1">
											<img src="<?=base_url()?>images/icon/box-arrow-in-right.png">
											&nbsp;&nbsp;
											<?=lang("see-more")?>
										</a>
									</div>
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
