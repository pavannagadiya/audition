<?php

class Participants extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }

	public function load_participants()
    {
        $this->load->template_admin('admin/participants');
    }
	public function all_participants()
    {
        $this->datatables->select('u.id,u.user_name,u.user_email,u.user_state')
            ->from('user_registration u')
            ->unset_column('id')
            ->add_column('View', '$1', 'callback_user_view(id)');
        echo $this->datatables->generate();
	}
	public function date_assigned_user()
	{
		$this->load->template_admin('admin/date_assigned_participants');
	}
	public function date_assigned_participants()
    {
        $this->datatables->select('u.id,u.user_name,u.user_email,u.user_state')
			->from('user_registration u')
			->where('u.assign_date IS NOT NULL', null, false)
            ->unset_column('id')
            ->add_column('View', '$1', 'callback_user_view(id)');
        echo $this->datatables->generate();
    }
	public function date_not_assigned_user()
	{
		$this->load->template_admin('admin/date_not_assigned_participants');
	}
	public function date_not_assigned_participants()
    {
        $this->datatables->select('u.id,u.user_name,u.user_email,u.user_state')
			->from('user_registration u')
			->where('u.assign_date', null)
            ->unset_column('id')
            ->add_column('View', '$1', 'callback_user_view(id)');
        echo $this->datatables->generate();
    }
    public function single_user()
    {
        $id = $this->input->get('id');
        $data['user'] = $this->user_model->single_user($id);
        // echo"<pre>";print_r($data);die;
        $this->load->template_admin('admin/single_user',$data);
	}
	public function assigned_date_to_user()
    {
        $data['date'] = $this->user_model->dateNotAssignIds();
        $this->load->template_admin('admin/assign',$data);
	}
		
	public function formData()
	{
		$id = $this->input->post('ids[]');
		$date = $this->input->post('date');
		$this->user_model->assign_date($id,$date);
		$this->load->template_admin_login('admin/login');
	}
}
