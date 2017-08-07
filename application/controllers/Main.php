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
    if( stristr($this->input->method(TRUE), 'GET')!==false) {
      return $this->_v_r( function(){
        return['heading'=>'@', 'title'=>'@'];
      });
    }
    if( stristr($this->input->method(TRUE), 'POST')!==false) {
      if(true) {
        header('Content-type:text/plain');
      }
      if(true) {
        $items = $this->load->model('Items');
        $id = $this->Items->insert($this->input->post());
        fprintf($stderr, "XXX");
        //var_dump($id);
        //var_dump(__LINE__);exit;
      }
      redirect('main/acquisition');
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

