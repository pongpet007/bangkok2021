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
				<?=lang('article-knowledge')?>
			</div>
		</div>
		<div class="breadcrumb-nav">
			<div class="container">
				<div class="row">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#" class="btn-breadcrumb"><?=lang("home")?></a></li>
							<li class="breadcrumb-item active-page" aria-current="page"><?=lang("article and knowledge")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="space-blog">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="blog-img">
										<img src="<?=base_url()?>images/blogs/blog-1.png" class="img-width-100">
									</div>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-6">
									<div class="title-blog-all">
										Title Name
									</div>
									<div class="detail-blog-all">
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
										</p>
									</div>
									<div class="">
										<a class="btn btn-goto-blog" href="<?=base_url($this->session->userdata('site_lang_name'))?>/Blog/detail/1">
											<img src="<?=base_url()?>images/icon/box-arrow-in-right.png">
											&nbsp;&nbsp;
											<?=lang("see-more")?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="space-blog">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="blog-img">
										<img src="<?=base_url()?>images/blogs/blog-1.png" class="img-width-100">
									</div>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-6">
									<div class="title-blog-all">
										Title Name
									</div>
									<div class="detail-blog-all">
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
										</p>
									</div>
									<div class="">
										<a class="btn btn-goto-blog" href="<?=base_url($this->session->userdata('site_lang_name'))?>/Blog/detail/1">
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
