<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Accueil extends CI_Controller
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
          $this->load->model('groupe_model');

     }
 
 //Fonction d'accueil : Redirige vers la page de connection si la variable session n'existe pas, sinon redirige vers la page correspondant
     public function index()
	 {
		 	$this->load->library('session');


			if($this->session->userdata('username') == true)
				{
							
								$query = $this->infoUser_model->get_Groupe();

								foreach($query->result() as $ligne)
			                       {
			                              $result = $ligne->numGroupePtut;
			                       }

								
									  $this->session->set_userdata('groupe', $result); //Vaut 0 si il n'a pas de groupe
									
									$querys = $this->groupe_model->get_GroupeSujet($result);
									foreach($querys->result() as $ligne)
			                      	 {
			                              $result = $ligne->possedeSujet;
			                       	 }


			                       	 if ($result == 1) //Si l'utilisateur a déja un sujet valider
			                       	 {
										$this->load->view('etudiant/viewetufin'); 
			                       	 }
			                       	 else //Si il n'a pas encore de projet valider
			                       	 {
			                       	 	$this->load->view('etudiant/viewetu');
			                       	 }

							
				}
			else
				{
				                    redirect('login/index');

				}
                    
     }
	      
}

?>