<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function view($page = 'index')
	{
            $this->load->database();
            $this->load->helper('url');
            if ( ! file_exists(APPPATH.'/views/frontend/'.$page.'.php'))
              {              
                  show_404();
              }
            $data['title'] = ucfirst($page);
            $this->load->view('frontend/'.$page, $data);
	}
        
        
       public function back($page = 'index')
	{
            $this->load->database();  
            $this->load->helper('url');
            if ( ! file_exists(APPPATH.'/views/backend/'.$page.'.php'))
              {              
                  show_404();
              }
            $data['title'] = ucfirst($page);
            $this->load->view('backend/'.$page, $data);
	}
        
        public function bkend($page = 'index')
	{
            $this->load->database();
            $this->load->helper('url');
            if ( ! file_exists(APPPATH.'/views/backend/'.$page.'.php'))
              {              
                  show_404();
              }
            $data['title'] = ucfirst($page);
            $this->load->view('backend/header', $data);
            $this->load->view('backend/'.$page, $data);
            $this->load->view('backend/footer', $data);
	}
	

        
        
}
