<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_artikel extends CI_Controller {

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
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
            $url=base_url('admin');
            redirect($url);
        };
	}
	
	public function index()
	{
		$x['data']=$this->post_model->get_all_post();
		$this->load->view('admin/artikel/list',$x);

	}

	public function add(){
		$this->load->view('admin/artikel/add');

	}
}
