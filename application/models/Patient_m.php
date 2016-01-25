<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_m extends CI_Model{

    /**** LOAD NEXT APPOINTMENT BY PATIENT ****/
    function getNextAppointmentByPatient($idPatient){
        $sql = "SELECT * FROM tbl_appointment tbla, tbl_patient tblp WHERE tbla.id_patient=tblp.id_patient AND tbla.appointment_date >= CURDATE() AND tblp.id_patient=".$idPatient." ORDER BY tbla.appointment_date DESC LIMIT 1;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD ALL APPOINTMENTS BY PATIENT ****/
    function getAppointmentsByPatient($idPatient){
        $sql = "SELECT * FROM tbl_appointment tbla, tbl_patient tblp WHERE tbla.id_patient=tblp.id_patient AND tblp.id_patient=".$idPatient.";";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD TOOTH FILE ****/
    function getToothFile($idPatient){
        $sql = "SELECT * FROM tbl_tooth tblt,tooth_file tf,tbl_patient tblp WHERE tblt.id_tooth=tf.id_tooth  AND tf.id_patient=tblp.id_patient AND tblp.id_patient=".$idPatient;
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD ALL INVOICES BY PATIENT ****/
    function getAllInvoicesByPatient($idPatient){
        $sql = "SELECT * FROM tbl_invoice tbli, tbl_patient tblp WHERE tbli.id_patient=tblp.id_patient AND tblp.id_patient=".$idPatient." ORDER BY tbli.id_invoice DESC;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD LAST FIVE INVOICES BY PATIENT ****/
    function getLastFiveInvoicesByPatient($idPatient){
        $sql = "SELECT * FROM tbl_invoice tbli, tbl_patient tblp WHERE tbli.id_patient=tblp.id_patient AND tblp.id_patient=".$idPatient." ORDER BY tbli.id_invoice DESC LIMIT 5;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD ONE PATIENT ****/
    function getOnePatient($idPatient){
        $sql = "SELECT * FROM tbl_patient tblp,tbl_gender tblg WHERE id_patient=".$idPatient." AND tblp.id_gender=tblg.id_gender;";
        $query = $this->db->query($sql);
        $data=$query->row_array();
        return $data;
    }

    /**** INSERT ANSWER SURVEY ****/
    function insertAnswer($data){
        $this->db->insert("tbl_survey",$data);
    }

    /**** LOAD ONE SURVEY ****/
    function getOneSurvey($idPatient){
        $sql = "SELECT * FROM tbl_survey WHERE id_patient=".$idPatient.";";
        $query = $this->db->query($sql);
        $data=$query->row_array();
        return $data;
    }






}