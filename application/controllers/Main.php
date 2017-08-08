<?php

require (APPPATH . '/libraries/AssistedController.php');

class Main extends assisted\Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Item');
    $this->load->library('session');
  }
  public function index() {
    $this->conventionView( function(){
      return['heading'=>'@', 'title'=>'@'];
    });
  }
  public function acquisition () {
    $this->on(['GET', 'POST'], function($t) {
      $t->load->view('main/acquisition', ['heading'=>'@', 'title'=>'@']);
    }, function($t) {
      $id = $t->Item->insert($data = $t->input->post());
      //$r [] = $id; foreach($data as $e) $r []= $e;
      $t->session->set_flashdata('msg', 'Record Inserted: ');
      redirect('main/acquisition');
      #print_r($id);
    });
  }

}

