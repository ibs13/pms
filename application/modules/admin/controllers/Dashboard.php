<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct(){
        parent::__construct();
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        if (!$this->ion_auth->logged_in()):
            redirect($this->AdminControllerName);
        elseif(!$this->ion_auth->is_admin()):
            redirect($this->AdminControllerName.'/login');
        endif;

         $this->load->model('Dashboard_model');
    }

	public function index()
	{
		$results = $this->Dashboard_model->get_user_count();
        $this->data['members']  = $results['num_rows'];

        $results1 = $this->Dashboard_model->get_product_count();
        $this->data['products']  = $results1['num_rows'];
        
		$this->data['page_title'] = 'Dashboard';
		$this->data['subview'] = 'dashboard/index';
    	$this->load->view('backend/_layout_main', $this->data);
	}

    public function product(){
        $this->data['product'] = $this->Dashboard_model->product();

        $this->data['page_title'] = 'Product List';
        $this->data['subview'] = 'dashboard/product';
        $this->load->view('backend/_layout_main', $this->data);
    }	

    public function users(){
        $this->data['users'] = $this->Dashboard_model->users();

        $this->data['page_title'] = 'User List';
        $this->data['subview'] = 'dashboard/user_list';
        $this->load->view('backend/_layout_main', $this->data);
    }   

}