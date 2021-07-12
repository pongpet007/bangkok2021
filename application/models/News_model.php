<?php

class News_model extends CI_Model{

	public function getAll()
	{
		$this->db->from('news')
				 ->join('news_language','news.news_id =  news_language.news_id','left');

		$this->db->where('is_active',1);
		// $this->db->order_by('orders asc');	
		$this->db->order_by('news.news_id','desc');
		// $this->db->limit($limit, $start);	
		if($this->session->userdata('site_lang')){
			$this->db->where('news_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('news_language.country_id', '221');
		}

		$query = $this->db->get();

		return $query->result();

	}

	public function getAllIndex()
	{
		$this->db->from('news')
				 ->join('news_language','news.news_id =  news_language.news_id','left');

		$this->db->where('is_active',1);
		$this->db->order_by('news.pos_index','asc');	
	
		$this->db->limit(2);	
		if($this->session->userdata('site_lang')){
			$this->db->where('news_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('news_language.country_id', '221');
		}

		$query = $this->db->get();

		return $query->result();

	}


	public function getRelate($start,$limit,$news_id)
	{
		$this->db->from('news')
				 ->join('news_language','news.news_id =  news_language.news_id','left');

		$this->db->where('is_active',1);
		// $this->db->order_by('orders asc');	
		$this->db->order_by('news.news_id','desc');
		// $this->db->limit($limit, $start);	
		if($this->session->userdata('site_lang')){
			$this->db->where('news_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('news_language.country_id', '221');
		}

		if ($news_id != '') {
			$this->db->where('news.news_id  !=',$news_id);
		}

		$query = $this->db->get();

		return $query->result();

	}

	public function getTags()
	{
	
		$this->db->select('tags');
		$this->db->from('news')
				 ->join('news_language','news.news_id =  news_language.news_id','left');	
		$this->db->group_by('news.news_id');
		$this->db->where('is_active',1);	
		$this->db->where(" news_language.tags <> '' ");

		if($this->session->userdata('site_lang')){
			$this->db->where('news_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('news_language.country_id', '221');
		}

		$query = $this->db->get();		
		return $query->result();		
	}

	public function getAllpop($limit, $start)
	{
		$this->db->from('news')
				 ->join('news_language','news.news_id =  news_language.news_id','left');

		$this->db->where('is_active',1);
		$this->db->order_by('count DESC');	

		$this->db->limit($limit, $start);	
		if($this->session->userdata('site_lang')){
			$this->db->where('news_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('news_language.country_id', '221');
		}

		$query = $this->db->get();

		return $query->result();

	}

	public function record_count($search = array())
	{	
		$this->db->from('news')
				 ->join('news_language','news.news_id =  news_language.news_id','left');

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where("news_language.tags like '%$search[tag]%' " );	
		}		 
		
		if($this->session->userdata('site_lang')){
			$this->db->where('news_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('news_language.country_id', '221');
		}
		
		$this->db->where('is_active',1);
			
		return $this->db->count_all_results();
	}
	
    public function getOne($id){
		
		$this->db->from('news')
				 ->join('news_language','news.news_id =  news_language.news_id','left');	
		$this->db->where('news.news_id',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('news_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('news_language.country_id', '221');
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
