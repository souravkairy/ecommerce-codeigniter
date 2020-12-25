<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Back_end extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();

       if (!isset($this->session->user_id) && ($this->session->user_status != 1 )) {
       	# code...
       		redirect('admin_auth');

       }
       //aikane ami jate login na krle dashboard e na duke oitar code korsi 
                
    }
	
	public function index()
	{

		$data = array();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['pending_order'] = $this->admin_dashboard_model->pending_order();
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/dashboard',$data,true);
		$this->load->view('back_end/master', $data);
	}
	public function category()
	{

		$data = array();
		$data['all_category'] = $this->admin_dashboard_model->all_category();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/category',$data,true);
		$this->load->view('back_end/master', $data);

	}
	public function add_category()
	{
		$this->form_validation->set_rules('category_name', 'Category name ', 'required|max_length[255]');
		$this->form_validation->set_rules('category_desc', 'Category Description','required');
		

		if ($this->form_validation->run()){

			$this->admin_dashboard_model->add_category();

			redirect('Category');				

		}else
		{
			$data['error_message'] = "Please Input Data";
			$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
			$data['content'] = $this->load->view('admin/show_add_category_form',$data, TRUE);
			$this->load->view('admin/admin_master', $data);
			// redirect('Add-Category');
		}
	}
	public function sub_category()
	{
		$data = array();
		$data['all_category'] = $this->admin_dashboard_model->all_category();
		$data['all_sub_category'] = $this->admin_dashboard_model->all_sub_category();
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['dashboard'] = $this->load->view('back_end/sub_category',$data,true);
		$this->load->view('back_end/master', $data);
	}
	public function add_sub_category()
	{
		$this->form_validation->set_rules('sub_category_name', 'Category name ', 'required|max_length[255]');
		$this->form_validation->set_rules('category_id', 'Category Description','required');
		

		if ($this->form_validation->run()){

			$this->admin_dashboard_model->add_sub_category();

			redirect('Sub_category');				

		}else
		{
			$data['error_message'] = "Please Input Data";
			$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
			$data['content'] = $this->load->view('admin/show_add_category_form',$data, TRUE);
			$this->load->view('admin/admin_master', $data);
			redirect('Sub_category');
		}
	}



	public function brand()
	{
		$data = array();
		$data['all_brand'] = $this->admin_dashboard_model->all_brand();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/brand',$data,true);
		$this->load->view('back_end/master', $data);
	}

	public function add_brand()
	{
		$this->form_validation->set_rules('brand_name', 'Category name ', 'required|max_length[255]');
		$this->form_validation->set_rules('brand_desc', 'Category Description','required');
		

		if ($this->form_validation->run()){

			$this->admin_dashboard_model->add_brand();

			redirect('Brand');				

		}else
		{
			$data['error_message'] = "Please Input Data";
			$data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
			$data['content'] = $this->load->view('admin/show_add_category_form',$data, TRUE);
			$this->load->view('admin/admin_master', $data);
			// redirect('Add-Category');
		}
	}
	public function add_product_form()
	{
		$data = array();
		$data['all_category'] = $this->admin_dashboard_model->all_category();
		$data['all_sub_category'] = $this->admin_dashboard_model->all_sub_category();
		$data['all_brand'] = $this->admin_dashboard_model->all_brand();
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['dashboard'] = $this->load->view('back_end/add_product_form',$data,true);
		$this->load->view('back_end/master', $data);
	}
	public function save_product()
	{
        $upload_data = $this->admin_dashboard_model->save_product();

       	if ($upload_data) {

			$this->session->set_userdata('message','product saved successfully');
			redirect('Add_product_form');
		}
		else
		{
			$this->session->set_userdata('unseccessfullmessage','Please input data ');
	     	redirect('Add_product_form');
		}





		// $this->form_validation->set_rules('p_name', 'Product name ', 'required|max_length[255]');
		// $this->form_validation->set_rules('category_id', 'Product Short Description','required');
		// $this->form_validation->set_rules('sub_cat_id', 'Product Long Description', 'required|min_length[8]');
		// $this->form_validation->set_rules('brand_id', 'Product Quantity','required');
		// $this->form_validation->set_rules('color', 'Product Price','required');
		// $this->form_validation->set_rules('size', 'Product Price','required');
		// $this->form_validation->set_rules('s_price', 'Product Price','required');
		// $this->form_validation->set_rules('c_price', 'Product Price','required');
		// $this->form_validation->set_rules('promo_code', 'Product Price','required');
		// $this->form_validation->set_rules('video', 'Product Price','required');
		// $this->form_validation->set_rules('p_desc', 'Product Price','required');
	


		// if ($this->form_validation->run()) {


		// 	print_r('p_name');
		// 	exit();
		// 	$this->products_model->save_product();
		// 	$this->session->set_userdata('message','product saved successfully');
		// 	$this->add_product_form();

		// }else
		// {
		// 	echo "nai kisu";
		// 	$this->session->set_userdata('unseccessfullmessage','Please input data ');
		// 	$this->add_product_form();
		// 	// $data['success_message'] = "Please Input Data";
		// 	// $data['sidebar'] = $this->load->view('admindash/sidebar',$data, TRUE);
		// 	// $data['content'] = $this->load->view('admin/show_add_product_form',$data, TRUE);
		// 	// $this->load->view('admin/admin_master', $data);
		// }

	}
	public function products()
	{
		$data = array();
		$data['all_products'] = $this->admin_dashboard_model->all_products();
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['dashboard'] = $this->load->view('back_end/products',$data,true);
		$this->load->view('back_end/master', $data);
	}
	public function p_products()
	{
		$data = array();
		$data['p_products'] = $this->admin_dashboard_model->p_products();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/p_products',$data,true);
		$this->load->view('back_end/master', $data);
	}
	public function l_products()
	{
		$data = array();
		$data['l_products'] = $this->admin_dashboard_model->l_products();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/l_products',$data,true);
		$this->load->view('back_end/master', $data);
	}
	public function t_products()
	{
		$data = array();
		$data['t_products'] = $this->admin_dashboard_model->t_products();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/t_products',$data,true);
		$this->load->view('back_end/master', $data);
	}

	public function Banner_set()
	{
		$data = array();
		$data['banner_one'] = $this->admin_dashboard_model->banner_one();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/banner_setting',$data,true);
		$this->load->view('back_end/master', $data);
	}


	public function save_banner()
	{
        $upload_data = $this->admin_dashboard_model->save_banner();

       	if ($upload_data) {

			$this->session->set_userdata('message','product saved successfully');
			redirect('Banner-Set');
		}
		else
		{
			$this->session->set_userdata('unseccessfullmessage','Please input data ');
	     	redirect('Banner-Set');
		}

	}

	public function store_mail()
	{
		$this->admin_dashboard_model->store_mail();
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['success_message'] = "Data Inserted Successfully";
		redirect('Contact', $data);
	}
	public function mail()
	{

		$data = array();	
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
	
		$data['dashboard'] = $this->load->view('back_end/mail',$data,true);
		$this->load->view('back_end/master', $data);

	}
	public function mail_view($c_id)
		{
			$data = array();	
			$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
			$data['all_mail_by_id'] = $this->admin_dashboard_model->all_mail_by_id($c_id);
			$data['all_mail'] = $this->admin_dashboard_model->all_mail();
			$data['dashboard'] = $this->load->view('back_end/mail_view',$data,true);
			$this->load->view('back_end/master', $data);
		}
	public function pending_order()
	{

		$data = array();
		$data['pending_order'] = $this->admin_dashboard_model->pending_order();
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/pending_orders',$data,true);
		$this->load->view('back_end/master', $data);


	}
	public function order_details($id)
	{
		$data = array();
		$data['order_details'] = $this->admin_dashboard_model->order_details($id);
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/invoice',$data,true);
		$this->load->view('back_end/master', $data);
	}
	public function s_o_details($id)
	{
		$data = array();
		$data['s_o_details'] = $this->admin_dashboard_model->s_o_details($id);
		$data['sidebar'] = $this->load->view('back_end/sidebar','',true);
		$data['all_mail'] = $this->admin_dashboard_model->all_mail();
		$data['dashboard'] = $this->load->view('back_end/s_o_details',$data,true);
		$this->load->view('back_end/master', $data);
	}

	
}






?>