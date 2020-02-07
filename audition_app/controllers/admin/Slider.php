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
		$this->datatables->select('*')
			->from('audition_slider')
			->unset_column('slider_photo')
			->unset_column('id')
			->add_column('Image', '$1', 'callback_slider_image(slider_photo)');
		echo $this->datatables->generate();
	}
}
