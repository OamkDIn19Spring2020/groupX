<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Book_model');
  }

  public function show_books(){
    $data['books']=$this->Book_model->getBooks();
    //print_r($data);
    $this->load->view('book/show_books',$data);
  }
  public function add_book(){
    $this->load->view('book/add_book');
  }
  public function insert_book(){
    //print_r($this->input->post());
    $insert_data=array(
      'name'=>$this->input->post('name'),
      'author'=>$this->input->post('author')
    );
    $test=$this->Book_model->addBook($insert_data);
    //echo 'inserted '.$test. 'books';
    redirect('book/show_books');
  }

}
