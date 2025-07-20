<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

$stripeDetails = array(
		"secretKey" => "sk_test_51QiatJRqyCYsSZZ1v2nNprMlr0ilU4hIg1oxdHPFbRFrP6l7iVEVd4FLLkAiAwi1m5GDaYdiij9fGALbpMDrIaHh00CsjWdeBT",  //Your Stripe Secret key
		"publishableKey" => "pk_test_51QiatJRqyCYsSZZ1yA9MIZZYo1HNZpFL7yTgUe6RX8wJLUIvH8IGYF6lLxFchvpMAjmKLJ4in0sMqyn2dT4uf7ZK00cRA2TxUQ"  //Your Stripe Publishable key
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
