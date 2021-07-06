<div class="compare" >
	<button type="button" onclick="window.location.href='<?= base_url($this->session->userdata('site_lang_name'))?>/Products/compare';" class="btn btn-secondary btn-compare" data-toggle="tooltip" data-placement="right" title="<?=lang('Compare Products') ?>">
	<i class="fas fa-sync-alt"></i>
	<span class="count-compare">
	<?=count($this->cart->contents())?>
	</span>
	</button>
</div>