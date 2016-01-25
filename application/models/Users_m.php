<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_m extends CI_Model {

    /*************  CHECK CONNECTION PATIENT************/
    public function check_connectionPatient($donnees)
    {
        $sql = "SELECT id_patient,patient_login,patient_password,patient_name,patient_surname FROM tbl_patient WHERE patient_login=\"".$donnees['username']."\"
        and patient_password=\"".$donnees['password']."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()==1)
        {
            $row=$query->result_array();
            $donnees_resultat=$row[0];
            return $donnees_resultat;
        }
        else
            return false;
    }

    /*************  CHECK CONNECTION PATIENT************/
    public function check_connectionStaff($donnees)
    {
        $sql = "SELECT tbls.id_staff,tbls.staff_login,tbls.staff_password,tbls.staff_name,tbls.staff_surname,tblps.post_name,tblps.id_post,tblps.post_right from tbl_staff tbls,tbl_post_staff tblps WHERE tblps.id_post=tbls.id_post AND tbls.staff_login=\"".$donnees['username']."\"
        and tbls.staff_password=\"".$donnees['password']."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()==1)
        {
            $row=$query->result_array();
            $donnees_resultat=$row[0];
            return $donnees_resultat;
        }
        else
            return false;
    }

    /*************  BE CONNECTED IN PATIENT ************/
    function beConnectedPatient()
    {
        return $this->session->userdata('patient_login') ;
    }

    /*************  BE CONNECTED IN STAFF ************/
    function beConnectedStaff()
    {
        return $this->session->userdata('staff_login') ;
    }
}