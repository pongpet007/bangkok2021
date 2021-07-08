
<header id="header">
	<div class="container d-lg-block d-md-none d-sm-none d-none">
		<div class="row">
			<div class="col-lg-2 col-md-2">
				<a href="<?=base_url("Home")?>" class="">
					<img src="<?=base_url()?>images/logo/logo-bangkok.png" alt="bangkok">
				</a>
			</div>
			<div class="col-lg-7 col-md-7">
				<ul class="ul-menu-header">
					<li>
						<a href="<?=base_url($this->session->userdata("site_lang_name")."/About")?>">
							<?=lang("about-us")?>
						</a>
						
					</li>
					<li>
						<div class="dropdown-online">
							<a href="#" class="dropbtn-online"><?=lang("online-market")?></a>
							<span style="margin-top: -30px; margin-left: -33px; position: absolute; background-color: #e9990f; font-size: 14px;padding: 3px; color: #FFF ">
								<?=lang("advice")?>
							</span>
							<div class="dropdown-content-online">
								<a href="#" class="menu">
									<?=lang("online-market")?>
									<span style="padding:0 1px;background-color: #80090F;color: #FFF">
										<?=lang("advice")?>
									</span>
								</a>
								<a href="<?=base_url($this->session->userdata("site_lang_name")."/Products")?>" class="menu">
									<?=lang("product-service")?>
								</a>
								<a href="<?=base_url($this->session->userdata("site_lang_name")."/Promotion")?>" class="menu">
									<?=lang("promotion")?>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown-article">
							<a href="#" class="dropbtn-online">
								<?=lang("Articles and Activities")?>
							</a>
							<div class="dropdown-content-article">
								<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Blog" class="menu">
									<?=lang("article-knowledge")?>
								</a>
								<a href="#" class="menu">
									<?=lang("news-activities")?>
								</a>
							</div>
						</div>
					</li>
					<li> 
						<a href="<?=base_url($this->session->userdata("site_lang_name")."/Achievements")?>">
							<?=lang("achievements")?>
						</a>
					</li>
					<li>
						<a href="<?=base_url($this->session->userdata("site_lang_name")."/Catalogue")?>">
							<?=lang("catalogue")?>
						</a>
					</li>
					<li>
						<div class="dropdown-contact-us">
							<a href="#" class="dropbtn-online login">
								<?=lang("contact-us")?>
							</a>
							<div class="dropdown-content-contact-us">
								<a href="<?=base_url($this->session->userdata("site_lang_name")."/Contactus")?>" class="menu">
									<?=lang("contact-us")?>
								</a>
								<a href="<?=base_url($this->session->userdata("site_lang_name")."/Job")?>" class="menu">
									<?=lang("join-with-us")?>
								</a>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
			<div class="col-lg-3 col-md-3">
				<ul class="right-header">
					<li class="user">
						<div class="dropdown-user">
							<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/User/login" class="dropbtn-online login">
								Login
							</a>
							<div class="dropdown-content-user">
								<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/User/profile" class="menu">
									<?=lang("profile-detail")?>
								</a>
								<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/User/login" class="menu">
									login **
								</a>
								<a href="#" class="menu">
									<?=lang("logout")?>
								</a>
							</div>
						</div>
					</li>

					<li>
						<a href="#">
							<img src="<?=base_url()?>images/icon/cart.png">
						</a>
					</li>
					<li>
						<div class="dropdown-lang">

							<?php foreach ($countrys as $country) { ?>
								<? $uri =  uri_string(); ?>
								<? $uri = str_ireplace($this->session->userdata('site_lang_name')."/", $country->iso2."/", $uri); ?>
								<?
								if ($this->session->userdata("site_lang_name") == $country->iso2) {
									?>
									<a href="<?=base_url($uri)?>"  class="dropbtn-online">
										<img src="<?=base_url()?>images/country_flags/<?=$country->iso2?>.png">
										<?   echo $country->iso2; ?>
									</a>

									
								<?   } else {   ?>
									<div class="dropdown-content-lang">
										<a href="<?=base_url($uri)?>" class="menu">
											<img src="<?=base_url()?>images/country_flags/<?=$country->iso2?>.png">
											<?   echo $country->iso2; ?>
										</a>
									</div>
								<? }  ?>
								
								
							<?php } ?> 
						</div>
					</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="d-lg-none d-md-block d-sm-block d-block" style="width:100%">
		

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Dropdown link
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

	</div>
	






</header>


<style type="text/css">
.container-mobile {
	margin-top: 50px; 
	Display: flex;
	justify-content: center;
	align-items: center;
}
.phone {
	background-color: #36383F;
	border-radius: 40px;
	width: 300px;
	height: 600px;
	Display: flex;
	justify-content: center;
	align-items: center;
	box-shadow: 30px 50px 100px #85888C;
}
.content {
	border: 1px solid #36383F;
	border-radius: 20px;
	width: 94%;
	height: 91%;
	background-color: #F5F6FA;
	overflow: hidden;
}
.mobile-nav {
	background-color: #80090F;
	height: 65px;
	position: fixed;
	width: 100%;
	top: 0;
}

header {
	padding-top: 40px;
	padding-bottom: 20px;
	position: fixed;
	top: 0px;
	z-index: 999;
	width: 100%;
	margin-bottom: 50px;
}
.header-active {
	background-color: #000000a6;
	transition: all 0.5s ease-in-out;
}




</style>

