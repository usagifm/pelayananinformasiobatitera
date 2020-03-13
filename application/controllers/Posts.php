<?php
	class Posts extends CI_Controller{
public function __construct()
{
	parent::__construct();
	$this->load->model('post_model');
	$this->load->helper('url_helper');
}

		public function index($offset = 0){
			// Pagination Config
			$config['base_url'] = base_url() . 'admin/artikel/add';
			$config['total_rows'] = $this->db->count_all('artikel');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			// Init Pagination
			$this->pagination->initialize($config);

			$data['title'] = 'Latest Posts';

			$data['artikel'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);

			$this->load->view('home/index', $data);
		}

		public function view($slug = NULL){
			$data['post'] = $this->post_model->get_posts($slug);
			$post_id = $data['post']['id'];
			$data['comments'] = $this->comment_model->get_comments($post_id);

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = $data['post']['title'];

			$this->load->view('home/index', $data);
		}

		public function create(){

			if(!$this->session->userdata('status')){
                        redirect('admin');
			}

			//$data['kategori'] = $this->post_model->get_categories();

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/artikel/add');

			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/posts';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}

				$this->post_model->create_post($post_image);

				// Set message
				$this->session->set_flashdata('message', 'Posting Anda telah dibuat');

				redirect('admin/artikel');
			}
		}

		public function edit($id_artikel)
		{
			$data['artikel'] = $this->artikel_model->edit_artikel($id_artikel);
			$this->load->view('admin/artikel/update',$data);
		}

		public function update(){

			$this->post_model->update_post();

			// Set message
			$this->session->set_flashdata('message', 'Posing Anda telah diperbarui');

			redirect('admin/artikel/');
		}
	
		public function delete(){
			$id_artikel=$this->input->post('id_artikel');
			$data=$this->post_model->get_id_artikel($id_artikel);
			$q=$data->row_array();
			$this->post_model->delete_artikel($id_artikel);

			// Set message
			$this->session->set_flashdata('message', 'Posting Anda telah dihapus');

			redirect('admin/artikel/list');
		}
		

	}
