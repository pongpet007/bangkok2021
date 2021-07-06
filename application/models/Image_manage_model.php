<?php 

class Image_manage_model extends CI_Model{

	public function getinuse($image_group_id,$id)
	{
		$this->db->where('image_manage.image_group_id',$image_group_id);
		$this->db->where('image_manage.id',$id);
		$this->db->where('image_manage.set_picture_main',1);
		$this->db->from('image_manage')
				 ->join('image_group','image_group.image_group_id=image_manage.image_group_id','left');
		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}		

	public function getinuseProduct($image_group_id,$id)
	{
		$this->db->where('image_manage.image_group_id',$image_group_id);
		$this->db->where('image_manage.id',$id);
		// $this->db->where('image_manage.set_picture_main',1);
		$this->db->order_by('image_manage.set_picture_main asc');
		$this->db->from('image_manage')
				 ->join('image_group','image_group.image_group_id=image_manage.image_group_id','left');
		$result = $this->db->get();

		return $result->result();

	}		
				
	public function getAll($limit,$start,$search = array()){
		
		$this->db->from('image_manage')
				 ->join('image_group','image_group.image_group_id=image_manage.image_group_id','left');
		if(isset($search['image_group_id']) && strlen($search['image_group_id'])>0 )
		{
			$this->db->where("image_manage.image_group_id",$search['image_group_id']);
		}

		if(isset($search['obj_id']) && strlen($search['obj_id'])>0 )
		{
			$this->db->where("image_manage.id",$search['obj_id']);
		}

		$this->db->limit($limit,$start);

		$this->db->order_by('image_manage.udate desc');
		
		$query = $this->db->get();
		return $query->result();

	}

	public function count($search = array())
	{
		
		$this->db->from('image_manage')
				 ->join('image_group','image_group.image_group_id=image_manage.image_group_id','left');
		
		if(isset($search['image_group_id']) && strlen($search['image_group_id'])>0 )
		{
			$this->db->where("image_manage.image_group_id",$search['image_group_id']);
		}

		if(isset($search['obj_id']) && strlen($search['obj_id'])>0 )
		{
			$this->db->where("image_manage.id",$search['obj_id']);
		}

		return $this->db->count_all_results();
	}


    public function getOne($id){
			
		$this->db->where('image_id',$id);

		$result = $this->db->get('image_manage');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>