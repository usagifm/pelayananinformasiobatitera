
<?php
class Detail_artikel extends CI_Controller {
	
	public function index() {
		$this->load->model('model_artikel');
		$this->load->helper(array('text'));
		$data['konten'] = $this->model_artikel->select_all();
		$this->load->view('user/artikel', $data);
	}
	
	public function andex() {
		$this->load->model('model_artikel');
		$this->load->helper(array('text'));
		$data['konten'] = $this->model_artikel->select_all('artikel');
		$this->load->view('user/home', $data);
	}
	/*
	public function read() {
		$this->load->model('model_artikel');
		$this->load->helper('text');
		$data['konten'] = $this->model_artikel->select_all('artikel');
		$this->load->view('user/read_artikel', $data);
	}
	*/
	
	
	public function read($id_artikel) {
		$this->load->model('model_artikel');
		$post = $this->model_artikel->get($id_artikel);
        if(!$post) {
            $this->template->alert(
                'Could not load the requested item',
                'warning'
            );
            redirect('user/artikel');
            return;
        }

        $data['konten'] = $post;
		$this->load->view('user/read_artikel', $data);

  }
}

?>