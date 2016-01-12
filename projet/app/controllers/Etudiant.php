<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Etudiant extends CI_Controller
{
 
 public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          $this->load->model('login_model');
          $this->load->model('infoUser_model');
          $this->load->model('projet_model');


     }

     public function proposerProjet()
	 {
		 	$this->load->library('session');

			if($this->session->userdata('username') == true)
				{
							
						$query = $this->infoUser_model->get_Groupe();

						foreach($query->result() as $ligne)
                         {
                              $result = $ligne->numGroupePtut;
                         }

						if($result != '0')
						{
								 $this->session->set_userdata('groupe', $result);
								$projet = $this->projet_model->get_projet_rentre();
								foreach($projet->result() as $ligne)
                                {
                                 $result = $ligne->proposeProjet;
                                  }
								if ($result != 0) 
									{
										$data['results'] = $this->projet_model->get_projet_proposer();
										$this->load->view('viewProjetProposer',$data);
									}
								 else  $this->load->view('viewProposerProjet');		
						}
						else
						{
								 $this->session->set_flashdata('msgg', '<div class="alert alert-danger text-center">Vous devez avoir un groupe pour acceder à cette fonctionnalité.</div>');
								 	redirect('Accueil/index');

						}

					
						
				}
			else
				{
				                    redirect('login/index');

				}
                    
     }

      public function demanderProjet($projet)
	 {
		 	$this->load->library('session');

			if($this->session->userdata('username') == true)
				{
							
						$query = $this->infoUser_model->get_Groupe();

						foreach($query->result() as $ligne)
                         {
                              $result = $ligne->numGroupePtut;
                         }

						if($result != '0')
						{
						  $this->session->set_userdata('groupe', $result);
						  $this->projet_model->demande_projet($projet);
						  $this->session->set_flashdata('msgg', '<div class="alert alert-danger text-center">La demande à bien été enregistrer, vous pouvez la voir dans l onglet "Mes Demandes".</div>');
					     redirect('Etudiant/listeProjet');

						}
						else
						{
								 $this->session->set_flashdata('msgg', '<div class="alert alert-danger text-center">/!\ Vous devez avoir un groupe pour demander un projet /!\</div>');
								 	redirect('Etudiant/listeProjet');

						}
			
				}
			else
				{
				                    redirect('login/index');

				}
                    
     }


     public function voirNote()
	 {
		 	$this->load->library('session');

			if($this->session->userdata('username') == true)
				{
							
						$query = $this->infoUser_model->get_DroitNote();

						foreach($query->result() as $ligne)
                         {
                              $result = $ligne->voirNote;
                         }

						if($result != '0')
						{
								 
									
								  $this->load->view('viewNote');		
						}
						else
						{ 
								 $this->session->set_flashdata('msgg', '<div class="alert alert-danger text-center">Vous ne pouvez pas encore avoir accès a votre note.</div>');
								 	redirect('Accueil/index');
						}

					
						
				}
			else
				{
				                    redirect('login/index');

				}
                    
     }

      public function rentreProjet()
	 {
		 	$this->load->library('session');

			if($this->session->userdata('username') == true)
				{

				 $nom = $this->input->post("nomProjet");
             	 $description = $this->input->post("description");
             	 $this->projet_model->rentre_projet($nom,$description);
				 redirect('Etudiant/proposerProjet');

				}
			else
				{
				                    redirect('login/index');

				}
                    
     }

       public function listeProjet()
	 {
		 	$this->load->library('session');

			if($this->session->userdata('username') == true)
				{

				 $data['results'] = $this->projet_model->get_projet_dispo();
				 $this->load->view('viewListeProjet',$data);

				}
			else
				{
				                    redirect('login/index');

				}
                    
     }

      public function voirDemande()
	 {
		 	$this->load->library('session');

			if($this->session->userdata('username') == true)
				{
							
						$query = $this->infoUser_model->get_demande();


						if($query > 0)
						{
						  $data['results'] = $this->projet_model->get_projet_demande();
						  $this->load->view('viewDemandeProjet',$data);

						}
						else
						{
								 $this->session->set_flashdata('msgg', '<div class="alert alert-danger text-center">/!\ Vous n avez pas encore de demande de projet /!\</div>');
				                    redirect('Accueil/index');

						}
			
				}
			else
				{
				                    redirect('login/index');

				}
                    
     }



     function demandeProjet($projet)
	 {
		 	$this->load->library('session');

			if($this->session->userdata('username') == true)
				{
							
						$query = $this->infoUser_model->get_Groupe();

						foreach($query->result() as $ligne)
                         {
                              $result = $ligne->numGroupePtut;
                         }

						if($result != '0')
						{
						  $this->session->set_userdata('groupe', $result);
						  $this->projet_model->demande_projet($projet);
						  $this->session->set_flashdata('msgg', '<div class="alert alert-danger text-center">La demande à bien été enregistrer, vous pouvez la voir dans l onglet "Mes Demandes".</div>');
					     redirect('Etudiant/listeProjet');

						}
						else
						{
								 $this->session->set_flashdata('msgg', '<div class="alert alert-danger text-center">/!\ Vous devez avoir un groupe pour demander un projet /!\</div>');
								 	redirect('Etudiant/listeProjet');

						}
			
				}
			else
				{
				                    redirect('login/index');

				}
                    
     }
	      
}

?>