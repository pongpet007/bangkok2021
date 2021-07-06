<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('site_lang')){
			$this->session->set_userdata('site_lang', 'TH');
		}		
		$this->load->model('Config_model');
		$this->load->model('Banner_model');
		$this->load->model('Slider_model');			
		$this->load->model('Youtube_model');			
		$this->load->model('Products_model');			
		$this->load->model('Category_model');			
		$this->load->model('News_model');	
		$this->load->model('Company_model');			
		$this->load->model('Blog_model');			
		$this->load->model('Counter_model');
		$this->load->model('cms/Menu_model');
	}

	public function index()
	{	
		exti();
		$data['counter'] = $this->Counter_model->count();	
		$data['companyData'] = $this->Config_model->getConfig();
		$data['widget'] = $this->recaptcha->getWidget();
        $data['script'] = $this->recaptcha->getScriptTag();  
		$data['lang'] = $this->session->userdata('site_lang');
		$data['config'] = $this->Config_model->getConfig();
		$data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));
		$data['blogs'] = $this->Blog_model->getAll(200,0,array());
		$data['language'] = array('EN'=>'eng','TH'=>'ไทย');
		$data['menuactive'] = 5;
		$data['pages'] = "contactus/index";
		$this->load->view('theme_2020_v1/index',$data);
	}

	public function sendMail()
	{
		// foreach ($this->input->post() as $key => $value) {
		// 	//echo "$key =  $value <br/>";			
		// 	echo "\$$key = \$this->input->post('$key')<br/>";
		// }

		$name = $this->input->post('name');		
		$lastname = $this->input->post('lastname');		
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$companyname = $this->input->post('companyname');
		$messages = $this->input->post('messages');
		$blog_id = $this->input->post('blog_id');
		$grecaptcharesponse = $this->input->post('g-recaptcha-response');

		if(!$grecaptcharesponse){
			$this->session->set_flashdata('errors', 'Recaptcha Error');	
			redirect("Contactus");
		}
			


		$company = $this->Company_model->getOne(1);

		

		$subject = "Contact us from website hydraulic-pneumatics.com"; 

		$body = "
			
					 			 
					 $messages<br>

					 
					 <h4>ข้อมูลลูกค้าเพื่อติดต่อกลับ</h4>

					Name = $name $lastname <br>
					
					E-mail = $email <br>
					Telephone = $tel <br>
								 
					 ";
			
$ref=base_url("TH/Products");

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

สอบถามจากแบบฟอร์ติดต่อเรา บริษัท กุลธร จำกัด
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

เนื่องจากได้มีลูกค้าสอบถามตามรายละเอียดดังนี้ :<br><br>

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
<table border="0" cellspacing="0" cellpadding="0" style="margin-left:7.5pt;">
<tbody>
</tbody></table>
</td>
</tr>
</tbody></table>
</div>
';			
		
		
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

	    
		$this->load->library('email');

		$com_email[] = "korn@brandexdirectory.com";
		$com_email[] = "korn22316@gmail.com";
			
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
			$this->email->from('no-reply@brandexdirectory.com', 'No Reply Mail');
			$this->email->subject($subject);
			$this->email->message($x);
			$this->email->send();
		}
		redirect($this->session->userdata('site_lang_name')."/Products/sendenquiry_complete");
	}
	
}