<?php

class Cards_model extends CI_Model {

	function __construct() {
		$this->load->database();
	}

	public function set_card(){
	    $data = array(
	    	'card_goal_id' => $this->input->post('card_goal_id'),
	      'card_name' => $this->input->post('card_name')
	   	);
			return $this->db->insert('cards', $data);
  }

	public function get_card_id($card_name, $card_goal_id){
		$this->db->select('card_id');
		$this->db->from('cards');
		$this->db->where('card_name', $card_name);
		$this->db->where('card_goal_id', $card_goal_id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update_card($card_id){
    $data = array(
      	'card_name' => $this->input->post('card_name')
    );
    $this->db->where('card_id', $card_id);
    return $this->db->update('cards', $data);
	}

	public function update_donecard($card_id){
    $this->db->select('card_done');
		$this->db->from('cards');
		$this->db->where('card_id', $card_id);
		$query = $this->db->get();
		$done = $query->row_array();
  	if ($done['card_done'] == 0){
		$data = array('card_done' => 1);
		$this->db->where('card_id', $card_id);
		return $this->db->update('cards', $data);
  	}else{
		$data = array('card_done' => 0);
		$this->db->where('card_id', $card_id);
		return $this->db->update('cards', $data);
  	}
	}

	public function get_card($card_goal_id){
		$this->db->select('card_name');
		$this->db->from('cards');
		$this->db->where('card_goal_id', $card_goal_id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function delete_card($card_id){
  	return $this->db->delete('cards', array('card_id'=>$card_id));
	}
}
