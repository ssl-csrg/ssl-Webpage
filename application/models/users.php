<?php
class Users extends CI_Model {
	public $roles = array(
			0 => 'Coordinador general',
			1 => 'Coordinador de equipo',
			2 => 'Coordinador de proyecto',
			3 => 'Desarrollador'
		);

	public $team = array(
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

	function getProjectsFromUser($uid) {
		$this->db->select('project_name')->from('projects_by_user')->where('user_id', $id);
		$query = $this->db->get();

		return $query->result();
	}

	function getAllProjects() {
		$this->db->select()->from('projects_by_user');
		$query = $this->db->get();

		return $query->result();
	}

	function getAllUsersName() {
		$this->db->select('id, username')->from('users');
		$query = $this->db->get();

		$result = $query->result();		
		$ret = array();

		foreach ($result as $row) {
			$ret[$row->id] = $row->username;
		}

		return $ret;
	}
}