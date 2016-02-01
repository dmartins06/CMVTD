<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class groupe_model extends CI_Model
{

     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function creer_Groupe($groupe)
     {
          $sql = "INSERT INTO GROUPE (nomGroupe) VALUES('".$groupe."')";
          $query = $this->db->query($sql);



           $sql = "SELECT numGroupePtut from GROUPE where nomGroupe = '".$groupe."'";
          $query = $this->db->query($sql);
           if($query->num_rows() >0)
        {
              $row=$query->result();
              
        } 
        foreach ($row as $row2)
        {
          $numGroupe = $row2->numGroupePtut;
        }

          $sql = "UPDATE ETUDIANT SET numGroupePtut = '".$numGroupe."' WHERE numEtudiant = '".$this->session->userdata('username')."'";
          $query = $this->db->query($sql);
          $this->session->set_userdata('groupe', $numGroupe);

     }

      function quitterGroupe()
     
     {   
          $sql = "UPDATE ETUDIANT SET numGroupePtut = '0' WHERE numEtudiant = '".$this->session->userdata('username')."'";
          $query = $this->db->query($sql);
     }

     function infoGroupe($result)
     {

          $sql = "SELECT nomGroupe FROM GROUPE WHERE numGroupePtut = '".$result."'";
           $query = $this->db->query($sql);
           if($query->num_rows() >0)
             {
              $row=$query->result();
              return $row;
            } 
     }

     function get_note_demande()
     {
              $sql = "SELECT NOTE,URL FROM NOTE WHERE ID_GROUPE = '".$this->session->userdata('groupe')."'";
           $query = $this->db->query($sql);
           if($query->num_rows() >0)
             {
              $row=$query->result();
              return $row;
            } 
     }

     function get_GroupeSujet($result)
     {
               $sql = "SELECT possedeSujet FROM GROUPE WHERE numGroupePtut = '".$result."'";
           $query = $this->db->query($sql);
           return $query;
     }


          function membreGroupe($result)
          {

           $sql = "SELECT nomEtudiant,prenomEtudiant FROM ETUDIANT WHERE numGroupePtut = '".$result."'";
           $query = $this->db->query($sql);
           if($query->num_rows() >0)
             {
              $row=$query->result();
              return $row;
            } 

          }

          function addMembre($num)
          {
                $sql = "SELECT numGroupePtut,Semestre from ETUDIANT where numEtudiant = '".$num."'";
          $query = $this->db->query($sql);
           if($query->num_rows() >0)
                {
              $row=$query->result();
              
                } 
          foreach ($row as $row2)
               {
          $songroupe = $row2->numGroupePtut;
          $sonsemestre = $row2->Semestre;
               }
               if($songroupe!=0)
               {
                 $this->session->set_flashdata('msgnoadd', '<div class="alert alert-danger text-center">Cet étudiant a déja un groupe, il doit le quitter avant votre ajout.</div>');
               }
               else if ($sonsemestre != $this->session->userdata('semestre') )
               {
                     $this->session->set_flashdata('msgnoadd', '<div class="alert alert-danger text-center">Cet étudiant n est pas de votre semestre.</div>');
               }

               else
               {
                   $sql = "UPDATE ETUDIANT SET numGroupePtut = '".$this->session->userdata('groupe')."' WHERE numEtudiant = '".$num."'";
                   $query = $this->db->query($sql);  
                    $this->session->set_flashdata('msgadd', '<div class="alert alert-danger text-center">L\'étudiant a bien été ajouté !.</div>');

               }
         
          }
	

}?>
