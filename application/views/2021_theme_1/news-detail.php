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
							<li class="breadcrumb-item color-menu" aria-current="page"><a href="<?=base_url()?>#fifthPage"><?=lang('News and Activities') ?></a></li>
							<?/*?>
							<li class="breadcrumb-item  color-menu-active active" aria-current="page"><?=$news->news_name?></li>
							<?*/?>
						</ol>
					</nav>
				</div>
				<div class="search-product col-lg-5 col-sm-6 pt-2 pb-1">
				</div>
			</div>
		</div>
		<!--/////breadcrumb -->
		<!-- Button Compare -->
		<? $this->load->view('2021_theme_1/compare') ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 " style="animation-duration: 1.5s;">
					<h4 class="name-knowledge"><?=$news->news_name?></h4>
					<ul class="ul-knowledge ">
						<li>
							<?=lang('By') ?> : <span style="color: #808080;"><?=$news->cby?></span>
						</li>
						<li>
							<?=lang('Posted date') ?> : <span style="color: #808080;"><?=date("d-m-Y", strtotime($news->cdate))?></span>
						</li>
						<li>
							<?=lang('Number Of Visitors') ?> : <span style="color: #808080;"><?=$news->count?></span>
						</li>
					</ul>
					<div class="detail-knowledge">
						<?=$news->news_desc?>
					</div>
					<ul class="ul-share ul-knowledge-share">
						<li>
							<div class="breadcrumb-detail menu-pro-detail"><?=lang('Share') ?>&nbsp;</div>
						</li>
						<?php 	$userinput = base_url($this->session->userdata('site_lang_name')."/News/detail/$news->news_id"); 
							$userinputnew = urlencode($userinput);
							
							?>
						<li>
							<div class="share-face">
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?=$userinputnew?>">
								<i class="fab fa-facebook-square face-color"></i>&nbsp;&nbsp;<span>share</span>
								</a>
							</div>
						</li>
						<li>
							<div class="share-line">
								<a href="https://social-plugins.line.me/lineit/share?url=<?=$userinputnew?>">
								<i class="fab fa-line line-color"></i>&nbsp;&nbsp;<span>share</span>
								</a>
							</div>
						</li>
						<li>
							<div class="share-twitter">
								<a href="https://twitter.com/share?url=<?=$userinputnew?>">
								<i class="fab fa-twitter line-color"></i>&nbsp;&nbsp;<span>Tweet</span>
								</a>
							</div>
						</li>
						<li>
							<div class="share-mail">
								<a href='mailto:?body=<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/News/detail/<?=$news->news_id?>'>
								<i class="fas fa-envelope mail-color"></i>&nbsp;&nbsp;<span>Send</span>
								</a>
							</div>
						</li>
						<li>
							<div class="share-print">
								<a href="#" onclick="window.print();">
								<i class="fas fa-print print-color"></i>&nbsp;&nbsp;<span>Print</span>
								</a>
							</div>
						</li>
					</ul>
					<h3 class="h3-know-advice" style="font-weight: bold; ">
					<?=lang('Related News') ?></h3 style="font-weight: bold; ">
					<div class="line-know-about"></div>
					<div class="container">
						<div class="row">
							<div class="owl-carousel owl-theme owl-carousel-news-about">
								<? foreach ($newsall as $newsalls) { ?>
								<div class="item">
									<div class="knowledge-about">
										<a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/News/detail/<?=$newsalls->news_id?>">
											<? foreach ($newsalls->images as $key => $images) { ?>
											<? if ($key==0) { ?>
											<?php $i = json_decode($images->resolution); ?>
											<picture>
												<?php foreach ($i as $key => $newi) { ?>
												<source media="(min-width:<?=$key;?>px)" srcset="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>">
												<?php } ?>
												<img class="lazy img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" data-src="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$images->show_admin?>.<?=$images->extension ?>" alt="<?=$newsalls->news_name?>">
											</picture>
											<? } ?>
											<? } ?>
										</a>
										<a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/News/detail/<?=$newsalls->news_id?>">
											<h3>
												<?=$newsalls->news_name?>
											</h3>
										</a>
										<p><?=$newsalls->news_desc_short?></p>
									</div>
								</div>
								<? } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-none d-sm-none d-md-block " >
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active tab-select" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
							<?=lang('Popular News') ?>
							</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="container">
								<div class="row border-tab">
									<? foreach ($Allpop as $Allpops) { ?>
									<div class="col-lg-12 margin-top">
										<div class="row">
											<div class="col-md-4">
												<a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/News/detail/<?=$Allpops->news_id?>">
													<? foreach ($Allpops->images as $key => $images) { ?>
													<? if ($key==0) { ?>
													<?php $i = json_decode($images->resolution); ?>
													<picture>
														<?php foreach ($i as $key => $newi) { ?>
														<source media="(min-width:<?=$key;?>px)" srcset="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>">
														<?php } ?>
														<img class="lazy img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" data-src="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$images->show_admin?>.<?=$images->extension ?>" alt="<?=$Allpops->news_name?>">
													</picture>
													<? } ?>
													<? } ?>
												</a>
											</div>
											<div class="col-md-8">
												<div class="knowledge-advice">
													<a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/News/detail/<?=$Allpops->news_id?>">
														<h5><?=$Allpops->news_name?></h5>
													</a>
													<div class="date-knowledge">
														<span><?=lang('Posted date') ?> : </span><span><?=date("d-m-Y", strtotime($Allpops->cdate))?></span>
													</div>
												</div>
											</div>
										</div>
										<div class="dot-border"></div>
									</div>
									<? } ?>
								</div>
							</div>
							<div class="face-follow">
								<h5>
									<?= lang('Follow')?> Facebook
								</h5>
								<?php if($companyData->facebook_fanpage_id){ ?>
		                        <div class="facebook_fanpage" style="margin-top:30px;">
		                            <div id="fb-root"></div>
		                            <script>
		                                window.fbAsyncInit = function() {
		                                  FB.init({
		                                    xfbml            : true,
		                                    version          : 'v3.3'
		                                  });
		                                };
		                                
		                                (function(d, s, id) {
		                                var js, fjs = d.getElementsByTagName(s)[0];
		                                if (d.getElementById(id)) return;
		                                js = d.createElement(s); js.id = id;
		                                js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
		                                fjs.parentNode.insertBefore(js, fjs);
		                                }(document, 'script', 'facebook-jssdk'));
		                                
		                            </script>


		                            <div class="fb-page" data-href="<?=$companyData->facebook_fanpage_id?>" data-tabs="timeline" data-width="370" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
		                                <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
		                            </div>
		                        </div>
		                        <?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?
			$this->load->view('2021_theme_1/inc/footer1/footer2')
			?>
		<script src="<?=base_url()?>assets/aos-master/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
		<script>
			$(document).ready(function() {
				var owl = $('.owl-carousel-news-about');
				owl.owlCarousel({
					margin: 10,
					loop: false,
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
		<script src="<?=base_url()?>assets/owlcarousel/highlight.js"></script>
		<script src="<?=base_url()?>assets/owlcarousel/app.js"></script>
		<script type="text/javascript">
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>