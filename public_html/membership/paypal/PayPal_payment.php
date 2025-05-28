<?php
    include('header.php');

    echo '<div class="container">';
    if (extension_loaded("curl")) {
        // cURL is loaded...
        if (str_contains($_SERVER['SERVER_NAME'], 'localhost'))
            echo '<strong style="color:green;">cURL is loaded.</strong></br>';
    } else {
        // cURL is not loaded...
        echo '<strong style="color:red;">cURL is not loaded. </strong></br>';
        echo '<strong>Required extension to record the payment in the database is not enabled on the server.</strong>';
        echo '<p>However the sandbox payment will still work.</p>';
    }
?>
<!-- <h2>I Will Manage Your Membership</h2> -->
<!--
    - make a form with recuring payment date select 
    - amount select
-->
    <p>
      ** Testing Only (using PayPal Sandbox) **
    </p>   
<div id="payment-box" class="text-center">
        <h4 class="txt-title">One Time Payment</h4>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type='hidden' name='business' value='sb-dwdy31641136@business.example.com'> 
            <input type='hidden' name='item_name' value='Donation'> 
            <input type='hidden' name='item_number' value='DONA#N1'>
<!-- Payment Amount Options -->
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
<!-- PayPal Callbacks -->
            <input type='hidden' name='no_shipping' value='1'> 
            <input type='hidden' name='currency_code' value='USD'>
            <input type='hidden' name='notify_url' value='https://ics325.azurewebsites.net/membership/paypal/notify.php'>
            <input type='hidden' name='cancel_return' value='https://ics325.azurewebsites.net/membership/paypal/cancel.php'>
            <input type='hidden' name='return' value='https://ics325.azurewebsites.net/membership/paypal/return.php'>
            <input type="hidden" name="cmd" value="_xclick"> 
            <input type="submit" name="pay_now" id="pay_now" Value="Pay Now">
        </form>
    </div>

<!-- <script src="js/jquery.mask.min.js"></script> -->
<script>
    //money mask
    // $(document).ready(function(){
    //     $('.money').mask('000,000,000,000,000.00', {reverse: true});
    // });
</script>
<?php
  echo '</div>';
    include('../../footer.php');
?>
