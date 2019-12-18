<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users_model extends CI_Model {
	function __construct() {
		$this->load->database();
	}

	public function set_user(){
    $data = array(
      'user_fullname' => $this->input->post('user_fullname'),
      'user_name' => $this->input->post('user_name'),
      'user_email' => $this->input->post('user_email'),
      'user_password' => $this->input->post('user_password')
    );
    return $this->db->insert('users', $data);
	}

	public function get_user_id($user_id = FALSE){
		$query = $this->db->get_where( 'users', array('user_id'=>$user_id) );
  	return $query->row_array();
	}

	public function update_account($user_id){
    $data = array(
      'user_fullname' => $this->input->post('user_fullname'),
      'user_name' => $this->input->post('user_name'),
      'user_email' => $this->input->post('user_email'),
			'user_image' => 'https://www.gravatar.com/avatar/'.md5( strtolower( trim( $this->input->post('user_email') ) ) ).'?d=mm'
    );
    $this->db->where('user_id', $user_id);
    return $this->db->update('users', $data);
	}

	public function update_profile($user_id){
    $data = array(
      'user_bio' => $this->input->post('user_bio'),
      'user_website' => $this->input->post('user_website'),
      'user_gender' => $this->input->post('user_gender'),
      'user_city' => $this->input->post('user_city'),
      'user_country' => $this->input->post('user_country')
    );
    $this->db->where('user_id', $user_id);
    return $this->db->update('users', $data);
	}

	public function update_profile_image($user_id){
		$data = array(
			'user_image' => $this->input->post('user_image')
		);
		$this->db->where('user_id', $user_id);
		return $this->db->update('users,' $data);
	}

	public function get_profile($user_id){
		$this->db->select('user_fullname, user_name, user_bio, user_website, user_gender, user_country,user_city, user_image');
		$this->db->from('users');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_password($user_password = FALSE){
		$query = $this->db->get_where( 'users', array('user_password'=>$user_password) );
  	return $query->row_array();
	}

	public function update_password($user_id){
		$data = array(
			'user_password' => $this->input->post('user_password')
		);
		$this->db->where('user_id', $user_id);
		return $this->db->update('users,' $data);
	}

	public function update_lastupdate($user_id){
		$data = array(
			'user_lastupdate' => $this->input->post('user_lastupdate')
		);
		$this->db->where('user_id', $user_id);
		return $this->db->update('users,' $data);
	}

	public function update_lastlogin($user_id){
		$data = array(
			'user_lastlogin' => $this->input->post('user_lastlogin')
		);
		$this->db->where('user_id', $user_id);
		return $this->db->update('users,' $data);
	}

	public function update_lastlogout($user_id){
		$data = array(
			'user_lastlogout' => $this->input->post('user_lastlogout')
		);
		$this->db->where('user_id', $user_id);
		return $this->db->update('users,' $data);
	}

	public function update_lastupdate($user_id){
		$data = array(
			'user_lastupdate' => $this->input->post('user_lastupdate')
		);
		$this->db->where('user_id', $user_id);
		return $this->db->update('users,' $data);
	}

	public function get_security($user_id){
		$this->db->select('user_registered, user_lastupdate, user_lastlogin, user_logout');
		$this->db->from('users');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row_array();
	}
}
