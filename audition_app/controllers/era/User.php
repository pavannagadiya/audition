<?php

use \Firebase\JWT\JWT;
use Razorpay\Api\Api as RazorpayApi;
use Razorpay\Api\Errors\SignatureVerificationError;

class User extends Audi_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    /* ----------------------------------------------------------------------------------------------
this method for create new user in db */
    public function create_user_post()
    {
        $this->form_validation->set_data($this->post());
        if ($this->form_validation->run('user_detail') === true) {
            $email = $this->post('user_email');
            $phone = $this->post('user_contact');
            $checkemail = $this->user_model->check_email($email, $phone);

            if (!empty($checkemail)) {
                $response = [
                    'status' => false,
                    'message' => 'This email-id or phone number is already registered.',
                ];
                $this->response($response, REST_Controller::HTTP_OK);
            } else {
                /* $data['user_contact'] = $this->post('user_contact');
                $data['user_email'] = $this->post('user_email');
                $data['user_state'] = $this->post('user_state');
                $data['user_name'] = $this->post('user_name');
                $data['user_categories'] = $this->post('user_categories');
                $data['experience'] = $this->post('experience');
                $data['qualification'] = $this->post('qualification');
                $data['taluko'] = $this->post('taluko');
                $data['district'] = $this->post('district');
                $data['user_address'] = $this->post('user_address');


                $result = $this->user_model->create_user($data); */
                /* $user_image = $this->user_image_post($result); */
                /* if (empty($user_image['status'])) {
                    $response = [
                        'status' => false,
                        'message' => 'User Registration completed but image not uploaded.',
                    ];
                    $this->response($response, REST_Controller::HTTP_OK);
                } */

                /* if (!empty($result)) {
                    $response = [
                        'status' => true,
                        'message' => 'User create successful.',
                        'id' => $result
                    ];
                } else {
                    $response = [
                        'status' => false,
                        'message' => 'Problem in creating user.',
                    ];
                } */
                $response = [
                        'status' => true,
                        'message' => 'User create successful.',
                    ];

                $this->response($response, REST_Controller::HTTP_OK);
        	}
        } else {
            $response = [
                'status' => false,
                'message' => validation_errors(),
            ];
            $this->response($response, REST_Controller::HTTP_OK);
        }
    }

    public function get_all_participants_get()
    {
        $result = $this->user_model->get_all_participants();
        if (!empty($result)) {
            $response = [
                'status' => true,
                'data' => $result,
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'No user found !!!',
            ];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }
    public function checkDate_post()
    {
		$mobile = $this->post('mobile');
		$result = $this->user_model->checkDate($mobile);
        if (!empty($result)) {
            $response = [
                'status' => true,
                'data' => $result['assign_date'],
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'No user found !!!',
            ];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    // public function user_image_post($id)
    // {
    //     /* print_r($id);die; */
    //     $this->load->library('upload');
    //     $dataInfo = array();
    //     $files = $_FILES;
    //     $cpt = count($_FILES['user_image']['name']);
    //     $result = [];
    //     for ($i = 0; $i < $cpt; $i++) {
    //         $_FILES['userfile']['name'] = $files['user_image']['name'][$i];
    //         $_FILES['userfile']['type'] = $files['user_image']['type'][$i];
    //         $_FILES['userfile']['tmp_name'] = $files['user_image']['tmp_name'][$i];
    //         $_FILES['userfile']['error'] = $files['user_image']['error'][$i];
    //         $_FILES['userfile']['size'] = $files['user_image']['size'][$i];

    //         $this->upload->initialize($this->set_upload_options());
    //         $this->upload->do_upload();
    //         $dataInfo = $this->upload->data();
    //         $images[] = $dataInfo['file_name'];

    //         $data['user_id'] = $id;
    //         $data['user_photo'] = $dataInfo['file_name'];

    //         $data['img_istitle'] = 0;
    //         if ($i == 0) {
    //             $data['img_istitle'] = 1;
    //         }

    //         /* split image name */
    //         $str_arr = explode(".", $data['user_photo']);
    //         $extension = end($str_arr); /* get last extension */
    //         /* split image name */

    //         /* check image extension */
    //         if ($str_arr[1] == 'gif' || $str_arr[1] == 'jpg' || $str_arr[1] == 'png' || $str_arr[1] == 'jpeg') {
    //             $result = $this->user_model->user_image($data);
    //         } else {
    //             return false;
    //         }
    //         /* check image extension */
    //     }

    //     if (!empty($result)) {
    //         $data1['error'] = "success";
    //         $data1['status'] = true;
    //         return $data1;
    //     } else {
    //         $data1['error'] = $this->upload->display_errors();
    //         $data1['status'] = false;
    //         return $data1;
    //     }
    // }

    // private function set_upload_options()
    // {
    //     //upload an image options
    //     $config = array();
    //     $config['upload_path'] = './audition_asset/images/user_images/';
    //     $config['allowed_types'] = 'gif|jpg|png|jpeg';
    //     $config['max_size'] = '0';

    //     return $config;
	// }
	
	public function razorPaySuccess_post()
    {
        $data = [
            'payment_id' => $this->input->post('razorpay_payment_id'),
			'amount' => $this->input->post('totalAmount'),
			'user_contact' => $this->input->post('user_contact'),
			'user_email' => $this->input->post('user_email'),
			'user_state' => $this->input->post('user_state'),
			'user_name' => $this->input->post('user_name'),
			'user_categories' => $this->input->post('user_categories'),
			'experience' => $this->input->post('experience'),
			'qualification' => $this->input->post('qualification'),
			'taluko' => $this->input->post('taluko'),
			'district' => $this->input->post('district'),
			'user_address' => $this->input->post('user_address'),

        ];
        $api = new RazorpayApi(RZP_KEY_ID, RZP_KEY_SECRET);
        $payment  = $api->payment->fetch($data['payment_id']);
        $payment->capture(array('amount' => ($data['amount'] * 100)));
		$data['TransactionNumber'] = $payment->id;
		$data['Status'] = $payment->status;
		$data['PaymentType'] = $payment->method;
		if (!empty($payment->id)) {
			$result = $this->user_model->create_user($data);
			if (!empty($result)) {
				$response = [
					'status' => true,
					'message' => 'User create successful.',
				];
				$this->response($response, REST_Controller::HTTP_OK);
            }
		}
	}
}
