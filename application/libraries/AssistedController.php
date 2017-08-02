<?php
namespace assisted;

class Controller extends \CI_Controller {
  protected function _v_r($cbk) {
    #$this->benchmark->mark('code_start');
    // Some code happens here
    if(is_callable($cbk)){ 
      
      $rf = new \ReflectionFunction($cbk);

      $pq = array_map(function($_){ return $_->getName(); }, $rf->getParameters());
      $data = call_user_func_array($cbk, $pq);
    } else $data = $cbk;
    $F = debug_backtrace()[1]['function'];
    $C = debug_backtrace()[1]['class'];
    $this->load->view(strtolower($C).'/'.strtolower($F), $data);

    #$this->benchmark->mark('code_end');
    #echo '['.$this->benchmark->elapsed_time('code_start', 'code_end').']';
  }
}
