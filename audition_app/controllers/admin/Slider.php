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
}
