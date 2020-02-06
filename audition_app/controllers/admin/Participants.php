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
        $this->datatables->select('u.id,u.user_name,u.user_email,u.user_state,p.user_photo')
            ->from('user_registration u')
            ->join('user_photos p', 'u.id = p.user_id AND p.img_istitle = 1', 'left outer')
            ->unset_column('id')
            ->unset_column('user_photo')
            ->add_column('Image', '$1', 'callback_user_image(user_photo)')
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
}
