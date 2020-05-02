<?php
  require('header.php');
  // $memberID = $_SESSION['memberID'];
  // echo '<p>Your member ID: '.$_SESSION['memberID'].'</p>';
  // echo '<p>Your member ID: '.gettype($memberID).'</p>';
  // echo '<p>Your POST memberID type: '.gettype($_POST['memberID']).'</p>';
?>
<!-- page content -->
<body>
  <!-- <div>
    <h2 class="banner" align="center">Banner Test</h2>
  </div> -->
  <div id="pageContainer">
    <div id="content-wrap">
      <p>
        Our website is a basic login portal right now:
        <ul>
          <li>Create an account</li>
          <li>Play with setting up two factor authentication</li>
          <li>Chage your password</li>
          <li>Play with writing a blog post in the blog/discourse section from the menu</li>
          <li>Use the search bar to search for your post</li>
        </ul>
      </p>
      <p>Your account can be deleted when you're done if you want. However if you keep your account we will update the page to allow for more services in the future.</p> 
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
            <img src="images/Iceberg3.jpg" class="d-block w-100" alt="..." height="550">
            <div class="carousel-caption d-none d-md-block">
              <h5>Welcome to Chasing Antartica NPO 501(c)</h5>
              <p>This website provides up to date information on environmental issues.</p>
            </div>
            <p class="disabled bottom-left"><cite>Photo by Mathieu Perrier on Unsplash</cite></p>
          </div>
          <div class="carousel-item">
            <img src="images/mtncamp.jpg" class="d-block w-100" alt="..." height="550">
            <div class="carousel-caption d-none d-md-block">
              <h5>Antartic Camping</h5>
              <p>A Place Further than the Universe.</p>        
            </div>
            <p class="disabled bottom-left"><cite>http://getwallpapers.com/wallpaper/full/d/f/3/369792.jpg</cite></p>
          </div>
          <div class="carousel-item">
            <img src="images/Penguins2.jpg" class="d-block w-100" alt="..." height="550">
            <div class="carousel-caption d-none d-md-block">
              <h5>Native Wildlife</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <p class="disabled bottom-left"><cite>Photo by Torsten Dederichs on Unsplash</cite></p>
          </div>
          <div class="carousel-item">
            <img src="images/Ship2.jpg" class="d-block w-100" alt="..." height="550">
            <div class="carousel-caption d-none d-md-block">
              <h5>Views from Onboard</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            <p class="disabled bottom-left"><cite>Photo by Torsten Dederichs on Unsplash</cite></p>
          </div>
          <div class="carousel-item">
            <img src="images/Iceberg2.jpg" class="d-block w-100" alt="..." height="550">
            <div class="carousel-caption d-none d-md-block">
              <h5>Frozen Tundra</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            <p class="disabled bottom-left"><cite>https://unsplash.com/photos/JJ0xHzObbmg</cite>
          </div>
          <div class="carousel-item">
            <img src="images/Whale.jpg" class="d-block w-100" alt="..." height="550">
            <div class="carousel-caption d-none d-md-block">
              <h5>Whales of Antartica</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            <p class="disabled bottom-left"><cite>Photo by Torsten Dederichs on Unsplash</cite></p>
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
      <div id="section_space">
        <div class="flex_Body">
          <div class="image_flex">
            <img src="images/exp.jpg" width="400" height="300">
          </div>
          <div class="text_flex"> 
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<p>
            <div class="button_loc" align="center"><a class="art_but" href="add-website-here" target="_blank" ><span>Go to Article</a></div>
          </div>
        </div>
        <div class="flex_Body">
          <div class="text_flex"> 
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<p>
            <div class="button_loc" align="center"><a class="art_but" href="add-website-here" target="_blank" ><span>Go to Article</a></div>
          </div>
          <div class="image_flex">
            <img src="images/AntarticaVoyage.jpg" width="400" height="300">
          </div>
        </div>
        <div class="flex_Body">
          <div class="image_flex">
            <img src="images/IceAndSnow.jpg" width="400" height="300">
          </div>
          <div class="text_flex"> 
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<p>
            <div class="button_loc" align="center"><a class="art_but" href="add-website-here" target="_blank" ><span>Go to Article</a></div>
          </div>
        </div>
      </div>
    </div>
    <?php
    // echo '<p>This is you: '.$_SESSION['valid_user'];
    require('footer.php');
    ?>
  </div>
</body>
