<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->model('model_artikel');
		$this->load->helper(array('text'));
		//$data['news'] = $this->news->get_posts(3);
		$data['konten'] = $this->model_artikel->get_posts(3);
		$this->load->view('user/home', $data);

	}
	public function artikel()
	{
		$this->load->view('user/artikel');

	}

	public function obat()
	{
		$this->load->model("Obat_model");
		$data = array(
			$this->getData("A", "I"),
			$this->getData("J", "R"),
			$this->getData("S", "Z"),
		);
		$hasil = array(
			'data' => $data
		);
		$this->load->view('user/obat', $hasil);
	}
	private function getData($start, $finish) {
		$alphas = range($start, $finish);
		foreach ($alphas as $alpha) {
			$data[$alpha] = array();
			$result = $this->Obat_model->daftarObat($alpha)->result();
			foreach ($result as $row) {
				$obat = array(
					'id' => $row->id_obat,
					'nama' => $row->nama_generik
				);
				array_push($data[$alpha], $obat);
			}
		}
		return $data;
	}
	
	public function faq()
	{
		$this->load->view('user/faq');

	}
}
