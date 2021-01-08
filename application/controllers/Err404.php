<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Err404 extends Frontend_Controller {

	function __construct (){
		parent::__construct();
		
	}

	public function index()
	{
		//dump('Frontend Controller');
		$this->data['page_title'] = '404 - Page Not Found';
		$this->data['subview'] = 'err404/index';
    	$this->load->view('frontend/_layout_main', $this->data);
	}
}
