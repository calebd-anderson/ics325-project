<?php
    include('header.php');
    $merchandise = array (  'bbflife'=>     array(1.99,'http://www.articdiving.com/images/products/130513170128.jpg','Arctic Diving Equipment'),
                            'ff9'=>         array(4.99,'http://www.stuffedsafari.com/v/vspfiles/photos/GU-4048304-2.jpg','Polar Bear Stuffed Animal'),
                            'gahansel'=>    array(3.99,'http://www.stuffedsafari.com/v/vspfiles/photos/AR-19273-2.jpg','Penguin Stuffed Animal'),
                            'sthedgehog'=>  array(1.99,'https://i.ebayimg.com/images/i/121551654350-0-1/s-l1000.jpg','Arctic Fox Stuffed Animal'),
                            'tturning'=>    array(5.99, 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Arctic_circle.svg/1200px-Arctic_circle.svg.png', 'Map of the Arctic'),
                            'tphotograph'=> array(6.99, 'https://machavok.files.wordpress.com/2011/02/ergo-mixed-tool.png', 'Climbing Ice Pick'),
                            'boprey'=>      array(7.99, 'https://www.frankssports.com/Assets/ProductImages/WR_16107_BLK.JPG', 'Arctic Coat'),
                            'trsection'=>   array(2.99, 'https://image.sportsmansguide.com/adimgs/l/1/180123_ts.jpg', 'Boots')
    );
?>
<link rel="stylesheet" href="stylesheet.css">
<fieldset class='fieldset'>
    <legend>
<span class="bigl">C</span>hasing<span class="bigl"> A</span>rctic<span class="bigl"> M</span>erchandise
</legend>
<table>
<?php                        
    //associative multidimensional loop
    shuffle_assoc($merchandise);
    $column = 0;
    echo '<tr>';
    foreach($merchandise as $key => $value){
        echo '<td class="card">';
        // echo '<div class="container">';
        echo '<img src="'.$value[1].'" alt="'.$key.'"'.
        " width=\"200\" height=\"316\"/>";                            
        // echo '<input type="checkbox" name="'.$key.'" id="checkbox-1-1" class="regular-checkbox">';
        // echo '</div>';
        echo '<div>'.$value[2].'</div>';
        echo '<p class="price">$'.$value[0].'</p>';
        echo '<p>Some text about the jeans..</p>';
        echo '<p><button name="'.$key.'">Add to Cart</button></p>';
        echo '</td>';
        $column++;
        if($column == 5){
            echo '</tr>';
            echo '<tr>';
            $column = 0;
        }
    }
    echo '</tr>';
    function shuffle_assoc(&$array) {
        $keys = array_keys($array);
        shuffle($keys);
        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }
        $array = $new;
        //return true;
    }
?>
</table>
</fieldset>

<?php
    include('../footer.php');
?>