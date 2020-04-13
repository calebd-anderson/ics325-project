<?php 
    require("header.php"); 
?>

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
    margin-bottom: 40px;
}


.post {
    width: 100%;
    height: 400px;
    margin: 10px auto;
    border-radius: 5px;
    display: block;

}
.post .post-image {
    width: 20%;
    /* height: 50%; */
    height: auto;
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
</style>

<!-- CONTENT -->
<body>   
    <div class="content">
        <div class="main-content">
            <h1 class="recent_post">Recent Posts</h1>
        </div>
        <div class="post">
                <img src="images/globe.jpg" alt="image" class="post-image img-thumbnail">
                <div class="post-preview">
                    <h2><a href="single.php">Almost There!</a></h2>
                    &nbsp;
                    <p class="preview">
                    Welcome to the Blog! We are currently under construction, please click this link to access our beta version blog!
                    </p>
                    <a href="Bloghome.php" class="btn read-more">Access Blog</a>
                </div>
        </div>

<?php
    require("../footer.php");
?>