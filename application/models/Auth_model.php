<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Auth_model extends CI_Model
{
	
	public function get_user_details($user_email)
	{
		$user_details = $this->db->select('*')
							 ->from('admin_user')
							 ->where('user_email',$user_email)
							 ->get()
							 ->row();
		return $user_details;
	}
}




?>