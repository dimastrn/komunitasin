<?php 

/**
 * 
 */
class User extends CI_Controller
{
		protected $username_temp;
	  public function login()
    {
        $this->load->library('form_validation');
        $input = $this->input->post(NULL, TRUE);            
        $this->username_temp = @$input['username'];                     
        $run_login = $this->form_validation->run('login');
        if($run_login == FALSE){                            
            $this->load->view('pages/login');               
        } else {
            $this->load->library('session');
            $login_data = array(
                'username' => $input['username'],
                'login_status' => TRUE
            );

            $this->session->set_userdata($login_data);

            redirect(site_url('pengurus'));
        }           
        
        if($run_login == FALSE){
            $this->session->set_flashdata('alert', 'danger');
            $this->session->set_flashdata('msg', "Username dan Password anda salah!");
        }               

    }

    public function logout()
    {        
        $this->session->sess_destroy();
        redirect(site_url('user/login'));
    }

    public function username_check($str)
    {
        $this->load->model('Admin_model');
        if($this->Admin_model->exist_row_check('username', $str) > 0) {
            return FALSE;               
        } else {
            return TRUE;
        }
    }

    public function password_check($str)
    {
        $this->load->model('Admin_model');
        $user_detail = $this->Admin_model->get_user_detail($this->username_temp);
        if($user_detail) {
            if($user_detail->password == crypt($str, $user_detail->password)){
                return TRUE;
            } 
        } else {
        	return FALSE;
        }
    }
}

 ?>