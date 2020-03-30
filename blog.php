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

 <!-- Pulls Nav bar out -->

    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Blog</title>    
</head>
<body id="main">


<div class="navbar">
<script>gsap.from(".logo", {duration: 1.5, opacity: 0, scale: 0.3, ease: "back"});</script>
    <nav id="shoppingNav">
        <a href="home.php">Home</a>
        <a href="new_member_form.php">Become a Member</a>        
        <a href="sign_in_form.php">Sign In</a>   
        <span id='navbtn' onclick="toggleNav()">&#9776; Nav Menu</span>           
    </nav>
    </div>
    
    <div id="websiteNav" class="sidenav">        
        <a href="javascript:void(0)" id="navclosebtn" onclick="closeNav()">&times;</a>
        <!-- <a href="#" class="navicon" id="expicon">Expeditions</a> -->
        <a href="#" class="navicon" id="newsicon">News</a>
        <a href="#" class="navicon" id="mbricon">Membership</a>        
        <a href="web_store.php" class="navicon" id="storeicon">Store</a>
        <a href="blog.php" class="navicon" id="discourseicon">Discourse</a>
        <a href="my_robThree_2FA.php" id="">2FA Demo</a>
    </div> 
    <!-- Button -->
<style>
    
.btn{
    padding: .5rem 1rem;
    background: #6a8485;
    color: white;
    border: 1px solid transparent;
    border-radius: .25rem;
}
.btn:hover {
    padding: .5rem 1rem;
    background: #5ee672;
}

.content {
    width: 90%;
    margin: 45px;
    
}
.content .main-content {
    width: 99.5%;
    float: left;
    border: 5px solid #5ee672;
}


.post {
    width: 100%;
    height: 400px;
    margin: 10px auto;
    border-radius: 5px;
  
}
.post .post-image {
    width: 20%;
    height: 50%;
    float: left;

}
.post .post-preview {
    padding: 10px;
    width: 65%;
    float: left;
    margin: 10px;
    position: relative;
}
.post .read-more {
position: absolute;
bottom: -20px;
right: 20px;
}
.recent_post {
    margin: 20px;
    background-color: aliceblue;
}
.navbar {
    margin: 10px;
}
</style>

<!-- CONTENT -->
   
<div class="content">
    <div class="main-content">
        <h1 class="recent_post">Recent Posts</h1>
</div>
        <div class="post">
            <img src="globe.png"  alt="image" class="post-image">
            <div class="post-preview">
                <h2><a href="single.html">A New Beginning.</a></h2>
                <i class="user"> Biensur Chang,</i>
                &nbsp;
                <i class="calendar"> March 30th, 2020</i>
                <p class="preview">
                Welcome to my first post, im very excited to begin this 
                journey with you, the internet!I am Dr. Neil Mancer, I am the lead scientist on the Chasing Antartica
                expedition. Thank you for donating to our cause, this personal blog is one of the few benefits obtainable by
                donating to the expedition...
                </p>
                <a href="single.html" class="btn read-more">Read More</a>
    </div>
    
    <div class="post">
            <img src="globe.png"  alt="image" class="post-image">
            <div class="post-preview">
                <h2><a href="single.html">The Purpose of Our Expedition</a></h2>
                <i class="user"> Biensur Chang,</i>
                &nbsp;
                <i class="calendar"> March 29th, 2020</i>
                <p class="preview">
                Welcome to my first post, im very excited to begin this 
                journey with you, the internet!I am Dr. Neil Mancer, I am the lead scientist on the Chasing Antartica
                expedition. Thank you for donating to our cause, this personal blog is one of the few benefits obtainable by
                donating to the expedition...
                </p>
                <a href="single.html" class="btn read-more">Read More</a>
    </div>
 
    <div class="post">
            <img src="globe.png"  alt="image" class="post-image">
            <div class="post-preview">
                <h2><a href="single.html">Welcome to Chasing Antarctica</a></h2>
                <i class="user"> Biensur Chang,</i>
                &nbsp;
                <i class="calendar"> March 28th, 2020</i>
                <p class="preview">
                Welcome to my first post, im very excited to begin this 
                journey with you, the internet!I am Dr. Neil Mancer, I am the lead scientist on the Chasing Antartica
                expedition. Thank you for donating to our cause, this personal blog is one of the few benefits obtainable by
                donating to the expedition...
                </p>
                <a href="single.html" class="btn read-more">Read More</a>
    </div>
