<?php $this->load->view('2021_theme_1/inc/header1/css-header'); ?>
<div id="header">
<? $lang = $this->session->userdata('site_lang_name')?>
 <!-- Menu Header mobile -->
 <div class="display-header ">
  <div class="screen">
    <div class="navbar"></div>
    <div class="list">

    </div>

    <div class="circle"></div>
    <div class="menu">
      <ul class="navbar-nav navbar-nav-new">
        <li class="nav-item nav-item-new nav-1 " id="nav-color-1">
          <a class="nav-link nav-link-new" href="<?=base_url('#firstPage')?>"><span class="number-page-1"></span><?=lang('Home')?></a>
        </li>
        <li class="nav-item  nav-item-new nav-2 " id="nav-color-2">
          <a class="nav-link nav-link-new" href="<?=base_url()?>#secondPage"><span class="number-page-2"></span><?= lang('about-us') ?></a>
        </li>
        <li class="nav-item nav-item-new nav-3" id="nav-color-3">
          <a class="nav-link nav-link-new" href="<?=base_url()?>#thirdPage"><span class="number-page-3"></span><?=lang('Products And Services')?></a>
        </li>
        <li class="nav-item nav-item-new nav-4" id="nav-color-4">
          <a class="nav-link nav-link-new" href="<?=base_url()?>#fourthPage"><span class="number-page-4"></span><?=lang('Knowledge')?></a>
        </li>
        <li class="nav-item nav-item-new nav-5" id="nav-color-5">
          <a class="nav-link nav-link-new" href="<?=base_url()?>#fifthPage"><span class="number-page-5"></span><?=lang('News and Activities')?></a>
        </li>
        <li class="nav-item nav-item-new nav-6" id="nav-color-6">
          <a class="nav-link nav-link-new" href="<?=base_url()?>#sixthPage"><span class="number-page-6"></span><?=lang('join-us')?></a>
        </li>
        <li class="nav-item nav-item-new nav-6" id="nav-color-7">
          <a class="nav-link nav-link-new" href="<?=base_url()?>#seventhPage"><span class="number-page-6"></span><?=lang('contact-us')?></a>
        </li>
        <li  class="nav-item  nav-8" id="nav-color-8">
          <div class="facebook-1 nav-link nav-link-new">  
            <?php foreach ($countrys as $country) { ?>
              <? $uri =  uri_string(); ?>
              <? $uri = str_ireplace($this->session->userdata('site_lang_name')."/", $country->iso2."/", $uri); ?>
              <a class="text-reset" style="color: #000;" href="<?=base_url($uri)?>">
                <img src="<?= base_url()?>images/country_flags/<? echo $country->iso2; ?>.png" alt="kulthorn" class="img-flag" style="margin-top: -5px;">
                <?=$country->iso2?>
              </a>
            <?php } ?>
          </div>
        </li>
        <li class="nav-item nav-item-new nav-9">  
          <div class="facebook-1 nav-link nav-link-new">
            <a class="text-reset" href="<?=$companyData->facebook?>" style="margin-right: 5px;">
              <i class="fab fa-facebook-f icon-header" style="display: inline;"></i>
            </a>
            <a class="text-reset" href="<?=$companyData->twitter?>" style="margin-right: 5px;">
              <i class="fab fa-twitter icon-header" style="display: inline;"></i>
            </a>
            <a class="text-reset" href="<?=$companyData->instagram?>">
              <i class="fab fa-instagram icon-header"></i>
            </a>
          </div>
        </li>


      </ul>
    </div>                  
    <div class="burger">
      <div class="x"></div>
      <div class="y"></div>
      <div class="z"></div>
    </div>    

  </div>  
</div>

