<?php
    include('header.php');

    // ini_set('display_startup_errors',1);
    // ini_set('display_errors',1);
    // error_reporting(-1);

    // include("paypal/DBController.php");
    // $db = new DBController();
    // $memberID = $db->memberID;
    
    // // assign logged-in user memberID to local variable
	// require('../SQLcreds.inc');
    // $conn = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // $username = $_SESSION['username'];
    // $memberID = (int)$conn->query("SELECT memberID FROM member_creds WHERE username = '$username'")->fetch_object()->memberID;
    // $query3 = "DELETE FROM member_contact WHERE memberID = LAST_INSERT_ID();";
    // $stmt3 = $conn->prepare($query3);
    // $stmt3->execute();
    // $_SESSION['memberID'] = (int)$memberID;
    // $_SESSION['memberID'] = $memberID;
    // $memberID = (int)$_SESSION['memberID'];
    // echo '<p>Your member ID type: '.gettype($_SESSION['memberID']).'</p>';
    // echo '<p>Your member ID: '.$_SESSION['memberID'].'</p>';
    // $memberID = (int)$memberID;
    // $memberID = (int)NULL;
    // echo '<p>Your memberID type: '.gettype($memberID).'</p>';
    // echo '<p>Your memberID: '.$memberID.'</p>';
    // echo '<p>Your session ID: '.session_id().'</p>';
    // session_start();
    // $memberID = $_SESSION['memberID'];
    // $string = "string";
    // $param_value_arr = array($string, $memberID);
    // echo '<p>memberID: '.$memberID.'</p>';
    // echo '<p>memberID type: '.gettype($memberID).'</p>';
    // echo '<p>memberID array type: '.gettype($param_value_arr[1]).'</p>';
    // echo '<p>string array type: '.gettype($param_value_arr[0]).'</p>';
            
    // $sql = "UPDATE payment SET memberID = '$memberID' WHERE txn_id = '$txn_id'";
    // $db->query($sql);
?>
<!-- <h2>I Will Manage Your Membership</h2> -->
<!--
    - make a form with recuring payment date select 
    - amount select
-->
    <p>
        <h6>For testing purposes use these credentials when checking out:</h6>
        sb-yvwrt1637485@personal.example.com</br>
        0pd*jS0M
    </p>   
<div id="payment-box" class="text-center">
        <!-- <img src="paypal/images/camera.jpg" /> -->
        <h4 class="txt-title">One Time Payment</h4>
        <!-- <div class="txt-price">$50.00</div> -->
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type='hidden' name='business' value='sb-dwdy31641136@business.example.com'> 
            <input type='hidden' name='item_name' value='Donation'> 
            <input type='hidden' name='item_number' value='DONA#N1'>
            <!-- <input type='hidden' name='memberID' value='<?php //$memberID ?>'> -->
            <!-- <input type='hidden' name='memberID' value='1'> -->
            <!-- <input type='currency' name='amount' placeholder='Type an amount...'/> -->

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="amount" id="inlineRadio1" value="5">
                <label class="form-check-label" for="inlineRadio1">$5.00</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="amount" id="inlineRadio2" value="10">
                <label class="form-check-label" for="inlineRadio2">$10.00</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="amount" id="inlineRadio3" value="25">
                <label class="form-check-label" for="inlineRadio3">$25.00</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="amount" id="inlineRadio4" value="50">
                <label class="form-check-label" for="inlineRadio4">$50.00</label>
            </div>

            <input type='hidden' name='no_shipping' value='1'> 
            <input type='hidden' name='currency_code' value='USD'>
            <input type='hidden' name='notify_url' value='http://ics325.calebdanderson.net/paypal/notify.php'>
            <input type='hidden' name='cancel_return' value='http://ics325.calebdanderson.net/paypal/cancel.php'>
            <input type='hidden' name='return' value='http://ics325.calebdanderson.net/paypal/return.php'>
            <input type="hidden" name="cmd" value="_xclick"> 
            <input type="submit" name="pay_now" id="pay_now" Value="Pay Now">
        </form>
    </div>

<!-- <script src="js/jquery.mask.min.js"></script> -->
<script>
    //phone mask
    // $(document).ready(function(){
    //     $('.money').mask('000,000,000,000,000.00', {reverse: true});
    // });
</script>
<?php
    include('../footer.php');
?>