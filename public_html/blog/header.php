<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <meta charset="utf-8">
      <title>Chasing Antartica</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="page icon" href="../favicon.ico" />
      
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/normalize.css">
      <link rel="stylesheet" href="../css/main.css">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <script src="../js/script.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
      <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body id="main">
    <article>
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <?php
                @session_start();
                if (isset($_SESSION['valid_user'])){
                  echo '<span class="nav-link">Welcom: '.$_SESSION['valid_user'].'</span>';
                  echo '<a class="nav-link" href="#">My Account</a>';
                  echo '<a class="nav-link" href="../logout.php"><i class="fa fa-fw fa-sign-out"></i> Log Off</a>';
                } else{
                  echo '<li class="nav-item"><a class="nav-link" href="../new_member_form.php">Become a Member</a></li>';
                  echo '<li class="nav-item"><a class="nav-link" href="../sign_in_form.php"><i class="fa fa-fw fa-user"></i> Login</a></li>';
                }
              ?>
              <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
              </li>                    
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
                <span id='navbtn' onclick="toggleNav()">&#9776; Nav Menu</span>
          </div>
        </nav>
              </article>

<div id="websiteNav" class="sidenav">        
  <!-- <a href="javascript:void(0)" id="navclosebtn" onclick="closeNav()">&times;</a> -->
  <!-- <a href="#" class="navicon" id="expicon">Expeditions</a> -->
  <a href="#" class="navicon" id="newsicon">News</a>
  <a href="#" class="navicon" id="mbricon">Membership</a>        
  <a href="../store/store_index.php" class="navicon" id="storeicon">Store</a>
  <a href="../blog/blog.php" class="navicon" id="discourseicon">Discourse</a>
  <!-- <a href="blog/blog.php" class='far fa-comments'> Discourse</a> -->
  <!-- <a href="my_robThree_2FA.php" id="">2FA Demo</a> -->
</div>