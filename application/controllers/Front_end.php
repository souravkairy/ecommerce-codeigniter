<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


	class Front_end extends CI_Controller
	{
		 
		// function __construct(argument)
		// {
		// 	# code...
		// }
 

		public function index()
		{
			$data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = $this->load->view('front_end/slider','',true);

			$pdata['all_p_product'] = $this->front_end_model->all_p_product();
			$data['p_products'] = $this->load->view('front_end/p_products',$pdata,true);
			$bdata['banner_one_data'] = $this->front_end_model->banner_one_data();
			$data['banner_one'] = $this->load->view('front_end/banner_one',$bdata,true);
			$ldata['all_l_product'] = $this->front_end_model->all_l_product();
			$data['l_products'] = $this->load->view('front_end/l_products',$ldata,true);
			$data['banner_two'] = $this->load->view('front_end/banner_two','',true);
			$tdata['all_t_product'] = $this->front_end_model->all_t_product();
			$data['top_products'] = $this->load->view('front_end/top_products',$tdata,true);

			$this->load->view('front_end/master' , $data);
		}



		public function product_details($p_id)
		{
			$data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = '';
			$ddata['product_details'] =  $this->front_end_model->product_details($p_id);
			$data['p_products'] = $this->load->view('front_end/product_details',$ddata,true);
			$data['banner_one'] = '';
			$data['l_products'] = '';
			$data['banner_two'] = '';
			$data['top_products'] = '';
			$this->load->view('front_end/master' , $data);
		}
		public function product_review()
		{
			$data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = '';
			$ddata['product_review'] =  $this->front_end_model->product_review();
	
			$data['p_products'] = $this->load->view('front_end/product_details',$ddata,true);
			$data['banner_one'] = '';
			$data['l_products'] = '';
			$data['banner_two'] = '';
			$data['top_products'] = '';
			$this->load->view('front_end/master' , $data);
		}
		public function add_to_cart()
		{
			$product_id = $this->input->post('p_id',true);
		    $o_qty = $this->input->post('o_qty',true);
		    $product_info = $this->front_end_model->select_product_by_id($product_id);




		$data = array(
			'id'      => $product_info->p_id,
			'qty'     => $o_qty,
			'price'   => $product_info->s_price,
			'name'    => $product_info->p_name,
			'options' => array('image' => $product_info->image1)
		);




		$this->cart->insert($data);
		return redirect('show-cart');

		}

		public function delete_to_cart($rowid)
		{
				$data = array(
				'rowid' => $rowid,
				'qty'   => 0
			);

			$this->cart->update($data);
			return redirect('show-cart');
		}
		public function update_cart()
		{
			$rowid = $this->input->post('rowid',true);
		    $qty = $this->input->post('qty',true);
		    $data = array(
			'rowid' => $rowid,
			'qty'   => $qty
		);

		$this->cart->update($data);
		return redirect('show-cart');
		}

		public function sign_up_form()
		{
			$this->load->view('front_end/sign_up_form');
		}
		public function save_customer_info()
		{
			$customer_id = $this->front_end_model->save_customer_info();

			$cdata = array();
			$cdata['first_name'] = $this->input->post('first_name');
			$cdata['customer_id'] = $customer_id;
			$this->session->set_userdata($cdata);
			redirect('Checkout');
			
		}


		public function customer_login()
		{
			$email = $this->input->post('email', true);
		    $password = $this->input->post('password', true);

		    $encrypt_password = md5($password);

		// $encrypt_password = password_hash($user_password, PASSWORD_DEFAULT);
		// echo $encrypt_password;
		// exit();


		$user_details = $this->front_end_model->get_customer_details($email);

			if ($encrypt_password == $user_details->password && $user_details->email == $email) {
			

				$session_data['email'] = $user_details ->email;
				$session_data['first_name'] = $user_details ->first_name;
				$session_data['customer_id'] = $user_details ->customer_id; 
				// $session_data['user_role'] = $user_details ->user_role;
				// $session_data['user_id'] = $user_details ->user_id;
				

				$this->session->set_userdata($session_data);
				redirect('/');
				
				}else
				{
					// $data['error_message'] = "Not a valid user";
					// 	$this->load->view('back_end/admin_login_form' ,$data);

					echo "kdhfgjdfh";
						
				}
		}





		public function customer_logout()
	{ 
		$this->session->sess_destroy();
		redirect('/');
		//aikane ami route er address diyechi
	}

		public function show_cart()
	{

            $data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = '';
			$data['p_products'] = $this->load->view('front_end/show_cart','',true);
			$data['banner_one'] = '';
			$data['l_products'] = '';
			$data['banner_two'] = '';
			$data['top_products'] = '';
			$this->load->view('front_end/master' , $data);

	}
		public function products()
		{

			
			$data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = '';
			$data['all_product'] = $this->front_end_model->all_product();
			$data['p_products'] = $this->load->view('front_end/all_products',$data,true);
			$data['banner_one'] = '';
			$data['l_products'] = '';
			$data['banner_two'] = '';
			$data['top_products'] = '';
			$this->load->view('front_end/master' , $data);
		}
		public function about()
		{
			$data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = '';
			$data['p_products'] = $this->load->view('front_end/about','',true);
			$data['banner_one'] = '';
			$data['l_products'] = '';
			$data['banner_two'] = $this->load->view('front_end/banner_two','',true);
			$data['top_products'] = '';
			$this->load->view('front_end/master' , $data);
		}
		public function cart()
		{
			$data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = '';
			$data['p_products'] = $this->load->view('front_end/cart','',true);
			$data['banner_one'] = '';
			$data['l_products'] = '';
			$data['banner_two'] = '';
			$data['top_products'] = '';
			$this->load->view('front_end/master' , $data);
		}
		public function checkout()
		{
			$data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = '';
			$data['p_products'] = $this->load->view('front_end/checkout','',true);
			$data['banner_one'] = '';
			$data['l_products'] = '';
			$data['banner_two'] = '';
			$data['top_products'] = '';
			$this->load->view('front_end/master' , $data);
		}
		public function blog()
		{
			$data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = '';
			$data['p_products'] = $this->load->view('front_end/blog','',true);
			$data['banner_one'] = '';
			$data['l_products'] = '';
			$data['banner_two'] = '';
			$data['top_products'] = '';
			$this->load->view('front_end/master' , $data);
		}
		public function contact()
		{
			$data = array();
			$data['header'] = $this->load->view('front_end/header','',true);
			$data['footer'] = $this->load->view('front_end/footer','',true);
			$data['slider'] = '';
			$data['p_products'] = $this->load->view('front_end/contact','',true);
			$data['banner_one'] = '';
			$data['l_products'] = '';
			$data['banner_two'] = '';
			$data['top_products'] = '';
			$this->load->view('front_end/master', $data);
		}
		public function place_order()
		{

		
		$last_id = $this->front_end_model->save_shipping_info();



		$shipping_info = array();
		$shipping_info['shipping_info'] = $this->front_end_model->shipping_info($last_id);

		// print_r($shipping_info);
		// exit();

		
		$data = array();
		$data['header'] = $this->load->view('front_end/header','',true);
		$data['footer'] = $this->load->view('front_end/footer','',true);
		$data['slider'] = '';
		$data['p_products'] = $this->load->view('front_end/payment',$shipping_info,true);
		$data['banner_one'] = '';
		$data['l_products'] = '';
		$data['banner_two'] = '';
		$data['top_products'] = '';
		$this->load->view('front_end/master' , $data);
		}
		public function order_now()
		{

			$order_id = $this->front_end_model->placed_customer_order();

			// $order_id = $this->front_end_model->order_id();

			$all_p_details = $contents = $this->cart->contents();
			foreach ($all_p_details as $row) {
				


				$od_data = array();
				$od_data['order_id'] = $order_id;
				$od_data['product_id'] = $row['id'];
				$od_data['product_name'] = $row['name'];
				$od_data['product_price'] = $row['price'];
				$od_data['product_sales_qty'] = $row['qty'];
				$od_data['status'] = 1 ;

				$s_order = $this->front_end_model->save_order_info($od_data);
				

			}
			$this->cart->destroy();
			redirect('Confirm-Message');



			
		
			
		}
		public function c_m()
		{

		
		$data = array();
		$data['header'] = $this->load->view('front_end/header','',true);
		$data['footer'] = $this->load->view('front_end/footer','',true);
		$data['slider'] = '';
		$data['p_products'] = $this->load->view('front_end/confirm_message','',true);
		$data['banner_one'] = '';
		$data['l_products'] = '';
		$data['banner_two'] = '';
		$data['top_products'] = '';
		$this->load->view('front_end/master' , $data);
		}




	}




?>