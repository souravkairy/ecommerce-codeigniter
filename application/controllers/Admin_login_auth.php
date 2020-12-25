<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class Admin_login_auth extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('back_end/admin_login_form');
	}
	public function admin_auth()
	{
		$user_email = $this->input->post('user_email', true);
		$user_password = $this->input->post('user_password', true);

		// $encrypt_password = password_hash($user_password, PASSWORD_DEFAULT);
		// echo $encrypt_password;
		// exit();

 
		$user_details = $this->auth_model->get_user_details($user_email);
	

			if (password_verify($user_password, $user_details->user_password) && $user_details->user_status == 1 && $user_details->user_email == $user_email) {
			

				$session_data['user_email'] = $user_details ->user_email;
				$session_data['user_name'] = $user_details ->user_name;
				$session_data['user_status'] = $user_details ->user_status; 
				$session_data['user_role'] = $user_details ->user_role;
				$session_data['user_id'] = $user_details ->user_id;
	

				$this->session->set_userdata($session_data);
				redirect('admin_dashboard');
				
				}else
				{
					$data['error_message'] = "Not a valid user";
						$this->load->view('back_end/admin_login_form' ,$data);
						
				}
				 
		
	
		
	}
	public function logout()
	{ 
		$this->session->sess_destroy();
		redirect('admin');
		//aikane ami route er address diyechi
	}

	
}
	







?>