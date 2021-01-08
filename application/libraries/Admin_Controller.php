<?php
class Admin_Controller extends MY_Controller
{
	var $AdminControllerName;

	function __construct ()
	{
		parent::__construct();

		$this->AdminControllerName = 'admin';		

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <i class="fa fa-warning"></i>', '</div>');
		
		$this->data['site_name'] = 'Admin Panel';
		$this->data['website_url'] = 'http://localhost/pms/admin';
		$this->data['admin_meta_title'] = 'Product Management System';
		
	
	}
}