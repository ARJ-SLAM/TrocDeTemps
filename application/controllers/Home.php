<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('Model_Log');
	}

	// Ouverture de la page et panel Connexion
	public function index()
	{
		$data['title'] = 'E-Trading&nbsp;|&nbsp;Connexion';
		$data['main_contents'] = 'login/View_login.php';
		$this->load->view("templateLog.php", $data);
	}

	// Enregistrement d'un Utilisateur
	public function register_user()
	{
		$newUser = array(
			'nomUser' => $this->input->post('nomUser'),
			'login' => $this->input->post('login'),
			'mdp' => $this->input->post('mdp'),
			'photoUser'=>'https://image.noelshack.com/fichiers/2018/22/4/1527779776-avatar1.jpg',
		);
		print_r($newUser);

		$this->load->model("Model_Log");
		$data['User'] = $this->Model_Log->getUserByName($newUser["login"]);

		if ($data['User'] == null)
		{
			$this->Model_Log->setUser($newUser);
			$this->session->set_flashdata('success', 'Well done ! Vous vous êtes inscrit•e ! Vous pouvez (enfin) vous connectez ☺');
			redirect('home');
		}
		else
		{
			$this->session->set_flashdata('error', "Le nom d'utilisateur existe déjà dans notre base de donnée ☹");
			redirect('home/register');
		}
	}

	public function register()
	{
		$data['title'] = 'Enregistrement&nbsp;|&nbsp;E-Trading';
		$data['main_contents'] = 'login/View_register.php';
		$this->load->view("templateLog.php", $data);
	}

	// Connexion d'un Utilisateur
	public function login()
	{
		$data = $this->Model_Log->getUserByNameAndPassword($_POST["login"], $_POST["pass"]);
		
        if (!empty ($data) )
        {
            $_SESSION['idUser'] = $data['idUser'];
			$_SESSION['nomUser'] = $data['nomUser'];
			$_SESSION['login'] = $data['login'];
			$_SESSION['photoUser'] = $data['photoUser'];

			redirect('home/profil');
		}
		else
		{
			$this->session->set_flashdata('error', "Nom d'utilisateur•trice ou mot de passe incorrect !");
			redirect('home/index');
		}
	}

	// L'Utilisateur rentre sur son compte
	public function profil(){

		if (!empty($_SESSION['idUser']))
		{
			$data['idUser'] = $_SESSION['idUser'];
			$data['nomUser'] = $_SESSION['nomUser'];
			$data['photoUser'] = $_SESSION['photoUser'];

			$this->load->model("Model_Log");
			$data['users'] = $this->Model_Log->getUserById($_SESSION['idUser']);

			$this->load->model("Model_Offres");
			$data['offers'] = $this->Model_Offres->getShowOffers($_SESSION['idUser']);
			
			$this->load->model("Model_Demandes");
			$data['requests'] = $this->Model_Demandes->getShowRequest($_SESSION['idUser']);

			$this->load->model("Model_Deals");
			$data['Deals'] = $this->Model_Deals->getShowDeals($_SESSION['idUser']);
			$data['Offer'] = $this->Model_Deals->getServiceByName($_SESSION['idUser']);

			// Défini l'état du deal
			$etat = array(
			'idEtat' => $this->Model_Deals->getEtatById($_SESSION['idUser']),
			);
			//var_dump($etat['idEtat']);

				if ($etat['idEtat'] == 1) 
				{
					$this->session->set_flashdata('border', "border-danger");
				}
				else
				{
					$this->session->set_flashdata('border', "border-success");
				}

					// Modal titre
					$data['modalTitle'] = 'Nouvelle Offre';

			$data['title'] = 'Accueil | E-Traiding';
			$data['main_contents'] = 'profil/View_mainPage.php';
			$this->load->view("templatePro.php", $data);
		}
		else
		{
			$data['title'] = '403 Forbidden';
			$data['main_contents'] = '403Forbidden.php';
			$this->load->view("templateLog.php", $data);
		}
	}

	// L'Utilisateur se déconnecte
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home', 'refresh');
	}

	public function CreerUneOffre()
	{
		$this->load->model("Model_Offres");
		$this->Model_Offres->creerUneOffre($_SESSION['idUser'], $_POST['dateOffre'], $_POST['idOffre'], $_POST['idService'], $_POST['descriptionOffre']);
	}
	
	// public function modifServices()
	// {
	// 	$this->load->model("Model_offres");
	// 	$tab["lesServices"] = $this->Model_offres->getLesServices($_POST['idCateg']);
	// 	$tab["photoServices"] = $this->Model_offres->getPhotoService($tab['lesServices'][0]->idService);
	// 	$this->load->view('view_lesServices',$tab);
	// }

	// public function modifPhoto()
	// {
	// 	$this->load->model("Model_offres");
	// 	$tab["photoServices"] = $this->Model_offres->getPhotoService($_POST['idService']);
	// 	$this->load->view('view_lesPhotos',$tab);
	// }
	
	// public function CreerUneOffre()
	// {
	// 	$this->load->model("Model_offres");
	// 	$this->Model_offres->creerUneOffre($_POST['user'],$_POST['dateOffre'],$_POST['idOffre'],$_POST['idService'],$_POST['descriptionOffre']);
		
	// }

	// public function updateOffre()
	// {
	// 	$this->load->model("Model_offres");
	// 	$tab["lesOffres"] = $this->Model_offres->afficheOffre($_POST['idOffre']);
	// 	$this->load->view('view_modifOffre',$tab);
	// }


	// public function modifOffre()
	// {
	// 	$this->load->model("Model_offres");
	// 	$this->Model_offres->modifOffre($_POST['dateOffre'],$_POST['idOffre'],$_POST['descriptionOffre']);
	// }

	// public function CreerUneDemande()
	// {
	// 	$this->load->model("Model_demandes");
	// 	$this->Model_demandes->creerUneDemande($_POST['user'],$_POST['dateDemande'],$_POST['idDemande'],$_POST['idService'],$_POST['descriptionDemande']);
	// }

	// public function updateDemande()
	// {
	// 	$this->load->model("Model_demandes");
	// 	$tab["lesDemandes"] = $this->Model_demandes->afficheDemande($_POST['idDemande']);
	// 	$this->load->view('view_modifDemande',$tab);
	// }

	// public function modifDemande()
	// {
	// 	$this->load->model("Model_demandes");
	// 	$this->Model_demandes->modifDemande($_POST['dateDemande'],$_POST['idDemande'],$_POST['descriptionDemande']);
	// }
}
