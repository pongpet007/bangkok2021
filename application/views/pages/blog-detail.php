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
							<li class="breadcrumb-item"><a href="<?=base_url()?>" class="btn-breadcrumb"><?=lang("home")?></a></li>
							<li class="breadcrumb-item"><a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Blog" class="btn-breadcrumb"><?=lang("article and knowledge")?></a></li>
							<li class="breadcrumb-item active-page" aria-current="page">Title name</li>
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
								<div class="col-lg-9 col-md-9 col-sm-9 col-12">
									<div class="blog-detail">
										<img src="<?=base_url()?>images/blogs/blog-1-l.png" class="img-width-100">
										<div class="space-blog-detail">
											<div class="title-name-blog">
												Title name
											</div>
											<div class="share-blog">
												<span>
													<?=lang("share")?>
												</span>
												<a href="#" class="btn btn-share">
													<img src="<?=base_url()?>images/icon/line-button.png" class="img-width-100">
												</a>
												<a href="#" class="btn btn-share">
													<img src="<?=base_url()?>images/icon/facebook-button.png" class="img-width-100">
												</a>
												<a href="#" class="btn btn-share">
													<img src="<?=base_url()?>images/icon/twitter-button.png" class="img-width-100">
												</a>
											</div>

										</div>
										<div class="detai-blog-aa">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-6">
									<h3>
										<?=lang("interest-blog")?>
									</h3>
									<div>
										<img src="<?=base_url()?>images/line-blog.png">
									</div>
									<div>
										<img src="<?=base_url()?>images/blogs/blog-1-s.png">
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
