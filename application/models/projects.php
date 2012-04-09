<?php
class Projects extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function getAllProjects() {
		$this->db->select()->from('projects');
		$query = $this->db->get();

		return $query->result();
	}

	function getProjectsByType($type) {
		$this->db->select()->from('projects')->where('team_id', $type);
		$query = $this->db->get();

		return $query->result();		
	}

	function getUsersByProject() {
		$this->db->select()->from('user_project');
		$query = $this->db->get();

		return $query->result();
	}
}