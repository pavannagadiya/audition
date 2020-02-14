<?php

use \Firebase\JWT\JWT;

class Slider extends Audi_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('slider_model');
    }

    public function add_slider_post()
    {
        $image = $this->do_upload(); //odther method call here for image upload
        $data['slider_photo'] = $image['file_name'];

        $result = $this->slider_model->add_slider($data);
        if (!empty($result)) {
            $response = [
                'status' => true,
                'message' => 'Your Slider Image upload successful !!!',
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'Slider not upload !!!',
            ];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }
    public function change_slider_image_post()
    {
        $image = $this->do_upload(); //odther method call here for image upload
        $data['slider_photo'] = $image['file_name'];
        $id = $this->post('id');

        $result = $this->slider_model->change_slider_image($id,$data);
        if (!empty($result)) {
            $response = [
                'status' => true,
                'message' => 'Your Slider Image upload successful !!!',
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'Slider not upload !!!',
            ];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }
    public function get_all_slides_get()
    {
        $result = $this->slider_model->get_all_slides();
        if (!empty($result)) {
            $response = [
                'status' => true,
                'data' => $result,
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'No slide found !!!',
            ];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }
    public function delete_slider_post()
	{
		$id = $this->post('id');
        $result = $this->slider_model->delete_slides($id);
        if (!empty($result)) {
            $response = [
                'status' => true,
                'data' => 'Slider Deleted!!!',
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'Something want wrong !!!',
            ];
        }
        $this->response($response, REST_Controller::HTTP_OK);
	}
    public function do_upload()
    {
        $config['upload_path'] = "./audition_asset/images/slider_images/"; //pathe where uploaded image store
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; //types of extensions
        $config['max_size'] = '0'; //max size allow to upload image

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('slider_photo')) {

            $error = $this->upload->display_errors();
            if ($error) {
                $response = [
                    'status' => false,
                    'message' => $error,
                ];
                $this->response($response, REST_Controller::HTTP_OK);
            }
        } else {
            return $this->upload->data();
        }
    }
}
