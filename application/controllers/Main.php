<?php

require (APPPATH . '/libraries/AssistedController.php');

class Main extends assisted\Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
  }
  public function index() { 
    $this->_v_r( function(){
      return['heading'=>'@', 'title'=>'@'];
    });  
  }
  public function acquisition () {
    $MET = $this->input->method(TRUE); 
    $MET = strtoupper($MET);
    switch($MET){
    case 'GET': 
      return $this->_v_r( function(){ 
        return['heading'=>'@', 'title'=>'@'];
      });
      
    default: 
      $Z = func_get_args() ?:  $this->input->post();
      print_r($Z);
      exit;
      redirect('main/index');
    }
  }
  private function _processPost(){
    ///todo
  }
  public function purchase () {
    //
  }
  public function login() {
    //todo
  }
  public function logout() {
    ///todo
  }
}

