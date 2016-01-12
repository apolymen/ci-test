<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('retrieve_model');
    }

    public function index() {
        //$this->one();
        $this->two();
    }

    public function one() {
        $query = $this->retrieve_model->get_fields();
        $data['people'] = $query->result();
        $this->load->view('home_view', $data);
    }

    public function two() {
        $this->table->set_heading('FirstName', 'LastName', 'Country');
        $query = $this->retrieve_model->get_fields();
        $data['people'] = $this->table->generate($query);
        $this->load->view('alt_home_view', $data);
    }

    public function input() {
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|regex_match[/^[0-9]+,[0-9]+$/]');

        if ($this->form_validation->run() == FALSE) {
            //fail validation
            $this->load->view('input_view');
        } else {
            echo "Success";
        }
    }

}
