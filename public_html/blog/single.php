<<<<<<< HEAD
<?php include("header.php"); 

require '../../SQLcreds.inc';
$db = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
        if(mysqli_connect_errno()){
            echo "<p>Error: Could not connect to database.<br/>
                Please try again later.</p>";
            exit;
        }

$output = '';

function getPublishedPosts(){
    global $db;
    $sql = SELECT "SELECT * FROM member_blog WHERE blogID=true";
    $result = mysqli_query($db, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $posts;
}
$db->close();


?>
<?php
    include('../footer.php');
?>
?>

=======
<?php include("../header.php"); ?>
>>>>>>> 8c62b6cb51e7b07189dfdb06f7a31bdafff9cec3
<body id="main">
<!-- Top Bar -->

<style>
.post-content{
    text-align: center;
    margin: 80px;
    border: 10px solid #c3c3c3;
    background-color: aliceblue;
    flex-wrap: wrap;
  
}
.section-popular {
    border-top: 1px solid white;
    margin-top: 10px;
    padding-top: 10px;
}
.section-popular img{
    height: 60px;
    width: 60px;
    float: left;
    margin-right: 10px;
}
.sidebar-single {
    margin: 60px;
    border: 10px solid #c3c3c3;
    background-color: aliceblue;
    flex-wrap: wrap;
    float: left;
}
.title{
    text-align: center;
    margin-left: 200px;
    margin-right: 200px;
    margin-bottom: 50px;
    background-color: aliceblue;
    flex-wrap: wrap;
}
.section-title{
    margin-left: 60px;
}

</style>

<div class="content">
    <div class ="main-content"><center>
        <h1 class="title">New Beginnings</h1>
        </center>
        <div class="post-content">
            require '../../SQLcreds.inc';
$db = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
        if(mysqli_connect_errno()){
            echo "<p>Error: Could not connect to database.<br/>
                Please try again later.</p>";
            exit;
        }

$output = '';

        </div>
        <div class="sidebar-single">
            <div class="section-popular">
                <h2 class="section-title">Most Read</h2>

                <div class="post clearfix">
                    
                    <a href="" class="title">Everything you need to know about Antarctica</a>
                </div>
                <br><br><br>
                <div class="post clearfix">
                    
                    <a href="" class="title">The purpose of our expedition</a>
                </div>
                <br><br><br>
                <div class="post clearfix">
                    
                    <a href="" class="title">Get to know our team</a>
                </div>
            </div>
        </div>
    </div>
</div>