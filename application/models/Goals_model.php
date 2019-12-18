<?php

class Goals_model extends CI_Model {

	function __construct() {
		$this->load->database();
	}

	public function set_goal(){
	  $data = array(
	    'goal_name' => $this->input->post('goal_name'),
	    'goal_description' => $this->input->post('goal_description'),
	    'goal_duedate' => $this->input->post('goal_duedate')
	  );
	  return $this->db->insert('goals', $data);
  }

  public function get_goal_id($goal_name, $goal_user_id){
  	$this->db->select('goal_id');
		$this->db->from('goals');
		$this->db->where('goal_name', $goal_name);
		$this->db->where('goal_user_id', $goal_user_id);
		$query = $this->db->get();
  	return $query->row_array();
  }

  public function get_starred($goal_user_id){
  	$this->db->select('goal_name, goal_description, goal_duedate');
		$this->db->from('goals');
		$this->db->where('goal_starred', 1);
		$this->db->where('goal_user_id', $goal_user_id);
		$query = $this->db->get();
  	return $query->result_array();
  }

  public function get_archived($goal_user_id){
  	$this->db->select('goal_name, goal_description, goal_duedate, goal_starred');
		$this->db->from('goals');
		$this->db->where('goal_archived', 1);
		$this->db->where('goal_user_id', $goal_user_id);
		$query = $this->db->get();
  	return $query->result_array();
  }

  public function get_allgoal($goal_user_id){
  	$this->db->select('goal_name, goal_description, goal_duedate, goal_starred');
		$this->db->from('goals');
		$this->db->where('goal_user_id', $goal_user_id);
		$query = $this->db->get();
  	return $query->result_array();
  }

  public function get_sharedgoal($goal_user_id){
  	$this->db->select('goal_name, goal_description, goal_duedate, goal_starred');
		$this->db->from('goals');
		$this->db->where('goal_private', 0);
		$this->db->where('goal_user_id', $goal_user_id);
		$query = $this->db->get();
  	return $query->result_array();
  }

  public function get_donegoal($goal_user_id){
  	$this->db->select('goal_name, goal_description, goal_duedate, goal_starred');
		$this->db->from('goals');
		$this->db->where('goal_done', 1);
		$this->db->where('goal_user_id', $goal_user_id);
		$query = $this->db->get();
  	return $query->result_array();
  }

  public function update_goal($goal_id){
	  $data = array(
	    'goal_name' => $this->input->post('goal_name'),
	    'goal_description' => $this->input->post('goal_description'),
	    'goal_duedate' => $this->input->post('goal_duedate')
	  );
	  $this->db->where('goal_id', $goal_id);
	  return $this->db->update('goals', $data);
  }

  public function update_starred($goal_id){
	  $data = array(
	    'goal_starred' => $this->input->post('goal_starred')
	  );
	  $this->db->where('goal_id', $goal_id);
	  return $this->db->update('goals', $data);
  }

	public function update_archived($goal_id){
    $data = array(
      'goal_archived' => $this->input->post('goal_archived')
    );
    $this->db->where('goal_id', $goal_id);
    return $this->db->update('goals', $data);
	}

	public function update_private($goal_id){
    $data = array(
      'goal_private' => $this->input->post('goal_private')
    );
    $this->db->where('goal_id', $goal_id);
    return $this->db->update('goals', $data);
	}

  public function update_donegoal($goal_id){
	  $this->db->select('goal_done');
		$this->db->from('goals');
		$this->db->where('goal_id', $goal_id);
		$query = $this->db->get();
  	$done = $query->row_array();

  	if ($done['goal_done'] == 0){
		$data = array('goal_done' => 1);
		$this->db->where('goal_id', $goal_id);
		return $this->db->update('goals', $data);
  	}else{
		$data = array('goal_done' => 0);
		$this->db->where('goal_id', $goal_id);
		return $this->db->update('goal', $data);
    }
  }
}
