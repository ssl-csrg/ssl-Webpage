<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyectos extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		redirect('inicio/index');
	}

	public function difusion()
	{
		$this->load->model('Projects');
		$this->load->model('Users');

		$nombres = $this->Users->getAllUsersName();
		$proyectos = $this->Projects->getProjectsByType(1);
		$usuarios = $this->Projects->getUsersByProject();

		$data['nav'] = array(
							'inicio' => '',
							'manifiesto' => '',
							'gente' => ''
						);
		$data['tipo'] = 1;
		$data['proyectos'] = $proyectos;
		$data['usuarios'] = $usuarios;
		$data['usernames'] = $nombres;

		$this->load->view('header', $data);
		$this->load->view('proyectos', $data);
		$this->load->view('footer');
	}

	public function desarrollo()
	{
		$this->load->model('Projects');
		$this->load->model('Users');

		$nombres = $this->Users->getAllUsersName();
		$proyectos = $this->Projects->getProjectsByType(2);
		$usuarios = $this->Projects->getUsersByProject();
		
		$data['nav'] = array(
							'inicio' => '',
							'manifiesto' => '',
							'gente' => ''
						);
		$data['tipo'] = 2;
		$data['proyectos'] = $proyectos;
		$data['usuarios'] = $usuarios;
		$data['usernames'] = $nombres;

		$this->load->view('header', $data);
		$this->load->view('proyectos', $data);
		$this->load->view('footer');
	}

	public function meta()
	{
		$this->load->model('Projects');
		$this->load->model('Users');

		$nombres = $this->Users->getAllUsersName();
		$proyectos = $this->Projects->getProjectsByType(0);
		$usuarios = $this->Projects->getUsersByProject();
		
		$data['nav'] = array(
							'inicio' => '',
							'manifiesto' => '',
							'gente' => ''
						);
		$data['tipo'] = 0;
		$data['proyectos'] = $proyectos;
		$data['usuarios'] = $usuarios;
		$data['usernames'] = $nombres;

		$this->load->view('header', $data);
		$this->load->view('proyectos', $data);
		$this->load->view('footer');
	}
}