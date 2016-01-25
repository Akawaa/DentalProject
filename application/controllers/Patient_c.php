<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_c extends CI_Controller{

    public function index(){
        $this->load->view('eng/patient/v_head_patient');
        $this->load->view('eng/patient/v_menu_patient');
        $idPatient = $this->session->userdata('id_patient');
        $data= $this->Home_m->getAllInfo(1);
        $data['appointment'] = $this->Patient_m->getNextAppointmentByPatient($idPatient);
        $data['invoice'] = $this->Patient_m->getLastFiveInvoicesByPatient($idPatient);
        $this->load->view('eng/patient/v_patient',$data);
        $this->load->view('eng/patient/v_foot_patient');
    }

    public function filePatient(){
        $this->load->view('eng/patient/v_head_patient');
        $this->load->view('eng/patient/v_menu_patient');
        $idPatient = $this->session->userdata('id_patient');
        $data['appointments']=$this->Patient_m->getAppointmentsByPatient($idPatient);
        $data['tooth_file']=$this->Patient_m->getToothFile($idPatient);
        $this->load->view('eng/patient/v_file',$data);
        $this->load->view('eng/patient/v_foot_patient');
    }

    public function invoice(){
        $this->load->view('eng/patient/v_head_patient');
        $this->load->view('eng/patient/v_menu_patient');
        $idPatient = $this->session->userdata('id_patient');
        $data['invoices']=$this->Patient_m->getAllInvoicesByPatient($idPatient);
        $this->load->view('eng/patient/v_invoice',$data);
        $this->load->view('eng/patient/v_foot_patient');
    }

    public function profil_patient(){
        $this->load->view('eng/patient/v_head_patient');
        $this->load->view('eng/patient/v_menu_patient');
        $idPatient = $this->session->userdata('id_patient');
        $data=$this->Patient_m->getOnePatient($idPatient);
        $this->load->view('eng/patient/v_profil_patient',$data);
        $this->load->view('eng/patient/v_foot_patient');
    }

    public function survey(){
        $this->load->view('eng/patient/v_head_patient');
        $this->load->view('eng/patient/v_menu_patient');
        $idPatient = $this->session->userdata('id_patient');
        $data=$this->Patient_m->getOneSurvey($idPatient);
        $this->load->view('eng/patient/v_questionnaire',$data);
        $this->load->view('eng/patient/v_foot_patient');
    }

    public function confirmSurvey(){
        $this->form_validation->set_rules('first_survey','question 1','required|alpha');
        $this->form_validation->set_rules('second_survey','question 2','required|alpha');
        $this->form_validation->set_rules('third_survey','question 3','required|numeric');
        $this->form_validation->set_rules('fourth_survey','question 4','required|numeric');
        $this->form_validation->set_rules('fifth_survey','question 5','required|numeric');
        $this->form_validation->set_rules('sixth_survey','question 6','required|numeric');
        $this->form_validation->set_rules('seventh_survey','question 7','required|numeric');
        $this->form_validation->set_rules('eighth_survey','question 8','required|numeric');
        $this->form_validation->set_rules('ninth_survey','question 9','required|numeric');



        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/patient/v_head_patient');
            $this->load->view('eng/patient/v_menu_patient');
            $this->load->view('eng/patient/v_questionnaire');
            $this->load->view('eng/patient/v_foot_patient');
        }
        else{

            $data['survey_answer1']=$_POST['first_survey'];
            $data['survey_answer2']=$_POST['second_survey'];
            $data['survey_answer3']=$_POST['third_survey'];
            $data['survey_answer4']=$_POST['fourth_survey'];
            $data['survey_answer5']=$_POST['fifth_survey'];
            $data['survey_answer6']=$_POST['sixth_survey'];
            $data['survey_answer7']=$_POST['seventh_survey'];
            $data['survey_answer8']=$_POST['eighth_survey'];
            $data['survey_answer9']=$_POST['ninth_survey'];
            $data['survey_answer10']=$_POST['tenth_survey'];
            $data['id_patient']=$this->session->userdata('id_patient');

            $this->Patient_m->insertAnswer($data);
            redirect('Patient_c/survey');
        }
    }

}