<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

  public function __construct(){
    parent::__construct();
    // $this->load->model('users_model');
  }

	public function index() {}

  public function profile($username = NULL) {
    // $data['news_item'] = $this->news_model->get_news($slug);
    // $data['title'] = $data['news_item']['title'];
    $data['title'] = 'Fathy AR(@fathy_ar) profile';
		$this->load->view('templates/header',$data);
    $this->load->view('templates/navbar-header',$data);
    $this->load->view('account/profile',$data);
    $this->load->view('templates/footer');
	}

  public function update_basic(){ // $userid
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('full name', 'userfullname', 'required');
    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');

    if ( $this->form_validation->run() === FALSE ) {
      // $data['news_item'] = $this->news_model->get_news_id($id);
      $data['title'] = 'Basic Account Setting';
  		$this->load->view('templates/header',$data);
      $this->load->view('templates/navbar-header',$data);
      $this->load->view('account/settings_basic',$data);
      $this->load->view('templates/footer');
    } else {
      $this->news_model->update_news($id);
      $data['news_item'] = $this->news_model->get_news_id($id);
      redirect('news/'.$data['news_item']['slug']);
    }
  }

  public function update_profile(){ // $userid
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('full name', 'userfullname', 'required');
    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');

    if ( $this->form_validation->run() === FALSE ) {
      // $data['news_item'] = $this->news_model->get_news_id($id);
      $data['title'] = 'Basic Account Setting';
  		$this->load->view('templates/header',$data);
      $this->load->view('templates/navbar-header',$data);
      $this->load->view('account/settings_profile',$data);
      $this->load->view('templates/footer');
    } else {
      $this->news_model->update_news($id);
      $data['news_item'] = $this->news_model->get_news_id($id);
      redirect('news/'.$data['news_item']['slug']);
    }
  }

  public function update_password(){ // $userid
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('full name', 'userfullname', 'required');
    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');

    if ( $this->form_validation->run() === FALSE ) {
      // $data['news_item'] = $this->news_model->get_news_id($id);
      $data['title'] = 'Basic Account Setting';
  		$this->load->view('templates/header',$data);
      $this->load->view('templates/navbar-header',$data);
      $this->load->view('account/settings_password',$data);
      $this->load->view('templates/footer');
    } else {
      $this->news_model->update_news($id);
      $data['news_item'] = $this->news_model->get_news_id($id);
      redirect('news/'.$data['news_item']['slug']);
    }
  }

  public function view_security(){ // $userid
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('full name', 'userfullname', 'required');
    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');

    if ( $this->form_validation->run() === FALSE ) {
      // $data['news_item'] = $this->news_model->get_news_id($id);
      $data['title'] = 'Basic Account Setting';
  		$this->load->view('templates/header',$data);
      $this->load->view('templates/navbar-header',$data);
      $this->load->view('account/settings_security',$data);
      $this->load->view('templates/footer');
    } else {
      $this->news_model->update_news($id);
      $data['news_item'] = $this->news_model->get_news_id($id);
      redirect('news/'.$data['news_item']['slug']);
    }
  }



  public function update($id){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('text', 'content', 'required');

    if ( $this->form_validation->run() === FALSE ) {
      $data['news_item'] = $this->news_model->get_news_id($id);
      $data['title'] = 'Update '.$data['news_item']['title'];
  		$this->load->view('templates/header',$data);
      $this->load->view('news/update',$data);
      $this->load->view('templates/footer');
    } else {
      $this->news_model->update_news($id);
      $data['news_item'] = $this->news_model->get_news_id($id);
      redirect('news/'.$data['news_item']['slug']);
    }
  }

  public function delete($id){
    $this->news_model->delete_news($id);
    redirect('news');
  }

}
