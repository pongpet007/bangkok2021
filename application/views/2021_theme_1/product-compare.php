<!DOCTYPE html>
<html lang="th">
    <? $this->load->view('2021_theme_1/inc/header-meta') ?>
    <body>
        <? $this->load->view('2021_theme_1/inc/header1/header3') ?>
        <div class="container header-top">
            <div class="row">
                <div class="col-lg-7 col-sm-6" >
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item color-menu"><a href="<?=base_url()?>"><?=lang('Home') ?></a></li>
                            <li class="breadcrumb-item color-menu" aria-current="page"><a href="<?= base_url()?><?=$this->session->userdata('site_lang_name')?>/Products"><?=lang('Products And Services') ?></a></li>
                            <li class="breadcrumb-item  color-menu-active active" aria-current="page"><?=lang('Compare Products') ?></li>
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
        <div class="container mt-3" style="margin-bottom: 150px;">
            <div class="row">

                <?php foreach ($compares as $products) { ?>
                    <div class="col-lg-3 col-6 " style="animation-duration: 1.8s">
                        <div class ="picture-product">
                            <a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Products/detail/<?=$products->pro_id?>">
                                <? foreach ($products->images as $key => $images) { ?>
                                <? if ($key==0) { ?>
                                  <?php $i = json_decode($images->resolution); ?>
                                  <picture>
                                    <?php foreach ($i as $key => $newi) { ?>
                                      <source media="(min-width:<?=$key;?>px)" srcset="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>">
                                      <?php } ?>
                                      <img class="lazy img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" data-src="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$images->show_admin?>.<?=$images->extension ?>" alt="<?=$products->pro_name?>">
                                    </picture>
                                  <? } ?>
                                <? } ?>
                            </a>
                            <div class="overlay-img-4 product-compare">
                                <h5 class="fs-1">
                                    <a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Products/detail/<?=$products->pro_id?>" style="color: #FFFFFF;"><?=lang('View Product Details') ?></a>
                                </h5>
                            </div>
                        </div>
                        <div class="compare-product-new">
                            <h3>
                                <a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Products/detail/<?=$products->pro_id?>" style="color: #000000;"><?=$products->pro_name?></a>
                            </h3>
                            <p>
                                <?=$products->cat_name?>
                            </p>
                            <h4>
                                <?=lang('Details') ?> :
                            </h4>
                            <p class="compare-detail">
                                <?=$products->pro_desc_short?>
                            </p>
                        </div>
                        <ul class="compare-detail-pro">
                            <li>
                                <div class="quotation-compare">
                                    <a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Favorite/index/<?=$products->pro_id?>">
                                    <i class="fas fa-th-list list-color"></i>
                                    &nbsp;
                                    <span><?=lang('Request Quotation') ?></span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="delete-compare">
                                    <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/Favorite/remove/<?=$products->rowid?>">
                                    <i class="fas fa-times-circle circle-color"></i>&nbsp;&nbsp;
                                    <span>
                                    <?=lang('Delete') ?>
                                    </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
                    

            </div>
        </div>
        <?
            $this->load->view('2021_theme_1/inc/footer1/footer2')
            ?>
        <script type="text/javascript">
            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
        <script src="<?=base_url()?>assets/aos-master/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>