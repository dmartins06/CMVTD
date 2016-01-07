<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Accueil extends CI_Controller
{
 
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
											     $this->load->view('viewetu');

							}
				}
			else
				{
				                    redirect('login/index');

				}
                    
     }
	      
}

?>