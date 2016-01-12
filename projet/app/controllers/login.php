<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller
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

     }

     public function index()
          {
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('viewlogin');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_resultprof = $this->login_model->get_prof($username, $password);
				$usr_resultetu = $this->login_model->get_etu($username, $password);

                    
				 if ($usr_resultetu > 0) 
                    {
                            
						$this->session->set_userdata('username', $username);
						$this->session->set_userdata('loginuser', TRUE);
						$this->session->set_userdata('prof', FALSE);
                         $query = $this->infoUser_model->get_infouser($username, $password);
                         foreach($query->result() as $ligne)
                         {
                              $this->session->set_userdata('prenom',$ligne->prenomEtudiant);
                              $this->session->set_userdata('nom',$ligne->nomEtudiant);
                         }
                         redirect("Accueil");
                    }
                 else if ($usr_resultprof > 0)
                    {
                        
						 $this->session->set_userdata('username', $username);
						 $this->session->set_userdata('loginuser', TRUE);
						 $this->session->set_userdata('prof', TRUE);

                       
                         redirect("Accueil");
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Mot de passe ou numéro invalide.</div>');
                         redirect('login/index');
                    }
               }
               else
               {
                    redirect('login/index');
               }
          }
     }
	 
	 public function deconnexion()
	 {
			$this->session->sess_destroy();
			redirect('login/index');
	 }
}?>