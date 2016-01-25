<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_m extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function getAppointment($date){
        $sql = "SELECT * FROM tbl_appointment tbla,tbl_patient tblp WHERE tbla.id_patient=tblp.id_patient AND tbla.appointment_date='".$date."' ORDER BY tbla.appointment_hour ASC;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function getJobDoneByTooth($idPatient,$idTooth){

            $sql = "SELECT * FROM tbl_job_done tblj,tbl_treatment tblt,tbl_appointment tbla,tbl_tooth tbltth,tbl_patient tblp WHERE tblj.id_treatment=tblt.id_treatment AND tbla.id_appointment=tblj.id_appointment AND tblj.id_tooth=tbltth.id_tooth AND tbla.id_patient=tblp.id_patient AND tbla.id_patient =".$idPatient." AND tbltth.id_tooth=".$idTooth.";";
            $query=$this->db->query($sql);
            return $query->result();
    }

    function getUnfinishedJob($idPatient){
        $sql = "SELECT * FROM tbl_job_done tblj,tbl_appointment tbla,tbl_treatment tblt,tbl_patient tblp WHERE tblj.job_complete=0 AND tbla.id_appointment=tblj.id_appointment AND tblj.id_treatment=tblt.id_treatment AND tbla.id_patient=tblp.id_patient AND tbla.id_patient =".$idPatient." ORDER BY tbla.appointment_date ASC;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function getAllJobs($idPatient){
        $sql = "SELECT * FROM tbl_job_done tblj,tbl_appointment tbla,tbl_treatment tblt,tbl_patient tblp WHERE tbla.id_appointment=tblj.id_appointment AND tblj.id_treatment=tblt.id_treatment AND tbla.id_patient=tblp.id_patient AND CONCAT(tbla.appointment_date,' ',tbla.appointment_hour)<NOW() AND tbla.id_patient=".$idPatient." ORDER BY tbla.appointment_date DESC;";
        $query=$this->db->query($sql);
        return $query->result();
    }


}
