<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout {    
                
        public $template_data = array();    
        private $_CI;    
        private $_title;
        private $_css = '';
        private $_js = '';
        private $_keywords;
        private $_description;
        public $asset_url;

        public function __construct() {            
            $this->_CI =& get_instance();
            $this->asset_url = base_url('assets/');
        }
		
		public function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}
	
		public function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			$this->set('contents', $this->_CI->load->view($view, $view_data, TRUE));			
			return $this->_CI->load->view($template, $this->template_data, $return);
        }
        
        public function set_title($title) 
        {
            $this->_title = $title;
        }
        
        public function set_keywords($keywords) 
        {
            $this->_keywords = $keywords;
        }

        public function set_description($description) 
        {
            $this->_description = $description;
        }

        public function js($js_src = array()) 
        {
            if (is_array($js_src))
            {
                foreach ($js_src as $src) {
                    $this->_js .= "<script src='{$this->asset_url}{$src}'></script>\n";
                }
            }
            $this->_js .= "<script src='{$this->asset_url}{$js_src}'></script>\n";
        }

        public function css($css_href) 
        {
            if (is_array($css_href))
            {
                foreach ($css_href as $href) {
                    $this->_css .= "<link rel='stylesheet' href='{$this->asset_url}{$href}'>\n";
                }
                return;
            }
            $this->_css .= "<link rel='stylesheet' href='{$this->asset_url}{$css_href}'>\n";
        }

        public function get_title() 
        {
            echo $this->_title;
        }

        public function get_css() 
        {
            echo $this->_css;
        }

        public function get_js() 
        {
            echo $this->_js;
        }
}