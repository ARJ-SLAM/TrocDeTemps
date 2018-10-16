<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl extends CI_Controller {

	public function index()
	{
		$this->load->view('view_offre');
	}

	function AfficherLesOffres() 
	{
		$this->load->model("model_offres");
		$tab["lesOffres"] = $this->model_offres->postLesOffres();
		$this->load->view("view_offre,$tab");
	}
}
