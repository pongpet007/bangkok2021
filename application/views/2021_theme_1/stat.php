<!DOCTYPE html>
<html lang="th">
	<? $this->load->view('2021_theme_1/inc/header-meta') ?>
	<body>
		<? $this->load->view('2021_theme_1/inc/header1/header3') ?>
		<div class="container header-top">
			<div class="row">
				<div class="col-lg-7 col-sm-6 ">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item color-menu"><a href="<?=base_url()?>"><?=lang('Home') ?></a></li>
							<li class="breadcrumb-item color-menu-active active"><?=lang('The Number Of Website Visitors') ?></li>
						</ol>
					</nav>
				</div>
				<div class="search-product col-lg-5 col-sm-6 pt-2 pb-1">
				</div>
			</div>
		</div>
		<? $this->load->view('2021_theme_1/compare') ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 " style="animation-duration: 1.5s;padding-top: 30px;padding-bottom: 30px;">
					<div class="table-responsive">
						<table border="0" cellspacing="0" cellpadding="0" width="100%">
							<tr>
								<td align="center">
									<table width="100%" border="0">
										<tr>
											<td>
												<table width="100%" border="0">
													<tr>
														<td align="center">
															<a class="btn btn-success" href="<?php echo base_url($this->session->userdata('site_lang_name').'/Home/stat/') ?>?display=year">
															<?=lang('Statistic Year') ?>
															</a>
														</td>
														<td align="center">
															<a class="btn btn-success" href="<?php echo base_url($this->session->userdata('site_lang_name').'/Home/stat/') ?>?display=month&amp;y=<?=$y?>">
															<?=lang('Statistic Month') ?>
															</a>
														</td>
														<td align="center">
															<a class="btn btn-success" href="<?php echo base_url($this->session->userdata('site_lang_name').'/Home/stat/') ?>?display=day&amp;y=<?=$y?>&amp;m=<?=$m?>">
															<?=lang('Statistic Day') ?>
															</a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>
												<?php
													if($display=="year"){
													?>
												<table width="100%" id="tblYear" border="0" cellpadding="2" style="border:1px solid #000;" cellspacing="4" bordercolor="#000000" class="table table-striped">
													<tr class="fontwhite">
														<th width="50%" align="center" bgcolor="#000000" style="color: white; text-align: center;font-size: 24px;"><?=lang('Year') ?></th>
														<th width="50%" align="center" bgcolor="#000000" style="color: white; text-align: center;font-size: 24px;"><?=lang('count') ?></th>
													</tr>
													<?php foreach ($table as $row){ ?>
													<tr>
														<td width="100" align="center" style="font-size: 24px;"><a href="<?php echo base_url($this->session->userdata('site_lang_name').'/Home/stat/') ?>?display=month&amp;y=<?=$row->y?>">
															<?=$row->y?>
															</a>
														</td>
														<td align="center" style="font-size: 24px;"><?=$row->c?>
															&nbsp;
														</td>
													</tr>
													<?php } ?>
												</table>
												<?php } ?>
												<?php if($display=="month"){ ?>
												<table width="100%" id="tblMonth" border="0" cellpadding="2" style="border:1px solid #000;" cellspacing="4" bordercolor="#000000" class="table table-striped">
													<tr class="fontwhite">
														<th align="center" bgcolor="#000000" style="color: white; text-align: center;font-size: 24px;" ><?=lang('Month') ?></th>
														<th align="center" bgcolor="#000000" style="color: white; text-align: center;font-size: 24px;"><?=lang('count') ?></th>
													</tr>
													<?php foreach ($table as $row){ 
														$data[$row->m] =$row->c; 
														}
														
														for($i=0;$i<sizeof($mName);$i++){ 
														?>
													<tr>
														<td align="center" style="font-size: 24px;"><a href="<?php echo base_url($this->session->userdata('site_lang_name').'/Home/stat/') ?>?display=day&amp;y=<?=$y?>&amp;m=<?=$i+1?>">
															<?=$mName[$i]?>
															<?= $y ?>
															</a>
														</td>
														<td align="center" style="font-size: 24px;"><?=!isset($data[$i+1])?'0':$data[$i+1]?> &nbsp;</td>
													</tr>
													<?php } ?>
												</table>
												<?php } ?>
												<?php if($display=="day"){ 
													$numDay = date('t',strtotime("$y-$m-01"));
													?>
												<table width="100%" id="tblDay" border="0" cellpadding="2" style="border:1px solid #000;" cellspacing="4" bordercolor="#000000" class="table table-striped">
													<tr class="fontwhite">
														<th width="50%" align="center" bgcolor="#000000" style="color: white; text-align: center;font-size: 24px;"><?=lang('Day') ?></th>
														<th width="50%" align="center" bgcolor="#000000" style="color: white; text-align: center;font-size: 24px;"><?=lang('count') ?></th>
													</tr>
													<?php 
														foreach ($table as $row){ 
														        $data[$row->d] = $row->c;
														}
														
														for($x=0;$x<$numDay;$x++){ ?>
													<tr>
														<td align="center" style="font-size: 24px;"><?=$x+1 ?>
															<?=$mName[$m-1]?>
															<?=$y?>
															&nbsp;
														</td>
														<td align="center" style="font-size: 24px;"><?=!isset($data[$x+1])?'0':$data[$x+1];?>
															&nbsp;
														</td>
													</tr>
													<?php } ?>
												</table>
												<?php } ?>                          
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<?
			$this->load->view('2021_theme_1/inc/footer1/footer2')
			?>
		<script>
			$(document).ready(function() {
				var owl = $('.owl-carousel-knowledge-about');
				owl.owlCarousel({
					margin: 10,
					loop: true,
					responsive: {
						0: {
							items: 2
						},
						600: {
							items: 3
						},
						1000: {
							items: 4
						}
					}
				})
			})
		</script>
		<script src="<?=base_url()?>assets/aos-master/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
		<script src="<?=base_url()?>assets/owlcarousel/highlight.js"></script>
		<script src="<?=base_url()?>assets/owlcarousel/app.js"></script>
		<script type="text/javascript">
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<style type="text/css">
			#map_canvas {
			border: unset;
			width: 100%;
			height: 700px;
			margin: 0 auto;
			}
			.container-megamenu.vertical .vertical-wrapper ul.megamenu > li.item13,.container-megamenu.vertical .vertical-wrapper ul.megamenu > li.item14,.container-megamenu.vertical .vertical-wrapper ul.megamenu > li.item15,.container-megamenu.vertical .vertical-wrapper ul.megamenu > li.item16{
			display: none;
			}
			.table>tbody>tr>td{
			padding:15px;
			border-top: unset;
			font-size: 16px;
			color: #000;
			}
			.link-black a{
			color: #337ab7;
			}
			.link-black a:hover{
			color: #666;
			}
			ul.contact{        
			padding-left: 60px;
			margin-bottom: 20px;
			}
			ul.contact li{
			list-style: circle;
			line-height: 35px;
			font-size: 14px;
			}
			.company-item{
			margin-bottom: 15px;
			}
			.company-item h3{
			color: black;
			}
			.company-item .icon{
			width: 70px;
			height: 70px;
			border-radius: 10px;
			font-size: 36px;
			border: 1px solid #ccc;
			padding: 16px;
			text-align: center;
			margin: auto;
			}
			.common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title {
			padding: 10px 0;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
			}
			.common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner{
			padding-bottom: unset;
			margin-bottom: unset;
			}
			.common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner{
			border-bottom: 1px solid #eee;
			overflow: hidden;
			}
			.common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner:last-child{
			border-bottom: unset;
			}
			@media(max-width: 768px){
			.company-item .title{
			text-align: center;
			}
			/*.social{
			position: relative;
			right: unset;
			top: unset;
			width: auto;
			}*/
			}
			td, th {
			border: unset;
			}
			table {
			border: unset;
			}
			.btn-success {
				font-size: 24px;
			}
		</style>
	</body>
</html>