<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getBooks(){
    $this->db->select('*');
    $this->db->from('book');
    return $this->db->get()->result_array();
  }
  public function addBook($insert_data){
    $this->db->insert('book',$insert_data);
    return $this->db->affected_rows();
  }

}
