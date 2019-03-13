<?php 

/**
 * 
 */
class Mainlib
{
	
	public function logged_in() {
		$_this =& get_instance();
		$_this->load->helper('url');
		$_this->load->library('session');
		if ($_this->session->userdata('login_status') != TRUE) {
			redirect(site_url('user/login'));
		}
	}

}

 ?>