<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_m extends CI_Model{

    /**** LOAD ALL INFORMATION ****/
    function getAllTab(){
        $sql = "SELECT * FROM tbl_tab ORDER BY id_tab ASC;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD ALL INFORMATION ****/
    function getAllInfo($idInfo){
        $sql = "SELECT * FROM tbl_information WHERE id_info=".$idInfo.";";
        $query = $this->db->query($sql);
        $data = $query->row_array();
        return $data;
    }

    /**** LOAD OPENING TIMES ****/
    function getAllOpeningTimes(){
        $sql = "SELECT * FROM tbl_opening_times ORDER BY id_day ASC;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** UPDATE INFORMATION ****/
    function updateInfo($idInfo,$data)
    {
        $this->db->where("id_info", $idInfo);
        $this->db->update("tbl_information", $data);
    }

    /**** UPDATE SCHEDULE ****/
    function updateSchedule($idDay,$data)
    {
        $this->db->where("id_day", $idDay);
        $this->db->update("tbl_opening_times", $data);
    }

    /**** LOAD ALL ARTICLES PRINCING ****/
    function getAllArticlesPrincing(){
        $sql = "SELECT * FROM tbl_article tbla,tbl_tab tblt,tbl_staff tbls WHERE tbla.id_tab=tblt.id_tab AND tbla.id_staff=tbls.id_staff AND tblt.id_tab=2;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD ALL ARTICLES GALLERY ****/
    function getAllArticlesGallery(){
        $sql = "SELECT * FROM tbl_article tbla,tbl_tab tblt,tbl_staff tbls WHERE tbla.id_tab=tblt.id_tab AND tbla.id_staff=tbls.id_staff AND tblt.id_tab=3;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD ALL ARTICLES FACILITIES ****/
    function getAllArticlesFacilities(){
        $sql = "SELECT * FROM tbl_article tbla,tbl_tab tblt,tbl_staff tbls WHERE tbla.id_tab=tblt.id_tab AND tbla.id_staff=tbls.id_staff AND tblt.id_tab=4;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD ALL ARTICLES NEWS ****/
    function getAllArticlesNews(){
        $sql = "SELECT * FROM tbl_article tbla,tbl_tab tblt,tbl_staff tbls WHERE tbla.id_tab=tblt.id_tab AND tbla.id_staff=tbls.id_staff AND tblt.id_tab=5;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    /**** LOAD ALL ARTICLES CONTACT ****/
    function getAllArticlesContact(){
        $sql = "SELECT * FROM tbl_article tbla,tbl_tab tblt,tbl_staff tbls WHERE tbla.id_tab=tblt.id_tab AND tbla.id_staff=tbls.id_staff AND tblt.id_tab=6;";
        $query=$this->db->query($sql);
        return $query->result();
    }

}