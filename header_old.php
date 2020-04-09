<!DOCTYPE html>
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="environmental resources">
    <meta name="author" content="???">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.ico">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/popover.css" />
    
    <meta name="theme-color" content="#fafafa">

    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Antarctica</title>    
</head>
<body id="main">
<img src="images/logo2.png" class="logo">

<div class="navbar">
<script>gsap.from(".logo", {duration: 1.5, opacity: 0, scale: 0.3, ease: "back"});</script>
    <nav id="shoppingNav">
        <a href="home.php">Home</a>                
        <?php
            @session_start();
            if (isset($_SESSION['valid_user'])){
                echo '<span style="padding:14px 16px;float:left;">Welcom: '.$_SESSION['valid_user'].'</span>';                
                echo '<a href="#">My Account</a>';
                echo '<a href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Log Off</a>';
            } else{
                echo '<a href="new_member_form.php">Become a Member</a>';
                echo '<a href="sign_in_form.php"><i class="fa fa-fw fa-user"></i> Login</a>';
            }
        ?>
        <span id='navbtn' onclick="toggleNav()">&#9776; Nav Menu</span>           
    </nav>
    </div>
    
    <div id="websiteNav" class="sidenav">        
        <a href="javascript:void(0)" id="navclosebtn" onclick="closeNav()">&times;</a>
        <!-- <a href="#" class="navicon" id="expicon">Expeditions</a> -->
        <a href="#" class="navicon" id="newsicon">News</a>
        <a href="#" class="navicon" id="mbricon">Membership</a>        
        <a href="store/store_index.php" class="navicon" id="storeicon">Store</a>
        <a href="blog/blog.php" class="navicon" id="discourseicon">Discourse</a>
        <!-- <a href="blog/blog.php" class='far fa-comments'> Discourse</a> -->
        <!-- <a href="my_robThree_2FA.php" id="">2FA Demo</a> -->
    </div> 