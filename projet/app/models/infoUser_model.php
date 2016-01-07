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
        $sql = "select * from tbl_usrs where username = '" . $usr . "' and password = '" . md5($pwd) . "'";
        $query = $this->db->query($sql);
        return $query;
    }

}

?>
