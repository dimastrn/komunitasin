<?php 

/**
 * 
 */
class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
        $this->load->helper('site_helper');
        $this->mainlib->logged_in();    
	}

	public function index()
	{
		$data['admin'] = $this->Admin_model->read();
		$this->template->display_template('pages/admin', $data);
	}

	public function tambah()
    {
        $post = $this->input->post();
        $data = array(
            'username' => $post['username'],
            'password' => bCrypt($post['password'], 12),   
        );
        $this->Admin_model->create($data);
        redirect('admin');
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $data['edit'] = $this->Admin_model->get_by_id($id);
        $this->load->view('pages/inc/admin/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            'username' => $post['username'],
            'password' => $post['password']         
        );
        $this->Admin_model->update($post['id_admin'], $data);
        redirect('admin');
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->Admin_model->delete($id);
        redirect('admin');
    }

  

}


 ?>