<?php 

class Group_model extends CI_Model{

		
				
	public function getAll(){
		
		
		$this->db->order_by('group_id asc');
 
		$query = $this->db->get('group');

		return $query->result();

	}

	public function getAllSelectGroup($group_id){
		
		$this->db->from('group')
				 ->join("group_data",'group_data.group_id=group.group_id' ,'left');
		$this->db->where('group.group_id',$group_id);

		$this->db->order_by('group_data.position asc');

		$query = $this->db->get();

		return $query->result();

	}

	public function getAllSelectGroupData($type_id , $id){
		
		if ($type_id==1) {
			$this->db->from('products')
				->join('products_language','products.pro_id=products_language.pro_id and products_language.country_id = 221','left');
			$this->db->where('products.pro_id',$id);

			$result = $this->db->get('');

			if($result->num_rows()==1){

				return $result->row(0);

			} else {

				return FALSE;
			}
		}
	}


    public function getOne($id){
			
		$this->db->where('id',$id);

		$result = $this->db->get('activities');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>