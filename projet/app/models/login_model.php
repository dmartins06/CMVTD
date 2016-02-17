<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class login_model extends CI_Model
{

     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //Recupere l'étudiant qui correspond à l'username et mdp passé en parametre, pour voir si il existe
	  function get_etu($usr, $pwd)
     {
          $sql = "select * from UTILISATEUR where numeroLogin = '" . $usr . "' and password = '" . md5($pwd) . "' and statut= 'etudiant'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }


     function get_prof($usr, $pwd)
     {
          $sql = "select * from UTILISATEUR where numeroLogin = '" . $usr . "' and password = '" . md5($pwd) . "' and statut= 'professeur'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }


     //Fonction pour voir si la session username est crée
     function isLoggedIn(){
          if($this->session->userdata('username'))
          { return true; } else { return false; }
     }
}?>
