<?php
    include('header.php');
    require '../../SQLcreds.inc';

    $mysqli = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    $sql = "SELECT alt, title, price, img, descr FROM products";
    // $result = $mysqli -> query($sql);
    // $obj = $result -> fetch_object();
    // shuffle($result);
    // shuffle_assoc($result);
    // echo'<pre>';
    // print_r($result);
    // echo'</pre>';
?>
    <h1>
        <span class="bigl">C</span>hasing<span class="bigl"> A</span>rctic<span class="bigl"> M</span>erchandise
    </h1>
    <?php
       
        //loop card rows
        $column = 0;
        echo '<div class="card-group">';
        if ($result = $mysqli -> query($sql)) {
            while ($obj = $result -> fetch_object()) {
                echo '<div class="card" style="width: 18rem;">';
                printf('<img class="card-img-top" src="%s" alt="%s"/>', $obj->img, $obj->alt);
                echo '<div class="card-body">';
                printf('<h5 class="card-title">%s</h5>', $obj->title);
                printf('<p class="price">$%s</p>', $obj->price);
                printf('<p class="card-text">%s</p>',$obj->descr);
                printf('<p class="card-text"><button class="btn btn-primary" name="%s">Add to Cart</button></p>', $obj->alt);
                echo '</div>';
                echo '</div>';
                $column++;
                if($column == 4){
                    echo '</div>';
                    echo '<div class="card-group">';
                    $column = 0;
                }
            }
            // Free result set
            $result -> free_result();
        }
        $mysqli -> close();
        //shuffle array
        // function shuffle_assoc(&$array) {
        //     $keys = array_keys($array);
        //     shuffle($keys);
        //     foreach($keys as $key) {
        //         $new[$key] = $array[$key];
        //     }
        //     $array = $new;
        //     return true;
        // }
    ?>
<?php
    include('../footer.php');
?>