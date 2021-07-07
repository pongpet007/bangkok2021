<div class="left-menu-user"  id="left-menu-user">
	<div class="menu-user line-menu-user"> 
		<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/User/profile" class="nav-user-1">
			<i class="fas fa-chevron-right"></i>
			&nbsp;
			<?=lang('account information')?>
		</a>
	</div>
	
	<div class="menu-user line-menu-user"> 
		<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/User/address" class="nav-user-2">
			<i class="fas fa-chevron-right"></i>
			&nbsp;
			<?=lang('address')?>
		</a>
	</div>
	
	<div class="menu-user line-menu-user"> 
		<a href="<?=base_url($this->session->userdata('site_lang_name'))?>/User/request" class="nav-user-3">
			<i class="fas fa-chevron-right"></i>
			&nbsp;
			<?=lang('quote request list')?>
		</a>
	</div>
	
	<div class="menu-user line-menu-user"> 
		<a href="#" class="nav-user-4">
			<i class="fas fa-chevron-right"></i>
			&nbsp;
			<?=lang('Attach the transfer slip')?>
		</a>
	</div>
	
	<div class="menu-user line-menu-user"> 
		<a href="#" class="nav-user-5">
			<i class="fas fa-chevron-right"></i>
			&nbsp;
			<?=lang('change-password')?>
		</a>
	</div>
	
	<div class="menu-user "> 
		<a href="#" class="nav-user-6">
			<i class="fas fa-chevron-right"></i>
			&nbsp;
			<?=lang('logout')?>
		</a>
	</div>
</div>	