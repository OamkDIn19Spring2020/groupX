<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['page']='login/login_form';
    $this->load->view('menu/content',$data);
  }

  public function login(){
    //print_r($this->input->post());
    $given_username=$this->input->post('username');
    $given_password=$this->input->post('password');
    $this->load->model('User_model');
    $db_password=$this->User_model->getPassword($given_username);
    //echo 'pass='.$db_password;
    if (password_verify($given_password, $db_password)){
        $_SESSION['logged_in']=true;
        $_SESSION['username']=$given_username;
        redirect('secret');
    }
    else {
        $_SESSION['logged_in']=false;
        redirect('login/index');
    }
    //$real_username='jim';
    //$real_password='jim1234';
    //succesfully logged in hard coded
    // if($given_username===$real_username && $given_password===$real_password){
    //   $_SESSION['logged_in']=true;
    //   $_SESSION['username']=$given_username;
    //   redirect('secret');
    // }

    //unsuccesfull
    // else{
    //   $_SESSION['logged_in']=false;
    //   redirect('login/index');
    // }
  }
  public function logout(){
    session_destroy();
    $data['page']='login/logout';
    $this->load->view('menu/content',$data);
  }
}
