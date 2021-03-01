<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta charset="utf-8">
      <title>Store</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="page icon" href="../favicon.ico" />
      <!-- Homebrew Style -->
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="css/stylesheet.css">
      <!-- HTML5 Style -->
      <link rel="stylesheet" href="../css/normalize.css">
      <link rel="stylesheet" href="../css/main.css">
      <!-- Bootstrap, Font Awesome Style -->
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/form-validation.css">
      <!-- Homebrew Javascript -->
      <script src="../js/script.js"></script>
      <!-- JQuery, Popper, Bootstrap Libraries -->
      <script src="js/form-validation.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body id="main">
    <article>
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../home.php">
          <svg class="bi bi-house-door" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5H9.5a.5.5 0 01-.5-.5v-4H7v4a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
          </svg> Home<span class="sr-only">(current)</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mr-auto">
            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="bi bi-question-diamond" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 010-2.098L6.95.435zm1.4.7a.495.495 0 00-.7 0L1.134 7.65a.495.495 0 000 .7l6.516 6.516a.495.495 0 00.7 0l6.516-6.516a.495.495 0 000-.7L8.35 1.134z" clip-rule="evenodd"/>
                  <path d="M5.25 6.033h1.32c0-.781.458-1.384 1.36-1.384.685 0 1.313.343 1.313 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.007.463h1.307v-.355c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.326 0-2.786.647-2.754 2.533zm1.562 5.516c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                </svg> Help
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- About -->
                <a class="nav-link" href="../About.php">
                  <svg class="bi bi-clipboard" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 00-2 2V14a2 2 0 002 2h10a2 2 0 002-2V3.5a2 2 0 00-2-2h-1v1h1a1 1 0 011 1V14a1 1 0 01-1 1H3a1 1 0 01-1-1V3.5a1 1 0 011-1h1v-1z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5zm-3-1A1.5 1.5 0 005 1.5v1A1.5 1.5 0 006.5 4h3A1.5 1.5 0 0011 2.5v-1A1.5 1.5 0 009.5 0h-3z" clip-rule="evenodd"/>
                  </svg> About
                </a>
                <!-- Contact -->
                <a class="nav-link" href="../Contact.php">
                  <svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M.071 4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z" clip-rule="evenodd"/>
                    <path d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z"/>
                  </svg> Contact
                </a>
              </div>
            </li>
            <!-- Pages Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="bi bi-file-earmark-ruled" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13 9H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
                  <path fill-rule="evenodd" d="M5 14V9h1v5H5z" clip-rule="evenodd"/>
                  <path d="M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z"/>
                  <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z"/>
                </svg> Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Blog -->
                <a class="nav-link" href="../blog/bloghome.php">
                  <svg class="bi bi-chat-quote" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 01.287.801 10.97 10.97 0 01-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 01.71-.074A8.06 8.06 0 008 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 01-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 00.244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 01-2.347-.306c-.52.263-1.639.742-3.468 1.105z" clip-rule="evenodd"/>
                    <path d="M7.468 7.667c0 .92-.776 1.666-1.734 1.666S4 8.587 4 7.667C4 6.747 4.776 6 5.734 6s1.734.746 1.734 1.667z"/>
                    <path fill-rule="evenodd" d="M6.157 6.936a.438.438 0 01-.56.293.413.413 0 01-.274-.527c.08-.23.23-.44.477-.546a.891.891 0 01.698.014c.387.16.72.545.923.997.428.948.393 2.377-.942 3.706a.446.446 0 01-.612.01.405.405 0 01-.011-.59c1.093-1.087 1.058-2.158.77-2.794-.152-.336-.354-.514-.47-.563zm-.035-.012h-.001.001z" clip-rule="evenodd"/>
                    <path d="M11.803 7.667c0 .92-.776 1.666-1.734 1.666-.957 0-1.734-.746-1.734-1.666 0-.92.777-1.667 1.734-1.667.958 0 1.734.746 1.734 1.667z"/>
                    <path fill-rule="evenodd" d="M10.492 6.936a.438.438 0 01-.56.293.413.413 0 01-.274-.527c.08-.23.23-.44.477-.546a.891.891 0 01.698.014c.387.16.72.545.924.997.428.948.392 2.377-.942 3.706a.446.446 0 01-.613.01.405.405 0 01-.011-.59c1.093-1.087 1.058-2.158.77-2.794-.152-.336-.354-.514-.469-.563zm-.034-.012h-.002.002z" clip-rule="evenodd"/>
                  </svg> Blog
                </a>
                <!-- membership -->
                <a class="nav-link" href="../membership/membership.php">
                  <svg class="bi bi-person-check-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm9.854-2.854a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0l-1.5-1.5a.5.5 0 01.708-.708L12.5 7.793l2.646-2.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                  </svg> Membership
                </a>
                <!-- Merch -->
                <a class="nav-link" href="store_index.php">
                  <svg class="bi bi-briefcase" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5v-6h-1v6a.5.5 0 01-.5.5h-13a.5.5 0 01-.5-.5v-6H0v6z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 011.5 3h13A1.5 1.5 0 0116 4.5v2.384l-7.614 2.03a1.5 1.5 0 01-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 00-.5.5v1.616l6.871 1.832a.5.5 0 00.258 0L15 6.116V4.5a.5.5 0 00-.5-.5h-13zM5 2.5A1.5 1.5 0 016.5 1h3A1.5 1.5 0 0111 2.5V3h-1v-.5a.5.5 0 00-.5-.5h-3a.5.5 0 00-.5.5V3H5v-.5z" clip-rule="evenodd"/>
                  </svg> Merchandise
                </a>
              </div>
            </li>
            <?php
              if (isset($_SESSION['valid_user'])){
                echo '<span class="nav-link disabled">Welcome: '.$_SESSION['valid_user'].'</span>';
                echo '<a class="nav-link" href="../account/account.php">
                  <svg class="bi bi-people-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
                  <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                  <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
                  </svg> My Account
                </a>';
                echo '<a class="nav-link" href="../account/logout.php"><i class="fa fa-fw fa-sign-out"></i> Log Off</a>';
              }else{
                // echo '';
                echo '<li class="nav-item"><a class="nav-link" href="../account/sign_in_form.php"><svg class="bi bi-person-lines-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7 1.5a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm2 9a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
                </svg> Login</a></li>';
              }
            ?>              
              <li class="nav-item">
                <a class="nav-link" href="checkout.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="../blog/searchResults.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search the Blog" aria-label="Search" name="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <!-- appears on desktop and dissapears on mobile -->
          <span class="desktop_show" id='navbtn' onclick="toggleNav()">&#9776; Nav Menu</span>
          <!-- appears on desktop and dissapears on mobile -->
        </div>
      </nav>
    </article>

<div id="websiteNav" class="sidenav">        
  <!-- <a href="javascript:void(0)" id="navclosebtn" onclick="closeNav()">&times;</a> -->
  <!-- <a href="#" class="navicon" id="expicon">Expeditions</a> -->
  <!-- <a href="#" class="navicon" id="newsicon">News</a> -->
  <a href="../membership/membership.php" class="navicon" id="mbricon">Membership</a>        
  <a href="store_index.php" class="navicon" id="storeicon">Store</a>
  <a href="../blog/bloghome.php" class="navicon" id="discourseicon">Discourse</a>
</div>