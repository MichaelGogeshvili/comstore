<?php
namespace assisted;

class Controller extends \CI_Controller {
  protected function conventionView($cbk) {
    if(is_callable($cbk)) {
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

  protected function on() {
    $at = func_get_args();
    $events = array_shift($at);
    $t = array_search($this->input->method(TRUE), $events);
    if($t !== false) {
      $handler = $at[$t] ?? null;
    }
    if($handler)
      return $handler($this);
    else
      return FALSE;
  }
}
