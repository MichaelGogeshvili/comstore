<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Model {
  //@Id;
  public $id;
  public $articul;
  public $description;
  public $price;

  protected $table_name = '';
  protected $primary_key = 'id';
  public function __construct(){ parent::__construct();
    $this->load->database();
    $this->load->helper('inflector');
    if(!$this->table_name) {
        $this->table_name = strtolower(plural(__CLASS__));
    }
  }
  public function get_all($f = '', $w = [], $t = '', $l = '', $o = '', $g = '') {
    if ($f!= '') { $this->db->select($f); }
    if (count($w)) { $this->db->where($w); }
    if ($t!= '') { $this->table_name = $t; }
    if ($l!= '') { $this->db->limit($l); }
    if ($o!= '') { $this->db->order_by($o); }
    if ($g!= '') { $this->db->group_by($g); }
    $Q = $this->db->get($this->table_name);
    $data = array();
    if ($Q->num_rows() > 0) {
      foreach ($Q->result_array() as $row) {
        $data[] = $row;
      }
    }
    $Q->free_result();
    return $data;
  }
  public function insert($data) {
    //$data['date_created']=$data['date_updated'] = date('Y-m-d H:i:s'); 
    //$this->input->ip_address(); #!
    return $this->db->insert($this->table_name, $data) ?
      $this->db->insert_id : FALSE;
  }
  public function update ($data, $id) {
    //$data
    $this->db->where($this->primary_key, $id);
    return $this->db->update($this->table_name, $data);
  }
  public function delete ($id) {
    $this->db->where($this->primary_key, $id);
    return $this->db->delete($this->table_name);
  }
}
