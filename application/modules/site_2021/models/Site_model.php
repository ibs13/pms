<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function save($data, $table) {
        if ($this->db->insert($table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($data, $id, $field, $table) {
        $this->db->where($field, $id);
        if ($this->db->update($table, $data)) {
            return true;
        } else {
            return false;
        }
    }  

    public function get_product_info() {
        $this->db->from('product');
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $query = $this->db->get()->result();        
        return $query;
    }

    public function get_details_product_data($id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id', $id);
        $q = $this->db->get()->row();
        return $q;
    }

    public function get_product_info_publish() {
        $this->db->from('product');
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        
        return $query;
    }

    public function product(){
        $this->db->select('pro.*, u.first_name');        
        $this->db->from('product pro');
        $this->db->join('users u', 'u.id = pro.user_id');
        $this->db->where('status', 1);
        $query_result=$this->db->get();
        $product=$query_result->result(); 
        return $product;
    }
}
