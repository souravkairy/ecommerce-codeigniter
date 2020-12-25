<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admin_dashboard_model extends CI_Model
{
	
	public function add_category()
	{
		    $data['category_name'] = $this->input->post('category_name' , 'TRUE');
			$data['category_desc'] = $this->input->post('category_desc' , 'TRUE');
			$data['status'] = 1;
			
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";		

           $this->db->insert('product_category', $data);
	}
	public function all_category()
	{
			$data = $this->db->select('*')
					 ->from('product_category')
					 ->get()
					 ->result();
		return $data;
	}
	public function all_sub_category()
	{
			$data = $this->db->select('*')
					 ->from('product_sub_category')
					 ->join('product_category','product_sub_category.category_id = product_category.category_id')
					 ->select('product_category.category_name')
					 ->get()
					 ->result();
		return $data;
	}
	public function add_sub_category()
	{
		    $data['sub_cat_name'] = $this->input->post('sub_category_name' , 'TRUE');
			$data['category_id'] = $this->input->post('category_id' , 'TRUE');
			$data['status'] = 1;
			
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";		

           $this->db->insert('product_sub_category', $data);
	}
	public function add_brand()
	{
		    $data['brand_name'] = $this->input->post('brand_name' , 'TRUE');
			$data['brand_desc'] = $this->input->post('brand_desc' , 'TRUE');
			$data['status'] = 1;
			
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";		

           $this->db->insert('brand', $data);
	}
	public function all_brand()
	{
			$data = $this->db->select('*')
					 ->from('brand')
					 ->get()
					 ->result();
		return $data;
	}

	private function upload_product_image()
	{
		$config['upload_path']          = './products_image/'; 
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;  //kb
        $config['max_width']            = 20000;
        $config['max_height']           = 17680; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image1')) {
        	$data = $this->upload->data();
        	//ami nice path doriye diyechi
        	$image_path = "products_image/$data[file_name]";
        	return $image_path;
        }
        else
        {
        	$errors = $this->upload->display_errors();
        	print_r($errors);
        }

	}
	public function save_product()
	{
		$product_data = $this->input->post(NULL ,TRUE);
		// $top_product = $this->input->post('top_product' , TRUE);

		// if ($top_product == NULL) {
		// 	$product_data['top_product'] = 0;		 
		// }
		// else
		// {
		// 	$product_data['top_product'] = 1;
		// }


		$product_data['status'] = 1;
		$product_data['image1'] = $this->upload_product_image();
		$this->db->insert('product_table' , $product_data);


	}
	public function all_products()
	{
		$data = $this->db->select('*')
					 ->from('product_table')
					 ->join('product_category','product_table.category_id = product_category.category_id')
					 ->join('product_sub_category','product_table.sub_cat_id = product_sub_category.sub_cat_id')
					 ->join('brand','product_table.brand_id = brand.brand_id')
					 ->select('product_category.category_name','product_sub_category.sub_cat_name','brand.brand_name')
					 ->get()
					 ->result();
		return $data;
	}
	public function p_products()
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
	public function l_products()
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
	public function t_products()
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


	private function upload_banner_image()
	{
		$config['upload_path']          = './banner_image/'; 
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;  //kb
        $config['max_width']            = 20000;
        $config['max_height']           = 17680; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('banner_image')) {
        	$data = $this->upload->data();
        	//ami nice path doriye diyechi
        	$image_path = "banner_image/$data[file_name]";
        	return $image_path;
        }
        else
        {
        	$errors = $this->upload->display_errors();
        	print_r($errors);
        }

	}
	public function save_banner()
	{
		$banner_data = $this->input->post(NULL ,TRUE);
		// $top_product = $this->input->post('top_product' , TRUE);

		// if ($top_product == NULL) {
		// 	$product_data['top_product'] = 0;		 
		// }
		// else
		// {
		// 	$product_data['top_product'] = 1;
		// }


		$banner_data['status'] = 1;
		$banner_data['banner_image'] = $this->upload_banner_image();
		$this->db->insert('banner' , $banner_data);


	}
	public function banner_one()
	{
		$data = $this->db->select('*')
					 ->from('banner')					
					 ->where('status' , 1)
					 ->get()
					 ->result();
		return $data;
	}
	public function store_mail()
	{
		    $data['c_name'] = $this->input->post('c_name' , 'TRUE');
			$data['m_desc'] = $this->input->post('m_desc' , 'TRUE');
			$data['m_sub'] = $this->input->post('m_sub' , 'TRUE');
			$data['c_email'] = $this->input->post('c_email' , 'TRUE');		

           $this->db->insert('mail', $data);
	}
	public function all_mail()
	{
		$data = $this->db->select('*')
					 ->from('mail')					
					 ->get()
					 ->result();
		return $data;
	}
		public function all_mail_by_id($c_id)
	{
		$user_details = $this->db->select('*')
							 ->from('mail')
							 ->where('c_id', $c_id)
							 ->get()
							 ->row();
		return $user_details;
	}
	public function pending_order()
	{
		$user_details = $this->db->select('*')
							 ->from('customer_order')
							 // ->join('customer_order_details','customer_order.order_id = customer_order_details.order_id')
							 // ->select('customer_order_details.*')
							 ->get()
							 ->result();
		return $user_details;
	}
	public function order_details($id)
	{
		$user_details = $this->db->select('*')
							 ->from('customer_order_details')
							 ->where('customer_order_details.order_id' , $id)
							 ->join('customer_order','customer_order_details.order_id = customer_order.order_id')
							 ->get()
							 ->result();
		return $user_details;
	}
	public function s_o_details($id)
	{
		$user_details = $this->db->select('*')
							 ->from('shipping_info')
							 ->where('shipping_info.customer_id' , $id)
							 ->join('customer_order','shipping_info.shipping_id = customer_order.shipping_id')
							 ->join('customer_order_details','customer_order.order_id = customer_order_details.order_id')
							 ->get()
							 ->result();
		return $user_details;
	}
}










?>