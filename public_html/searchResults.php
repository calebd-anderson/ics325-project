<?php
    include("header.php");
?>
<?php
require '../SQLcreds.inc';
$db = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
        if(mysqli_connect_errno()){
            echo "<p>Error: Could not connect to database.<br/>
                Please try again later.</p>";
            exit;
        }

$output = '';

//sets it to grab search input//
if (isset($_POST['Search'])) {
    if (preg_replace("#[^0-9a-z]#i","", $_POST['Search'])) {
        $squery = $_POST['Search'];
    }
    //query db for items that match the search term//
    $sql = "SELECT * FROM member_blog WHERE title LIKE '%" . $squery . "%' OR body LIKE '%" . $squery  ."%' ";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        $output = "There are no search results.";
    }
    else {
        while ($row = $result->fetch_assoc()) {
            $title = $row["title"];
            $body = $row["body"];
            $id = $row["blogID"];

            $results = '<div>' . $title . ' ' . $body . '</div>';
            echo $results;
        }
    }
}


$db->close();
?>
<?php
    include('footer.php');
?>