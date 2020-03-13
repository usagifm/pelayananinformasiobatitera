<?php
	class Obat_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		function get_all_obat(){
            $hsl=$this->db->query("SELECT *FROM obat ");
            return $hsl;
				}

		function simpan_obat(){
			$data = array(
				'id_admin' => $this->session->userdata('user_id'),
				'nama_generik' => $this->input->post('nama_generik'),
				'merek_dagang' => $this->input->post('merek_dagang'),
				'indikasi_obat' => $this->input->post('indikasi_obat'),
				'bentuk' => $this->input->post('bentuk'),
				'reaksi_obatlain' => $this->input->post('reaksi_obatlain'),
				'deskripsi' => $this->input->post('deskripsi')
			);

			return $this->db->insert('obat', $data);
		}

		public function update_obat(){
			$data = array(
				'id_admin' => $this->session->userdata('user_id'),
				'nama_generik' => $this->input->post('nama_generik'),
				'merek_dagang' => $this->input->post('merek_dagang'),
				'indikasi_obat' => $this->input->post('indikasi_obat'),
				'bentuk' => $this->input->post('bentuk'),
				'reaksi_obatlain' => $this->input->post('reaksi_obatlain'),
				'deskripsi' => $this->input->post('deskripsi')
			);

			$this->db->where('id_obat', $this->input->post('id_obat'));
			return $this->db->update('obat', $data);
		}

		function edit_obat($id_obat)
		{
		  $this->db->where('id_obat', $id_obat); //Akan melakukan select terhadap row yang memiliki artikelId sesuai dengan artikelId yang telah dipilih
		  $this->db->select("*");
		  $this->db->from("obat");

		  return $this->db->get();
		}

		function editobat_proses($data,$id_obat)
		{
			$this->db->where('id_obat', $id_obat);
				$this->db->update('obat', $data);
		}

		function get_id_obat($id_obat){
			$hsl=$this->db->query("SELECT * FROM obat where id_obat='$id_obat'");
			return $hsl;
		}

		public function delete_obat($id_obat){
			//delete obat berdasarkan id
			$this->db->where('id_obat', $id_obat);
			$this->db->delete('obat');
		}

		function daftarObat ($a) {
			$this->db->select("*");
			$this->db->from("obat");
			$this->db->like("nama_generik",$a,"after");
			$this->db->order_by("nama_generik", "ASC");
			return $this->db->get();
		}
		function getObatById($id) {
			return $this->db->get_where('obat', array('id_obat' => $id));
		}
	}
