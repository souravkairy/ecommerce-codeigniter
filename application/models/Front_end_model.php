<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Front_end_model extends CI_Model 
{
	
	public function all_p_product() 
	{
		$data = $this->db->select('*')
					 ->from('product_table')
					 ->join('product_category','product_table.category_id = product_category.category_id')
					 ->join('product_sub_category','product_table.sub_cat_id = product_sub_category.sub_cat_id')
					 ->join('brand','product_table.brand_id = brand.brand_id')
					 ->where('p_p' , 1)
					 ->get()
					 ->result();
		return $data;

	}
	public function all_l_product()
	{
		$data = $this->db->select('*')
					 ->from('product_table')
					 ->join('product_category','product_table.category_id = product_category.category_id')
					 ->join('product_sub_category','product_table.sub_cat_id = product_sub_category.sub_cat_id')
					 ->join('brand','product_table.brand_id = brand.brand_id')
					 ->where('l_p' , 1)
					 ->get()
					 ->result();
		return $data;

	}
	public function all_product()
	{
		$data = $this->db->select('*')
					 ->from('product_table')
					 ->join('product_category','product_table.category_id = product_category.category_id')
					 ->join('product_sub_category','product_table.sub_cat_id = product_sub_category.sub_cat_id')
					 ->join('brand','product_table.brand_id = brand.brand_id')
					 ->where('product_table.status', 1)
					 ->get()
					 ->result();
		return $data;

	}
	public function all_t_product()
	{
		$data = $this->db->select('*')
					 ->from('product_table')
					 ->join('product_category','product_table.category_id = product_category.category_id')
					 ->join('product_sub_category','product_table.sub_cat_id = product_sub_category.sub_cat_id')
					 ->join('brand','product_table.brand_id = brand.brand_id')
					 ->where('t_p' , 1)
					 ->get()
					 ->result();
		return $data;

	}
	public function banner_one_data()
	{
		$data = $this->db->select('*')
					 ->from('banner')
					 ->where('status' , 1)
					 ->get()
					 ->result();
		return $data;

	}
	public function product_details($p_id)
	{
		$data = $this->db->select('*')
					 ->from('product_table')
					 ->join('product_category','product_table.category_id = product_category.category_id')
					 ->join('product_sub_category','product_table.sub_cat_id = product_sub_category.sub_cat_id')
					 ->join('brand','product_table.brand_id = brand.brand_id')
					 ->where('p_id' , $p_id)
					 ->get()
					 ->row();
					 // ->result();
		return $data;

	}
	public function select_product_by_id($product_id)
	{
			$data = $this->db->select('*')
					 ->from('product_table')
					 // ->join('product_category','product_table.category_id = product_category.category_id')
					 // ->join('product_sub_category','product_table.sub_cat_id = product_sub_category.sub_cat_id')
					 // ->join('brand','product_table.brand_id = brand.brand_id')
					 ->where('p_id' , $product_id)
					 ->get()
					 ->row();
					 // ->result();
		return $data;
	}
	public function save_customer_info()
	{
		   $data['first_name'] = $this->input->post('first_name' , 'TRUE');
            $data['last_name'] = $this->input->post('last_name' , 'TRUE');
			$data['mobile_num'] = $this->input->post('mobile_num' , 'TRUE');
			$data['email'] = $this->input->post('email' , 'TRUE');
			$data['password'] =md5($this->input->post('password' , 'TRUE')) ;
	
				

           $this->db->insert('customer_info', $data);
           $customer_id = $this->db->insert_id();
           return $customer_id;


	}
	public function get_customer_details($email)
	{
		$user_details = $this->db->select('*')
							 ->from('customer_info')
							 ->where('email',$email)
							 ->get()
							 ->row();
		return $user_details;
	}
	public function save_shipping_info()
	{
		$shipping_info = $this->input->post(NULL ,TRUE);

		$shipping_info['status'] = 1;

		$this->db->insert('shipping_info', $shipping_info);
		$last_id = $this->db->insert_id();
           return $last_id;
	}
	public function shipping_info($last_id )
	{
		$user_details = $this->db->select('*')
							 ->from('shipping_info')
							 ->where('shipping_id',$last_id)
							 ->where('status',1)
							 ->get()
							 ->row();
		return $user_details;
	}
	public function placed_customer_order()
	{
		$placed_customer_order = $this->input->post(NULL ,TRUE);

		$placed_customer_order['order_status'] = 1;
		$placed_customer_order['payment_id'] = 'Cash On Delivery';

		$this->db->insert('customer_order', $placed_customer_order);
		 $order_id = $this->db->insert_id();
           return $order_id;

	}
	public function save_order_info($od_data)
	{
		// $save_order_info = $this->input->post(NULL ,TRUE);

		// $save_order_info['status'] = 1;

		$this->db->insert('customer_order_details', $od_data);

	}
	public function product_review()
	{
		$product_review = $this->input->post(NULL ,TRUE);

		$product_review['status'] = 1;

		$this->db->insert('comments', $product_review);
	}

}








?>