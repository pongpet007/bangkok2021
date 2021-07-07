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
							<li class="breadcrumb-item active-page" aria-current="page"><?=lang("login-regiter")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-12">
						<div class="left-login">
							<h4>
								<?=lang('login')?>
							</h4>
							
							<form action="login" method="post">
								<div class="email-login">
									<?=lang('email')?>
								</div>
								<input type="email" name="email" class="login-username" placeholder="<?=lang('Please enter email')?>">
								<div class="email-login">
									<?=lang('password')?>
								</div>
								<input type="text" name="password" class="login-username" placeholder="<?=lang('Please enter password')?>">
								<button type="submit" class="btn btn-login">
									<?=lang('login')?>
								</button>
							</form>
						</div>
					</div>

					<div class="col-lg-1 col-md-1 col-sm-1 col-12">
					</div>

					<div class="col-lg-5 col-md-5 col-sm-5 col-12">
						<div class="right-login">
							<h4>
								<?=lang('register')?>
							</h4>
							
							<form action="login" method="post">
								<div class="email-login">
									<?=lang('email')?>
								</div>
								<input type="email" name="email" class="login-username" placeholder="<?=lang('Please enter email')?>">
								<div class="email-login">
									<?=lang('password')?>
								</div>
								<input type="text" name="password" class="login-username" placeholder="<?=lang('Please enter password')?>">
								<div class="email-login">
									<?=lang('password-agian')?>
								</div>
								<input type="text" name="password" class="login-username" placeholder="<?=lang('Please enter password again')?>">
								<button type="submit" class="btn btn-register">
									<?=lang('login')?>
								</button>
							</form>
						</div>
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

</body>
</html>
