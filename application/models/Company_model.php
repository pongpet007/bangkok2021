<?php 

class Company_model extends CI_Model{


	public function getOne($id){


		$this->db->from('company')
		->join("company_language",'company.com_id=company_language.com_id ','left');
		$this->db->where('company.com_id',$id);	

		if($this->session->userdata('site_lang')){
			$this->db->where('company_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_language.country_id', '221');
		}		

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	public function getHistory() {
		$this->db->from('company_history')
		->join("company_history_language",'company_history.history_id = company_history_language.history_id ','left');

		// $this->db->where('company.com_id',$id);	

		if($this->session->userdata('site_lang')){
			$this->db->where('company_history_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_history_language.country_id', '221');
		}		

		$this->db->order_by('company_history.position','asc');

		$query = $this->db->get();
		return $query->result();
	}


	public function getGroupCom() {
		$this->db->from('company_groupcom')
		->join("company_groupcom_language",'company_groupcom.groupcom_id = company_groupcom_language.groupcom_id ','left');

		// $this->db->where('company.com_id',$id);	



		if($this->session->userdata('site_lang')){
			$this->db->where('company_groupcom_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_groupcom_language.country_id', '221');
		}		

		$this->db->where('company_groupcom.is_active = 1');
		$this->db->order_by('company_groupcom_language.groupcom_id','asc');



		$query = $this->db->get();
		return $query->result();
	}


	public function getPromotionIndex() {
		$this->db->from('company_promotion');

		$this->db->where('is_active = 1');

		$this->db->order_by("position_index",'asc');

		$query = $this->db->get();
		return $query->result();


	}

	public function getPortfolioIndex() {
		$this->db->from('company_portfolio');

		$this->db->where('is_active = 1');

		$this->db->order_by("position_index",'asc');

		$query = $this->db->get();
		return $query->result();


	}


	public function getServiceAll() {
		$this->db->from('company_proandser');

		$this->db->where('is_active = 1');
		$this->db->where('service_name_img != ','');

		$this->db->order_by("position",'asc');

		$query = $this->db->get();
		return $query->result();


	}

	public function getComContact() {

		$this->db->from('company');

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

}




?>