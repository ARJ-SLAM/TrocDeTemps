<?php
class Profil extends CI_Controller
{
    public function index ()
    {
        $this->load->model("Model_offres");
		$data["lesOffres"] = $this->Model_offres->postLesOffres("1");

		$this->load->model("Model_demandes");
		$data["lesDemandes"] = $this->Model_demandes->postLesDemandes("1");


        $data['main_contents'] = 'front/view_profil';
        $this->load->view('template', $data);
    }
    
	public function AfficherNewOffre()
	{
		$this->load->model("Model_offres");
		$tab["lesCateg"] = $this->Model_offres->getLesCategories();
		$tab["lesServices"] = $this->Model_offres->getLesServices($tab['lesCateg'][0]->idCateg);
		$tab["photoServices"] = $this->Model_offres->getPhotoService($tab['lesServices'][0]->idService);
        $tab["maxOffres"] = $this->Model_offres->maxOffres();
		$this->load->view('view_newOffre',$tab);
		
	}

	public function AfficherNewDemande()
	{
		$this->load->model("Model_demandes");
		$tab["lesCateg"] = $this->Model_demandes->getLesCategories();
		$tab["lesServices"] = $this->Model_demandes->getLesServices($tab['lesCateg'][0]->idCateg);
		$tab["photoServices"] = $this->Model_demandes->getPhotoService($tab['lesServices'][0]->idService);
        $tab["maxDemandes"] = $this->Model_demandes->maxDemandes();
		$this->load->view('view_newDemande',$tab);
		
	}

	public function modifServices()
	{
		$this->load->model("Model_offres");
		$tab["lesServices"] = $this->Model_offres->getLesServices($_POST['idCateg']);
		$tab["photoServices"] = $this->Model_offres->getPhotoService($tab['lesServices'][0]->idService);
		$this->load->view('view_lesServices',$tab);
	}

	public function modifPhoto()
	{
		$this->load->model("Model_offres");
		$tab["photoServices"] = $this->Model_offres->getPhotoService($_POST['idService']);
		$this->load->view('view_lesPhotos',$tab);
	}

}
?>