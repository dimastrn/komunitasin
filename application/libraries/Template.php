<?php 

class Template {

	function display_template($template, $data=null) {
		$_this =& get_instance();
		
		$template_data = array(
			'__header' => $_this->load->view('template/header', $data),
			'__content' => $_this->load->view($template, $data),			
			'__footer' => $_this->load->view('template/footer', $data)
		);
		$_this->load->view('app', $template_data);

	}	

}


 ?>