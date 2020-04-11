<?php
  require('header.php');
?>
<!-- page content -->
<body>
  <!-- <div>
    <h2 class="banner" align="center">Banner Test</h2>
  </div> -->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li style="cursor:pointer;" data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li style="cursor:pointer;" data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li style="cursor:pointer;" data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li style="cursor:pointer;" data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li style="cursor:pointer;" data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li style="cursor:pointer;" data-target="#carouselExampleCaptions" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/Iceberg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome to Chasing Antartica NPO 501(c)</h5>
          <p>This website provides up to date information on environmental issues.</p>
        </div>
        <p class="disabled bottom-left"><cite>{CITE ME}</cite></p>
      </div>
      <div class="carousel-item">
        <img src="images/mtncamp.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>A Place Further than the Universe.</p>        
        </div>
        <p class="disabled bottom-left"><cite>http://getwallpapers.com/wallpaper/full/d/f/3/369792.jpg</cite></p>
      </div>
      <div class="carousel-item">
        <img src="images/Penguins.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <p class="disabled bottom-left"><cite>{CITE ME}</cite></p>
      </div>
      <div class="carousel-item">
        <img src="images/Ship.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
        <p class="disabled bottom-left"><cite>{CITE ME}</cite></p>
      </div>
      <div class="carousel-item">
        <img src="images/purpleberg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
        <p class="disabled bottom-left"><cite>https://hdfondsdecran.com/image/201609/1906/iceberg-illuminee-canada-merveilleux-vue.jpg</cite>
      </div>
      <div class="carousel-item">
        <img src="images/Shelter.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
        <p class="disabled bottom-left"><cite>{CITE ME}</cite></p>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
<?php
  // echo '<p>This is you: '.$_SESSION['valid_user'];
  require('footer.php');
?>