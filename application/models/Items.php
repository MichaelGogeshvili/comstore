<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Model {

  public $articul;
  public $description;
  public $price;

  public function insert($data) {
    $this->db->insert('items', $data);
    return $this->db->insert_id();
  }
}
