<?php
    include('header.php');
?>

<img src="../images/interface.png" height="150" width="auto"/>
<div class="btn-group-vertical">
    <a class="btn btn-secondary" href="new_member_form.php">
        <svg class="bi bi-person-check-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm9.854-2.854a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0l-1.5-1.5a.5.5 0 01.708-.708L12.5 7.793l2.646-2.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
        </svg> Create an Account
    </a>
    <a href="paypal/PayPal_payment.php" class="btn btn-secondary"><img src="http://paypal.com/favicon.ico"/> PayPal One Time Payment</a>
    <a href="stripe/" class="btn btn-secondary"><img src="https://stripe.com/favicon.ico"/> Stripe Payment</a>
</div>

<?php
    include('../footer.php');
?>