<script type="text/javascript">
  if( 'ontouchstart' in window ){ 
    var click = 'touchstart';
  }
  else { 
    var click = 'click'; 
  }


  $('div.burger').on(click, function(){
    if( !$(this).hasClass('open') ){ 
      openMenu(); 
      $('div.menu ul li').css('visibility','visible')
      $('div.x').css('background-color','#FFF');
      $('div.z').css('background-color','#FFF');
    } 
    else { 
      closeMenu(); 
      $('div.menu ul li').css('visibility','hidden')
      $('div.x').css('background-color','#000');
      $('div.z').css('background-color','#000');
    }
  });




  $("a.nav-link-new" ).click(function() {
    closeMenu($('div.burger')); 
    $('div.menu ul li').css('visibility','hidden')

  });

  function openMenu(){

    $('div.circle').addClass('expand');

    $('div.burger').addClass('open'); 
          // $('div.x, div.y, div.z').addClass('collapse');
          $('.menu li').addClass('animate');

          setTimeout(function(){ 
            $('div.y').hide(); 
            $('div.x').addClass('rotate30'); 
            $('div.z').addClass('rotate150'); 
          }, 70);
          setTimeout(function(){
            $('div.x').addClass('rotate45'); 
            $('div.z').addClass('rotate135');  
          }, 120);
        }

        function closeMenu(){

          $('div.burger').removeClass('open');  
          $('div.x').removeClass('rotate45').addClass('rotate30'); 
          $('div.z').removeClass('rotate135').addClass('rotate150');        
          $('div.circle').removeClass('expand');
          $('.menu li').removeClass('animate');

          setTimeout(function(){      
            $('div.x').removeClass('rotate30'); 
            $('div.z').removeClass('rotate150');      
          }, 50);
          setTimeout(function(){
            $('div.y').show(); 
            $('div.x, div.y, div.z').removeClass('collapse');
          }, 70);                         

        }
      </script>

      <!-- End Menu Header mobile -->


      <div class="container-fluid pt-2" style="background-color: #FFF;border-bottom: solid 1px #f0f0f0; ">
        <div class="row">
          <div class="col-lg-1 d-lg-block  d-none d-sm-none" >
            <div class="img-logo" >
            <a href="<?=base_url()?>">
              <img class="pb-2"src="<?= base_url()?>/assets/img/logo-kul.png">
            </a>
          </div>
        </div>

        <div class="col-lg-11 d-lg-block d-none d-sm-none  " >
          <nav class="navbar navbar-expand-lg navbar-light /*bg-light*/ nav-color">
            <a class="navbar-brand" href="#"> </a>
            <button class="navbar-toggler nav-color-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
              <ul class="navbar-nav navbar-nav-new pslbold pt-1">
                <li class="nav-item nav-item-new nav-1">
                  <a class="nav-link nav-link-new" href="<?=base_url()?>#firstPage"><span class="number-page-1"></span><?=lang('Home')?></a>
                </li>
                <li class="nav-item  nav-item-new nav-2">
                  <a class="nav-link nav-link-new" href="<?=base_url()?>#secondPage"><span class="number-page-2"></span><?= lang('about-us') ?></a>
                </li>
                <li class="nav-item nav-item-new nav-3">
                  <a class="nav-link nav-link-new" href="<?=base_url()?>#thirdPage"><span class="number-page-3"></span><?=lang('Products And Services')?></a>
                </li>
                <li class="nav-item nav-item-new nav-4">
                  <a class="nav-link nav-link-new" href="<?=base_url()?>#fourthPage"><span class="number-page-4"></span><?=lang('Knowledge')?></a>
                </li>
                <li class="nav-item nav-item-new nav-5">
                  <a class="nav-link nav-link-new" href="<?=base_url()?>#fifthPage"><span class="number-page-5"></span><?=lang('News and Activities')?></a>
                </li>
                <li class="nav-item nav-item-new nav-6">
                  <a class="nav-link nav-link-new" href="<?=base_url()?>#sixthPage"><span class="number-page-6"></span><?=lang('join-us')?></a>
                </li>
                <li class="nav-item nav-item-new nav-6">
                  <a class="nav-link nav-link-new" href="<?=base_url()?>#seventhPage"><span class="number-page-6"></span><?=lang('contact-us')?></a>
                </li>

                <li class="nav-item  nav-8 nav-color-8" id="">
                  <div class="dropdown nav-link-new show changlang" id="changlang">

                    <?php foreach ($countrys as $country) { ?>
                      <? $uri =  uri_string(); ?>
                      <? $uri = str_ireplace($this->session->userdata('site_lang_name')."/", $country->iso2."/", $uri); ?>
                      <?
                      if ($country->iso2 == $lang) {
                       ?>
                       <a class="btn btn-secondary dropdown-toggle button-color" href="<?=base_url($uri)?>" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= base_url()?>images/country_flags/<? echo $country->iso2; ?>.png" alt="kulthorn" class="img-flag" style="margin-top: -5px;"> 
                        <?   echo $country->iso2; ?>
                      </a>
                    <?   } else {   ?>
                      <div class="dropdown-menu dropdown-menu-new" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item drop-new" href="<?=base_url($uri)?>" style="text-align: center;">
                          <img src="<?= base_url()?>images/country_flags/<? echo $country->iso2; ?>.png" alt="kulthorn" class="img-flag" style="margin-top: -5px;"> 
                          <? echo $country->iso2; ?>
                        </a>
                      </div>
                    <? }  ?>
                  <?php } ?> 



                </div>
              </li>


              <li class="nav-item nav-item-new nav-9">  
                <a class="nav-link nav-link-new" href="<?=$companyData->facebook?>"><i class="fab fa-facebook-f size-font-i"></i></a>
              </li>
              <li class="nav-item nav-item-new nav-9">  
                <a class="nav-link nav-link-new" href="<?=$companyData->twitter?>"><i class="fab fa-twitter size-font-i"></i></a>
              </li>
              <li class="nav-item nav-item-new nav-9">  
                <a class="nav-link nav-link-new" href="<?=$companyData->instagram?>"><i class="fab fa-instagram size-font-i"></i></a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>