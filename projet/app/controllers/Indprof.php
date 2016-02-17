<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Indprof extends CI_Controller
{

 public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
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


			if($this->session->userdata('loginuser') == true and $this->session->userdata('prof') == true  )
				{
							
										                $this->load->view('admin/viewInformations');

							
				}
			else
				{
				                    redirect('login/index');

				}
                    
     }


       public function addProject()
      {
          if($this->session->userdata('loginuser') == true and $this->session->userdata('prof') == true  )
                    {
                                $data['results'] = $this->projet_model->getAllProject();                             
                                $this->load->view('admin/viewAjouterProjet',$data);                               
                    }
               else
                    {
                                 redirect('login/index');

                    }
      }


       public function listeGroupe()
      {
           if($this->session->userdata('loginuser') == true and $this->session->userdata('prof') == true  )
                    {                           
                          $this->load->view('admin/viewListeGroupe');
                    }
               else
                    {
                         redirect('login/index');
                    }
      }


      //Ajout d'un projet par un prog
       public function ajoutProjet()
      {
           if($this->session->userdata('loginuser') == true and $this->session->userdata('prof') == true  )
                    {                              
                     $nom = $this->input->post("nom");
                     $description = $this->input->post("desc");
                     $semestre = $this->input->post("semestre");
                     $this->projet_model->propose_projet($nom,$description,$semestre);
                     redirect('Indprof/addProject');
                    }
               else
                    {
                         redirect('login/index');

                    }
      }
    
}

?>