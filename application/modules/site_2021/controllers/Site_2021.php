<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_2021 extends Frontend_Controller {

	function __construct (){
		parent::__construct();
        
        $this->data['meta_title'] = 'Assignment Task from Bright Brains';
        $this->data['meta_keywords'] = 'Assignment Task from Bright Brains';
        $this->data['meta_description'] = 'Assignment Task from Bright Brains';
        $this->data['page_title'] = '';
        $this->load->model('site_model');
	}

	public function index()
	{
        $this->data['product'] = $this->site_model->product();
        
		$this->data['meta_title'] = 'Landing Page';        
		$this->data['subview'] = 'index';
    	$this->load->view('frontend_2021/_layout_main', $this->data);
	}

    public function product_owner_panel(){
        if (!$this->ion_auth->logged_in()){
            redirect('registration', 'refresh');
        }
        $this->data['product_info'] = $this->site_model->get_product_info();
        $this->data['meta_title'] = 'Product Owner Panel';
        $this->data['subview'] = 'product_owner_panel';
        $this->load->view('frontend_2021/_layout_main', $this->data);
    }


    public function registration(){
        if ($this->ion_auth->logged_in()){
            redirect('product-owner-panel', 'refresh');
        }

        $tables = $this->config->item('tables','ion_auth');

        //validate form input
        $this->form_validation->set_rules('name', $this->lang->line('create_user_validation_name_label'), 'required');
        $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique['.$tables['users'].'.email]');
        $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

        if ($this->form_validation->run() == true)
        {
            $email    = strtolower($this->input->post('email'));
            $password = $this->input->post('password');

            $additional_data = array(
                'first_name' => ucwords($this->input->post('name'))
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register($email, $password, $additional_data))
        {
            //check to see if we are creating the user
            //redirect them back to the admin page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect(base_url().'login', 'refresh');
        }
        else
        {
            //display the create user form
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['name'] = array(
                'name'  => 'name',
                'id'    => 'name',
                'type'  => 'text',
                'class' => 'form-control',
                'placeholder' => '',
                'required' => 'required',
                'value' => $this->form_validation->set_value('name'),
            );
            $this->data['email'] = array(
                'name'  => 'email',
                'id'    => 'email',
                'type'  => 'email',
                'class' => 'form-control',
                'placeholder' => '',
                'required' => 'required',
                'value' => $this->form_validation->set_value('email'),
            );
            $this->data['password'] = array(
                'name'  => 'password',
                'id'    => 'password',
                'type'  => 'password',
                'class' => 'form-control',
                'placeholder' => '',
                'required' => 'required',
                'value' => $this->form_validation->set_value('password'),
            );
            $this->data['password_confirm'] = array(
                'name'  => 'password_confirm',
                'id'    => 'password_confirm',
                'type'  => 'password',
                'class' => 'form-control',
                'placeholder' => '',
                'required' => 'required',
                'value' => $this->form_validation->set_value('password_confirm'),
            );

            //Load page
            $this->data['meta_title'] = 'Registration';
            $this->data['subview'] = 'registration';
            $this->load->view('frontend_2021/_layout_main', $this->data);
        }
        
    }    

    public function login(){
        $this->data['meta_title'] = 'Login';

        if ($this->ion_auth->logged_in()):
            redirect('registration');
        endif;

        //validate form input
        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true)
        {
            //check to see if the user is logging in
            //check for "remember me"

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password')))
            {
                //if the login is successful
                //redirect them back to the home page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('product-owner-panel', 'refresh');
            }
            else
            {
                //if the login was un-successful
                //redirect them back to the login page
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
            }
        }
        else
        {
            //the user is not logging in so display the login page
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->data['identity'] = array('name' => 'identity',
                'id' => 'identity',
                'class' => 'form-control',
                'placeholder' => "Email Address",
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $this->data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'class' => 'form-control',
                'placeholder' => "Password",
            );

            //Load page
            $this->data['subview'] = 'login';
            $this->load->view('frontend_2021/_layout_main', $this->data);
        }
    }

    function logout()
    {
        // log the user out
        $logout = $this->ion_auth->logout();

        // redirect them to the login page
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect(base_url().'login', 'refresh');
    }

    public function add_product(){
        if (!$this->ion_auth->logged_in()){
            redirect('login', 'refresh');
        }

        $this->form_validation->set_rules('product_name', 'product_name', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');

        if (empty($_FILES['userfile']['name'])){
            $this->form_validation->set_rules('userfile', 'Document', 'required');            
        }

        if ($this->form_validation->run() == true){
            $new_name = time().$_FILES["userfile"]['name'];
            //FILE UPLOAD   
            $config['upload_path']   = './documents/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']      = '20000';
            $config['max_width']     = '2400';
            $config['max_height']    = '1800';
            $config['file_name']     = $new_name;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile',FALSE)){
                $this->form_validation->set_message('checkdoc', $data['error'] = $this->upload->display_errors());

                if ($this->upload->display_errors()) {
                    $this->session->set_flashdata('upload_errors', $this->upload->display_errors());
                   return false;
                }
            }
            $file_data = $this->upload->data();

            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'product_name' => $this->input->post('product_name'),
                'color' => $this->input->post('color'),
                'price' => $this->input->post('price'),
                'status' => $this->input->post('status'),
                'file_name' => $file_data['file_name'],
                'submit_date' => date("Y-m-d H:i:s")
            );
            if($this->site_model->save($form_data, 'product')){                
                $this->session->set_flashdata('success', 'Add Product Information Successfully.');
                redirect("product-owner-panel");
            }
        }

        $this->data['meta_title'] = 'Add Product';
        $this->data['subview'] = 'add_product';
        $this->load->view('frontend_2021/_layout_main', $this->data);
    }

    public function update_product($id){
        if (!$this->ion_auth->logged_in()){
            redirect('login', 'refresh');
        }

        $this->form_validation->set_rules('product_name', 'product_name', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');

        if (empty($_FILES['userfile']['name'])){
            $this->form_validation->set_rules('userfile', 'Document');            
        }
        

        if ($this->form_validation->run() == true){

            if (!empty($_FILES['userfile']['name'])){

            $new_name = time().$_FILES["userfile"]['name'];
            //FILE UPLOAD   
            $config['upload_path']   = './documents/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']      = '20000';
            $config['max_width']     = '2400';
            $config['max_height']    = '1800';
            $config['file_name']     = $new_name;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile',FALSE)){
                $this->form_validation->set_message('checkdoc', $data['error'] = $this->upload->display_errors());

                if ($this->upload->display_errors()) {
                    $this->session->set_flashdata('upload_errors', $this->upload->display_errors());
                    return false;
                }
            }
            $file_data = $this->upload->data();

        }

            $form_data = array(
                'product_name' => $this->input->post('product_name'),
                'color' => $this->input->post('color'),
                'price' => $this->input->post('price'),
                'status' => $this->input->post('status')
            );
            if($this->site_model->edit($form_data, $id, 'product_id', 'product')){                
                $this->session->set_flashdata('success', 'Product info update successfully.');
                redirect("product-owner-panel");
            }
        }

        $this->data['info'] = $this->site_model->get_details_product_data($id);

        $this->data['meta_title'] = 'Update Product';
        $this->data['subview'] = 'update_product';
        $this->load->view('frontend_2021/_layout_main', $this->data);
    }

}