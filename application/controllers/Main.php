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
    $this->load->view('layouts/main/header');
    $this->conventionView( function(){
      return['heading'=>'main', 'title'=>'main'];
    });
    $this->load->view('layouts/main/footer');
  }
  public function acquisition () {
    $this->on(['GET', 'POST'], function($t) {
      $t->load->view('layouts/main/header');
      $t->load->view('main/acquisition', ['heading'=>'@', 'title'=>'@']);
      $t->load->view('layouts/main/footer');
    }, function($t) {
      $id = $t->Item->insert($data = $t->input->post());
      $t->session->set_flashdata('msg', 'Record Inserted.' );
      redirect('main/acquisition');
      #print_r($id);
    });
  }

}

