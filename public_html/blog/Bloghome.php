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
<div id="pageContainer">
  <div id="content-wrap">
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            
        </div>
      </header>

      <!-- <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="blogadmin.php">Write a Post</a>
        </nav>
      </div> -->
      <?php
        require '../../SQLcreds.inc';
        $db = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
                if(mysqli_connect_errno()){
                    echo "<p>Error: Could not connect to database.<br/>
                        Please try again later.</p>";
                    exit;
                }

        $sql = "SELECT * FROM member_blog ";
        $result = mysqli_query($db, $sql);
        while ($row = $result->fetch_assoc()) {
          $resultarray[] = $row;
        }
        list($blog1,$blog2,$blog3,$blog4) = $resultarray;
        extract($blog1);
        $blog1title =  $title;
        $blog1id = $blogID;
        $blog1body = $body;
        extract($blog2);
        $blog2title =  $title;
        $blog2id = $blogID;
        $blog2body = $body;
        extract($blog3);
        $blog3title =  $title;
        $blog3id = $blogID;
        $blog3body = $body;
        extract($blog4);
        $blog4title =  $title;
        $blog4id = $blogID;
        $blog4body = $body;
        
      ?>

      <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"><?php echo $blog1title ?></h1>
          <p class="lead my-3">I am Dr. Neil Mancer, I am the lead scientist on the Chasing Antarctica expedition. Thank you for donating to our cause, 
          this personal blog is one of the few benefits obtainable by donating to the expedition.</p>
          <p class="lead mb-0"><?php echo "<a href='detail.php?ID={$blog1id}' class='text-white font-weight-bold'>" ?>Continue reading...<?php echo "</a>"?></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Most Recent Post</strong>
              <h3 class="mb-0"><?php echo $blog2title ?></h3>
              <div class="mb-1 text-muted">April 12th</div>
              <p class="card-text mb-auto">The information below can be found on the "About" page of our website. I am Dr. Sarah Connor, 
              Head Scientist of the expedition. I hope you continue to view our blog and support us on this journey to a place further than the universe!</p>
              <p><?php echo "<a href='detail.php?ID={$blog2id}'>" ?>Continue reading<?php echo "</a>";?></p>
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
              <h3 class="mb-0">My Personal Story.</h3>
              <div class="mb-1 text-muted">February 15th</div>
              <p class="mb-auto">Hello everyone, my name is Dr. Lee Sang-Hyeok. I have lived in Japan for the majority of my life. When I was younger, I use to watch a ton of anime. When I would watch them,
               I would always be jealous of the adventures that they would go on. I always told myself, "One day, I'll be the one going on an adventure."</p>
              <p><?php echo "<a href='detail.php?ID={$blog3id}'>" ?>Continue reading<?php echo "</a>"?></p>
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
            <p class="blog-post-meta">May 5th, 2020 by Biensur Chang</a></p>

            <p>We decided to create a blog because we want our donators and our fans to be a part of our journey. Every dollar counts, so sharing our experiences and allowing you
                to be a part of the struggles and accomplisments on our mission is the least we could do. We want to be as transparent as possible and let the people at home know
                the difficulty in starting an expedition and hopefully show you the beauty and excitement that Antarctica has in stored for us.
            </p>
            <hr>
            <p>Like in any project, quest, or adventure, there are many mountains and obstacles that need to be climbed over. 
                Our first and largest mountain to climb over is... The expense... First, lets enjoy this cute photo of a penguin.
                <br> <br> <img src="penguin.jpg" alt="Whoops!" width="600" height="400" class="img-fluid">
                <br> <br>
                We knew if we wanted to go on this expedition, the cost of it would be our biggest hurdle. We are in the process of presenting our expedition proposal to many other
            organizations that are in support of researching climate change, Antarctica, and the secrets hidden under the ice. </p>
            <blockquote>
              <p>We have a team of about 15 scientists and researchers workign together to make this a success. Hopefully as we continue to make these blogs, each one of us can talk about why we are on this mission.</p>
            </blockquote>
            <p>Chasing Antartica's Personal Blog helps let our donators experience the adventure along with us! Tune in for weekly blogs posts! A new blog is posted everyone Saturday morning! </p>

          </div><!-- /.blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">Blog Update 2.0</h2>
            <p class="blog-post-meta">May 1st, 2020 by Soren Bjergsen</p>
            <p>
            Hey everyone! Jacob Wolf here with another update to the website! First, I want to say thank you to all of our supporters! We couldn't have gotten
            this far without all of you! Anyways, here's a list of some changes we made to the site:
            </p>
            <ul>
              <li>The Blog Homepage is up!</li>
              <li>Accounts have been troubleshooted, please report any bugs or glitches.</li>
              <li>The Chasing Antarctica store is up! Check it out!</li>
              <li>We have our first few blog posts up! Please give them a read!
              </li>
            </ul>
            <p> We hope to continue to provide spot on and immediate service to anyone that needs help. Thank you once again. Have a fabulous day!</p>
          </div><!-- /.blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">New Features!</h2>
            <p class="blog-post-meta">April 13th, 2020 by Peng Yiliang</a></p>

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
            <a class="btn btn-outline-primary" href="#">Back to Top</a>
          </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Chasing Antartica's Personal Blog helps let our donators experience the adventure along with us! Tune in for weekly blog posts! A new blog is posted everyone Saturday morning! </p>
          </div>

          <div class="p-4">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
            <li><a href="https://github.com/calebTree/ICS325_Project">GitHub</a></li>
              <li><a href="https://twitter.com/AntarcticReport?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a></li>
              <li><a href="https://www.facebook.com/AusAntarctic/?__tn__=%2Cd%2CP-R&eid=ARBqAUrz2-cw2iuHkFFDCZn1V62lySqeQY57cjbWG_CwxJ3rCCgnuQwnHy9RDtiH0itXPi5oZAX4YiEI">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->
      <div class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
   
       </div>

    </main><!-- /.container -->
  </div>
  <?php
      require('../footer.php');
  ?>
</div>