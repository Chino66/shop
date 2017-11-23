<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	public function index()
	{
		$this->load->view('download');

		$this -> load -> helper('download');
		force_download('ftp/test.gif', NULL);
	}
}
