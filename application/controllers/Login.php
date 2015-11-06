<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
  public function index()
  {
    
    $data['applicationName'] = 'Code Collaboration';
    $data['title'] = 'Login';
    
    $this->load->view('templates/header', $data);
    $this->load->view('pages/login', $data);
    $this->load->view('templates/footer', $data);
  }
  
}