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
    $squery = $_POST['Search'];
    $squery = preg_replace("#[^0-9a-z]#i","",$squery);

    $squery = ('SELECT * FROM member_blog WHERE title LIKE "%$squery%" OR body LIKE "%$squery%"') or die ("Could not find search terms.");
    $count = mysqli_num_rows($squery);
    if ($count == 0) {
        $output = "There are no search results.";
    }
    else {
        while ($row = mysqli_fetch_array($squery)) {
            $title = $row['title'];
            $body = $row['body'];
            $id = $row['blogID'];

            $results = '<div>'.$title.''.$body.'</div>';
        }
    }
}

echo $results;

?>
<?php
    include('footer.php');
?>