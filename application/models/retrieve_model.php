<?php

class Retrieve_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $query = $this->db->get('customers');  // Produces: SELECT * FROM customers
        return $query;
    }

    public function get_fields() {
        $this->db->select('contactFirstName, contactLastName, country');
        $this->db->from('customers');
        //$this->db->order_by('country', 'ASC');
        $query = $this->db->get();
        return $query;
    }

}
