<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{

	public function index()
	{
		$this->load->view('pages/admin/index');
	}
}
