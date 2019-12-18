<?php

class List_model extends CI_Model {

	function __construct() {
		$this->load->database();
	}

	public function set_list(){
    $data = array(
    	'list_card_id' => $this->input->post('list_card_id'),
      	'list_name' => $this->input->post('list_name'),
      	'list_duedate' => $this->input->post('list_duedate')
    );
    return $this->db->insert('lists', $data);
	}

	public function get_list_id($list_name, $list_card_id){
		$this->db->select('list_id');
		$this->db->from('lists');
		$this->db->where('list_name', $list_name);
		$this->db->where('list_card_id', $list_card_id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update_list($list_id){
    $data = array(
      	'list_name' => $this->input->post('list_name'),
      	'list_duedate' => $this->input->post('list_duedate')
    );
    $this->db->where('list_id', $list_id);
    return $this->db->update('lists', $data);
	}

  public function update_donelist($list_id){
  	$this->db->select('list_done');
		$this->db->from('lists');
		$this->db->where('list_id', $list_id);
		$query = $this->db->get();
  	$done = $query->row_array();
  	if ($done['list_done'] == 0){
		$data = array('list_done' => 1);
		$this->db->where('list_id', $list_id);
		return $this->db->update('lists', $data);
  	}else{
		$data = array('list_done' => 0);
		$this->db->where('list_id', $list_id);
		return $this->db->update('lists', $data);
  	}
  }

	public function get_list($card_id){
		$this->db->select('list_name');
		$this->db->from('lists');
		$this->db->where('card_id', $card_id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function delete_list($list_id){
  	return $this->db->delete('lists', array('list_id'=>$list_id));
	}
}
