<?php

class Slider extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('slider_model');
	}

	public function load_slider_images()
	{
		$this->load->template_admin('admin/slider');
	}
	public function slider_assessor()
	{
		$this->load->template_admin('admin/slider_assessor');
	}

	public function all_slider()
	{
		$this->datatables->select('id,slider_photo')
			->from('audition_slider')
			->unset_column('id')
			->unset_column('slider_photo')
			->add_column('Sliders', '$1', 'callback_slider_image(slider_photo)')
			->add_column('Change', '$1', 'callback_slider_change(id)')
			->add_column('Delete', '$1', 'callback_slider_delete(id)');
		echo $this->datatables->generate();
	}
	public function slider_button_title_link()
	{
		$this->datatables->select('id,slider_title,slider_url,slider_button_name')
			->from('audition_slider')
			->unset_column('id')
			->add_column('Change', '$1', 'callback_slider__button_link_title(id)');
			// ->add_column('Delete', '$1', 'callback_slider_delete(id)');
		echo $this->datatables->generate();
	}
	public function buttons(){
		$id = $this->input->get('id');
        $data = $this->slider_model->button_data($id);
        $this->load->template_admin('admin/edit_assessory', $data);
	}
	public function update_data(){
		$id = $this->input->post('id');
        $data['slider_title'] = $this->input->post('slider_title');
        $data['slider_url'] = $this->input->post('slider_url');
        $data['slider_button_name'] = $this->input->post('slider_button_name');
        $result = $this->slider_model->update_button_data($id, $data);
        $this->load->template_admin('admin/slider_assessor');
	}
}
