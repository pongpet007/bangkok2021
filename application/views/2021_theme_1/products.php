<!DOCTYPE html>
<html lang="th">
    <? $this->load->view('2021_theme_1/inc/header-meta') ?>
    <body>
        <? $this->load->view('2021_theme_1/inc/header1/header3') ?>
    <!-- Button Compare -->
    <? $this->load->view('2021_theme_1/compare') ?>


    <div class="container header-top">
        <div class="row">
            <div class="col-lg-7 col-sm-6" >
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item color-menu"><a href="<?=base_url()?>"><?=lang('Home') ?></a></li>
                        <li class="breadcrumb-item color-menu" aria-current="page"><a href="<?= base_url()?><?=$this->session->userdata('site_lang_name')?>/Products"><?=lang('Products And Services') ?></a></li>
                        
                        <!-- <li class="breadcrumb-item  color-menu-active active" aria-current="page">ชื่อหมวดสินค้า</li> -->
                    </ol>
                </nav>
            </div>
            <div class="search-product col-lg-5 col-sm-6 pt-2 pb-1" >
                <form action="<?= base_url('Products')?>" method="GET" id="frmSearch" name="frmSearch"  class="form-inline">
                    <div class="form-group find-pro">
                        <input type="search" name="keyword"  class="form-control" id="keyword" placeholder="<?= lang('search-product')?>">
                    </div>
                    <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                </form>

            </div>
        </div>

    </div><!--/////breadcrumb -->



    <div class="container mt-3 all-product" >
    <div class="row">
        <div class="col-lg-3 order-2 order-md-1 category-menu">
           <h5><b><?= lang('Category')?></b></h5>
           <nav class="nav flex-column">
            <? foreach ($categorys as $category) { 
                $cname = $category->cat_name;
                $cname = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$cname);
            ?>
                <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/cid:<?=$category->cat_id?>_<?=$cname?>" class="nav-link active" ><i class="fas fa-chevron-right icon-cate"></i><?= $category->cat_name?></a>
            <? } ?>
            <!-- <a href="#" class="nav-link active" ><i class="fas fa-chevron-right icon-cate"></i>วาล์ว</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>คอมเพรสเซอร์</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>อุปกรณ์ทำความเย็น</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>รถตัดหญ้า</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>ปั๊มน้ำ</a>
            <a href="#" class="nav-link" ><i class="fas fa-chevron-right icon-cate"></i>สปริงเกอร์</a> -->
        </nav>

        <h5 class="mt-5"><b><?= lang('brand-product')?></b></h5>
        <nav class="nav flex-column">
            <? foreach ($brands as $brand ) { 
                $brand_name = $brand->brand_name;
                $brand_name = str_replace(array(':','\\','/',',','.','%20',' ','(',')'),'',$brand_name);
            ?>
                <a class="nav-link active" href="<? echo base_url($this->session->userdata('site_lang_name')."/bid:{$brand->brand_id}".'_'.$brand_name) ?>">
                    <i class="fas fa-chevron-right icon-cate"></i>
                    <?= $brand->brand_name ?>
                </a>
            <? } ?>
            <!-- <a class="nav-link active" href="#"><i class="fas fa-chevron-right icon-cate"></i>กุลธร</a>
                <a class="nav-link" href="#"><i class="fas fa-chevron-right icon-cate"></i>SECO</a> -->
            </nav>
            <h5 class="mt-5"><b><?= lang('Top-search')?></b></h5>
            <div class="scrollbar-search">

                <?  foreach ($tags_all as $tag_name) { ?>
                    <div class="tags-a">
                        <a href="<?= base_url($this->session->userdata('site_lang_name'))?>/Products?tags=<?= $tag_name->tags_name?>">
                            <?= $tag_name->tags_name?>
                        </a>
                    </div>
                <? } ?>

            </div>
        </div>

        <div class="col-lg-9 order-1 order-md-2 products-all mb-3">
            <div class="row">

                <? foreach ($products as $product) { ?>

                    <div class= "col-6 col-lg-4 ">
                        <div class ="picture-product">
                            <?php foreach ($product->images as $key => $images) { ?>
                                <? if ($key==0) { ?>
                                    <?php $i = json_decode($images->resolution); ?>
                                    <picture>
                                        <?php foreach ($i as $key => $newi) { ?>
                                            <source media="(min-width:<?=$key;?>px)" srcset="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$newi?>.<?=$images->extension ?>">
                                            <?php } ?>
                                            <img class="lazy img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" data-src="<?=base_url()?>images/website/<?=$images->filename ?>_<?=$images->show_admin?>.<?=$images->extension ?>" alt="<?= $product->pro_name?>" style="width: 100%;">
                                        </picture>
                                    <? } ?>
                                <? } ?> 
                               
                                <div class="overlay-img-2 product-overlay">
                                    <a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Products/detail/<?= $product->pro_id?>" class="goto-productdetail">
                                        <h3>
                                            ชมรายละเอียดสินค้า
                                        </h3>
                                    </a>
                                </div>
                            </div>

                            <div class="detail-product">
                                <a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Products/detail/<?= $product->pro_id?>" class="goto-productdetail-2">
                                    <h3>
                                        <?= $product->pro_name?>
                                    </h3>
                                </a>
                                <p>
                                    <?= $product->pro_desc_short?>
                                </p>
                            </div>
                        </div>

                    <? } ?>

                    <div class="col-md-12 ">
                        <?= $links ?>
                    </div>

            </div>


        </div>

    </div>
</div>

<?
$this->load->view('2021_theme_1/inc/footer1/footer2');
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