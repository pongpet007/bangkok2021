  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Gp<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?=base_url()?>">หน้าหลัก</a></li>
          <li><a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/About">รู้จัก T.C.P</a></li>
          <li><a href="#services<?=$this->session->userdata('site_lang_name')?>/">โซลูชั่น</a></li>
          <li><a href="#portfolio<?=$this->session->userdata('site_lang_name')?>/">สินค้าและบริการ</a></li>
          <li><a href="#team<?=$this->session->userdata('site_lang_name')?>/">รับสมัครงาน</a></li>
          <li><a href="#contact<?=$this->session->userdata('site_lang_name')?>/">บทความ</a></li>
          <li><a href="#contact<?=$this->session->userdata('site_lang_name')?>/">ติดต่อเรา</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->