<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index(){
		$this->load->view('blog/index');
	}

	public function view($judul=NULL){
		echo $judul;
	}
}