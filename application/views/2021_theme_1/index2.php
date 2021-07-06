<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?=$meta_title?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="author" content="<?=$meta_title?>" />
  <meta name="description" content="<?=$meta_description?>" />
  <meta name="keywords"  content="<?=$meta_keyword?>" />
  <meta name="Resource-type" content="Document" />

  <link rel="icon" href="<?=base_url("")?>images/icon.png" type="image/png" sizes="16x16">

  <link rel="preload" href="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/css/bootstrap.min.css"></noscript>

  <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fullpage/fullpage.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fullpage/examples.css" />
  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/docs.theme.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.theme.default.min.css">
  <script src="<?=base_url()?>assets_2021_theme_1/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/owlcarousel/owl.carousel.js"></script>

  <link href="<?=base_url()?>assets/aos-master/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <?php $this->load->view('2021_theme_1/inc/css-pook'); ?>
  <?php $this->load->view('2021_theme_1/inc/css'); ?>
  

</head>
<body>
  <?php $lang = $this->session->userdata('site_lang_name')?>
  <div id="header">
   <!-- Menu Header mobile -->
   <div class="display-header is-animated "data-aos="fade-up"data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
    <div class="screen">
      <div class="navbar"></div>
      <div class="list">
      </div>

      <div class="circle"></div>
      <div class="menu">
        <ul class="navbar-nav navbar-nav-new ">
          <li class="nav-item nav-item-new nav-1 " id="nav-color-1">
            <a class="nav-link nav-link-new" href="#firstPage"><span class="number-page-1"></span><?=lang('Home')?></a>
          </li>
          <li class="nav-item  nav-item-new nav-2 " id="nav-color-2">
            <a class="nav-link nav-link-new" href="#secondPage"><span class="number-page-2"></span><?= lang('about-us') ?></a>
          </li>
          <li class="nav-item nav-item-new nav-3" id="nav-color-3">
            <a class="nav-link nav-link-new" href="#thirdPage"><span class="number-page-3"></span><?=lang('Products And Services')?></a>
          </li>
          <li class="nav-item nav-item-new nav-4" id="nav-color-4">
            <a class="nav-link nav-link-new" href="#fourthPage"><span class="number-page-4"></span><?=lang('Knowledge')?></a>
          </li>
          <li class="nav-item nav-item-new nav-5" id="nav-color-5">
            <a class="nav-link nav-link-new" href="#fifthPage"><span class="number-page-5"></span></span><?=lang('News and Activities')?></a>
          </li>
          <li class="nav-item nav-item-new nav-6" id="nav-color-6">
            <a class="nav-link nav-link-new" href="#sixthPage"><span class="number-page-6"></span><?=lang('join-us')?></a>
          </li>
          <li class="nav-item nav-item-new nav-6" id="nav-color-7">
            <a class="nav-link nav-link-new" href="#seventhPage"><span class="number-page-6"></span><?=lang('contact-us')?></a>
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
        <!-- <li class="nav-item  nav-8" id="nav-color-8">
          <div class="facebook-1 nav-link nav-link-new">  
            <a class="text-reset" href="#">
              <img src="<?= base_url()?>assets/img/thai-flag.png" alt="kulthorn" class="img-flag" style="margin-top: -5px;">
            </a>
            <a class="text-reset" href="#">
              <img src="<?= base_url()?>assets/img/flag-eng.png" alt="kulthorn" class="img-flag" style="margin-top: -5px;">
            </a>
          </div>
        </li> -->
        <li class="nav-item nav-item-new nav-9">  
          <div class="facebook-1 nav-link nav-link-new">
            <a class="text-reset" href="<?=$companyData->facebook?>"><i class="fab fa-facebook-f icon-header" style="display: inline;"></i></a>
            <a class="text-reset" href="<?=$companyData->twitter?>"><i class="fab fa-twitter icon-header" style="display: inline;"></i></a>
            <a class="text-reset" href="<?=$companyData->instagram?>"><i class="fab fa-instagram icon-header"></i></a>
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
<!-- End Menu Header mobile -->


