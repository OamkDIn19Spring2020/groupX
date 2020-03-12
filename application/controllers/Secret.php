<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secret extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
      //do nothing
    }
    else {
      redirect('login/index');
    }
  }

  function index()
  {
    $data['page']='secret/index';
    $this->load->view('menu/content',$data);

  }

  function add_user(){
    //print_r($this->input->post());
    $username=$this->input->post('username');
    $plain_password=$this->input->post('password');
    $hashed_password=password_hash($plain_password,PASSWORD_DEFAULT);
    //echo 'hash='.$hashed_password;
    $this->load->model('User_model');
    $insert_data=array(
      'username'=>$username,
      'password'=>$hashed_password
    );
    $test=$this->User_model->addUser($insert_data);
    //echo 'test='.$test;
    if($test==1){
      $data['message']='User added succesfully';
      $data['return_url']='index';
      $data['page']='feedback/message_box';
      $this->load->view('menu/content',$data);
    }
    else{
      $data['message']='You can not add this user, check if it already exists';
      $data['return_url']='index';
      $data['page']='feedback/message_box';
      $this->load->view('menu/content',$data);
    }
  }

}
