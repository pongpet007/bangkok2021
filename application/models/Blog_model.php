<?php

class Blog_model extends CI_Model{

	public function getAll()
	{
		$this->db->from('blog')
		->join('blog_language','blog.blog_id =  blog_language.blog_id','left');

		$this->db->where('is_active',1);
		// $this->db->order_by('pos asc');	

		$this->db->order_by('blog.blog_id','desc');
		// $this->db->limit($limit, $start);	
		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}


		$query = $this->db->get();

		return $query->result();

	}


	public function getAllIndex()
	{
		$this->db->from('blog')
		->join('blog_language','blog.blog_id =  blog_language.blog_id','left');

		$this->db->where('is_active',1);
		$this->db->order_by('blog.pos_index asc');	

		$this->db->order_by('blog.blog_id','desc');
		$this->db->limit(2);	
		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}


		$query = $this->db->get();

		return $query->result();

	}





	public function getLimit($limit)
	{
		$this->db->from('blog')
		->join('blog_language','blog.blog_id =  blog_language.blog_id','left');

		$this->db->where('is_active',1);

		$this->db->limit($limit);	
		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}

		$this->db->order_by('blog.blog_id','RANDOM');

		$query = $this->db->get();

		return $query->result();

	}

	public function getTags()
	{

		$this->db->select('tags');
		$this->db->from('blog')
		->join('blog_language','blog.blog_id =  blog_language.blog_id','left');	
		$this->db->group_by('blog.blog_id');
		$this->db->where('is_active',1);	
		$this->db->where(" blog_language.tags <> '' ");

		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}

		$query = $this->db->get();		
		return $query->result();		
	}

	public function getAllpop($limit, $start)
	{
		$this->db->from('blog')
		->join('blog_language','blog.blog_id =  blog_language.blog_id','left');

		$this->db->where('is_active',1);
		$this->db->order_by('count DESC');	

		$this->db->limit($limit, $start);	
		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}

		$query = $this->db->get();

		return $query->result();

	}

	public function record_count($search = array())
	{	
		$this->db->from('blog')
		->join('blog_language','blog.blog_id =  blog_language.blog_id','left');

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where("blog_language.tags like '%$search[tag]%' " );	
		}		 
		
		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}
		
		$this->db->where('is_active',1);

		return $this->db->count_all_results();
	}
	
	public function getOne($id){
		
		$this->db->from('blog')
		->join('blog_language','blog.blog_id =  blog_language.blog_id','left');	
		$this->db->where('blog.blog_id',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
