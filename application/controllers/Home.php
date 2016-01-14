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
		$this->form_validation->set_rules('xDate', 'Date', 'required|callback_date_valid');
		$this->form_validation->set_rules('amount', 'Amount', 'trim|regex_match[/^\d+(,\d{1,3})?$/]');
		$this->form_validation->set_rules('description', 'Description', 'trim|max_length[255]');

		if ($this->form_validation->run() == FALSE) {
			//fail validation
			$this->load->view('input_view');
		} else {
			$amount = $this->input->post('amount');
			$val = floatval(str_replace(',', '.', $amount));
			echo "Success<br>" . $amount . " --> " . $val;
			echo "<br>" . $this->input->post('xDate');
		}
	}

	    //custom date validation function (except leap year)
    function date_valid($str)
    {
		$month = substr($str,5,2);
		$day = substr($str,8,2);

        if (!preg_match("/^2[0-1]\d\d-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])$/", $str)) {
			$this->form_validation->set_message('date_valid', 'Date format should be yyyy-mm-dd');
            return FALSE;
		}
		elseif ($month === "02" and $day >29) {
			$this->form_validation->set_message('date_valid', 'Invalid date!');
			return FALSE;
		}
		elseif ((($month === "04") or ($month === "06") or ($month === "09") or ($month === "11")) and $day >30) {
			$this->form_validation->set_message('date_valid', 'Invalid date!');
			return FALSE;
		}
		else {
			return TRUE;
		}
    }

}
