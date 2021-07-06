
<div class="container-fluid">
	<div class="row" style="padding: 0;">
		<div class="col-12" style="padding: 0;">
			<footer>
				<div class="copyright" style="">
					<div class="detail-copy">
						© Copyright <?echo date('Y')?>. All Rights Reserved. <a class="statfooter" href="<?=base_url($this->session->userdata('site_lang_name'))?>/Home/stat"> <span class="stat"><i style="padding-left: 15px; font-size: 15px" class="fas fa-user"></i> 
							<?=lang('The Number Of Website Visitors') ?> <?=$counter?></span></a>
					</div>
				</div>
			</footer>
		</div>
	</div>
</div>

<style type="text/css">
	span.stat {
		border-left: 3px solid #ddd;
    	margin-left: 15px;
	}
	.statfooter {
		color: #fff;
	}
	.statfooter:hover {
		color: #007bff;
	}
	@media (max-width: 767px) and (min-width: 300px) {
		.copyright {
			margin-top: 50px;
		}
	}
	@media (max-width: 1023px) and (min-width: 768px) {
		
	}
	@media (max-width: 1359px) and (min-width: 1024px) {
		.copyright {
			margin-top: 50px;
		}
	}
</style>