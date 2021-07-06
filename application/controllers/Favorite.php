<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorite extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('Company_model');
		$this->load->model('Category_model');
		$this->load->model('Country_model');
		$this->load->model('Config_model');
		$this->load->model('Counter_model');
		$this->load->model('News_model');
		$this->load->model('Products_model');
		$this->load->model('cms/Menu_model');
		$this->load->model('Image_manage_model');
	}

	

	public function index($lang='',$pro_id=''){

		// $data['lang'] = $this->session->userdata('site_lang');

		// if ($data['lang']=221) {
		// 	$data['language'] = "เปลี่ยนภาษา";
		// }else{
		// 	$data['language'] = "Change Language";
		// }
		$data['counter'] = $this->Counter_model->count();
		$data['pro_id'] = $pro_id;
		// $data["categorys"] = $this->Category_model->getAll();
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;
		$data['countrys'] = $this->Country_model->getAll();
		// $theme_path = $company->theme_path;
		// $data['theme_path'] = $theme_path;
		// $data["theme_assets_path"] = $company->theme_assets_path;

		// $menus = $this->Menu_model->getMain();
		// // echo $this->db->last_query();
		// // exit();

		// foreach ($menus as $menu) {
		// 	$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		// }
		// $data['menus'] = $menus ;		
		// $data['countrys'] = $this->Country_model->getAll();



		// $qtybutton = $this->input->get('qtybutton');
		// $data['qtybutton'] = $qtybutton;

		$data['widget'] = $this->recaptcha->getWidget();
        $data['script'] = $this->recaptcha->getScriptTag();  

		// $data['lang'] = $this->session->userdata('site_lang');
		// $data['config'] = $this->Config_model->getConfig();
		// $data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));

		// $data['counter'] = $this->Counter_model->count();

		// // $product  = $this->Products_model->getOne($pro_id);
		// // $cat_id = $product->cat_id;
		// // $realatedproducts = $this->Products_model->getrealated($cat_id);
		// // $data['realatedproducts'] = $realatedproducts;
		// // $countrealatedproducts = 0;
		// // foreach ($realatedproducts as $key => $realatedproductss) {
		// // 	$countrealatedproducts = $countrealatedproducts+1;
		// // }
		// // $data['realatedproductscount'] = $countrealatedproducts;
		// // $data['product'] = $product;
		// // $data['pro_id'] = $pro_id;

		// /////////////////////// get products /////////////////////////////
		
		// $cartarr = array();
		// foreach ($this->cart->contents() as $carts) {
		// 	$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);
		// }
		// $data['cartarr'] = $cartarr;

		$image_group_id = 1;
		$product  = $this->Products_model->getOne($pro_id);
		$product->images = $this->Image_manage_model->getinuseProduct($image_group_id,$product->pro_id);
		
		// print_r($this->db->last_query());

		$data['product'] = $product;


		$this->load->view('2021_theme_1/quotation',$data);	
		// $this->load->view($theme_path.'/favorite',$data);
	}


	// public function detail($lang = '' , $pro_id = '') {

	// 	$image_group_id = 1;
	// 	$product  = $this->Products_model->getOne($pro_id);
	// 	$product->images = $this->Image_manage_model->getinuseProduct($image_group_id,$product->pro_id);
	// 	$data['product'] = $product;


	// 	$this->load->view('2021_theme_1/quotation',$data);	

	// }
	
	public function addajax()
	{	
		$pro_id = $this->input->get('pro_id');
		if (count($this->cart->contents())>3) {
			echo "no";
		}else {
			if(empty($pro_id)){
				redirect("Favorite");
			}
			
			$qty = $this->input->get('qty');
			$qty = empty($qty)?1:$qty;

			$product = $this->Products_model->getOne($pro_id);
			
			$pro_id1 = $pro_id;
			$pro_price1 = $product->pro_price;
			$pro_price2 = $product->pro_price_old;
			$pro_name = $product->pro_name;		

			$data1 = 
			array(
				'id'      => $pro_id1,
				'pro_id'	=> $pro_id1,
				'qty'     => $qty,
				'price'   => $pro_price1,
				'priceold'   => $pro_price2,
				'name'    => 'xxx',
				'pro_name'  => $pro_name,	       
			);

			$this->cart->insert($data1);

		 	 // print_r($this->cart->contents());

			echo "ok";
		}
		
		
	}
	

	public function add()
	{	
		$pro_id = $this->input->get('pro_id');
		
		if(empty($pro_id)){
			redirect("Favorite");
		}
		
		$qty = $this->input->get('qty');
		$qty = empty($qty)?1:$qty;

		$product = $this->Products_model->getOne($pro_id);
		
		$pro_id1 = $pro_id;
		$pro_price1 = $product->pro_price;
		$pro_price2 = $product->pro_price_old;
		$pro_name = $product->pro_name;
		

		$data1 = 
		array(
			'id'      => $pro_id1,
			'qty'     => $qty,
			'price'   => $pro_price1,
			'priceold'   => $pro_price2,
			'name'    => 'xxx',
			'pro_name'  => $pro_name,	         	       
		);

		$this->cart->insert($data1);

	 	 // print_r($this->cart->contents());

		redirect($this->session->userdata('site_lang_name').'/Favorite');
		
	}

	public function update()
	{
		$qty = $this->input->post("qty");
		print_r($qty);

		$data = array();
		$i = 0;
		foreach($this->cart->contents() as $product) {
			$data[] = array('rowid'=>$product['rowid'],'qty'=>$qty[$i]);
			$i++;
		}

		// print_r($data);
		$this->cart->update($data);
		redirect($this->session->userdata('site_lang_name').'/Favorite');
	}

	public function remove($langu="",$rowid)
	{	

		$items1 = $this->cart->remove($rowid);
		redirect($this->session->userdata('site_lang_name').'/Products/compare');
	}

	public function deleteall()
	{	
		
		$this->cart->destroy();		

		redirect('Favorite');
	}

	public function sendmail()
	{
		$grecaptcharesponse = $this->input->post('g-recaptcha-response');



		$pro_id = $this->input->post('pro_id');

		if(!$grecaptcharesponse){
			$this->session->set_flashdata('errors', 'Recaptcha Error');	
			redirect("Products/quotation/$pro_id");
		}


		$fullname = $this->input->post('fullname');
		$company_name = $this->input->post('company_name');
		$email = $this->input->post('email');
		$telephone = $this->input->post('telephone');
		$detail = $this->input->post('detail');
		$fax = $this->input->post('fax');

		$qty = $this->input->post('qty');



		$product = $this->Products_model->getOne($pro_id);
		$image_group_id = 1;
		foreach ($product as $products) { 
			$product->images = $this->Image_manage_model->getinuseProduct($image_group_id,$pro_id);
		}

		foreach ($product->images as $key => $images) { 
			if ($key==0) { 
				$i = json_decode($images->resolution); 
				foreach ($i as $key => $newi) { 
					$pic = ''.base_url().'images/website/'.$images->filename.'_'.$images->show_admin.'.'.$images->extension.'';
				} 
			} 
		}
		

		$company = $this->Company_model->getOne(1);



		$ref = base_url().'products/detail/$pro_id';

		$tableproduct ="<table width='100%' border='0' cellpadding='0' cellspacing='0' style='font-size:11pt;font-family:Calibri,sans-serif;'>
		<tr>
		<td></td>					
		<td><b>สินค้า</b></td>
		<td><b>จำนวน</b></td>
		</tr>";
		
			
			$tableproduct .="<tr>
			<td>
			<a href='".base_url("TH/products/detail/{$product->pro_id}")."' target='_blank'>
			<img src='{$pic}' style='width:100px;'>
			</a>
			</td>
			<td>{$product->pro_name}</td>
			<td>{$qty}</td>
			</tr>";
				
		$tableproduct .="</table>";
		
		$body = "
		$tableproduct

		<br><br>
		<h4>รายละเอียดเพิ่มเติม</h4>					 
		$detail<br>


		<h4>ข้อมูลลูกค้าเพื่อติดต่อกลับ</h4>

		Name = $fullname <br>
		Company = $company_name <br>
		E-mail = $email <br>
		Telephone = $telephone <br>

		";


		$x = '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tbody><tr>
		<td style="background-color:#EFEFEF;padding:7.5pt;"><span style="background-color:#EFEFEF;">

		<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;">&nbsp;</span></font></div>

		<div align="center">
		<table width="875" border="0" cellspacing="0" cellpadding="0" style="width:525pt;">
		<tbody><tr>
		<td style="background-color:white;padding:29.25pt;border:1pt solid #D9D9D9;"><span style="background-color:white;">
		<table width="775" border="0" cellspacing="0" cellpadding="0" style="width:465pt;background-color:white;">
		<tbody><tr>
		<td style="padding:0;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tbody><tr>
		<td style="padding:7.5pt;">
		<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font face="Arial,sans-serif" size="4" color="red"><span style="font-size:15pt;"><b>

		ใบร้องขอราคา จากลูกค้า บริษัท กุลธร จำกัด
		</b></span></font></span></font></div>
		</td>
		</tr>
		<tr>
		<td style="padding:7.5pt;">
		<div><font face="Arial,sans-serif" size="2" color="black"><span style="font-size:9pt; font-weight:bold;">
		เรียน  ผู้เกี่ยวข้อง
		</span></font></div>

		<div style="margin-top:14pt;margin-bottom:14pt;">
		<font face="Arial,sans-serif" size="2" color="black">
		<span style="font-size:9pt;">

		เนื่องจากได้มีลูกค้าของเราสนใจสินค้าในเว็ปไซต์ของท่านตามรายละเอียดดังนี้ :<br><br><br><br>

		'.$body.'
		</span></font>
		</div>
		</td>
		</tr>
		</tbody></table>
		<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;">&nbsp;</span></font></div>

		<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;">&nbsp;</span></font></div>
		<table border="0" cellspacing="0" cellpadding="0">
		<tbody><tr>
		<td style="padding:7.5pt;">
		<div style="margin:9.75pt 0 0 0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font face="Arial,sans-serif" size="2" color="black"></font></span></font></div>

		</td>
		</tr>
		</tbody></table>
		</div>
		';

		//echo $x;
		//Username:	sendmail@spprubberparts.com
		// Password:	eMm7FMA3cP
		// Pop/Imap Server:	mail.spprubberparts.com
		// Smtp Server:	mail.spprubberparts.com
		
		$params = array();
		$params["cdate"] =date('Y-m-d h:i:s');  
		$params["com_id"] = 1;  
		$params["pro_id"] = $pro_id;  
		$params["fullname"] = $fullname;  
		$params["company"] = $company_name;  
		$params["email"] = $email;  
	        // $params["lineid"] = $lineid;  
		$params["phone"] = $telephone;  

		$params["message"] = $detail;  
		$params["msg_email"] = $x;  


		$this->db->insert('quotation',$params);

		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'mail.brandexdirectory.com';
		$config['smtp_port']    = '587';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'pongpet@brandexdirectory.com';
		$config['smtp_pass']    = '12345678af';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // text or html
        $config['validation'] = TRUE; // bool whether to validate email or not

        $company = $this->Company_model->getOne(1);

        $com_email[] = "korn@brandexdirectory.com";
		$com_email[] = "korn22316@gmail.com";
		// $com_email[] = "solot.forwork@gmail.com";
			
		if(strstr($company->com_email,',')){
			$arr = explode(',', $company->com_email) ;            
	        foreach ($arr as $k => $v) {
	            if($v)
	            $com_email[] = $v;
	        }
		}
		else{
			$com_email[] = $company->com_email;
		}
		$this->email->initialize($config);	
		foreach ($com_email as $id => $address)
		{
			$this->email->clear();
			$this->email->to($address);
			$this->email->from("no-reply@system.com");
			$this->email->subject('ร้องขอใบเสนอราคา จาก ' .$fullname. ' '.date('d M F h:i:s a'));
			$this->email->message($x);
			$this->email->send();
		}
		$this->cart->destroy();	
		redirect($this->session->userdata('site_lang_name')."Products/sendenquiry_complete");

    }

}