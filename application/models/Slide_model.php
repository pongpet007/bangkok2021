<?php

class Slide_model extends CI_Model{

	public function getAll($limit, $start,$search=array()){

		$this->db->where('is_active',1);
		$this->db->order_by('slide_id desc');		
		
		$this->db->limit($limit, $start);	
		$query = $this->db->get('company_slide');

		return $query->result();

	}

	public function record_count($search = array())
	{
		$this->db->where('is_active',1);
		$this->db->from('company_slide');
			
		return $this->db->count_all_results();
	}
	

	public function getimageAll($id){

		$this->db->where('slide_id',$id);
		$this->db->order_by('position desc');		

		$query = $this->db->get('company_slide_image');

		return $query->result();

	}

    public function getOne($id){
			
		$this->db->where('slide_id',$id);

		$result = $this->db->get('company_slide');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
