<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    echo 'I am the index method in Exampe-controller';
  }
  public function first(){
    echo 'I am the first method in Exampe-controller';
  }
  public function second(){
    $this->load->view('example/second');
  }
  public function third(){
    $fname='Lisa';
    $data['name']=$fname;
    $this->load->view('example/third',$data);
  }

  public function show_name(){
    $this->load->model('Example_model');
    $data['aname']=$this->Example_model->getName();
    $data['students']=$this->Example_model->getStudents();
    //print_r($data);
    $this->load->view('example/show_name',$data);

  }

}
