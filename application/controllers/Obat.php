<?php
	class Obat extends CI_Controller{
        public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
            $url=base_url('admin');
            redirect($url);
        };
        $this->load->model('obat_model');
        $this->load->helper('url_helper');
        }

		public function index(){

		}

		public function view($slug = NULL){
			$data['obat'] = $this->obat_model->get_obat($slug);
			$id_obat = $data['obat']['id_obat'];

			if(empty($data['obat'])){
				show_404();
			}

			$data['title'] = $data['obat']['title'];

			$this->load->view('home/index', $data);
		}

		public function create(){

			if(!$this->session->userdata('status')){
							redirect('admin');
				}

			$this->form_validation->set_rules('nama_generik', 'Nama_generik', 'required');
			$this->form_validation->set_rules('indikasi_obat', 'Indikasi_obat', 'required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/obat/add');

			} else {}
				// Set message
				$this->obat_model->simpan_obat();
				$this->session->set_flashdata('obat_created', 'Anda berhasil menginput data');
				redirect('admin/obat');
		}

		public function edit($id_obat)
		{
			$data['obatq'] = $this->obat_model->edit_obat($id_obat);
			$this->load->view('admin/obat/update',$data);
		}

        public function update(){

            $slug = url_title($this->input->post('nama_generik'));

			$data = array(
				'id_admin' => $this->session->userdata('user_id'),
				'nama_generik' => $this->input->post('nama_generik'),
				'merek_dagang' => $this->input->post('merek_dagang'),
				'indikasi_obat' => $this->input->post('indikasi_obat'),
				'kontraindikasi_obat' => $this->input->post('kontraindikasi_obat'),
				'bentuk' => $this->input->post('bentuk'),
				'reaksi_obatlain' => $this->input->post('reaksi_obatlain'),
				'efek_samping' => $this->input->post('efek_samping'),
				'aturan_tambahan' => $this->input->post('aturan_tambahan'),
				'golongan_obat' => $this->input->post('golongan_obat'),
				'deskripsi' => $this->input->post('deskripsi')
            );

            $condition['id_obat'] = $this->input->post('id_obat'); //Digunakan untuk melakukan validasi terhadap user mana yang akan diupdate nantinya

            $this->obat_model->editobat_proses($data, $this->input->post('id_obat')); //passing variable $data ke info_model

			$this->session->set_flashdata('message', 'anda berhasil memperbarui data');
            redirect('admin/obat'); //redirect page ke halaman info controller info_admin
        }

		public function delete(){
			$id_obat=$this->input->post('id_obat');
			$data=$this->obat_model->get_id_obat($id_obat);
			$q=$data->row_array();
			$this->obat_model->delete_obat($id_obat);
			echo $this->session->set_flashdata('message','Data berhasil dihapus');
			redirect('admin/obat');
			}

			
			public function upload()
			{


				// Load plugin PHPExcel nya
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
				$config['upload_path'] = realpath('excel');
				$config['allowed_types'] = 'xlsx|xls|csv';
				$config['max_size'] = '10000';
				$config['encrypt_name'] = true;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload()) {
		
					//upload gagal
					$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
					//redirect halaman
					redirect('admin/obat');
		
				} else {
		
					$data_upload = $this->upload->data();
		
					$excelreader     = new PHPExcel_Reader_Excel2007();
					$loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
					$sheet             = $loadexcel->getActiveSheet()->toArray(null,null, true, true ,true,true,true, true, true ,true,true,null,true);
		
					$data = array();
		
					$numrow = 1;
					foreach($sheet as $row){
									if($numrow > 1){
										array_push($data, array(
											'nama_generik' => $row['A'],
											'merek_dagang'    => $row['B'],
											'indikasi_obat'   => $row['C'],
											'kontraindikasi_obat'   => $row['D'],
											'bentuk'   => $row['E'],
											'reaksi_obatlain'   => $row['F'],
											'efek_samping'   => $row['G'],
											'aturan_tambahan'   => $row['H'],
											'golongan_obat'   => $row['I'],
											'deskripsi'   => $row['J'],
											'id_admin' => $row['K'],
										));
							}
						$numrow++;
					}
					$this->db->insert_batch('obat', $data);
					//delete file from server
					unlink(realpath('excel/'.$data_upload['file_name']));
		
					//upload success
					$this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
					//redirect halaman
					redirect('admin/obat');
		
				}
			}


			

	}

