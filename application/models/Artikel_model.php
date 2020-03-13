<?php
class Artikel_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    function edit_artikel($id_artikel)
    {
      $this->db->where('id_artikel', $id_artikel); //Akan melakukan select terhadap row yang memiliki artikelId sesuai dengan artikelId yang telah dipilih
      $this->db->select("*");
      $this->db->from("artikel");
  
      return $this->db->get();
    }
}
?>	
