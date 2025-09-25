<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function motor_insurence_detail()
	{
		$this->load->view('motor_insurence_detail');
	}
	public function bike_insurence_detail()
	{
		$this->load->view('bike_insurence_detail');
	}
	public function commercial_insurence_detail()
	{
		$this->load->view('commercial_insurence_detail');
	}
	public function travel_insurence_detail()
	{
		$this->load->view('travel_insurence_detail');
	}
	public function health_insurence_detail()
	{
		$this->load->view('health_insurence_detail');
	}
	public function life_insurence_detail()
	{
		$this->load->view('life_insurence_detail');
	}
	public function personal_accident_detail()
	{
		$this->load->view('personal_accident_detail');
	}
}
