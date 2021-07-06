<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/docs.theme.min.css"> -->

  <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets_2021_theme_1/vendor/fontawesome-free/css/all.min.css">
  

  <!-- Owl Stylesheets -->
  
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/owl.theme.default.min.css">
  <script src="<?=base_url()?>assets_2021_theme_1/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/owlcarousel/owl.carousel.js"></script>

  <link href="<?=base_url()?>assets/aos-master/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <title><?=$meta_title?></title>
  <meta name="description" content="<?=$meta_title?>" />
  <meta name="keywords"  content="<?=$meta_keyword?>" />


  <?php 
  $this->load->view('2021_theme_1/inc/css-peck');
  ?>
  <?php 
  $this->load->view('2021_theme_1/inc/css-products');
  ?>
  <?php $this->load->view('2021_theme_1/inc/css'); ?>
  
</head>
<body>
  <?
  $this->load->view('2021_theme_1/inc/header1/header3')
  ?>
  <? $lang = $this->session->userdata('site_lang_name')?>
  <div class="container header-top">
    <div class="row">
      <div class="col-lg-7 col-sm-6 animate__animated animate__slideInLeft">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item color-menu"><a href="<?= base_urL()?>"><?=lang('Home')?></a></li>
            <li class="breadcrumb-item color-menu" aria-current="page"><a href="<?= base_url($lang.'/Home#sixthPage') ?>"><?=lang('join-us')?></a></li>
            <li class="breadcrumb-item  color-menu-active active" aria-current="page"><?= $job->job_name ?></li>
          </ol>
        </nav>

      </div>
      <div class="search-product col-lg-5 col-sm-6 pt-2 pb-1">
      </div>
    </div>
  </div><!--/////breadcrumb -->

  <!-- Button Compare -->
  <? $this->load->view('2021_theme_1/compare') ?>



  <div class="container">
    <div class="row">
      <div class="col-lg-8 animate__animated animate__fadeInUp" style="animation-duration: 1.5s;"> 
        <h2><?= $job->job_name ?></h2>
        <ul class="ul-knowledge ">
          <li>
            <?=lang('By')?> : <span style="color: #808080;">ADMIN</span>
          </li>
          <li>
            <?=lang('Posted date')?> : <span style="color: #808080;"><?= substr($job->cdate,0,10);?></span>
          </li>
          <li>
            <?=lang('Number Of Visitors')?> : <span style="color: #808080;">1200 <?=lang('People')?></span>
          </li>
        </ul>
        <div class="img-knowledge">
          <!-- <img src="<?=base_url()?>assets/img/news-detail.png"> -->
        </div>
        
        <div class="detail-knowledge">

          <?= $job->job_desc?>
          
        </div>
        <? 
        $userinputnew = base_url().$lang.'/Job/detail/'.$job->job_id ;
        $share = urlencode($userinputnew);

        ?>
        <ul class="ul-share ul-knowledge-share">
          <li>
            <div class="breadcrumb-detail menu-pro-detail"><?=lang('Share')?>&nbsp;</div>
          </li>
          <li>
            <div class="share-face">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $share?>">
                <i class="fab fa-facebook-square face-color"></i>&nbsp;&nbsp;<span><?=lang('Share')?></span>
              </a>
            </div>
          </li>
          <li>
            <div class="share-line">
              <a href="https://lineit.line.me/share/ui?url=<?= $share?>">
                <i class="fab fa-line line-color"></i>&nbsp;&nbsp;<span><?=lang('Share')?></span>
              </a>
            </div>
          </li>
          <li>
            <div class="share-twitter">
              <a href="https://twitter.com/share?url=<?= $share?>">
                <i class="fab fa-twitter line-color"></i>&nbsp;&nbsp;<span><?=lang('Tweet')?></span>
              </a>
            </div>
          </li>
          <li>
            <div class="share-mail">
              <a href="mailto:?subject=I wanted you to see this site&body=Check out this site <?= $share?>">
                <i class="fas fa-envelope mail-color"></i>&nbsp;&nbsp;<span><?=lang('Sent Mail')?></span>
              </a>
            </div>
          </li>
          <li>
            <div class="share-print">
              <a href="#" onClick="window.print(); return false;">
                <i class="fas fa-print print-color"></i>&nbsp;&nbsp;<span><?=lang('Print')?></span>
              </a>
            </div>
          </li>
        </ul>

        <h3 style="font-weight: bold; "><?=lang('Related Blog')?></h3 style="font-weight: bold; ">
          <div class="line-know-about"></div>
          <div class="container">
            <div class="row">

              <div class="owl-carousel owl-theme owl-carousel-job-about">


                <? foreach ($jobrelate as $relate) { ?>



                  <div class="item">
                    <div class="knowledge-about">
                      <a href="<?=base_url($lang.'/Job/detail/'.$relate->job_id)?>">
                        <img class="news-detail-img" src="<?=base_url()?>assets/img/knowledge-detail-1.png">
                      </a>
                      <a href="<?=base_url($lang.'/Job/detail/'.$relate->job_id)?>">
                        <h3>
                          <?= $relate->job_name?>
                        </h3>
                      </a>
                      <?= $relate->job_desc?>
                    </div>
                  </div>

                <? } ?>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-sm-none d-md-block " data-aos="fade-down" data-aos-duration="1000"> 
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active tab-select" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                <?=lang('Popular News')?>
              </a>
            </li>

          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="container">
                <div class="row border-tab">

                  <? foreach ($blogall as $blog ) { ?>

                    <div class="col-lg-12 margin-top">
                      <div class="row">
                        <div class="col-md-4">
                          <a href="<?=base_url($lang.'/Blog/detail/'.$blog->blog_id)?>" >

                           <? foreach ($blog->images as $key => $images) { ?>
                            <? if ($key==0) { ?>
                              <?php $i = json_decode($images->resolution); ?>
                              <picture>
                                <?php foreach ($i as $key => $newi) { ?>
                                  <source media="(min-width:<?=$key;?>px)" 
                                    srcset="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension?>?<?= rand()?>">
                                  <?php } ?>
                                  <img class="" data-src="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>?<?= rand()?>" alt="<?=$blog->blog_name?>" style="width:100px;">
                                </picture>
                              <? } ?>
                            <? } ?>


                          </a>
                        </div>
                        <div class="col-md-8">
                          <div class="knowledge-advice">
                            <a href="<?=base_url($lang.'/Blog/detail/'.$blog->blog_id)?>">

                              <h5>
                                <?=$blog->blog_name?>
                              </h5>
                            </a>
                            <div class="date-knowledge">
                              <span><?=lang('Posted date')?> : </span><span><?= substr( $blog->cdate,0,10)?></span>
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
                  <?=lang('Follow')?> Facebook
                </h5>
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
        var owl = $('.owl-carousel-job-about');
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