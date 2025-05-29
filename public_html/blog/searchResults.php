<?php
    include("header.php");
?>
<style>
    .display-4 {
        text-align: center;  
        color: #737373; 
    }
    .sPost{
        padding-left: 80px;
        padding-right: 80px;
    }
</style>
<div id="pageContainer">
    <div id="content-wrap">
        <p class="display-4">Search Results</p>
        <?php
        require '../../SQLcreds.inc';
        $db = mysqli_init();
        if (!str_contains($_SERVER['SERVER_NAME'], 'localhost')) {
            // production config
            $cert = "/var/www/html/wwwroot/DigiCertGlobalRootCA.crt.pem";
            mysqli_ssl_set($db, NULL, NULL, $cert, NULL, NULL);
        }
        mysqli_real_connect($db, $servername, $SQLuser, $SQLpswd, $dbname, 3306, MYSQLI_CLIENT_SSL);
        if (mysqli_connect_errno()) {
          die('Failed to connect to MySQL: '.mysqli_connect_error());
        }

        $output = '';

        //sets it to grab search input//
        if (isset($_POST['Search']) && !empty($_POST['Search'])) {
            if (preg_replace("[^a-zA-Z0-9_ %\[\]\.\(\)%&-]s","", $_POST['Search'])) {
                $squery = $_POST['Search'];
            }
            //query db for items that match the search term//
            $sql = "SELECT * FROM member_blog WHERE title LIKE '%" . $squery . "%' OR body LIKE '%" . $squery  ."%' ";
            $result = mysqli_query($db, $sql);
            $count = mysqli_num_rows($result);
            if ($count == 0 || $count == null) {
                $output = "There are no search results.";
                echo $output;
            }
            else {
                foreach($result as $result):?>
                 <div class="sPost">
                     <div class="container-md">
                         <h4 class="mb-4 font-italic"><a href="detail.php?ID=<?php echo $result['blogID'] ?>"><?php echo $result['title'] ?></a></h4>
                         <p class="lead border-bottom">
                             <?php echo html_entity_decode(substr($result['body'], 0, 150) . '...') ?>
                        </p>
                     </div>
                </div>
                <?php endforeach;
            }
        }else {
        echo "<p class='display-4'>"."Please enter a search word."." </p>";
        }
        $db->close();
        ?>
    </div>
    </div>
    <?php include('../footer.php'); ?>
</div>
