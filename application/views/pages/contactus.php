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
							<li class="breadcrumb-item active-page" aria-current="page"><?=lang("Contact us")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2305.2293480224903!2d100.63758907989777!3d13.662738334127004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d5f07127c6979%3A0xf9bb699480dabf78!2z4Lia4LiI4LiBLuC4muC4suC4h-C4geC4reC4gSDguYHguK3guJrguYLguIvguKXguLnguJcg4Lit4Li04LmA4Lil4LiE4LiX4Lij4Li04LiEIOC5geC4reC4meC4lOC5jCDguITguK3guJk!5e0!3m2!1sth!2sth!4v1625629507700!5m2!1sth!2sth" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-12">
						<h4>
							<?=lang("Ask for more")?>
						</h4>
						<p>
							<?if($this->session->userdata('site_lang_name') == 'TH') {?>
								หากมีคำถามข้อสงสัยหรือคำติชม ติดต่อได้ที่ 02-398-3389 หรือ 
								กรอกแบบฟอร์ม จะมีเจ้าหน้าที่ติดต่อกลับเร็วๆ นี้
								<?} else {?>
									หากมีคำถามข้อสงสัยหรือคำติชม ติดต่อได้ที่ 02-398-3389 หรือ 
									กรอกแบบฟอร์ม จะมีเจ้าหน้าที่ติดต่อกลับเร็วๆ นี้
									<?}?>
								</p>

								<div style="margin: 20px 0;">
									<h4 style="margin: 10px 0; ">
										<?=lang('Head office')?>
									</h4>
									<p style="margin: 20px 0; ">
										33-35 ซอย บางนา-ตราด 12 แขวง บางนาใต้ เขต บางนา
										ถนน บางนา กรุงเทพฯ 10260
									</p>
									<div style="display : inline-flex;">
										<div style="font-size: 18px; font-weight: 400">
											<?=lang('email')?>
										</div>
										<div style="font-size: 18px; font-weight: 300;">
											&nbsp; : bangkokabsolute@gmail.com
										</div>
										
									</div>
									<br>
									<div style="display : inline-flex;">
										<div style="font-size: 18px; font-weight: 400">
											<?=lang('tel')?>
										</div>
										<div style="font-size: 18px; font-weight: 300;">
											&nbsp; : 02-398-3389(-92)
										</div>
									</div>
									<br>
									<div style="display : inline-flex;">
										<div style="font-size: 18px; font-weight: 400">
											<?=lang('fax')?>
										</div>
										<div style="font-size: 18px; font-weight: 300;">
											&nbsp; : 02-115-9921
										</div>
									</div>
								</div>
								<img src="<?=base_url()?>images/map.png" class="img-width-100" style="margin: 20px 0;">
							</div>
							<div class="col-lg-1 col-md-1 col-sm-1 col-12">

							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-12">
								<form action="#" method="post">
									<div style="font-size: 24px; font-weight: 500">
										<?=lang('Fill out the inquiry form')?>
									</div>
									<div style="margin-top: 20px;">
										<?=lang('name-surname')?>
									</div>
									<input type="text" name="name" class="input-contact-name" placeholder="<?=lang('Please enter your first and last name')?>">
									<div style="margin-top: 20px;">
										<?=lang('email')?>
									</div>
									<input type="text" name="name" class="input-contact-name" placeholder="<?=lang('Please enter your first and last name')?>">
									<div style="margin-top: 20px;">
										<?=lang('tel')?>
									</div>
									<input type="text" name="name" class="input-contact-name" placeholder="<?=lang('Please enter your first and last name')?>">
									<div style="margin-top: 20px;">
										<?=lang('Inquiry message')?>
									</div>
									<textarea style="width: 100%; padding: 10px 20px; margin: 10px 0;border: 1px solid #E0E0E0" placeholder="<?=lang('text')?>" rows="4" cols="50"></textarea>
									<button class="btn btn-send-text"><?=lang('send information')?></button>
								</form>
								<div style="font-size: 28px; text-align: center; margin: 20px 0;">
									<?=lang('quotation')?> : 02-398-3389
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
