<!-- ---
layout: examples
title: Blog Template
extra_css:
  - "https://fonts.googleapis.com/css?family=Playfair+Display:700,900"
  - "blog.css"
include_js: false
--- -->
<?php
    require('header.php');
?>
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="blogadmin.php">Write a Post</a>
    </nav>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Featured Post</h1>
      <p class="lead my-3">Welcome to my first post, I'm very excited to begin this 
                journey with you, the internet! Let me begin this blog by telling you what we are all about!</p>
      <p class="lead mb-0"><a href="single.php" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Most Recent Post</strong>
          <h3 class="mb-0">The Purpose of Our Expedition</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">I am Dr. Neil Mancer, I am the lead scientist on the Chasing Antartica
                expedition. Thank you for donating to our cause, this personal blog is one of the few benefits obtainable by
                donating to the expedition...</p>
          <a href="single.php" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- {% include icons/placeholder.svg width="200" height="250" background="#55595c" color="#eceeef" text="Thumbnail" %} -->
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Older Post</strong>
          <h3 class="mb-0">A New Beginning.</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">Thank you for donating to our cause, this personal blog is one of the few benefits obtainable by
                donating to the expedition.Welcome to my first post, im very excited to begin this 
                journey with you, the internet!</p>
          <a href="single.php" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
         <!-- {% include icons/placeholder.svg width="200" height="250" background="#55595c" color="#eceeef" text="Thumbnail" %} -->
        </div>
      </div>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Welcome to Our Personal Blog
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Be a Part of the Adventure</h2>
        <p class="blog-post-meta">January 1, 2020 by Biensur Chang</a></p>

        <p>We decided to create a blog because we want our donators and our fans to be a part of our journey. Every dollar counts, so sharing our experiences and allowing you
            to be a part of the struggles and accomplisments on our mission is the least we could do. We want to be as transparent as possible and let the people at home know
            the difficulty in starting an expedition and hopefully show you the beauty and excitement that Antarctica has in stored for us.
        </p>
        <hr>
        <p>Like in any project, quest, or adventure, there are many mountains and obstacles that need to be climbed over. 
            Our first and largest mountain to climb over is... The expense... First, lets enjoy this cute photo of a penguin.
            <br> <br> <img src="penguin.jpg" alt="Whoops!" width="600" height="400">
            <br> <br>
            We knew if we wanted to go on this expedition, the cost of it would be our biggest hurdle. We are in the process of presenting our expedition proposal to many other
        organizations that are in support of researching climate change, Antarctica, and the secrets hidden under the ice. </p>
        <blockquote>
          <p>We have a team of about 15 scientists and researchers workign together to make this a success. Hopefully as we continue to make these blogs, each one of us can talk about why we are on this mission.</p>
        </blockquote>
        <p>Chasing Antartica's Personal Blog helps let our donators experience the adventure along with us! Tune in for weekly blogs posts! A new blog is posted everyone Saturday morning! </p>

      </div><!-- /.blog-post -->

      <div class="blog-post">
        <h2 class="blog-post-title">Another blog post</h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
      </div><!-- /.blog-post -->

      <div class="blog-post">
        <h2 class="blog-post-title">New Features!</h2>
        <p class="blog-post-meta">December April 13th, 2020 by Biensur Chang</a></p>

        <p>We've been hard at work trying to create a wesbite you all can use to easily access our blog, fundrasier and more. Here are some of the features we have added, and some we are still implementing.</p>
        <ul>
          <li>Homepage is set up!</li>
          <li>Accounts should be working now. If there are any bugs or glitches, please let us know.</li>
          <li>Our store is slowly coming together, merch coming soon!</li>
          <li>Our Blog page is slowly coming together, feel free to explore the beta, and enjoy what little excerpts we have.</li>
        </ul>
        <p>We hope to have another update to the website by the end of April. So stay tuned!</p>
      </div><!-- /.blog-post -->

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Chasing Antartica's Personal Blog helps let our donators experience the adventure along with us! Tune in for weekly blog posts! A new blog is posted everyone Saturday morning! </p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2014</a></li>
          <li><a href="#">February 2014</a></li>
          <li><a href="#">January 2014</a></li>
          <li><a href="#">December 2013</a></li>
          <li><a href="#">November 2013</a></li>
          <li><a href="#">October 2013</a></li>
          <li><a href="#">September 2013</a></li>
          <li><a href="#">August 2013</a></li>
          <li><a href="#">July 2013</a></li>
          <li><a href="#">June 2013</a></li>
          <li><a href="#">May 2013</a></li>
          <li><a href="#">April 2013</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<?php
    require('../footer.php');
?>