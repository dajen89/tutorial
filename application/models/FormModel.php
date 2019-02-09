<?php
(defined('BASEPATH') OR exit('no direct access allowed'));

Class FormModel extends CI_Model {

	function __construct (){
		parent::__construct();
		$this->load->database();
	}

	public function all(){
		return $this->db->get('sampul');
	}

	public function getLokasi($lokasi){
		$this->db->where($lokasi);
		return $this->db->get('sampul');
	}

	public function insert($data){
		return $this->db->insert('sampul', $data);
	}

	public function update($data,$lokasi){
		$this->db->where($lokasi);
		return $this->db->update('sampul',$data);
	}

	public function delete ($lokasi){
		return $this->db->delete('sampul',$lokasi);
	}


}

?>