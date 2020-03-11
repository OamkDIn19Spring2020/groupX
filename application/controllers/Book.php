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
    $data['page']='book/show_books';
    $this->load->view('menu/content',$data);
  }
  // public function add_book(){
  //   $this->load->view('book/add_book');
  // }
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
  public function edit_book(){
    $id_book=$this->input->post('id_book');
    $update_data=array(
      'name'=>$this->input->post('name'),
      'author'=>$this->input->post('author')
    );
    $test=$this->Book_model->updateBook($id_book, $update_data);
    if(!$test){
      $data['message']='You can not update this book';
      $data['return_url']='show_books';
      $data['page']='feedback/message_box';
      $this->load->view('menu/content',$data);
    }
    else{
      $data['message']='Book updated succesfully';
      $data['return_url']='show_books';
      $data['page']='feedback/message_box';
      $this->load->view('menu/content',$data);
    }

  }

}
