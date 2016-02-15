<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class infoUser_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //Récupere les informations d'un utilisateur avec son num étudiant passé en parametre
    function get_infouser($numEtu, $pwd)
    {
        $sql = "select * from ETUDIANT where numEtudiant = '" . $numEtu . "'";
        $query = $this->db->query($sql);
        return $query;
    }

    //Récupere le numéro de groupe associé à un étudiant (0 si pas de groupe dans la bdd)
     function get_Groupe()
    {
        $sql = "select numGroupePtut from ETUDIANT where numEtudiant = '" .$this->session->userdata('username'). "'";
        $query = $this->db->query($sql);
        return $query;
    }

    //Récupere si l'utilisateur à l'autorisation d'acceder a la partie note
  function  get_DroitNote()
    {
        $sql = "select voirNote from ETUDIANT where numEtudiant = '" .$this->session->userdata('username'). "'";
        $query = $this->db->query($sql);
        return $query;
    }

    //Récupere les projets demandé par le groupe de l'étudiant
     function get_demande()
     {
          $sql = "select * from DEMANDEPROJET where numGroupe = '" . $this->session->userdata('groupe') . "'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }

}

?>
