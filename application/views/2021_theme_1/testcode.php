<meta charset="utf-8">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic usage demo">
    <meta name="author" content="David Deutsch">
    <title>
      Basic Demo | Owl Carousel | 2.3.4
    </title>

<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?=base_url()?>assets/Newfolder/docs.theme.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/Newfolder/owl.carousel.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/Newfolder/owl.theme.default.min.css">


<script src="<?=base_url()?>assets/Newfolder/jquery.min.js"></script>
<script src="<?=base_url()?>assets/Newfolder/owl.carousel.js"></script>

    <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4>1</h4>
            </div>
            <div class="item">
              <h4>2</h4>
            </div>
            <div class="item">
              <h4>3</h4>
            </div>
            <div class="item">
              <h4>4</h4>
            </div>
            <div class="item">
              <h4>5</h4>
            </div>
            <div class="item">
              <h4>6</h4>
            </div>
            <div class="item">
              <h4>7</h4>
            </div>
            <div class="item">
              <h4>8</h4>
            </div>
            <div class="item">
              <h4>9</h4>
            </div>
            <div class="item">
              <h4>10</h4>
            </div>
            <div class="item">
              <h4>11</h4>
            </div>
            <div class="item">
              <h4>12</h4>
            </div>
          </div>

          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  300: {
                    items: 2
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            })
          </script>
        </div>
      </div>
<script src="<?=base_url()?>assets/Newfolder/highlight.js"></script>
<script src="<?=base_url()?>assets/Newfolder/app.js"></script>
