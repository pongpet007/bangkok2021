<?php
class LangSwitch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        //$this->load->helper('url');
    }

    function switchLanguage($language = "") {
        $language = ($language != "") ? $language : "221";
        $this->session->set_userdata('site_lang', $language);
        
        // print_r($language);
       
        redirect(base_url('Produtcs'));
    }
}