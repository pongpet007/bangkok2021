<?php

class Banner_model extends CI_Model{

	public function getAll(){

		$this->db->order_by('ban_id', 'asc');
		
		$query = $this->db->get('banner');

		return $query->result();

	}

	
    public function getOne($id){
			
		$this->db->where('ban_id',$id);

		$result = $this->db->get('banner');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