<div class="container-fluid headerPage">
  <div class="row row-mobile" id="row-header">
    <div class="col-lg-1 d-lg-block  d-none d-sm-none is-animated">

      <div >
        <div class="img-logo " data-aos="fade-down-right" id="img-logo-header" style="position: absolute;">
          <img src="<?= base_url()?>/assets/img/logo-02.svg" alt="kulthorn">
        </div>
      </div>

    </div>

    <div class="col-lg-11 d-lg-block d-none d-sm-none   is-animated"data-aos="fade-down"data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
      <nav class="navbar navbar-expand-lg navbar-light /*bg-light*/ nav-color">
        <a class="navbar-brand" href="#"> </a>
        <button class="navbar-toggler nav-color-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav navbar-nav-new  pslbold">
            <li class="nav-item nav-item-new nav-1 nav-color-1" id="">
              <a class="nav-link nav-link-new" href="#firstPage"><span class="number-page-1"></span><?=lang('Home')?></a>
            </li>
            <li class="nav-item  nav-item-new nav-2 nav-color-2" id="">
              <a class="nav-link nav-link-new test-3" href="#secondPage"><span class="number-page-2"></span><?= lang('about-us') ?></a>
            </li>
            <li class="nav-item nav-item-new nav-3 nav-color-3" id="">
              <a class="nav-link nav-link-new" href="#thirdPage"><span class="number-page-3"></span><?=lang('Products And Services')?></a>
            </li>
            <li class="nav-item nav-item-new nav-4 nav-color-4" id="">
              <a class="nav-link nav-link-new" href="#fourthPage"><span class="number-page-4"></span><?=lang('Knowledge')?></a>
            </li>
            <li class="nav-item nav-item-new nav-5 nav-color-5" id="">
              <a class="nav-link nav-link-new" href="#fifthPage"><span class="number-page-5"></span><?=lang('News and Activities')?></a>
            </li>
            <li class="nav-item nav-item-new nav-6 nav-color-6" id="">
              <a class="nav-link nav-link-new" href="#sixthPage"><span class="number-page-6"></span><?=lang('join-us')?></a>
            </li>
            <li class="nav-item nav-item-new nav-6 nav-color-7" id="">
              <a class="nav-link nav-link-new" href="#seventhPage"><span class="number-page-6"></span><?=lang('contact-us')?></a>
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
               <!--  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item drop-new" href="#">Action</a>
                </div>
               
                  <a class="text-reset" style="color: #000;" href="<?=base_url($uri)?>">
                    <?php if ($country->iso2 == 'TH') {?>
                      <img src="<?= base_url()?>assets/img/thai-flag.png" alt="kulthorn" class="img-flag" style="margin-top: -5px;">
                    <?php } else {?>
                      <img src="<?= base_url()?>assets/img/flag-eng.png" alt="kulthorn" class="img-flag" style="margin-top: -5px;"> 
                    <?php } ?>
                    <?=$country->iso2?>
                  </a>

            <li class="nav-item  nav-8 nav-color-8" id="">
              <div class="dropdown nav-link-new show changlang" id="changlang">
                <a class="btn btn-secondary dropdown-toggle button-color" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="<?= base_url()?>assets/img/thai-flag.png" alt="kulthorn" class="img-flag" style="margin-top: -5px;"> ภาษาไทย
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item drop-new" href="#">Action</a>
                </div>
              </div>
            </li> -->
            <li class="nav-item nav-item-new nav-9">  
              <a class="nav-link nav-link-new" href="<?=$companyData->facebook?>"><i class="fab fa-facebook-f icon-header"></i></a>
            </li>
            <li class="nav-item nav-item-new nav-9">  
              <a class="nav-link nav-link-new" href="<?=$companyData->twitter?>"><i class="fab fa-twitter icon-header"></i></a>
            </li>
            <li class="nav-item nav-item-new nav-9">  
              <a class="nav-link nav-link-new" href="<?=$companyData->instagram?>"><i class="fab fa-instagram icon-header"></i></a>
            </li>

          </ul>
        </div>
      </nav>
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
    } 
    else { 
      closeMenu(); 
      $('div.menu ul li').css('visibility','hidden')

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

    </div>





    <div id="fullpage">
      <div class="section firstPage" id="section0">
        <div class="slide" id="slide1" style="background-image: url('<?=base_url()?>/assets/img/bg-banner-1.jpg');" alt="kulthorn">
          <div class="container con-1366">
            <div class="row">
              <div class="col-lg-4 " >      
                <img class="img-headerslide-1 is-animated" data-aos="fade-right" style="transition-duration: 1s !important;   animation-delay: 0s" src="<?=base_url()?>assets/img/baanner-1-1.png" alt="kulthorn">
              </div>
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-lg-12">
                    <img class="img-headerslide is-animated" data-aos="fade-left" style="transition-duration: 1s !important;   animation-delay: 0s" src="<?=base_url()?>assets/img/baanner-1-2.png" alt="kulthorn">
                  </div>
                  <div class="col-lg-12 padding-mobile">
                    <img class="img-headerslide is-animated" data-aos="fade-left" style="transition-duration: 1s !important;   animation-delay: 0s" src="<?=base_url()?>assets/img/baanner-1-3.png" alt="kulthorn">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide is-animated" id="slide2" style="background-image: url('<?=base_url()?>assets/img/bg-banner-2.jpg?<?= rand()?>');" >
          <div class="container con-1366">
            <div class="row">
              <div class="col-lg-7" style="margin-top: 40px;">
                <div class="row">
                  <div class="col-lg-12">
                    <img class="img-headerslide is-animated"  src="<?=base_url()?>assets/img/baanner-2-1.png" alt="kulthorn">
                  </div>
                  <div class="col-lg-12 d-sm-block d-none ">
                    <img class="img-headerslide is-animated" src="<?=base_url()?>assets/img/pipe-04.png" alt="kulthorn" >
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <img class="img-headerslide is-animated" src="<?=base_url()?>assets/img/baanner-2-3.png"  alt="kulthorn">
              </div>
            </div>
          </div>
        </div>
        <div class="slide" id="slide3" style="background-image: url('<?=base_url()?>assets/img/bg-banner-3.jpg');" alt="kulthorn">
          <div class="container con-1366">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <img class="img-slide-2 is-animated" src="<?=base_url()?>assets/img/baanner-3-1.png" alt="kulthorn" >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">

        $( document ).ready(function() {
          // var $isHeader = $('.animate__slideInUp'),
          // $isHeader2 = $('.animate__slideInUp'),
          // $isHeader3 = $('.animate__slideInUp');
          
          // $isHeader.css('animation-duration', '1.8s');
          // $isHeader.css('animation-delay', '0s');

          // $isHeader2.css('animation-duration', '1.8s');
          // $isHeader2.css('animation-delay', '0s');

          // $isHeader3.css('animation-duration', '1.8s');
          // $isHeader3.css('animation-delay', '0s');


        });
      </script>


      <div class="section " id="section1" style="background : url('<?=base_url()?>assets/img/bg-banner-3.jpg')center center; background-size: cover; " >
        <div class="container con-1366-history">
          <div class="row">
            <div id="demos" class="large-12 columns space-his pt-md-5 pt-1366" >
              <div class="tab section-2-space second" role="tabpanel">
                <!-- Nav tabs -->
                <style type="text/css">
                  .item {
                    text-align: left;
                  }
                  p.about-year span::before {
                    background-color: #eeeeee;
                    content: "";
                    height: 1px;
                    right: 0;
                    position: absolute;
                    bottom: 180px;
                    transition: all 0.4s ease 0s;
                    width: 88%;
                    z-index: 1;
                  }
                  p{
                    color: #fff;
                    font-size: 30px;
                    margin-bottom: 15px;
                    margin-top: 15px;
                  }
                  p.aboutnew{
                    color: #fff;
                    font-size: 16px;
                    height: 134px;
                  }
                  p.aboutnew span {
                    color: #fff;
                    font-size: 16px;

                  }
                  .width33 {
                    width: 33.33%;
                  }
                  .MISSIONH1 {
                    font-size: 46px;
                    text-align: left;
                  }
                  .MISSIONP {
                    font-size: 28px;
                    text-align: left;
                    line-height: 25px;
                  }
                  p.aboutnew-2 {
                   font-size: 16px;
                  line-height: 22px;
                  font-weight: 300;
                  }


                </style>
                <ul class="nav nav-tabs is-animated" role="tablist">
                  <li role="presentation" class="width33 pslbold">

                    <a class="active" href="#Section1" aria-controls="home" role="tab" data-toggle="tab"   ><?= lang('history-kulthorn')?></a>
                  </li>
                  <li role="presentation" class="width33 pslbold">
                    <a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><?=lang('Vision and Mission')?></a>
                  </li>
                  <li role="presentation" class="width33 pslbold">
                    <a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab"><?= lang('A subsidiary of Kulthorn')?></a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs ">
                  <div role="tabpanel" class="tab-pane fade in active show is-animated" id="Section1">
                    <div class="owl-carousel owl-theme owl-carousel-1">

                      <? foreach ($historys as $history ) { ?>
                        <div class="item">
                          <a href="#">

                            <picture>
                              <source media="(max-width:768px)" srcset="<?=base_url()?>images/history/<?=$history->history_id?>_s.jpg?<?= rand()?>" alt="<?= $history->history_name?>">
                                <source media="(min-width:769px)" srcset="<?=base_url()?>images/history/<?=$history->history_id?>_l.jpg?<?= rand()?>"
                                  alt="<?= $history->history_name?>">
                                  <img src="<?=base_url()?>images/history/<?=$history->history_id?>_l.jpg?<?= rand()?>"  alt="<?= $history->history_name?>">
                                </picture>

                              </a>

                              <p class="about-year">
                                <?= $history->history_name?>
                                <span>
                                </span>
                                
                              </p>



                              <?= $history->history_desc?>

                            </div>

                          <? }  ?>

<!-- 
                      <div class="item">
                        <a href="#"><img src="<?=base_url()?>/image_new/About2.jpg" alt="kulthorn"></a>
                        <p class="about-year">2510<span>
                        </span></p>
                        <p class="aboutnew">
                          <span>กุลธร เมื่อตอนเริิิ่มต้น ประมาณก่อนปี 2510 </span>
                        </p>
                      </div> -->



                    </div>
                    <script>
                      $(document).ready(function() {
                        var owl = $('.owl-carousel-1');
                        owl.owlCarousel({
                          margin: 10,
                          loop: true,
                          responsive: {
                            0: {
                              items: 1
                            },
                            600: {
                              items: 2
                            },
                            1000: {
                              items: 2
                            },
                            1300: {
                              items: 2
                            }
                          }
                        })
                      })
                    </script>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="Section2">
                    <!-- <div class="row">
                      <div class="col-lg-12 col-12 is-animated">
                        <div class="row">
                          <div class="col-lg-6">
                            <img src="<?=base_url()?>/image_new/About3.jpg" alt="kulthorn">
                          </div>
                          <div class="col-lg-6 pt-60 pt-mobile">
                            <h1 class="MISSIONH1">OUR MISSION</h1>
                            <p class="MISSIONP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="row" style="margin-top: 30px;">
                      <div class="col-lg-12 col-12 is-animated">
                        <div class="row">
                          <div class="col-lg-6 pt-60 pt-mobile">
                            <h1 class="MISSIONH1">OUR VISION</h1>
                            <p class="MISSIONP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
                          </div>
                          <div class="col-lg-6">
                            <img src="<?=base_url()?>/image_new/About4.jpg" alt="kulthorn">
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="vision-text">
                      <?= $visions->com_desc ?>
                    </div>
                    


                  </div>
                  <div role="tabpanel" class="tab-pane fade " id="Section3">
                    <div class="owl-carousel owl-theme owl-carousel-2">

                      <? foreach ($com_groups as $com_group ) { ?>

                        <div class="item is-animated">
                          <picture>
                            <source media="(max-width:768px)" srcset="<?=base_url()?>images/groupcom/<?=$com_group->groupcom_id?>_s.jpg?<?= rand()?>" alt="kulthorn"  >
                             <source media="(min-width:769px)" srcset="<?=base_url()?>images/groupcom/<?=$com_group->groupcom_id?>_l.jpg?<?= rand()?>" alt="kulthorn"  >
                             </picture>

                             <img src="<?=base_url()?>images/groupcom/<?=$com_group->groupcom_id?>_l.jpg?<?= rand()?>" alt="kulthorn">

                             <picture>
                              <source media="(max-width768px)" srcset="<?=base_url()?>images/groupcom/logo<?=$com_group->groupcom_id?>_s.jpg?<?= rand()?>" type="">
                                <source media="(min-width:769px)" srcset="<?=base_url()?>images/groupcom/logo<?=$com_group->groupcom_id?>_l.jpg?<?= rand()?>" alt="kulthorn"  >
                                </picture>
                                <img src="<?=base_url()?>images/groupcom/logo<?=$com_group->groupcom_id?>_l.jpg?<?= rand()?>" alt="kulthorn">

                                <?= $com_group->groupcom_desc?>

                              </div>

                            <? }?>
                          </div>


                          <script>
                            $(document).ready(function() {
                              var owl = $('.owl-carousel-2');
                              owl.owlCarousel({
                                margin: 10,
                                loop: true,
                                responsive: {
                                  0: {
                                    items: 1
                                  },
                                  600: {
                                    items: 2
                                  },
                                  1000: {
                                    items: 3
                                  }
                                }
                              })
                            })
                          </script>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <style type="text/css">
              h1.section-products {
                color: #000000;
                margin-top: 90px;
                font-size: 30px;
              }
              p.section-products {
                color: #000000;
                font-size: 18px;
                padding-top: 15px;
              }

              .products-catagory-bt .products-catagory-name h1 {
                color: #000000;
                font-size: 25px;
                text-align: left;
              }
              .products-catagory-bt .products-catagory-name h2 {
                color: #1E1670;
                font-size: 36px;
                text-align: left;
                font-weight: bold;
              }
              .products-catagory-name {
                border-left: 5px solid #000000;
              }
              .products-catagory-bt.active .products-catagory-name h1 {
                color: #000000;
                font-size: 25px;
                text-align: left;
              }
              .products-catagory-bt.active .products-catagory-name h2 {
                color: #2F23B0;
                font-size: 36px;
                text-align: left;
                font-weight: bold;
              }
              .active>.products-catagory-name {
                border-left: 5px solid #2F23B0;
              }
              .products-catagory-bt:after{
                content: "";
                width: 100%;
                height: 1px;
                background: #eeeeee;
                position: absolute;
                bottom: 15px;
                left: 0;
                z-index: -1;
                transition: all 0.3s ease 0s;
              }

            </style>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#products-catagory-1").on('click', function(){
                  console.log("click!!!");
                });
              });
            </script>

            <div class="section third" id="section2">
             <!--  <div class="header-thirdPage"></div> -->
             <div class="container">
              <div class="row">

               <div class="col-lg-12  is-animated">
                <h1 class="section-products">
                  <?=lang('Products And Services')?>

                </h1>
                <p class="section-products mt-0 mb-5">Kulthorn Compressors Sold All Over the World Since 1981</p>
                
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12 is-animated">
                    <div class="row product-page">
                      <div class="col-lg-12 col-12 products-catagory-bt active pb-product" onclick="" id="products-catagory-1" >
                        <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                          <div style="padding-left: 15px; padding-right: 15px;">
                            <div class="row">
                              <div class="cate_name_pro col-md-12 col-8">
                                <?php
                                if ($lang == 'TH') { 
                                  $cat_name1 = "คอมเพรสเซอร์";
                                } else {
                                  $cat_name1 = "Compressors";
                                }
                                ?>
                                <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:1_<?=$cat_name1?>" alt="kulthorn">
                                  <h1>คอมเพรสเซอร์</h1>
                                  <h2>Compressors</h2>
                                </a>
                              </div>
                              <div class=" d-sm-none col-4">
                                <img src="<?=base_url()?>image_new/product1.jpg" alt="kulthorn">
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-12 products-catagory-bt pb-product" id="products-catagory-2" >
                        <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                          <div style="padding-left: 15px; padding-right: 15px;">
                           <div class="row">
                            <div class="cate_name_pro col-md-12 col-8">
                              <?php
                              if ($lang == 'TH') { 
                                $cat_name2 = "วาล์ว";
                              } else {
                                $cat_name2 = "VALVE";
                              }
                              ?>
                              <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:2_<?=$cat_name2?>">
                                <h1>วาล์ว</h1>
                                <h2>VALVE</h2>
                              </a>
                            </div>
                            <div class=" d-sm-none col-4">
                              <img src="<?=base_url()?>image_new/product2.jpg" alt="kulthorn">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 col-12 products-catagory-bt pb-product" id="products-catagory-3" >
                      <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                        <div style="padding-left: 15px; padding-right: 15px;">
                          <div class="row">
                           <div class="cate_name_pro col-md-12 col-8">
                            <?php
                            if ($lang == 'TH') { 
                              $cat_name3 = "อุปกรณ์ทำความเย็น";
                            } else {
                              $cat_name3 = "Cooling equipment";
                            }
                            ?>
                            <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:4_<?=$cat_name3?>">
                              <h1>อุปกรณ์ทำความเย็น</h1>
                              <h2>Cooling equipment</h2>
                            </a>
                          </div>
                          <div class=" d-sm-none col-4">
                            <img src="<?=base_url()?>image_new/product3.jpg" alt="kulthorn">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-12 products-catagory-bt pb-product" id="products-catagory-4" >
                    <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                      <div style="padding-left: 15px; padding-right: 15px;">
                        <div class="row">
                          <div class="cate_name_pro col-md-12 col-8">
                            <?php
                            if ($lang == 'TH') { 
                              $cat_name4 = "รถตัดหญ้า";
                            } else {
                              $cat_name4 = "Lawn mower";
                            }
                            ?>
                            <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:5_<?=$cat_name4?>">
                              <h1>รถตัดหญ้า</h1>
                              <h2>Lawn mower</h2>
                            </a>
                          </div>
                          <div class=" d-sm-none col-4">
                            <img src="<?=base_url()?>image_new/product4.jpg" alt="kulthorn">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-12 products-catagory-bt pb-product" id="products-catagory-5" >
                    <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                      <div style="padding-left: 15px; padding-right: 15px;">
                        <div class="row">
                          <div class="cate_name_pro col-md-12 col-8">
                            <?php
                            if ($lang == 'TH') { 
                              $cat_name5 = "ปั๊มน้ำ";
                            } else {
                              $cat_name5 = "Pumps";
                            }
                            ?>
                            <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:5_<?=$cat_name5?>">
                              <h1>ปั๊มน้ำ</h1>
                              <h2>Pumps</h2>
                            </a>
                          </div>
                          <div class=" d-sm-none col-4">
                            <img src="<?=base_url()?>image_new/product5.jpg" alt="kulthorn">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-12 products-catagory-bt pb-product" id="products-catagory-6" >
                    <div class="products-catagory-name" style="margin-left: -15px;margin-right: -15px;">
                      <div style="padding-left: 15px; padding-right: 15px;">
                        <div class="row">
                          <div class="cate_name_pro col-md-12 col-8">
                            <?php
                            if ($lang == 'TH') { 
                              $cat_name6 = "สปริงเกอร์";
                            } else {
                              $cat_name6 = "Springer";
                            }
                            ?>
                            <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:5_<?=$cat_name6?>">
                              <h1>สปริงเกอร์</h1>
                              <h2>Springer</h2>
                            </a>
                          </div>
                          <div class=" d-sm-none col-4">
                            <img src="<?=base_url()?>image_new/product6.jpg" alt="kulthorn">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 col-md-8 d-none d-sm-block is-animated">
                <div class=" product-hide-1 active-products animate__backInUp" id="img-active">
                  <img style="" class="img-index-products"  src="<?=base_url()?>image_new/product1.jpg" alt="kulthorn">
                </div>
                <div class="product-hide-2 " id="img-anime-pro-2">
                  <img style="" class="img-index-products" src="<?=base_url()?>image_new/product2.jpg" alt="kulthorn">
                </div>
                <div class="product-hide-3" id="img-anime-pro-3">
                  <img style="" class="img-index-products" src="<?=base_url()?>image_new/product3.jpg" alt="kulthorn">
                </div>
                <div class="product-hide-4" id="img-anime-pro-4">
                  <img style="" class="img-index-products" src="<?=base_url()?>image_new/product4.jpg" alt="kulthorn">
                </div>
                <div class="product-hide-5" id="img-anime-pro-5">
                  <img style="" class="img-index-products" src="<?=base_url()?>image_new/product5.jpg" alt="kulthorn">
                </div>
                <div class="product-hide-6" id="img-anime-pro-6">
                  <img style="" class="img-index-products" src="<?=base_url()?>image_new/product6.jpg" alt="kulthorn">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $("#products-catagory-1").mouseover(function(){
          $(".product-hide-1").css("display", "block");

        });
        $("#products-catagory-1").mouseout(function(){
          $(".product-hide-1").css("display", "none");

        });
        $("#products-catagory-2").mouseover(function(){
          $(".product-hide-2").css("display", "block");
          $('#img-active').removeClass('active-products');
          $('#img-anime-pro-2').addClass('animate__animated animate__backInDown');
          $('#img-anime-pro-2').css('animation-duration', '1s');
          $('#img-anime-pro-2').css('animation-delay', '0s');
        });
        $("#products-catagory-2").mouseout(function(){
          $('#img-anime-pro-2').removeClass('animate__animated animate__backInDown');
          $(".product-hide-2").css("display", "none");
          $('#img-active').addClass('active-products animate__animated animate__backInDown');
          $('#img-active').css('animation-duration', '.8s');
          $('#img-active').css('animation-delay', '0s');

        });
        $("#products-catagory-3").mouseover(function(){
          $(".product-hide-3").css("display", "block");
          $('#img-active').removeClass('active-products');
          $('#img-anime-pro-3').addClass('animate__animated animate__backInRight');
          $('#img-anime-pro-3').css('animation-duration', '1s');
          $('#img-anime-pro-3').css('animation-delay', '0s');

        });
        $("#products-catagory-3").mouseout(function(){
          $('#img-anime-pro-3').removeClass('animate__animated animate__backInRight');
          $(".product-hide-3").css("display", "none");
          $('#img-active').addClass('active-products animate__animated animate__backInDown');
          $('#img-active').css('animation-duration', '.8s');
          $('#img-active').css('animation-delay', '0s');
        });
        $("#products-catagory-4").mouseover(function(){
          $(".product-hide-4").css("display", "block");
          $('#img-active').removeClass('active-products');
          $('#img-anime-pro-4').addClass('animate__animated animate__backInDown');
          $('#img-anime-pro-4').css('animation-duration', '1s');
          $('#img-anime-pro-4').css('animation-delay', '0s');

        });
        $("#products-catagory-4").mouseout(function(){
          $(".product-hide-4").css("display", "none");
          $('#img-active').addClass('active-products animate__animated animate__backInDown');
          $('#img-active').css('animation-duration', '.8s');
          $('#img-active').css('animation-delay', '0s');
          $('#img-anime-pro-2').removeClass('animate__animated animate__backInDown');
        });
        $("#products-catagory-5").mouseover(function(){
          $(".product-hide-5").css("display", "block");
          $('#img-active').removeClass('active-products');
          $('#img-anime-pro-5').addClass('animate__animated animate__backInDown');
          $('#img-anime-pro-5').css('animation-duration', '1s');
          $('#img-anime-pro-5').css('animation-delay', '0s');

        });
        $("#products-catagory-5").mouseout(function(){
          $(".product-hide-5").css("display", "none");
          $('#img-active').addClass('active-products animate__animated animate__backInDown');
          $('#img-active').css('animation-duration', '.8s');
          $('#img-active').css('animation-delay', '0s');
          $('#img-anime-pro-5').removeClass('animate__animated animate__backInDown');
        });
        $("#products-catagory-6").mouseover(function(){
          $(".product-hide-6").css("display", "block");
          $('#img-active').removeClass('active-products');
          $('#img-anime-pro-6').addClass('animate__animated animate__backInDown');
          $('#img-anime-pro-6').css('animation-duration', '1s');
          $('#img-anime-pro-6').css('animation-delay', '0s');

        });
        $("#products-catagory-6").mouseout(function(){
          $(".product-hide-6").css("display", "none");
          $('#img-active').addClass('active-products animate__animated animate__backInDown');
          $('#img-active').css('animation-duration', '.8s');
          $('#img-active').css('animation-delay', '0s');
          $('#img-anime-pro-6').removeClass('animate__animated animate__backInDown');
        });
      });

    </script>
    <style type="text/css">

      .active-products {
        display: block !important;
      }
      .product-hide-1 {
        display: none;
      }
      .product-hide-2 {
        display: none;
      }
      .product-hide-3 {
        display: none;
      }
      .product-hide-4 {
        display: none;
      }
      .product-hide-5 {
        display: none;
      }
      .product-hide-6 {
        display: none;
      }
    </style>
    <div class="section " id="section3">
      <div class="intro fourth">
        <div class="detail-know is-animated">
          <h2><?= lang('Knowledge')?></h2>
          <p><?= lang('Knowledge-Make')?></p>
        </div>
        <div class="container is-animated">
          <div class="row">

            <div class="col-md-12 pb-know">
              <div class="owl-carousel owl-theme owl-carousel-3">
                <? foreach ($blogall as $blog) { ?>
                  <div class="item ">
                    <div class="know ">
                      <a href="<?=base_url($lang.'/Blog/detail/'.$blog->blog_id)?>">


                        <? foreach ($blog->images as $key => $images) { ?>
                          <? if ($key==0) { ?>
                            <?php $i = json_decode($images->resolution); ?>
                            <picture>
                              <?php foreach ($i as $key => $newi) { ?>
                                <source media="(min-width:<?=$key;?>px)" 
                                  srcset="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension?>?<?= rand()?>">
                                <?php } ?>
                                <img class="" data-src="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>?<?= rand()?>" alt="<?=$blog->blog_name?>">
                              </picture>
                            <? } ?>
                          <? } ?>


                        </a>
                        <a href="<?=base_url($lang.'/Blog/detail/'.$blog->blog_id)?>">
                          <h2><?=$blog->blog_name?></h2>
                        </a>

                        <span class="p-news-detail">
                          <p>
                            <?= $blog->blog_desc_short?>
                          </p>
                        </span>
                      </div>
                    </div>

                  <? } ?>




                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <script>
        $(document).ready(function() {
          var owl = $('.owl-carousel-3');
          owl.owlCarousel({
            margin: 10,
            loop: true,
            responsive: {
              0: {
                items: 1
              },
              500: {
                items: 2
              },
              700: {
                items: 2
              },
              1000: {
                items: 4
              }
            }
          })
        })
      </script>


      <div class="section" id="section4">
        <div class="intro fifth">
          <div class="detail-news is-animated">
            <h2><?= lang('News and Activities')?></h3>
              <p><?= lang('News and Activities Make')?></p>
            </div>

            <div class="container is-animated">
              <div class="row">
                <div class="col-md-12 pb-news">

                  <div class="owl-carousel owl-theme owl-carousel-4">

                    <? foreach ($newsall as $news ) { ?>


                      <div class="item">
                        <div class="news">
                          <a href="<?= base_url($lang.'/News/detail/'.$news->news_id)?>">
                            <? foreach ($news->images as $key => $images) { ?>
                              <? if ($key==0) { ?>
                                <?php $i = json_decode($images->resolution); ?>
                                <picture>
                                  <?php foreach ($i as $key => $newi) { ?>
                                    <source media="(min-width:<?=$key;?>px)" 
                                      srcset="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension?>?<?= rand()?>">
                                    <?php } ?>
                                    <img class="" data-src="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>?<?= rand()?>" alt="<?=$news->news_name?>">
                                  </picture>
                                <? } ?>
                              <? } ?>
                            </a>
                            <a href="<?= base_url($lang.'/News/detail/'.$news->news_id)?>">
                              <h2><?= $news->news_name?></h2>
                            </a>
                            <span class="p-news-detail">
                              <?= $news->news_desc_short?>
                            </span>
                          </div>
                        </div>

                      <? } ?>




                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>

          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel-4');
              owl.owlCarousel({
                margin: 10,
                loop: false,
                responsive: {
                  0: {
                    items: 1
                  },
                  400: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  700: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                }
              })
            })
          </script>

          <style type="text/css">
            a.mailto {
              color: #FFF !important;
            }
          </style>

          <div class="section" id="section5">
            <div class="intro sixth">
              <div class="detail-join is-animated">
                <h2><?= lang('join-us')?></h2>
                <p><?= lang('Want Work')?><a href="mailto:info@kulthorn.com" class="mailto" style="color: #FFF !important;">info@kulthorn.com</a></p>
              </div>

              <div class="container ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="top-table is-animated">
                      <table class="table-join"  width="100%">
                        <thead>
                          <tr class="head-join ">
                            <td class="text-position"><h3><?= lang('Job placement')?></h3></td>
                            <td class="text-count"><h3><?= lang('Unit')?></h3></td>
                            <td class="text-detail"><h3><?= lang('Specification')?></h3></td>
                          </tr>


                          <!-- Wait code Loop -->

                          <? foreach ($joinus as $join) { ?>

                            <tr class="job-detail-tr-1 ">
                              <td class="name-job">
                                <h3><?= $join->job_name?></h3>
                              </td>
                              <td class="count-job">
                                <h3><?= $join->unit?></h3>
                              </td>
                              <td class="detail-job">
                                <h3><a href="<?=base_url($lang)?>/Job/detail/<?=$join->job_id?>"><?= lang('Qualification')?></a></h3>
                              </td>
                            </tr>

                          <? } ?>

                      <!-- <tr class="job-detail-tr-2 ">
                        <td class="name-job">
                          <h3>ผู้จัดการโครงการ</h3>
                        </td>
                        <td class="count-job">
                          <h3>2 อัตรา</h3>
                        </td>
                        <td class="detail-job">
                          <h3><a href="<?=base_url()?>Job/detail">คุณสมบัติ</a></h3>
                        </td>
                      </tr> -->
                      <!-- End Loop -->

                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>




      <div class="section" id="section6">
        <div class="intro seventh">
          <div class="detail-contact">
            <h2 class="is-animated">
              <?= lang('contact-us')?>
            </h2>
            <p class="p-contact is-animated">
              <?= lang('contact-detail')?>
            </p>

            <div class="container container-contact-1366 pt-4">
              <div class="row">
                <div class="col-12  col-lg-6 is-animated ">
                  <iframe class="map-te" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1918.8728020035055!2d100.51097352290495!3d13.756599299480568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2993f1660da53%3A0x3875632c3e996850!2z4LiB4Li44Lil4LiY4Lij!5e0!3m2!1sth!2sth!4v1616649400590!5m2!1sth!2sth" style="border:0;"  allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-12  col-lg-6 is-animated contact-1366">
                  <div class="text-contact">
                    <h2>
                      <?=lang('Kulthorn Co.,Ltd')?>
                    </h2>
                    <ul class="ul-contact">
                      <li class="address-text">
                       237-237/1-4 <?=lang('Lan Luang Road')?> <?=lang('Wat Sommanat Sub-District')?> เขตป้อมปราบศัตรูพ่าย กรุงเทพมหานคร 10100
                     </li>
                     <li>
                      <h3 style="color: #FFF;"><?= lang('Phone number')?> : &nbsp;</h3>

                      <a href="tel:+662-282-2151">
                        +662-282-2151
                      </a>

                    </li>
                    <li>
                      <h3 style="color: #FFF;"><?= lang('e-mail')?> : &nbsp;</h3>bkksales@kulthorn.com , kcsales@kulthorn.co.th 
                    </li>
                  </ul>
                  <hr class="hr-1366" style="border :2px dashed #FFF;">


                </div>
                <h2 class="text-form"><?= lang('Form-Contact')?></h2><br>
                <form class="cons-contact-form" id="frm-contact" name="frm-contact" method="post" action="<?=base_url("Contactus/sendMail")?>" >
                  <?php if($this->session->flashdata('errors')){ ?>  
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4><i class="icon fa fa-ban"></i> มีข้อผิดพลาด</h4>
                      <small><?=$this->session->flashdata('errors') ?></small>
                    </div>
                  <?php } ?> 
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                     <input name="name" class="input-contact" placeholder="<?= lang('name-contact')?>" type="text" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px;  border-radius: 3px;">
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12">
                    <input name="lastname" class="input-contact" placeholder="<?= lang('lastname-contact')?>" type="text" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px;  border-radius: 3px; ">
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                   <input name="tel" class="input-contact"  placeholder="<?= lang('Phone number')?>" type="tel" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px; border-radius: 3px;">
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                  <input name="email" class="input-contact" placeholder="<?= lang('e-mail')?>" type="email" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px;  border-radius: 3px;">
                </div>
                <div class="col-md-12">
                  <textarea name="messages" class="input-contact" placeholder="<?= lang('detail-contact')?>" type="textarea" style="background: #ffffff;border: 1px solid #ebebeb; min-height: 50px;  border-radius: 3px;"></textarea>
                </div>

                <div class="col-md-12">
                  <?php echo $widget;?>
                  <?php echo $script;?>
                  <button class="btn-sent-email mt-3" type="submit" ><?=lang('sent-message')?></button>
                </div>


              </div>
            
            </form>

          </div>

        </div>
      </div>



    </div>

    <footer>
      <div class="col-md-12 copyright">
        <div class="detail-copy">
          © Copyright <?echo date('Y')?>. All Rights Reserved.
        </div>
      </div>
    </footer>
  </div>
