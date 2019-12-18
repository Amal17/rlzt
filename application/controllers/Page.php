<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }

  public function index($page='index') {
    $data = new stdClass();
    if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
      show_404();
    }
		switch ($page) {
			case 'index':
				$data->title = 'Home';
				break;
			case 'signup':
				$data->title = 'Sign Up';
				break;
			case 'login':
				$data->title = 'Sign in';
				break;
			case 'forgot':
				$data->title = 'Forgot Password';
				break;
			case 'reset':
				$data->title = 'Create New Password';
				break;
			default:
				$data->title = $page;
				break;
		}
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page);
    $this->load->view('templates/footer');
  }
}
