<?php
    include('header.php');
    require '../../SQLcreds.inc';

    $mysqli = mysqli_init();
    mysqli_ssl_set($mysqli,NULL,NULL, $cert, NULL, NULL);
    mysqli_real_connect($mysqli, $servername, $SQLuser, $SQLpswd, $dbname, 3306, MYSQLI_CLIENT_SSL);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    $sql = "SELECT * FROM products";
?>
<div class="container-fluid">
<h1><span class="bigl">C</span>hasing<span class="bigl"> A</span>rctic<span class="bigl"> M</span>erchandise</h1>
<form method="post" action="store_index.php?action=add&code=<?php echo @$product_array[$key]["code"]; ?>">
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
            printf('<p class="card-text">
            <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">QTY</span>
            </div>
            <input type="number" class="form-control" name="quantity" min="0" max="5" value="0" size="1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">            
            <button type="submit" class="btn btn-primary" name="%s">Add to Cart</button>
            </div></p>', $obj->prodID);
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
    echo '</form>';

    // $sql = "INSERT * FROM products";

    $mysqli -> close();

    //ordered items array
    // $stack = array("orange", "banana");
    // array_push($stack, "apple", "raspberry");
    // print_r($stack);
?>
</div>
<?php
    include('../footer.php');
?>