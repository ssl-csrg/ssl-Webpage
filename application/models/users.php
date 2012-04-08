<?php
class Users extends CI_Model {
	private $roles = array(
			0 => 'Coordinador',
			1 => 'Coordinador de equipo',
			2 => 'Coordinador de proyecto',
			3 => 'Desarrollador'
		);

	private $team = array(
			0 => 'ssl',
			1 => 'Difusión',
			2 => 'Desarrollo'
		);

	function __construct() {
		parent::__construct();
	}

	function getProjectName($id) {
		if ($id == 0)
			return '';

		$this->db->select('name')->from('projects')->where('id', $id);
		$query = $this->db->get();
		$result = $query->row();

		return $result->name;
	}

	function getAllUsers() {
		$this->db->select()->from('users');
		$query = $this->db->get();

		return $query->result();
	}
}