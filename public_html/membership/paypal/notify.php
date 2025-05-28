<?php namespace Listener;
include("DBController.php");
require('PaypalIPN.php');

use DBController;
use PaypalIPN;
use Exception;

$ipn = new PaypalIPN();

// Use the sandbox endpoint during testing.
$ipn->useSandbox();
$ipn->usePHPCerts();
$verified = $ipn->verifyIPN();

if ($verified) {
	if ( ! count($_POST)) {
		throw new Exception("Missing POST Data");
	}
	/*
     * Process IPN
     * A list of variables is available here:
     * https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/
	 * https://developer.paypal.com/api/nvp-soap/ipn/IPNandPDTVariables/
     */
	// assign posted variables to local variables
	$item_name = $_POST['item_name'];
	$item_number = $_POST['item_number'];
	$payment_status = $_POST['payment_status'];
	$payment_amount = $_POST['mc_gross'];
	$payment_currency = $_POST['mc_currency'];
	$txn_id = $_POST['txn_id'];
	$receiver_email = $_POST['receiver_email'];
	$payer_email = $_POST['payer_email'];
	
	$db = new DBController();
	
	// check whether the payment_status is Completed
	$isPaymentCompleted = false;
	if($payment_status == "Completed") {
		$isPaymentCompleted = true;
	}
	// check that txn_id has not been previously processed
	$isUniqueTxnId = false; 
	$param_type="s";
	$param_value_array = array($txn_id);
	$result = $db->runQuery("SELECT * FROM payment WHERE txn_id = ?", $param_type, $param_value_array);
	if(empty($result)) {
        $isUniqueTxnId = true;
	}
	// check that receiver_email is your PayPal email
	// check that payment_amount/payment_currency are correct
	if($isPaymentCompleted) {
	    $param_type = "sssdss";
	    $param_value_array = array($item_number, $item_name, $payment_status, $payment_amount, $payment_currency, $txn_id);
	    $payment_id = $db->insert("INSERT INTO payment(item_number, item_name, payment_status, payment_amount, payment_currency, txn_id) VALUES(?, ?, ?, ?, ?, ?)", $param_type, $param_value_array);
	} 
	// process payment and mark item as paid.
}

// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");
?>
