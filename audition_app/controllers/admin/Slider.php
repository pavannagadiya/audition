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
			->unset_column('slider_photo')
			->unset_column('id')
			->add_column('Sliders', '$1', 'callback_slider_image(slider_photo,id)');
		echo $this->datatables->generate();
	}
}
