<?php

/**
 *
 */
class Admin extends CI_Controller
{
  public function index(){

    if($this->session->userdata('login')){
      header('Location: '.base_url().'perfil');
    }else{
      $this->load->view('guest/login');
    }
  }
  public function register(){

    if($this->session->userdata('login')){
      header('Location: '.base_url().'perfil');
    }else{
      $this->load->view('guest/register');
    }
  }
}



 ?>
