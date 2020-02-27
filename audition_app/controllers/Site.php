<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Razorpay\Api\Api as RazorpayApi;
use Razorpay\Api\Errors\SignatureVerificationError;

class Site extends CI_Controller
{

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
		$this->load->template('client/index', $data);
		//echo "<pre>";	print_r($data); exit();
	}

	public function reg()
	{
		$this->load->template_reg('client/reg');
	}
	public function razorPaySuccess()
	{
		$data = [
			'payment_id' => $this->input->post('razorpay_payment_id'),
			'amount' => $this->input->post('totalAmount')
		];
		$api = new RazorpayApi(RZP_KEY_ID, RZP_KEY_SECRET);
		$payment  = $api->payment->fetch($data['payment_id']);
		$payment->capture(array('amount' => ($data['totalAmount'] * 100)));
		print_r($payment);
		return true;
	}
}
