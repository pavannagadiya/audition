<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Razorpay\Api\Api as RazorpayApi;
use Razorpay\Api\Errors\SignatureVerificationError;

class Site extends CI_Controller
{
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
        $this->load->model("slider_model");
        $data['result'] = $this->slider_model->get_all_slides();
        $this->load->new_template('newClient/index', $data);
    }

    public function reg()
    {
        $this->load->template_reg('newClient/reg');
    }
    public function razorPaySuccess()
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
			$this->user_model->create_user($data);
		}
		return $data;
    }
}
