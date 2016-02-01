<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class infoUser_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //get the username & password from tbl_usrs
    function get_infouser($usr, $pwd)
    {
        $sql = "select * from ETUDIANT where numEtudiant = '" . $usr . "'";
        $query = $this->db->query($sql);
        return $query;
    }

     function get_Groupe()
    {
        $sql = "select numGroupePtut from ETUDIANT where numEtudiant = '" .$this->session->userdata('username'). "'";
        $query = $this->db->query($sql);
        return $query;
    }

  function  get_DroitNote()
    {
        $sql = "select voirNote from ETUDIANT where numEtudiant = '" .$this->session->userdata('username'). "'";
        $query = $this->db->query($sql);
        return $query;
    }

     function get_demande()
     {
          $sql = "select * from DEMANDEPROJET where numGroupe = '" . $this->session->userdata('groupe') . "'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }

}

?>
