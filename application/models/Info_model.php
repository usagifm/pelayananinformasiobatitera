<?php
	class Info_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

    function get_all_admin(){
            $hsl=$this->db->query("SELECT *FROM admin ");
            return $hsl;
				}

		function simpan_admin(){
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email')
			);

			return $this->db->insert('admin', $data);
		}

    function edit_admin($id_admin)
    {
      $this->db->where('id_admin', $id_admin); //Akan melakukan select terhadap row yang memiliki artikelId sesuai dengan artikelId yang telah dipilih
      $this->db->select("*");
      $this->db->from("admin");

      return $this->db->get();
    }

		function editadmin_proses($data,$id_admin)
		{
			$this->db->where('id_admin', $id_admin);
				$this->db->update('admin', $data);
		}

		function get_admin_login($id_admin){
			$hsl=$this->db->query("SELECT * FROM admin where id_admin='$id_admin'");
			return $hsl;
		}

		function hapus_admin($id_admin)
		{
			//delete admin berdasarkan id
			$this->db->where('id_admin', $id_admin);
			$this->db->delete('admin');
		}

	}
