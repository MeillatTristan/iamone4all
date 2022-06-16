<?php

require 'env.php';
require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey($DEV_SECRET_KEY);

// header('Content-Type: application/json');


$prix = $_REQUEST['price'];
$YOUR_DOMAIN = 'http://localhost/one4all/iamone4all';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => $prix,
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

// header("HTTP/1.1 303 See Other");
// header("Location: " . $checkout_session->url);