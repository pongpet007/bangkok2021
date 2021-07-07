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

					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="detail-profile">
							<h4>
								<?=lang('account information')?>
							</h4>
							<form action="#" method="post">
								<div class="d-p-f">
									<?=lang('name')?>
								</div>
								<input type="text" name="name" class="btn btn-input-p" placeholder="<?=lang('Please enter your firstname')?>" >
								<div class="d-p-f">
									<?=lang('lastname')?>
								</div>
								<input type="email" name="lastname" class="btn btn-input-p" placeholder="<?=lang('Please enter your lastname')?>" >
								<div class="d-p-f">
									<?=lang('email')?>
								</div>
								<input type="text" name="email" class="btn btn-input-p" placeholder="<?=lang('Please enter email')?>" >
								<div class="d-p-f">
									<?=lang('telephone-number')?>
								</div>
								<input type="text" name="email" class="btn btn-input-p" placeholder="<?=lang('Please enter your telephone number')?>" >
								<button type="submit" class="btn btn-save-profile">
									<?=lang('confirm')?>
								</button>
							</form>
							
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-12">
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
			$('.nav-user-1').addClass('menu-user-active');
		});
	</script>

</body>
</html>