</div>
</div>


<!-- <script>
$(document).ready(function(){
  $(".test-3").click(function(){
    $("#section0,#section2,#section3,#section4,#section5,#section6").fadeOut();
    $("#section1").fadeIn();
  });
});
</script> -->



<script src="<?=base_url()?>assets/aos-master/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/fullpage/scrolloverflow.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/fullpage/fullpage.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/fullpage/examples.js"></script>
<script src="<?=base_url()?>assets/owlcarousel/highlight.js"></script>
<script src="<?=base_url()?>assets/owlcarousel/app.js"></script>
<script src="<?=base_url()?>assets/js/popper.js"></script>

<script type="text/javascript">
  document.documentElement.style.setProperty('--animate-duration', '.5s');
</script>

<!-- <script src="<?=base_url()?>assets/aos-master/dist/aos.js"></script>
<script>
  AOS.init();
</script> -->


<!-- <script type="text/javascript">
  var myFullpage = new fullpage('#fullpage', {
    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage', 'sixthPage', 'seventhPage'],
    navigation: true,
    verticalCentered: true,
    slidesNavigation: true,
    // navigationTooltips: ['01.กุลธร', '02.เกี่ยวกับเรา', '03.สินค้าและบริการ', '04.เกร็ดความรู้', '05.ข่าวสารและกิจกรรม', '06.ร่วมงานกับเรา', '07.ติดต่อเรา'],
    showActiveTooltip: true,
    menu: '#menu',
    scrollOverflow: true
  });
