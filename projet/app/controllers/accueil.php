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
 
     public function index()
	 {
		 	$this->load->library('session');


			if($this->session->userdata('username') == true)
				{
							if($this->session->userdata('prof') == true)
							{
			  								     $this->load->view('viewprof');
							}
							else
							{
								
								$query = $this->infoUser_model->get_Groupe();

								foreach($query->result() as $ligne)
			                       {
			                              $result = $ligne->numGroupePtut;
			                       }

									if($result != '0')
									{
									  $this->session->set_userdata('groupe', $result);
									}

									$querys = $this->groupe_model->get_GroupeSujet($result);
									foreach($querys->result() as $ligne)
			                      	 {
			                              $result = $ligne->possedeSujet;
			                       	 }


			                       	 if ($result == 1)
			                       	 {
									$this->load->view('viewetufin');

			                       	 }
			                       	 else
			                       	 {
			                       	 	$this->load->view('viewetu');
			                       	 }

							}
				}
			else
				{
				                    redirect('login/index');

				}
                    
     }
	      
}

?>