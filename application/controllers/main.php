<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('asset_helper');
		$this->load->helper('cookie');
		$this->load->helper('form');
		$this->load->helper('general');
	}
	
	private function _header($additional_data = array()){
		
		//MAIN CSS
		$css_files = array(
			css_asset('general.css')
		);
		
		//ADDITIONAL CSS
		if (isset($additional_data['css'])){
			foreach ($additional_data['css'] as $additional_css){
				$css_files[] = css_asset($additional_css);
			}
		}
		
		//MAIN JS
		$js_files = array(
			js_asset('basic.js')
		);
		
		//ADDITIONAL JS
		if (isset($additional_data['js'])){
			foreach ($additional_data['js'] as $additional_js){
				$js_files[] = js_asset($additional_js);
			}
		}
		
		$header_data = array(
			'css_files' => $css_files,
			'js_files' => $js_files
		);
		
		$this->load->view('general/header', $header_data);
	}
	
	private function _footer(){
		$this->load->view('general/footer');
	}
	
	//pages
	
	public function index(){
		$this->_header();
		$this->load->view('startpage');
		$this->_footer();
	}
		
}