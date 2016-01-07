<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class login_model extends CI_Model
{

     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_prof($usr, $pwd)
     {
          $sql = "select * from tbl_usrs where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = 'prof'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
	 
	  function get_etu($usr, $pwd)
     {
          $sql = "select * from tbl_usrs where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = 'etu'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }

     function isLoggedIn(){
          if($this->session->userdata('username'))
          { return true; } else { return false; }
     }
}?>
