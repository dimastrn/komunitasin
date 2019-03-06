<?php 

class Pengurus extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengurus_model');
    }

    public function index()
    {
        $data['komunitas'] = $this->Pengurus_model->read();
        $this->load->view('pengurus', $data);
    }

    public function tambah()
    {
        $post = $this->input->post();
        $data = array(
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'gender' => $post['gender'],
            'gaji' => $post['gaji']
        );
        $this->Pengurus_model->create($data);
        redirect('pengurus');
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $data['edit'] = $this->Pengurus_model->get_by_id($id);
        $this->load->view('edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'gender' => $post['gender'],
            'gaji' => $post['gaji']
        );
        $this->Pengurus_model->update($post['id_komunitas'], $data);
        redirect('pengurus');
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->Pengurus_model->delete($id);
        redirect('pengurus');
    }

}
?>