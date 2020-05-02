<?php
    include('header.php');
?>


        <h1>I Will Manage Your Membership</h1>
        <!--
            - make a form with recuring payment date select 
            - amount select
        -->
        <div id="payment-box">
                <img src="paypal/images/camera.jpg" />
                <h4 class="txt-title">One Time Payment</h4>
                <div class="txt-price">$50.00</div>
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr"
                    method="post" target="_top">
                    <input type='hidden' name='business'
                        value='sb-dwdy31641136@business.example.com'> <input type='hidden'
                        name='item_name' value='Camera'> <input type='hidden'
                        name='item_number' value='CAM#N1'> <input type='hidden'
                        name='amount' value='50'> <input type='hidden'
                        name='no_shipping' value='1'> <input type='hidden'
                        name='currency_code' value='USD'> <input type='hidden'
                        name='notify_url'
                        value='http://ics325.calebdanderson.net/paypal/notify.php'>
                    <input type='hidden' name='cancel_return'
                        value='http://ics325.calebdanderson.net/paypal/cancel.php'>
                    <input type='hidden' name='return'
                        value='http://ics325.calebdanderson.net/paypal/return.php'>
                    <input type="hidden" name="cmd" value="_xclick"> <input
                        type="submit" name="pay_now" id="pay_now"
                        Value="Pay Now">
                </form>
            </div>
        <?php
            include('footer.php');
        ?>