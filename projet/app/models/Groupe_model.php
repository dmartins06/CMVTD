<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class groupe_model extends CI_Model
{
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    //Fonction qui crée un groupe un groupe avec le nom choisis par un utilisateur et le met dedans
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
    
    
    //Fonction qui permet d'enlenver le groupe à un utilisateur
    function quitterGroupe()
    
    {
        $sql = "UPDATE ETUDIANT SET numGroupePtut = '0' WHERE numEtudiant = '".$this->session->userdata('username')."'";
        $query = $this->db->query($sql);
    }
    
    
    //Fonction qui récupere les infos sur un groupe avec son numéro passé en parametre
    function infoGroupe($numGroupe)
    {
        
        $sql = "SELECT nomGroupe FROM GROUPE WHERE numGroupePtut = '".$numGroupe."'";
        $query = $this->db->query($sql);
        if($query->num_rows() >0)
        {
            $row=$query->result();
            return $row;
        }
    }
    
    //Fonction qui récupere la note et le fichier de l'utilisateur connecté (Avec son numéro de groupe passé en session)
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
    
    //Fonction qui récupere le sujet proposé par un numéro de groupe passé en parametre
    function get_GroupeSujet($numGroupe)
    {
        $sql = "SELECT possedeSujet FROM GROUPE WHERE numGroupePtut = '".$numGroupe."'";
        $query = $this->db->query($sql);
        return $query;
    }
    
    
    //Fonction qui récupere les membres d'un groupe passé en parametre
    function membreGroupe($numGroupe)
    {
        
        $sql = "SELECT nomEtudiant,prenomEtudiant FROM ETUDIANT WHERE numGroupePtut = '".$numGroupe."'";
        $query = $this->db->query($sql);
        if($query->num_rows() >0)
        {
            $row=$query->result();
            return $row;
        }
        
    }
    
    //Fonction qui ajoute un membre dans le groupe de l'utilisateur qui effectue l'action grâce a son numéro d'étudiant
    //Met les erreur en variables flashdata pour les afficher a l'actualisation automatique de la page 
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