</script> -->
<script type="text/javascript">
  var myFullpage = new fullpage('#fullpage', {
    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage', 'sixthPage', 'seventhPage'],
    navigation: true,
    verticalCentered: true,
    slidesNavigation: true,
    // navigationTooltips: ['01.กุลธร', '02.เกี่ยวกับเรา', '03.สินค้าและบริการ', '04.เกร็ดความรู้', '05.ข่าวสารและกิจกรรม', '06.ร่วมงานกับเรา', '07.ติดต่อเรา'],
    showActiveTooltip: true,
    menu: '#menu',
    scrollOverflow: true,


    onLeave: function(origin, destination, direction) {
     // console.log(origin.index);
     // console.log(destination.index);
     // console.log(direction);

     var $isAnimatedFirst = $('.firstPage .is-animated'),
     $isAnimatedSecond = $('.second .is-animated'),
     // $isAnimatedSecondSingle = $('.second .is-animated__single'),
     $isAnimatedThird = $('.third .is-animated'),
     $isAnimatedFourth = $('.fourth .is-animated'),
     $isAnimatedFifth = $('.fifth .is-animated'),
     $isAnimatedSixth = $('.sixth .is-animated');
     $isAnimatedSeventh = $('.seventh .is-animated');

     // Chang color header
     if ( destination.index == 2) {        
      $('#navbarNav').addClass('chcolor');
      $('#changlang').addClass('changlang-color');
      $('#row-header').addClass('border-header');
      $('.nav-color-1').addClass('before-color');
      $('.nav-color-2').addClass('before-color');
      $('.nav-color-3').addClass('before-color');
      $('.nav-color-4').addClass('before-color');
      $('.nav-color-5').addClass('before-color');
      $('.nav-color-6').addClass('before-color');
      $('.nav-color-7').addClass('before-color');
      $('.nav-color-8').addClass('before-color');

      $('.nav-color-1').removeClass('nav-1');
      $('.nav-color-2').removeClass('nav-2');
      $('.nav-color-3').removeClass('nav-3');
      $('.nav-color-4').removeClass('nav-4');
      $('.nav-color-5').removeClass('nav-5');
      $('.nav-color-6').removeClass('nav-6');
      $('.nav-color-7').removeClass('nav-7');
      $('.nav-color-8').removeClass('nav-8');

      $('.button-color').css('color','#000');
    }

    else if (destination.index != 2) {
     $('#navbarNav').removeClass('chcolor');
     $('#changlang').removeClass('changlang-color');
     $('#row-header').removeClass('border-header');
     
     $('.nav-color-1').removeClass('before-color');
     $('.nav-color-2').removeClass('before-color');
     $('.nav-color-3').removeClass('before-color');
     $('.nav-color-4').removeClass('before-color');
     $('.nav-color-5').removeClass('before-color');
     $('.nav-color-6').removeClass('before-color');
     $('.nav-color-7').removeClass('before-color');
     $('.nav-color-8').removeClass('before-color');

     $('.nav-color-1').addClass('nav-1');
     $('.nav-color-2').addClass('nav-2');
     $('.nav-color-3').addClass('nav-3');
     $('.nav-color-4').addClass('nav-4');
     $('.nav-color-5').addClass('nav-5');
     $('.nav-color-6').addClass('nav-6');
     $('.nav-color-7').addClass('nav-7');
     $('.nav-color-8').addClass('nav-8');

     $('.button-color').css('color','#FFF');
   } else {

   }




   if( (origin.index == 1 || origin.index == 2 ||  origin.index == 3 || origin.index == 4 || origin.index == 5  || origin.index == 6 ) && destination.index == 0 ) { 

    $isAnimatedFirst.eq(0).addClass('animate__animated animate__flipInX');
    $isAnimatedFirst.eq(1).addClass('animate__animated animate__zoomInUp');
    $isAnimatedFirst.eq(2).addClass('animate__animated animate__flipInX');
    $isAnimatedFirst.eq(3).addClass('animate__animated animate__fadeInUp');
    $isAnimatedFirst.eq(4).addClass('animate__animated animate__fadeInRight');
    $isAnimatedFirst.eq(5).addClass('animate__animated animate__flipInX');
    $isAnimatedFirst.eq(6).addClass('animate__animated animate__zoomInUp');
    $isAnimatedFirst.eq(7).addClass('animate__animated animate__fadeInUp');
    $('div.x').css('background-color','#FFF');
    $('div.y').css('background-color','#FFF');
    $('div.z').css('background-color','#FFF');

    $isAnimatedFirst.css('animation-delay', '0s');
    $isAnimatedFirst.css('animation-duration', '1.5s');


    $isAnimatedSecond.removeClass('animate__animated animate__backInDown animate__animated animate__backInDown');
    $isAnimatedThird.removeClass('animate__animated animate__backInDown animate__backInRight animate__backInLeft animate__backInUp');
    $isAnimatedFourth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedFifth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedSixth.removeClass('animate__animated animate__backInDown animate__backInDown');
    $isAnimatedSeventh.removeClass('animate__animated animate__backInDown');
  }

  else if ( (origin.index == 0 || origin.index == 2 ||  origin.index == 3 || origin.index == 4 || origin.index == 5  || origin.index == 6 ) && destination.index == 1  ) {
    $isAnimatedFirst.removeClass('animate__animated animate__flipInX animate__zoomInUp animate__flipInX animate__fadeInUp animate__fadeInRight');
    $isAnimatedThird.removeClass('animate__animated animate__backInDown animate__backInRight animate__backInLeft animate__backInUp');
    $isAnimatedFourth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedFifth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedSixth.removeClass('animate__animated animate__backInDown animate__backInDown');
    $isAnimatedSeventh.removeClass('animate__animated animate__backInDown');
    $('div.x').css('background-color','#FFF');
    $('div.y').css('background-color','#FFF');
    $('div.z').css('background-color','#FFF');

    $isAnimatedSecond.addClass('animate__animated animate__backInDown');

    $isAnimatedSecond.eq(0).addClass('animate__animated animate__backInDown');
    $isAnimatedSecond.eq(0).css('animation-delay', '0s');
    $isAnimatedSecond.eq(0).css('animation-duration', '1.5s');

    $isAnimatedSecond.eq(1).addClass('animate__animated animate__backInDown');
    $isAnimatedSecond.eq(1).css('animation-delay', '0s');
    $isAnimatedSecond.eq(1).css('animation-duration', '1.5s');

    $isAnimatedSecond.eq(2).addClass('animate__animated animate__backInDown');
    $isAnimatedSecond.eq(2).css('animation-delay', '0s');
    $isAnimatedSecond.eq(2).css('animation-duration', '1.5s');

    $isAnimatedSecond.eq(3).addClass('animate__animated animate__backInDown');
    $isAnimatedSecond.eq(3).css('animation-delay', '.5s');
    $isAnimatedSecond.eq(3).css('animation-duration', '1.5s');

    $isAnimatedSecond.eq(4).addClass('animate__animated animate__backInDown');
    $isAnimatedSecond.eq(4).css('animation-delay', '0s');
    $isAnimatedSecond.eq(4).css('animation-duration', '1.5s');

    $isAnimatedSecond.eq(5).addClass('animate__animated animate__backInDown');
    $isAnimatedSecond.eq(5).css('animation-delay', '.3s');
    $isAnimatedSecond.eq(5).css('animation-duration', '1.5s');

    $isAnimatedSecond.eq(6).addClass('animate__animated animate__backInDown');
    $isAnimatedSecond.eq(6).css('animation-delay', '0.5s');
    $isAnimatedSecond.eq(6).css('animation-duration', '1.5s');

  }

  else if ( (origin.index == 0 || origin.index == 1 || origin.index == 3 || origin.index == 4 || origin.index == 5  || origin.index == 6) && destination.index == 2) {

    $isAnimatedFirst.removeClass('animate__animated animate__flipInX animate__zoomInUp animate__flipInX animate__fadeInUp animate__fadeInRight');
    $isAnimatedSecond.removeClass('animated animate__animated animate__backInDown');
    $isAnimatedFourth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedFifth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedSixth.removeClass('animate__animated animate__backInDown animate__backInDown');
    $isAnimatedSeventh.removeClass('animate__animated animate__backInDown');
    $('div.x').css('background-color','#000');
    $('div.y').css('background-color','#000');
    $('div.z').css('background-color','#000');


    $isAnimatedThird.eq(0).addClass('animate__animated animate__backInDown');
    $isAnimatedThird.eq(0).css('animation-delay', '.1s');
    $isAnimatedThird.eq(0).css('animation-duration', '1.9s');
    $isAnimatedThird.eq(1).addClass('animate__animated animate__backInLeft');
    $isAnimatedThird.eq(1).css('animation-delay', '.1s');
    $isAnimatedThird.eq(1).css('animation-duration', '1.9s');
    $isAnimatedThird.eq(2).addClass('animate__animated animate__backInUp');
    $isAnimatedThird.eq(2).css('animation-delay', '.1s');
    $isAnimatedThird.eq(2).css('animation-duration', '1.9s');


  }
  else if ( (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 4 || origin.index == 5  || origin.index == 6) && destination.index == 3 ) {
    $isAnimatedFirst.removeClass('animate__animated animate__flipInX animate__zoomInUp animate__flipInX animate__fadeInUp animate__fadeInRight');
    $isAnimatedSecond.removeClass('animated animate__animated animate__backInDown');
    $isAnimatedThird.removeClass('animate__animated animate__backInDown animate__backInRight animate__backInLeft animate__backInUp');
    $isAnimatedFifth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedSixth.removeClass('animate__animated animate__backInDown animate__backInDown');
    $isAnimatedSeventh.removeClass('animate__animated animate__backInDown');
    $('div.x').css('background-color','#FFF');
    $('div.y').css('background-color','#FFF');
    $('div.z').css('background-color','#FFF');

    $isAnimatedFourth.eq(0).addClass('animate__animated animate__backInDown');
    $isAnimatedFourth.eq(1).addClass('animate__animated animate__backInUp');


    $isAnimatedFourth.eq(0).css('animation-delay', '.1s');
    $isAnimatedFourth.eq(0).css('animation-duration', '1.8s');
    $isAnimatedFourth.eq(1).css('animation-delay', '.3s');
    $isAnimatedFourth.eq(1).css('animation-duration', '1.8s');

  }
  else if ( (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 5  || origin.index == 6) && destination.index == 4 ) {
    $isAnimatedFirst.removeClass('animate__animated animate__flipInX animate__zoomInUp animate__flipInX animate__fadeInUp animate__fadeInRight');
    $isAnimatedSecond.removeClass('animated animate__animated animate__backInDown');
    $isAnimatedThird.removeClass('animate__animated animate__backInDown animate__backInRight animate__backInLeft animate__backInUp');
    $isAnimatedFourth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedSixth.removeClass('animate__animated animate__backInDown animate__backInLeft');
    $isAnimatedSeventh.removeClass('animate__animated animate__backInDown');
    $('div.x').css('background-color','#FFF');
    $('div.y').css('background-color','#FFF');
    $('div.z').css('background-color','#FFF');

    $isAnimatedFifth.eq(0).addClass('animate__animated animate__backInDown');
    $isAnimatedFifth.eq(1).addClass('animate__animated animate__backInUp');

    $isAnimatedFifth.eq(0).css('animation-delay', '.1s');
    $isAnimatedFifth.eq(0).css('animation-duration', '1.8s');
    $isAnimatedFifth.eq(1).css('animation-delay', '.3s');
    $isAnimatedFifth.eq(1).css('animation-duration', '1.8s');

  }
  else if ( (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 6 ) && destination.index == 5 ) {
    $isAnimatedFirst.removeClass('animate__animated animate__flipInX animate__zoomInUp animate__flipInX animate__fadeInUp animate__fadeInRight');
    $isAnimatedSecond.removeClass('animated animate__animated animate__backInDown');
    $isAnimatedThird.removeClass('animate__animated animate__backInDown animate__backInRight animate__backInLeft animate__backInUp');
    $isAnimatedFourth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedFifth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedSeventh.removeClass('animate__animated animate__backInDown');
    $('div.x').css('background-color','#FFF');
    $('div.y').css('background-color','#FFF');
    $('div.z').css('background-color','#FFF');

    $isAnimatedSixth.eq(0).addClass('animate__animated animate__backInDown');
    $isAnimatedSixth.eq(1).addClass('animate__animated animate__backInLeft');

    $isAnimatedSixth.css('animation-delay', '.1s');
    $isAnimatedSixth.css('animation-duration', '1.8s');
  }
  else if ( (origin.index == 0 || origin.index == 1 || origin.index == 2 || origin.index == 3 || origin.index == 4 || origin.index == 5 ) && destination.index == 6 ) {
    $isAnimatedFirst.removeClass('animate__animated animate__flipInX animate__zoomInUp animate__flipInX animate__fadeInUp animate__fadeInRight');
    $isAnimatedSecond.removeClass('animated animate__animated animate__backInDown');
    $isAnimatedThird.removeClass('animate__animated animate__backInDown animate__backInRight animate__backInLeft animate__backInUp');
    $isAnimatedFourth.removeClass('animate__animated animate__backInUp animate__backInDown');
    $isAnimatedFifth.removeClass('animate__animated animate__backInUp animate__backInDown ');
    $isAnimatedSixth.removeClass('animate__animated animate__backInDown animate__backInLeft');
    $('div.x').css('background-color','#FFF');
    $('div.y').css('background-color','#FFF');
    $('div.z').css('background-color','#FFF');

    $isAnimatedSeventh.addClass('animate__animated animate__backInDown');

    $isAnimatedSeventh.css('animation-delay', '.1s');
    $isAnimatedSeventh.css('animation-duration', '1.8s');
  }


},


afterLoad    : function(origin, destination, direction){
  var loadedSection = this;

    //using anchorLink

    
  }

});





</script>
</body>
</html>