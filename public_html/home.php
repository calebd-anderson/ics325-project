<?php
require('header.php');
?>
<style>
  .welcome {
    padding: 20px;
  }
  .banner {
    background-color: #80ff80;
    height: 300px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .carouselHeader {
    padding-top: 50px;
    padding-bottom: 100px;
  }
  .carousel-container{
  margin: auto;
  width: 85%;
  padding: 10px;
}
</style>
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
<!-- page content -->
<article class="fieldset">
    <h1 align="center" class="welcome">Welcome to Chasing Antartica NPO 501(c)</h1>
    <section>
        <h2 align="center" class="welcome">This website provides up to date information on environmental issues.</h2>
    </slection>
</article>
<div>
  <h2 class="banner" align="center">Banner Test</h2>
</div>
<div>
  <h2 class="carouselHeader" align="center">A Place Further than the Universe</h2>
</div>
<div class="carousel-container">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/Iceberg.jpg" alt="Iceberg" width="500" height="600">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/Penguins.jpg" alt="Penguins">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/Ship.jpg" alt="Giant Ship">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php
require('footer.php');
?>