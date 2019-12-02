<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

	public function push($comment, $update = false) {
		if($update) {
			$this->db->query("UPDATE komen set komentar = '" . $comment['komentar'] . "' where id = " . $comment['comentario_id'] );
			return;
		}

		$this->db->insert("komen", $comment);
	}

	public function pullAll() {
		$query = "SELECT U.`nama`, C.`komentar`, C.`time_create`, C.`id_author`, C.`id` from user as U inner join komen as C on U.`id_user` = C.`id_author` ORDER BY C.`id` desc";
		return $this->db->query($query)->result_array();
	}

	public function pull($id) {
		return $this->db->query("SELECT * FROM komen WHERE id = " . $id)->row_array();
	}

	public function del($id) {
		$this->db->where('id', $id);
		$this->db->delete('komentar');
		return;
	}
}