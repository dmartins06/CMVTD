<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class projet_model extends CI_Model
{

     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     function get_projet_rentre()
     {
          $sql = "SELECT proposeProjet FROM GROUPE WHERE numGroupePtut = '" .$this->session->userdata('groupe'). "'";
          $query = $this->db->query($sql);
          return $query;
    }

     function rentre_projet($nom,$description)
     {
          $sql = "INSERT INTO PROJET (nomProjet,descriptionProjet,propositionSujet,numGroupePtut) VALUES('".$nom."','".$description."','1','".$this->session->userdata('groupe')."')";
          $query = $this->db->query($sql);
          $sql = "UPDATE GROUPE SET proposeProjet = '1' WHERE numGroupePtut = '".$this->session->userdata('groupe')."'";
          $query = $this->db->query($sql);
    }
      
	 

	function get_projet_proposer()
    {
         $sql = "SELECT nomProjet,descriptionProjet,Etat FROM PROJET WHERE propositionSujet = '1' AND numGroupePtut = '" .$this->session->userdata('groupe'). "'";
         $query = $this->db->query($sql);

        if($query->num_rows() >0)
        {
              $row=$query->result();
              return $row;
        } 
    }

    function get_projet_dispo()
    {
          $sql = "SELECT numProjet,nomProjet,descriptionProjet,PROJET.numGroupeTuteur,nombreEtu from PROJET WHERE  propositionSujet != 1 AND numGroupePtut = 0 AND ".$this->session->userdata('groupe')." NOT IN (SELECT numGroupe from DEMANDEPROJET where PROJET.numProjet = DEMANDEPROJET.numProjet)";
         $query = $this->db->query($sql);

        if($query->num_rows() >0)
        {
              $row=$query->result();
              return $row;
        } 
    }
    function demande_projet($projet)
   {
          $sql = "INSERT INTO DEMANDEPROJET (numGroupe,numProjet,numEtudiant) VALUES('".$this->session->userdata('groupe')."','".$projet."','".$this->session->userdata('username')."')";
          $query = $this->db->query($sql);
    }
   
   function get_projet_demande()
   {
      $sql = "SELECT nomProjet,descriptionProjet,etatDemande,numEtudiant FROM PROJET,DEMANDEPROJET WHERE  PROJET.numProjet = DEMANDEPROJET.numProjet AND (PROJET.numGroupePtut = DEMANDEPROJET.numGroupe =  '".$this->session->userdata('groupe')."')";
         $query = $this->db->query($sql);

        if($query->num_rows() >0)
        {
              $row=$query->result();
              return $row;
        } 
   }

}?>
