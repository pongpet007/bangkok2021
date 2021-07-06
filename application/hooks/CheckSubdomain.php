<?php 

class CheckSubdomain {
    private $ci ;    
    
    public function __construct(){
        $this->ci = & get_instance();        
    }

    public function check() {

        if(!$this->ci->session->has_userdata('site_lang')){
           $this->ci->session->set_userdata('site_lang',221);
           $this->ci->session->set_userdata('site_lang_name', "TH");
        }

        if ($this->ci->uri->segment(1)=="US") {

            $this->ci->session->set_userdata('site_lang', 236);
            $this->ci->session->set_userdata('site_lang_name', "US");
        }

        if ($this->ci->uri->segment(1)=="TH") {

            $this->ci->session->set_userdata('site_lang', 221);
            $this->ci->session->set_userdata('site_lang_name', "TH");

        }

        if ($this->ci->uri->segment(1)=="KH") {

            $this->ci->session->set_userdata('site_lang', 38);
            $this->ci->session->set_userdata('site_lang_name', "KH");

        }

        if ($this->ci->uri->segment(1)=="LA") {

            $this->ci->session->set_userdata('site_lang', 120);
            $this->ci->session->set_userdata('site_lang_name', "LA");

        }

        if ($this->ci->uri->segment(1)=="MM") {

            $this->ci->session->set_userdata('site_lang', 151);
            $this->ci->session->set_userdata('site_lang_name', "MM");

        }

        if ($this->ci->uri->segment(1)=="VN") {

            $this->ci->session->set_userdata('site_lang', 243);
            $this->ci->session->set_userdata('site_lang_name', "VN");

        }
        
        
        $controller = $this->ci->router->class;
        $method = $this->ci->router->method;
        $this->ci->lang->load($this->ci->session->userdata('site_lang'),'lang');
        

        

    }
}




 ?>