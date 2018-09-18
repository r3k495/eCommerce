<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("itemModel");
    }

    public function item(){
        $this->load->model("itemModel");
        $data['res']=$this->itemModel->getItem('1');
        $this->load->view('customer/header');
        $this->load->view('item/item', $data);
        $this->load->view('customer/footer');
        //foreach($res as $row){
        //     $iid = $row->item_id;
        //     $iname = $row->item_name;
        //     $price = $row->price;
        //     $iamount = $row->item_amount;            
        // }
        // echo $iid;
        // echo $iname;
        // echo $price;
        // echo $iamount;
    }
    public function index(){
    	$data['item'] = $this->itemModel->getItem('3');
    	$this->load->view('customer/header');
    	$this->load->view('item/item.php', $data);
    	$this->load->view('customer/footer');
    }
}