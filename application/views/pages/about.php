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
		<div class="header-about" style="">
			<div class="title-about">
				<?=lang('about-us')?>
			</div>
		</div>
		<div class="breadcrumb-nav">
			<div class="container">
				<div class="row">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#" class="btn-breadcrumb"><?=lang("home")?></a></li>
							<li class="breadcrumb-item active-page" aria-current="page"><?=lang("about-us")?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="space-about-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-12">
						<img src="<?=base_url()?>images/bg/about-2.png" class="img-width-100">
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-12">
						<h4>
							บริษัท บางกอกแอบโซลูท อิเลคทริคแอนด์คอน จํากัด 
						</h4>
						<p>
							คือศูนย์รวมอุปกรณ์ไฟฟ้าและการบริการ ในระดับอุตสาหกรรม ตอบรับท้ังงานโปรเจค งาน รับเหมาก่อสร้าง กลุ่มร้านค้าปลีก ฯลฯ
							ด้วยการบริการที่เป็นเลิศ ทําให้บริษัท บางกอกแอบ โซลูทฯ เติบโตขึ้นอย่างรวดเร็วมาเป็นบริษัทชั้นนํา ในการจัดจําหน่ายอุปกรณ์ไฟฟ้าคุณภาพสูง 
							โดยเรา ได้รับการไว้วางใจจากบริษัทขนาดใหญ่และร่วมงาน กับเมกะโปรเจคมาแล้วทั้งในและต่างประเทศ
							บริษัทของเราได้รับการรับรองให้เป็นตัวแทนการจัด จําหน่ายอุปกรณ์ไฟฟ้าภายใต้แบรนด์ ABB ซึ่งเป็น บริษัทวิศวกรรมและเทคโนโลยีชั้นนําระดับโลก และ บริษัท บางกอก เคเบิ้ล จํากัด ซึ่งเป็นบริษัทผลิตสาย ไฟและสายเคเบิ้ลที่ใหญ่ที่สุดในประเทศไทย
						</p>
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
