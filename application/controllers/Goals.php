<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goals extends CI_Controller {

  public function __construct(){
    parent::__construct();
    // $this->load->model('goals_model');
    $this->load->helper('url');
    $this->load->library('bootstrap');
  }

  public function index() {
    // $data['goals'] = $this->news_model->get_goals();
    $data['title'] = 'Goals';
		$this->load->view('templates/header',$data);
    $this->load->view('templates/navbar-header', $data);
    $this->load->view('goals/goals',$data);
    $this->load->view('templates/footer');
	}

  public function filter($parameter = NULL) {
    if (!file_exists(APPPATH.'views/goals/'.$parameter.'.php')) {
      show_404();
    }
    // $parameter = archived, starred, dan reached
    // $data['goals'] = $this->goals_model->get_goals_filtered($parameter);
    // $data['title'] = adalah judul halaman yang ditampilkan di dlm tag <title></title>
    switch ($parameter) {
      case 'starred':
        $data['title'] = 'Starred Goals';
        break;
      case 'archived':
        $data['title'] = 'Archived Goals';
        break;
      case 'reached':
        $data['title'] = 'Reached Goals';
        break;
      default:
        $data['title'] = 'All Goals';
        break;
    }
		$this->load->view('templates/header',$data);
    $this->load->view('templates/navbar-header', $data);
    $this->load->view('goals/'.$parameter,$data);
    $this->load->view('templates/footer');
	}

  public function view($slug = NULL) {
    // $data['goals_item'] = $this->news_model->get_goals($slug);
    // $data['title'] = $data['goals_item']['title'];
    $data['title'] = 'Mountain Map for Climbers';
		$this->load->view('templates/header',$data);
    $this->load->view('templates/navbar-header', $data);
    $this->load->view('goals/goal',$data);
    $this->load->view('templates/footer');
	}

  public function new(){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('bootstrap');

    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('description', 'description', 'required');

    if ( $this->form_validation->run() === FALSE ) {
      $data['title'] = 'New Goal';
  		$this->load->view('templates/header',$data);
      $this->load->view('templates/navbar-header',$data);
      $this->load->view('goals/new');
      $this->load->view('templates/footer');
    } else {
      $this->goals_model->set_goal();
      redirect('goals');
    }
  }
}
