<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user_count() {
        // count query
        $this->db->select('COUNT(*) as count');
        $this->db->from('users');
        $q = $this->db->get()->result();

        $tmp = $q;
        $ret['num_rows'] = $tmp[0]->count;

        return $ret;
    }

    public function get_product_count() {
        // count query
        $this->db->select('COUNT(*) as count');
        $this->db->from('product');
        $q = $this->db->get()->result();

        $tmp = $q;
        $ret['num_rows'] = $tmp[0]->count;

        return $ret;
    }

    public function product(){
        $this->db->select('pro.*, u.first_name');        
        $this->db->from('product pro');
        $this->db->join('users u', 'u.id = pro.user_id');
        $query_result=$this->db->get();
        $product=$query_result->result(); 
        return $product;
    }

     public function users(){
        $this->db->select('u.*,COUNT(pro.user_id) as num,ug.group_id');
        $this->db->from('users u');
        $this->db->join('product pro', 'u.id = pro.user_id', 'left');
        $this->db->join('users_groups ug', 'u.id = ug.user_id', 'left');
        $this->db->where('ug.group_id=2');
        $this->db->group_by('u.id');
        $query_result=$this->db->get();
        $user=$query_result->result(); 
        return $user;
    }

}
