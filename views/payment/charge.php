<?php
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_51In2nBD7AXOGluzgd5ouW53uREdkax4YW4AWkx9dhFYF9UjCVV5liLUHcZP37Whguurk1xg0iEibBrH2DTZyC1VV00BOub2kij');

// $POST=filter_var_array($_POST,FILTER_SANITIZE_STRING);

// $firstName=$POST['firstName'];
// $lastName=$POST['lastName'];
// $Email=$POST['Email'];
// $token=$POST['stripeToken'];










$customer=\Stripe\Customer::create(array(
 'email'=>$Email,
 'source'=>$token,
));

$charge=\Stripe\Charge::create(array(
    'amount'=>3000,
    'currency'=>'usd',
    'description'=>'intro to react cours',
    'customer'=>$customer->id,
));
print_r($charge);

$customer=new Customer();
$customer->addCostumer($charge->customer,$firstName,$lastName,$Email);


$transaction=new Transaction();
$transaction->addTransaction($charge->id,$charge->customer,$charge->description,$charge->amount,$charge->currency,$charge->status)


 ?>