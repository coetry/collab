<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function view($page = 'home')
  {
    if (! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
      show_404();
    }
    
    $data['applicationName'] = 'Code Collaboration';
    $data['title'] = 'Home';
    
    $data['welcome_message'] = 'Welcome to Code Collaboration!';
    
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
    
  }
  
}