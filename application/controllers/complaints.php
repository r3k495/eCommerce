<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaints extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("complaintsModel");
    }
    public function home(){
        $this->load->view('complaints/header');
		$this->load->view('complaints/home');
		$this->load->view('complaints/footer');
    }
    public function complaints(){
        $data = array(
            'Name' => $this->input->post('name'),
            'cust_id' => $this->input->post('cust_id'),
            'order_id' => $this->input->post('order_id'),
            'item_id' => $this->input->post('item_id'),
            'date' => $this->input->post('date')
        );
        $this->complaintsrModel->addComplaint($data);
        $this->home();
    }
}