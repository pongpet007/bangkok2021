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
		<div class="breadcrumb-nav">
			<div class="container">
				<div class="row">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url()?>" class="btn-breadcrumb"><?=lang("home")?></a></li>
							<li class="breadcrumb-item active-page" aria-current="page"><?=lang("profile-detail")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-12">
						<?
						$this->load->view('pages/user-left-menu')
						?>
					</div>

					<div class="col-lg-9 col-md-9 col-sm-9 col-12">
						<div class="request-quotation">
							<h4>
								<?=lang('quote request list')?>
							</h4>


							<div class="item-request">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="space-img-request">
											<img src="<?=base_url()?>images/products/product-1-s.png" class="img-width-100">
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="space-de-req">
											<div class="name-request-pro">
												Name S202M-C3 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
											</div>
											<div class="bra-re-pro">
												ABB
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-12">
										<div style="font-size: 16px; color: #80090F; margin-top: 20px;">
											<?=lang('price')?> 0,000.- 
										</div>
										<div style="font-size: 16px; color: #080A14;">
											*<?=lang('quotation')?>
										</div>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1 col-12">
										
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-12">
										<div class="amount-pro">
											<span>
												1
											</span>
											<?=lang('amount')?>
										</div>
										<a href="#" class="del-list">
											<?=lang('delete-list')?>
										</a>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1 col-12">
										
									</div>
								</div>
							</div>

							<div class="item-request">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="space-img-request">
											<img src="<?=base_url()?>images/products/product-1-s.png" class="img-width-100">
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="space-de-req">
											<div class="name-request-pro">
												Name S202M-C3 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
											</div>
											<div class="bra-re-pro">
												ABB
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-12">
										<div style="font-size: 16px; color: #80090F; margin-top: 20px;">
											<?=lang('price')?> 0,000.- 
										</div>
										<div style="font-size: 16px; color: #080A14;">
											*<?=lang('quotation')?>
										</div>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1 col-12">
										
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-12">
										<div class="amount-pro">
											<span>
												1
											</span>
											<?=lang('amount')?>
										</div>
										<a href="#" class="del-list">
											<?=lang('delete-list')?>
										</a>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1 col-12">
										
									</div>
								</div>
							</div>

							<div class="more-detail-req">
								<div class="title-more-detail-req">
									<?=lang('text')?>
								</div>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</p>
							</div>
							

							
						</div>
						<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/User/request" class="btn btn-delete">
							<?=lang('back')?>
						</a>

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


	<script type="text/javascript">
		$('#left-menu-user').ready(function(){
			$('.nav-user-3').addClass('menu-user-active');
		});
	</script>

</body>
</html>
