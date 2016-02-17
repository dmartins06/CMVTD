<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class projet_model extends CI_Model
{

     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

    //Retourne 1 si le groupe a proposé un projet, 0 sinon
     function get_projet_rentre()
     {
          $sql = "SELECT proposeProjet FROM GROUPE WHERE numGroupePtut = '" .$this->session->userdata('groupe'). "'";
          $query = $this->db->query($sql);
          return $query;
    }

    //Permet de proposé un projet pour le groupe avec les infos passé en parametres
     function rentre_projet($nom,$description)
     {
          $sql = "INSERT INTO PROJET (nomProjet,descriptionProjet,propositionSujet,numGroupePtut,Semestre) VALUES('".$nom."','".$description."','1','".$this->session->userdata('groupe')."','".$this->session->userdata('semestre')."')";
          $query = $this->db->query($sql);
          $sql = "UPDATE GROUPE SET proposeProjet = '1' WHERE numGroupePtut = '".$this->session->userdata('groupe')."'";
          $query = $this->db->query($sql);
    }
      
	 
  //Récupere le projet proposé par le groupe
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

    //Récupere les projets disponible pour l'étudiant (Avec criteres, pas déja choisis, meme semestre etc)
    function get_projet_dispo()
    {

     if ($this->session->userdata('groupe') != null and $this->session->userdata('groupe') != '0' )
               {
               $sql = 'SELECT numProjet,nomProjet,descriptionProjet,PROJET.numGroupeTuteur,nombreEtu from PROJET WHERE  propositionSujet != 1 AND numGroupePtut = 0 AND "'.$this->session->userdata('groupe').'" NOT IN (SELECT numGroupe from DEMANDEPROJET where PROJET.numProjet = DEMANDEPROJET.numProjet) AND PROJET.semestre = "'.$this->session->userdata('semestre').'"';
               }
          else
          {
                $sql = 'SELECT numProjet,nomProjet,descriptionProjet,PROJET.numGroupeTuteur,nombreEtu from PROJET WHERE  propositionSujet != 1 AND numGroupePtut = 0 AND PROJET.semestre = "'.$this->session->userdata('semestre').'"';
           }
     
         $query = $this->db->query($sql);

        if($query->num_rows() >0)
        {
              $row=$query->result();
              return $row;
        } 
    }

    //Demande le projet passé en parametre pour le groupe de l'étudiant
    function demande_projet($projet)
   {
          $sql = "INSERT INTO DEMANDEPROJET (numGroupe,numProjet,numEtudiant) VALUES('".$this->session->userdata('groupe')."','".$projet."','".$this->session->userdata('username')."')";
          $query = $this->db->query($sql);
    }
   
   //Recupere la liste des projets demandé par le groupe de l'étudiant
   function get_projet_demande()
   {
      $sql = "SELECT nomProjet,descriptionProjet,etatDemande,numEtudiant FROM PROJET,DEMANDEPROJET WHERE  PROJET.numProjet = DEMANDEPROJET.numProjet AND (DEMANDEPROJET.numGroupe =  '".$this->session->userdata('groupe')."')";
         $query = $this->db->query($sql);

        if($query->num_rows() >0)
        {
              $row=$query->result();
              return $row;
        } 
   }

   //Récupere le projet valide pour un groupe
   function get_projet_groupe()
   {
     $sql = "SELECT * FROM PROJET WHERE propositionSujet = '0' and numGroupePtut = '".$this->session->userdata('groupe')."'";
         $query = $this->db->query($sql);

        if($query->num_rows() >0)
        {
              $row=$query->result();
              return $row;
        } 

   }

    //Fonction qui récupere tout les projets existants
    function getAllProject()
    {
        
        $sql = "SELECT * FROM PROJET";
        $query = $this->db->query($sql);
        if($query->num_rows() >0)
        {
            $row=$query->result();
            return $row;
        }
        
    }

    function propose_projet($nom,$description,$semestre)
    {


        $sql = "SELECT numGroupeTuteur FROM GROUPETUTEUR";
        $query = $this->db->query($sql);
        if($query->num_rows() >0)
        {
            $results=$query->result();
        }

        if($results != null){
                foreach($results as $row){
                  $numGroupeTuteur = $row->numGroupeTuteur;
                }

              }

  
       $sql = "INSERT INTO PROJET (nomProjet,descriptionProjet,numGroupeTuteur,Semestre) VALUES('".$nom."','".$description."','".$numGroupeTuteur."','".$semestre."')";
       $query = $this->db->query($sql);
  


    }

}?>
