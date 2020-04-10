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
<!-- <div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div> -->
<link rel="stylesheet" href="stylesheet.css">
<!-- <section> -->
    <h1>
        <span class="bigl">C</span>hasing<span class="bigl"> A</span>rctic<span class="bigl"> M</span>erchandise
    </h1>
    <?php                        
        //loop card rows
        shuffle_assoc($merchandise);
        $column = 0;
        echo '<div class="card-group">';
        foreach($merchandise as $key => $value){
            echo '<div class="card">';
            echo '<img class="card-img-top" src="'.$value[1].'" alt="'.$key.'"/>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$value[2].'</h5>';
            echo '<p class="price">$'.$value[0].'</p>';
            echo '<p class="card-text">Some text about the jeans..</p>';
            echo '<p class="card-text"><button name="'.$key.'">Add to Cart</button></p>';
            echo '</div>';
            echo '</div>';
            $column++;
            if($column == 4){
                echo '</div>';
                echo '<div class="card-group">';
                $column = 0;
            }
        }
        //shuffle array
        function shuffle_assoc(&$array) {
            $keys = array_keys($array);
            shuffle($keys);
            foreach($keys as $key) {
                $new[$key] = $array[$key];
            }
            $array = $new;
            return true;
        }
    ?>
<!-- </section> -->
<?php
    include('../footer.php');
?>