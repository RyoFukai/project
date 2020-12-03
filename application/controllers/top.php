<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends MY_Controller {
	public function index()
	{
		$data = [];
		$this->smarty->view('top.tpl',$data);
	}
}
