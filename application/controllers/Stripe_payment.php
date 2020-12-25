<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Stripe_payment extends CI_Controller
{
	
		public function stripe_payment_dashboard()
		{
			


			$data = array();
		
		// Get product data from the database
        $product = $this->cart->contents();
		
		// If payment form is submitted with token
		if($this->input->post('stripeToken')){
			// Retrieve stripe token, card and user info from the submitted form data
			$postData = $this->input->post();
			$postData['product'] = $product;
			
			// Make payment
			$paymentID = $this->payment($postData);
			
			// If payment successful
			if($paymentID){
				redirect('front_end/payment_status/'.$paymentID);
			}else{
				$apiError = !empty($this->stripe_lib->api_error)?' ('.$this->stripe_lib->api_error.')':'';
				$data['error_msg'] = 'Transaction has been failed!'.$apiError;
			}
		}
        
        // Pass product data to the details view
		$data['product'] = $product;
        $this->load->view('front_end/stripe_payment', $data);
      }

      	function payment($postData){
		
		// If post data is not empty
		if(!empty($postData)){
			// Retrieve stripe token, card and user info from the submitted form data
			$token  = $postData['stripeToken'];
			$name = $postData['name'];
			$email = $postData['email'];
			$card_number = $postData['card_number'];
			$card_number = preg_replace('/\s+/', '', $card_number);
			$card_exp_month = $postData['card_exp_month'];
			$card_exp_year = $postData['card_exp_year'];
			$card_cvc = $postData['card_cvc'];
			
			// Unique order ID
			$orderID = strtoupper(str_replace('.','',uniqid('', true)));
			
			// Add customer to stripe
			$customer = $this->stripe_lib->addCustomer($email, $token); 
			
			if($customer){
				// Charge a credit or a debit card
				$charge = $this->stripe_lib->createCharge($customer->id, $postData['product']['name'], $postData['product']['subtotal'], $orderID);
				
				if($charge){
					// Check whether the charge is successful
					if($charge['amount_refunded'] == 0 && empty($charge['failure_code']) && $charge['paid'] == 1 && $charge['captured'] == 1){
						// Transaction details 
						$transactionID = $charge['balance_transaction'];
						$paidAmount = $charge['amount'];
						$paidAmount = ($paidAmount/100);
						$paidCurrency = $charge['currency'];
						$payment_status = $charge['status'];
						
						
						// Insert tansaction data into the database
						$orderData = array(
							'product_id' => $postData['product']['id'],
							'buyer_name' => $name,
							'buyer_email' => $email,
							'card_number' => $card_number,
							'card_exp_month' => $card_exp_month,
							'card_exp_year' => $card_exp_year,
							'paid_amount' => $paidAmount,
							'paid_amount_currency' => $paidCurrency,
							'txn_id' => $transactionID,
							'payment_status' => $payment_status
						);
						$orderID = $this->product->insertOrder($orderData);
						
						// If the order is successful
						if($payment_status == 'succeeded'){
							return $orderID;
						}
					}
				}
			}
		}
		return false;
    }
    function payment_status($id){
		$data = array();
		
		// Get order data from the database
        $order = $this->product->getOrder($id);
		
        // Pass order data to the view
		$data['order'] = $order;
        $this->load->view('front_end/payment_status', $data);
    }


}









?>
