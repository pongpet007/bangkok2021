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
										<div style="font-size: 16px;">
											#ODER 01
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-12">
										<div style="font-size: 16px; color: #80090F;">
											<?=lang('price')?> 0,000.- 
										</div>
										<div style="font-size: 16px; color: #080A14;">
											*<?=lang('quotation')?>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="check-detail-list">
											<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/User/request_detail/1" class="btn-detail-list">
												<?=lang('detail')?>
											</a>
											<input type="checkbox" name="" class="chk-request">
										</div>
									</div>
								</div>
							</div>
							<div class="item-request">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div style="font-size: 16px;">
											#ODER 01
										</div>
									</div>
									<div class="col-lg-6 col-md-9 col-sm-9 col-12">
										<div style="font-size: 16px; color: #80090F;">
											???????????? 0,000.- 
										</div>
										<div style="font-size: 16px; color: #080A14;">
											*????????????????????????????????????
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-12">
										<div class="check-detail-list">
											<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/User/request_detail/1" class="btn-detail-list">
												<?=lang('detail')?>
											</a>
											<input type="checkbox" name="" class="chk-request">
										</div>
									</div>
								</div>
							</div>
							

							
						</div>
						<a href="#" class="btn btn-delete">
							<?=lang('delete')?>
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
