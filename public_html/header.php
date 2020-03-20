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
    
    <meta name="theme-color" content="#fafafa">

    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

    <title>Antarctica</title>    
</head>
<body id="main">
<img src="images/logo.png" class="logo">

<div class="navbar">
<script>gsap.from(".logo", {duration: 1.5, opacity: 0, scale: 0.3, ease: "back"});</script>
    <nav id="shoppingNav">
        <a href="home.php">Home</a>
        <a href="new_member_form.php">Create Account</a>        
        <a href="sign_in.php">Sign In</a>
        <a href="#">Shopping Cart</a>
        <a href="#">Checkout</a>        
        <span id='navbtn' onclick="toggleNav()">&#9776; Nav Menu</span>           
    </nav>
    </div>
    
    <div id="websiteNav" class="sidenav">        
        <a href="javascript:void(0)" id="navclosebtn" onclick="closeNav()">&times;</a>
        <a href="#" id="expbtn">Expeditions</a>
        <a href="#" id="newsbtn">News</a>
        <a href="#" id="mbrbtn">Membership</a>
        <a href="my_robThree_2FA.php" id="">2FA Demo</a>
    </div>
    
    