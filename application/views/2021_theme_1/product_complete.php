<!DOCTYPE html>
<html lang="th">
  <? $this->load->view('2021_theme_1/inc/header-meta') ?>
  <body>
    <? $this->load->view('2021_theme_1/inc/header1/header3') ?>
    <div class="container header-top" data-aos="fade-down"  data-aos-easing="linear"  data-aos-duration="900">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item color-menu"><a href="<?=base_url($this->session->userdata('site_lang_name'))?>"><?=lang('Home')?></a></li>
              <li class="breadcrumb-item color-menu" aria-current="page">
                <a href="<?=base_url($this->session->userdata('site_lang_name'))?>/Products"><?=lang('Products And Services')?></a>
              </li>
              
              <li class="breadcrumb-item  color-menu-active active" aria-current="page">นำส่งข้อมูลเรียบร้อยแล้ว</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <!--/////breadcrumb -->
    <!-- Button Compare -->
    <? $this->load->view('2021_theme_1/compare') ?>
    <div class="container mt-3 all-product " style="margin-bottom: 30px;margin-top: 30px;height: 500px;" >
      <div class="row">
        <div class="col-lg-12 col-md-12 center" style="text-align: center;" >
          <i class="fas fa-check-circle" style="font-size: 7em;color:green;"></i>

                    <h1 style="text-align: center;color: #000;"> นำส่งข้อมูลเรียบร้อยแล้ว </h1>
            </div>
      </div>
    </div>

    <!-- <div class="overlay-img-3 pro-about"><h3>            ชมรายละเอียดสินค้า                  </h3>
      </div> -->
    <?
      $this->load->view('2021_theme_1/inc/footer1/footer2')
      ?>

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