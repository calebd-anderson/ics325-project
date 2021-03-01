<?php require('header.php') ?> 

<style>
#pageContainer {
    border: 23px solid #adb1b8;
    padding: 20px;
}
#text{
    font-weight: bold;
    text-align: center;
    padding: 20px;
    margin-left: 150px;
    margin-right: 150px;
}
#body{
    text-align: center;
    padding: 40px;
    margin-left: 150px;
    margin-right: 150px;
}


</style>
<div id="pageContainer">
    <div id="content-wrap">
        <?php
        require '../../SQLcreds.inc';
        $db = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
                if(mysqli_connect_errno()){
                    echo "<p>Error: Could not connect to database.<br/>
                        Please try again later.</p>";
                    exit;
                }

        $output = '';


        //sets it to grab search input//
        if(isset($_GET['ID'])) {

            $id = mysqli_real_escape_string($db, $_GET['ID']);
            //query db for items that match the search term//
            $sql = "SELECT * FROM member_blog WHERE blogID LIKE '%" . $id . "%'";
            $result = mysqli_query($db, $sql);
            $count = mysqli_num_rows($result);
            if ($count == 0 || $count == null) {
                $output = "There are no search results.";
                echo $output;
            }
            else {
                while ($row = $result->fetch_assoc()) {
                    $title = $row["title"];
                    $body = $row["body"];
                    $id = $row["blogID"];

                    echo "<div id='text'><h3>".htmlspecialchars($title)."</h3>"."<br>". "</div>";
                    echo "<div id='body'>"."<p class='lead'>".htmlspecialchars($body)."</p>"."</div>";
                }
            }
        
            $db->close();
        } else {
            header("Location: bloghome.php");
            exit();
        }
        ?>
    </div>
    </div>
    <?php include('../footer.php'); ?>
</div>