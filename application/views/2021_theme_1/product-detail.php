<!DOCTYPE html>
<html lang="th">
<? $this->load->view('2021_theme_1/inc/header-meta') ?>
<body>
  <? $this->load->view('2021_theme_1/inc/header1/header3') ?>
  <div class="container header-top" >
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item color-menu"><a href="<?=base_url($this->session->userdata('site_lang_name'))?>"><?= lang('Home')?></a></li>
            <li class="breadcrumb-item color-menu" aria-current="page">
              <a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Products"><?= lang('Products And Services')?></a>
            </li>
            <?
            if (isset($product->cat_name)) {
              $cname = $product->cat_name;
              $cname = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$cname);
                # code...
              ?>
              <li class="breadcrumb-item color-menu" aria-current="page">
                <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:<?=$product->cat_id?>_<?=$cname?>"><?=$product->cat_name?></a>
              </li>
            <? } ?>
            
            <li class="breadcrumb-item  color-menu-active active" aria-current="page"><?= $product->pro_name ?></li>
          </ol>
        </nav>

      </div>
      
    </div>

  </div><!--/////breadcrumb -->

  <!-- Button Compare -->
  <? $this->load->view('2021_theme_1/compare') ?>



  <div class="container mt-3 all-product" >
    <div class="row">
      <div class="col-lg-5">
        <div class="" >
          <!-- <img src="<?= base_url()?>assets/img/product-1.png" style="width: 100%;" alt="kulthorn"> -->


          <? foreach ($product->images as $key => $images) { ?>
            <? if ($key==0) { ?>
              <?php $i = json_decode($images->resolution); ?>
              <picture>
                <?php foreach ($i as $key => $newi) { ?>
                  <source media="(min-width:<?=$key;?>px)" srcset="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>">
                  <?php } ?>
                  <img class="lazy img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" data-src="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$images->show_admin?>.<?=$images->extension ?>" style="width: 100%;" alt="<?=$product->pro_name?>">
                </picture>
              <? } ?>
            <? } ?>


          </div>
        </div>
        <div class="col-lg-7">
          <div class="detail-product-pro" >
            <h3>
              <?=$product->pro_name?>
            </h3>
            <?
            if (isset($product->cat_name)) {
              $cname = $product->cat_name;
              $cname = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$cname);
                # code...
              ?>
              <div class="breadcrumb-detail-pro">
                <div class="breadcrumb-detail menu-pro-detail"><?=lang('Category')?>&nbsp;</div>
                <div class="category-menu-detail">&nbsp;<a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:<?=$product->cat_id?>_<?=$cname?>"><?=$product->cat_name?></a></div>
              </div>
            <? } ?>

            <?
            if (isset($product->brand_name)) {
              $bname = $product->brand_name;
              $bname = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$bname);
                # code...
              ?>
              <div class="breadcrumb-detail-pro">
                <div class="breadcrumb-detail menu-pro-detail"><?= lang('brand-product')?>&nbsp;</div>
                <div class="category-menu-detail">&nbsp;
                  <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/bid:<?=$product->brand_id?>_<?=$bname?>">
                    <?=$product->brand_name?>
                  </a>
                </div>
              </div>
            <? } ?>

            
            <? 
            $lang = $this->session->userdata('site_lang_name');
            $share = base_url().$lang.'/Products/detail/'.$product->pro_id ?>
            <ul class="ul-share">
              <li>
                <div class="breadcrumb-detail menu-pro-detail"><?=lang('Share')?>&nbsp;</div>
              </li>
              <li>
                <div class="share-face">
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $share?>">
                    <i class="fab fa-facebook-square face-color"></i>&nbsp;&nbsp;<span>Facebook</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="share-line">
                  <a href="https://lineit.line.me/share/ui?url=<?= $share?>">
                    <i class="fab fa-line line-color"></i>&nbsp;&nbsp;<span>Line</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="share-twitter">
                  <a href="https://twitter.com/share?url=<?= $share?>">
                    <i class="fab fa-twitter line-color"></i>&nbsp;&nbsp;<span>Tweet</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="share-mail">
                  <a href="mailto:?subject=I wanted you to see this site&body=Check out this site <?= $share?>">
                    <i class="fas fa-envelope mail-color"></i>&nbsp;&nbsp;<span>Send</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="share-print">
                  <a href="#" onClick="window.print(); return false;">
                    <i class="fas fa-print print-color"></i>&nbsp;&nbsp;<span>Print</span>
                  </a>
                </div>
              </li>
            </ul>



            <div>
              <img  class="hr-product" src="<?=base_url()?>assets/img/line.png" alt="kulthorn">
            </div>

            <div class="tags-pro">
              <div class="breadcrumb-detail menu-pro-detail"><?=lang('Tags')?>&nbsp;</div>
              <div class="scrollbar" id="tags">
                &nbsp;
                <?  foreach ($tag as $tags) { ?>
                  <div class="tags-a-new">
                    <a href="<?= base_url($lang)?>/Products?tags=<?= $tags->tags_name?>">
                      <?= $tags->tags_name?>
                    </a>
                  </div>
                <? } ?>
              </div>

            </div>

            <hr>

            <div class="breadcrumb-detail-pro">
              <div class="breadcrumb-detail menu-pro-detail"><?=lang('Specification')?>&nbsp;</div>
            </div>
            <div class="about-product">
              <p><?= $product->pro_desc_short?></p>
            </div>

            <div class="about-tools" >
              <div class="quotation" >
                <a href="<?= base_url($lang.'/Favorite/index/')?><?=$product->pro_id?>">
                  <i class="fas fa-th-list list-color"></i>
                  &nbsp;
                  <span><?=lang('Quotation')?></span>
                </a>
              </div>

              <div class="compare-product">
                <a href="javascript:addquatation(<?=$product->pro_id ?>)">
                  <i class="fas fa-sync-alt color-columns"></i>
                  <span><?=lang('Compare')?></span>
                </a>
              </div>

              <div class="contact-we">
                <div class="dropdown show ">
                  <a class="btn btn-secondary dropdown-toggle button-contact" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-comments color-comment"></i>&nbsp;<?=lang('contact-us')?>
                  </a>

                  <div class="dropdown-menu drop-contact" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item drop-new" href="<?= $companyData->line_id?>"><?=lang('add-line')?></a>
                    <a class="dropdown-item drop-new" href="tel:<?=$companyData->com_phone?>"><?=lang('Phone')?></a>
                    <a class="dropdown-item drop-new" href="<?= $companyData->facebook_fanpage_id?>"><?=lang('Facebook')?></a>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5" >
      <div class="row">
        <div class="col-lg-12">
          <div class="foot-detail">
            <div class="nav">
              <a href="#" >
                <h3 class="detail-head-pro-about" style="">
                  <?=lang('Specification')?>
                </h3>
              </a>
            </div>

            <hr style="margin-top: -2px;">

            <div class="more-detail">
              <?= $product->pro_desc_long?>
            </div>

            <div class="nav">
              <a href="#" style="cursor: normal; ">
                <h3 class="head-pro-about" >
                  <?=lang('Related products')?>
                </h3>
              </a>
            </div>
            <hr style="margin-top: -2px;">

            <div class= "owl-carousel owl-theme owl-carousel-pro-about">

              <? foreach ($realatedproducts as $realated) { ?>
                <div class="item">           
                  <div class ="picture-product">
                    <a href="<?= base_url($this->session->userdata('site_lang_name'))?>/Products/detail/<?=$realated->pro_id?>">
                     <? foreach ($realated->images as $key => $images) { ?>
                      <? if ($key==0) { ?>
                        <?php $i = json_decode($images->resolution); ?>
                        <picture>
                          <?php foreach ($i as $key => $newi) { ?>
                            <source media="(min-width:<?=$key;?>px)" srcset="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>">
                            <?php } ?>
                            <img class="lazy img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" data-src="<?=base_url()?>/images/website/<?=$images->filename ?>_<?=$images->show_admin?>.<?=$images->extension ?>" alt="<?=$product->pro_name?>">
                          </picture>
                        <? } ?>
                      <? } ?>
                    </a>
                  </div>
                  <div class="detail-product">
                    <a href="<?= base_url($this->session->userdata('site_lang_name'))?>/Products/detail/<?=$realated->pro_id?>">
                      <h3 class="name-pro-about" style="">
                        <?=$realated->pro_name?>
                      </h3>
                    </a>
                    <p style="color: #666666;">
                     <?=$realated->pro_desc_short?>
                   </p>
                 </div>
               </div>
             <? } ?>
           </div>


         </div>
       </div>
     </div>
   </div>

 </div>

 <!-- <div class="overlay-img-3 pro-about"><h3>            ชมรายละเอียดสินค้า                  </h3>
 </div> -->
 <?
 $this->load->view('2021_theme_1/inc/footer1/footer2')
 ?>




 <script>
  $(document).ready(function() {
    var owl = $('.owl-carousel-pro-about');
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


<script src="<?=base_url()?>assets/aos-master/dist/aos.js"></script>
<script>
  AOS.init();
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

<script type="text/javascript">
  function addquatation(pro_id) {
    $.get('<?=base_url("Favorite/addajax?pro_id=")?>'+pro_id,function(data){
      if(data.indexOf('ok')>-1){
        alert('add complete');
        window.location.reload();
      }else{
        alert('ไม่สามารถเปรียบเทียบได้ จำนวนที่สามารถเปรียบเทียบได้สูงสุด 4 รายการ');
        window.location.reload();
        
      }
    } );
  }
</script>
</body>
</html>