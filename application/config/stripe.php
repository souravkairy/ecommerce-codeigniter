<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
|  Stripe API Configuration
| -------------------------------------------------------------------
|
| You will get the API keys from Developers panel of the Stripe account
| Login to Stripe account (https://dashboard.stripe.com/)
| and navigate to the Developers » API keys page
|
|  stripe_api_key        	string   Your Stripe API Secret key.
|  stripe_publishable_key	string   Your Stripe API Publishable key.
|  stripe_currency   		string   Currency code.
*/
$config['stripe_api_key']         = 'sk_test_51HeLGOIxGxCTMOQgEUNZyHCVOsjDfEyPHE3zeKoy5MrQUu3GKxMmEL0yOtt6TiIS8DoLTvSlw9R1o4JUmoGfg4Oz00ERt5PukI'; 
$config['stripe_publishable_key'] = 'pk_test_51HeLGOIxGxCTMOQg2Oxi0GDewrwJ0bEqGhdsTZNgiQnkDAXNhQL51VPINry6f1FSFQATjxWb1324vAgtcs3DtddR00Hn96Jwdz'; 
$config['stripe_currency']        = 'BDT';