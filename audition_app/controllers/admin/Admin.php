<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->template_admin_login('admin/login');
	}
	public function home()
	{
		$data = $this->user_model->user_counts();
		$this->load->template_admin('admin/index',$data);
	}
	public function check_login()
    {
        $name = $this->input->post('username');
        $encryption = $this->input->post('password');
        $pass =md5($encryption);

        $check = $this->user_model->check_login($name, $pass);

        if ($check) {
            $this->session->set_userdata('admin_info', $check);
            redirect('admin/home');
        } else {
            $this->session->set_flashdata('msg', 'Email or Password woring');
			redirect('admin/index');
        }

	}
	public function logout()
    {
        $this->session->unset_userdata('admin_info');
        redirect('admin/index');
    }
}
