<footer>
	<div class="space-footer-1">
		<div class="container ">
			<div class="row">
				<div class="col-md-3">
					<img src="<?=base_url()?>images/logo/logo-footer.png" style="width: 140px; height: 76px;" alt="bangkokabsolute">
					<div class="tab-left-footer">
						<h5>
							<?=lang("address")?>
						</h5>
						<p>
							<?=$companyData->com_address?>
						</p>
					</div>
					<div class="tab-left-footer">
						<h5>
							<?=lang("email")?>
						</h5>
						<p>
							<?=$companyData->com_email?>
						</p>
					</div>
					<div class="tab-left-footer">
						<h5>
							<?=lang("tel")?>
						</h5>
						<p>
							<?=$companyData->com_phone?>
						</p>
					</div >
					<div class="tab-left-footer">
						<h5>
							<?=lang("fax")?>
						</h5>
						<p>
							<?=$companyData->com_fax?>
						</p>
					</div>

				</div>
				<div class="col-md-1">

				</div>
				<div class="col-md-6 space-menu-footer">
					<p style="font-size: 18px; color: #FFF; font-weight: 400;">
						<?=lang("product-service")?>
					</p>
					<img src="<?=base_url()?>images/line-footer.png">
					<div class="row">


						<?
						foreach ($categorys as $category) {
							$cname = $category->cat_name;
							$cname = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$cname);
							?>

							<div class="col-md-6">
								<div class="footer-menu-category">
									<a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:<?=$category->cat_id?>_<?=$cname?>">
										<img src="<?=base_url()?>images/icon/icon-dropdown arrow-default.png" alt="dropdown">
										<?=$category->cat_name?>
									</a>
								</div>
							</div>

							<?
						}
						?>




					</div>
					
				</div>
				<div class="col-md-2 space-menu-footer">
					<p style="font-size: 18px; color: #FFF; font-weight: 400;">
						<?=lang("menu")?>
					</p>
					<img src="<?=base_url()?>images/line-footer.png">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-menu-category">
								<a href="<?=base_url($this->session->userdata("site_lang_name"))?>/Home">
									<img src="<?=base_url()?>images/icon/icon-dropdown arrow-default.png" alt="dropdown">
									<?=lang("home")?>
								</a>
							</div>
						</div>
						<div class="col-md-12">
							<div class="footer-menu-category">
								<a href="<?=base_url($this->session->userdata("site_lang_name"))?>/About">
									<img src="<?=base_url()?>images/icon/icon-dropdown arrow-default.png" alt="dropdown">
									<?=lang("about-us")?>
								</a>
							</div>
						</div>
						<div class="col-md-12">
							<div class="footer-menu-category">
								<a href="#">
									<img src="<?=base_url()?>images/icon/icon-dropdown arrow-default.png" alt="dropdown">
									<?=lang("online-market")?>
								</a>
							</div>
						</div>
						<div class="col-md-12">
							<div class="footer-menu-category">
								<a href="#">
									<img src="<?=base_url()?>images/icon/icon-dropdown arrow-default.png" alt="dropdown">
									<?=lang("achievements")?>
								</a>
							</div>
						</div>
						<div class="col-md-12">
							<div class="footer-menu-category">
								<a href="#">
									<img src="<?=base_url()?>images/icon/icon-dropdown arrow-default.png" alt="dropdown">
									<?=lang("Articles and Activities")?>
								</a>
							</div>
						</div>
						<div class="col-md-12">
							<div class="footer-menu-category">
								<a href="#">
									<img src="<?=base_url()?>images/icon/icon-dropdown arrow-default.png" alt="dropdown">
									<?=lang("catalogue")?>
								</a>
							</div>
						</div>
						<div class="col-md-12">
							<div class="footer-menu-category">
								<a href="#">
									<img src="<?=base_url()?>images/icon/icon-dropdown arrow-default.png" alt="dropdown">
									<?=lang("contact-us")?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="space-footer-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copyright">
						Copyright © <? echo date('Y')?>  <a href="https://brandexdirectory.com" >Brandex Directroy</a> All rights reserved.
					</div>
				</div>
			</div>
		</div>
		
	</div>
</footer>