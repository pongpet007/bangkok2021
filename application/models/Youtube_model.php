<?php

class Youtube_model extends CI_Model{

	// public function getAll(){

	// 	$this->db->order_by('cdate', 'desc');
	// 	$query = $this->db->get('company_youtube');

	// 	return $query->result();

	// }

	public function getAll($limit, $start,$search = array()){

		$this->db->select('*');
		$this->db->from('company_youtube');

		$this->db->order_by('cdate', 'desc');

		
		$this->db->limit($limit, $start);

		$query = $this->db->get();

		return $query->result();

	}

	public function record_count($search = array())
	{
		
		$this->db->from('company_youtube');		
		
		return $this->db->count_all_results();
		
	}

	
    public function getOne($id){
			
		$this->db->where('y_id',$id);

		$result = $this->db->get('youtube');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
