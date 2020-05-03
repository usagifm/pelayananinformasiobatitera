<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
  function __construct() {
    parent::__construct();

     $this->load->model('Post_model');
     $this->load->helper(array('text'));
  }

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
   
    $x['artikel']=$this->Post_model->get_all_post();
    $this->load->view('user/artikel',$x);

  }

  public function detail ($id,$slug) {
    $x['detail']=$this->Post_model->get_all_post('artikel','id_artikel',$id);
    $this->load->view('user/detail',$x);
  }

  public function read($slug = NULL){
    $data['baca'] =  $this->Post_model->get_all_post ($slug);
    $this->load->view('user/detail',$data);

  }

      public function view($slug = NULL){
      $data['detail'] = $this->post_model->get_posts($slug);
      $id_artikel = $data['detail']['id_artikel'];
      if(empty($data['detail'])){
        show_404();
      }
      $data['judul'] = $data['detail']['judul'];
      $this->load->view('user/detail',$data);
    }


}
