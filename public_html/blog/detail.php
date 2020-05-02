<?php require('header.php') ?>
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

                    echo "<div>".htmlspecialchars($title)."<br>".htmlspecialchars($body)."</div>";
                }
            }
        
            $db->close();
        } else {
            header("Location: Bloghome.php");
            exit();
        }
        ?>
    </div>
    </div>
    <?php include('../footer.php'); ?>
</div>