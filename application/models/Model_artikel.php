
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_artikel extends CI_Model {
	
	private $default_table = 'artikel';

	
	function select_all(){
		
		$this->db->order_by('create_at', 'desc');
		$posts =  $this->db->get('artikel');
		return $posts;
	}
	
	public function get_post_slug($slug){
	  $query = $this->db->get_where('content',array('slug' => $slug));
	  return $query->result_array();
	}

	public function get_posts($count = 5) {
		$this->db->order_by('create_at', 'desc');
		$posts = $this->db->get($this->default_table, $count);
		if(!$posts) {
				return FALSE;
		}
		return $posts;
}

public function get($id_artikel) {
	$post = $this->db->get_where($this->default_table, array('id_artikel' => $id_artikel), 1);
	if(!$post) {
			return FALSE;
	}
	return $post;
}

	/*
	function select_all(){
        $hsl=$this->db->query("SELECT artikel.*,DATE_FORMAT(create_at,'%d/%m/%Y')  FROM artikel ORDER BY id_artikel DESC");
        return $hsl;
    }*/
}

?>