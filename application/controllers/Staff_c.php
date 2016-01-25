<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_c extends CI_Controller {

    public function index(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data['appointments'] = $this->Staff_m->getAllAppointmentsToday();
        $data['invoices'] = $this->Staff_m->getTenInvoices();
        $this->load->view('eng/staff/v_staff',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }


    /**** APPOINTMENT ****/
    public function appointment(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data['appointments'] = $this->Staff_m->getAllAppointments();
        $this->load->view('eng/staff/v_appointment',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function newAppointment(){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data['patients'] = $this->Staff_m->getAllPatientsList();
            $this->load->view('eng/staff/v_new_appointment',$data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function newAppointmentByPatient($idPatient){
            $this->load->view('eng/staff/v_head_patient_file');
            $data = $this->Staff_m->getOnePatient($idPatient);
            $this->load->view('eng/staff/v_new_appointment_patient',$data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmAddAppointment(){

        $this->form_validation->set_rules('date_appointment','date','trim|required');
        $this->form_validation->set_rules('hour_appointment','hour','trim|required');
        $this->form_validation->set_rules('patient_appointment','patient','required|numeric');

        $data['appointment_date']=$_POST['date_appointment'];
        $data['appointment_hour']=$_POST['hour_appointment'];
        $data['id_patient']=$_POST['patient_appointment'];
        $data['appointment_check']=0;


        if(isset($_POST['emergency'])==1){
            $data['appointment_emergency']=1;
        }
        else{
            $data['appointment_emergency']=0;
        }

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $data['patients'] = $this->Staff_m->getAllPatientsList();
            $this->load->view('eng/staff/v_new_appointment',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->insertAppointment($data);
            redirect('staff_c/appointment');
        }
    }

    public function confirmAddAppointmentPatient(){

        $this->form_validation->set_rules('date_appointment','date','trim|required');
        $this->form_validation->set_rules('hour_appointment','hour','trim|required');
        $this->form_validation->set_rules('patient_appointment','patient','required|numeric');

        $data['appointment_date']=$_POST['date_appointment'];
        $data['appointment_hour']=$_POST['hour_appointment'];
        $data['id_patient']=$_POST['patient_appointment'];
        $data['appointment_check']=0;


        if(isset($_POST['emergency'])==1){
            $data['appointment_emergency']=1;
        }
        else{
            $data['appointment_emergency']=0;
        }

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_new_appointment_patient',$data['id_patient']);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->insertAppointment($data);
            redirect('staff_c/patientFile/'.$data['id_patient']);
        }
    }

    public function editAppointment($idAppointment){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data = $this->Staff_m->getOneAppointment($idAppointment);
            $data['patients'] = $this->Staff_m->getAllPatientsList();
            $this->load->view('eng/staff/v_edit_appointment',$data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditAppointment(){

        $this->form_validation->set_rules('date_appointment','date','trim|required');
        $this->form_validation->set_rules('hour_appointment','hour','trim|required');
        $this->form_validation->set_rules('patient_appointment','patient','required|numeric');

        $data['id_appointment']=$_POST['id_appointment'];
        $data['appointment_date']=$_POST['date_appointment'];
        $data['appointment_hour']=$_POST['hour_appointment'];
        $data['id_patient']=$_POST['patient_appointment'];
        $data['appointment_check']=0;


        if(isset($_POST['emergency'])==1){
            $data['appointment_emergency']=1;
        }
        else{
            $data['appointment_emergency']=0;
        }

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $data = $this->Staff_m->getOneAppointment($data['id_appointment']);
            $data['patients'] = $this->Staff_m->getAllPatientsList();
            $this->load->view('eng/staff/v_edit_appointment',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updateAppointment($data['id_appointment'],$data);
            redirect('Staff_c/appointment');
        }
    }

    public function cancelAppointment($idAppointment){
            $this->Staff_m->cancelAppointment($idAppointment);
            redirect('staff_c/appointment');
    }



    /**** PATIENT ****/
    public function patientAdmin(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data['patients'] = $this->Staff_m->getAllPatients();
        $this->load->view('eng/staff/v_patient_admin',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function patientFile($idPatient){
        $data = $this->Staff_m->getOnePatient($idPatient);
        $this->load->view('eng/staff/v_head_patient_file',$data);
        $data['appointment'] = $this->Staff_m->getNextAppointmentByPatient($idPatient);
        $data['tooth_file'] = $this->Staff_m->getToothFile($idPatient);
        $data['radios']=$this->Staff_m->getRadioByPatient($idPatient);
        $data['invoices']=$this->Staff_m->getAllInvoicesByPatient($idPatient);
        $this->load->view('eng/staff/v_patient_file',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function patientOldAdmin(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data['oldpatients'] = $this->Staff_m->getAllOldPatients();
        $this->load->view('eng/staff/v_patient_old_admin',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function newPatient(){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data['gender'] = $this->Staff_m->getAllGenders();
            $this->load->view('eng/staff/v_new_patient',$data);
            $this->load->view('eng/staff/v_foot_staff');

    }

    public function confirmAddPatient(){

        $this->form_validation->set_rules('gender_patient','gender','required|numeric');
        $this->form_validation->set_rules('name_patient','name','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('surname_patient','surname','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('DofB_patient','date of birth','trim|required');
        $this->form_validation->set_rules('phone_patient','phone','trim|required|numeric|max_length[20]');
        $this->form_validation->set_rules('email_patient','email','trim|required|valid_email|is_unique[tbl_patient.patient_email]|max_length[50]');
        $this->form_validation->set_rules('address_patient','address','trim|required');
        $this->form_validation->set_rules('city_patient','city','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('country_patient','country','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('login_patient','login','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('pass1_patient','password','trim|required|min_length[8]|max_length[50]');
        $this->form_validation->set_rules('pass2_patient',' confirm password','trim|required|matches[pass1_patient]');


        $data['id_gender']=$_POST['gender_patient'];
        $data['patient_name']=$_POST['name_patient'];
        $data['patient_surname']=$_POST['surname_patient'];
        $data['patient_DofB']=$_POST['DofB_patient'];
        $data['patient_allergies']=$_POST['allergies_patient'];
        $data['patient_phone']=$_POST['phone_patient'];
        $data['patient_email']=$_POST['email_patient'];
        $data['patient_address']=$_POST['address_patient'];
        $data['patient_code']=$_POST['code_patient'];
        $data['patient_city']=$_POST['city_patient'];
        $data['patient_country']=$_POST['country_patient'];
        $data['patient_login']=$_POST['login_patient'];
        $data['patient_password']=$_POST['pass1_patient'];
        $data['old_patient']=0;

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data['gender'] = $this->Staff_m->getAllGenders();
            $this->load->view('eng/staff/v_new_patient',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->insertPatient($data);
            $lastPatient['last_patient'] = $this->Staff_m->getLastPatient();
            for($dent=1;$dent<=34;$dent++){
                $this->Staff_m->initDentalFile($dent,$lastPatient['last_patient']['id_patient']);
            }
            redirect('staff_c/patientAdmin');
        }
    }

    public function editPatient($idPatient){
            $this->load->view('eng/staff/v_head_patient_file');
            $data = $this->Staff_m->getOnePatient($idPatient);
            $data['gender'] = $this->Staff_m->getAllGenders();
            $this->load->view('eng/staff/v_edit_patient', $data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditPatient(){

        $this->form_validation->set_rules('gender_patient','gender','required|numeric');
        $this->form_validation->set_rules('name_patient','name','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('surname_patient','surname','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('DofB_patient','date of birth','trim|required');
        $this->form_validation->set_rules('phone_patient','phone','trim|required|numeric|max_length[20]');
        $this->form_validation->set_rules('email_patient','email','trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('address_patient','address','trim|required');
        $this->form_validation->set_rules('city_patient','city','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('country_patient','country','trim|required|min_length[2]|max_length[50]');

        $data['id_patient']=$_POST['id_patient'];
        $data['id_gender']=$_POST['gender_patient'];
        $data['patient_name']=$_POST['name_patient'];
        $data['patient_surname']=$_POST['surname_patient'];
        $data['patient_DofB']=$_POST['DofB_patient'];
        $data['patient_allergies']=$_POST['allergies_patient'];
        $data['patient_phone']=$_POST['phone_patient'];
        $data['patient_email']=$_POST['email_patient'];
        $data['patient_address']=$_POST['address_patient'];
        $data['patient_city']=$_POST['city_patient'];
        $data['patient_country']=$_POST['country_patient'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_patient_file');
            $data = $this->Staff_m->getOnePatient($data['id_patient']);
            $this->load->view('eng/staff/v_edit_patient',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updatePatient($data['id_patient'],$data);
            redirect('staff_c/patientFile/'.$data['id_patient']);
        }
    }

    public function editLogPatient($idPatient){
            $this->load->view('eng/staff/v_head_patient_file');
            $data = $this->Staff_m->getOnePatient($idPatient);
            $this->load->view('eng/staff/v_editLog_patient', $data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditLogPatient(){

        $this->form_validation->set_rules('login_patient','login','trim|required|min_length[2]|max_length[50]');

        $data['id_patient']=$_POST['id_patient'];
        $data['patient_login']=$_POST['login_patient'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_patient_file');
            $data = $this->Staff_m->getOnePatient($data['id_patient']);
            $this->load->view('eng/staff/v_editLog_patient',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updatePatient($data['id_patient'],$data);
            redirect('staff_c/patientFile/'.$data['id_patient']);
        }
    }

    public function editPasswordPatient($idPatient){
            $this->load->view('eng/staff/v_head_patient_file');
            $data = $this->Staff_m->getOnePatient($idPatient);
            $this->load->view('eng/staff/v_editPassword_patient', $data);
            $this->load->view('eng/staff/v_foot_staff');

    }

    public function confirmEditPasswordPatient(){

        $this->form_validation->set_rules('pass1_patient','password','trim|required|min_length[8]|max_length[50]');
        $this->form_validation->set_rules('pass2_patient',' confirm password','trim|required|matches[pass1_patient]');

        $data['id_patient']=$_POST['id_patient'];
        $data['patient_password']=$_POST['login_pass1'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_patient_file');
            $data = $this->Staff_m->getOnePatient($data['id_patient']);
            $this->load->view('eng/staff/v_editPassword_patient',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updatePatient($data['id_patient'],$data);
            redirect('staff_c/patientFile/'.$data['id_patient']);
        }
    }

    public function removePatient($idPatient){
            $this->load->view('eng/staff/v_head_patient_file');
            $data = $this->Staff_m->getOnePatient($idPatient);
            $this->load->view('eng/staff/v_remove_patient', $data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmRemovePatient(){


        $this->form_validation->set_rules('reason_remove','reason','required');

        $data['id_patient']=$_POST['id_patient'];
        $data['patient_date_leave']=$_POST['dateRemove_patient'];
        $data['patient_reason']=$_POST['reason_remove'];
        $data['old_patient']=1;


        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_patient_file');
            $data = $this->Staff_m->getOnePatient($data['id_patient']);
            $this->load->view('eng/staff/v_remove_patient', $data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updatePatient($data['id_patient'],$data);
            redirect('staff_c/patientFile/'.$data['id_patient']);
        }
    }



    /**** RADIO ****/
    public function addRadio($idPatient){
        $data = $this->Staff_m->getOnePatient($idPatient);
        $this->load->view('eng/staff/v_head_patient_file',$data);
        $this->load->view('eng/staff/v_add_radio', array('error' => ' ' ));
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmAddRadio($idPatient){

        $this->form_validation->set_rules('name_radio','title','required|max_length[50]');
        $this->form_validation->set_rules('comment_radio','comment','max_length[150]');

        $data['radio_name']=$_POST['name_radio'];
        $data['radio_caption']=$_POST['comment_radio'];

        $patient = $this->Staff_m->getOnePatient($idPatient);

        $fileRadio='./radio';
        $filePatient='./radio/'.$patient['patient_surname'].'_'.$patient['patient_name'];

        $data['id_patient']=$patient['id_patient'];


        if($this->form_validation->run() == FALSE) {
            $data = $this->Staff_m->getOnePatient($idPatient);
            $this->load->view('eng/staff/v_head_patient_file',$data);
            $this->load->view('eng/staff/v_add_radio', array('error' => ' ' ));
            $this->load->view('eng/staff/v_foot_staff');
        }else{

            if (file_exists($fileRadio)) {
                if (!file_exists($filePatient)) {
                    mkdir('./radio/' . $patient['patient_surname'] . '_' . $patient['patient_name'], 0777);
                }
            } else {
                mkdir('./radio', 0777);
                mkdir('./radio/' . $patient['patient_surname'] . '_' . $patient['patient_name'], 0777);

            }

            $config['upload_path'] = './radio/'.$patient['patient_surname'].'_'.$patient['patient_name'];
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '4000';
            $config['max_width']  = '3000';
            $config['max_height']  = '3000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img_radio')){
                $data = $this->Staff_m->getOnePatient($idPatient);
                $this->load->view('eng/staff/v_head_patient_file',$data);
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('eng/staff/v_add_radio',$error);
                $this->load->view('eng/staff/v_foot_staff');
            }else {
                $upload = $this->upload->data();
                $data['radio_img'] = $upload['file_name'];
                $this->Staff_m->insertRadio($data);
                redirect('Staff_c/patientFile/'.$idPatient.'/#radio');
            }

        }

    }

    public function deleteRadio($idRadio,$idPatient){
            $data['patient'] = $this->Staff_m->getOnePatient($idPatient);
            $data['radio'] = $this->Staff_m->getOneRadio($idRadio);
            $url=FCPATH.'radio/'.$data['patient']['patient_surname'].'_'.$data['patient']['patient_name'].'/'.$data['radio']['radio_img'];
            unlink($url);
            $this->Staff_m->deleteRadio($idRadio);
            redirect('staff_c/patientFile/'.$idPatient.'/#radio');
    }



    /**** TREATMENT ****/
    public function newTreatment($idPatient){
        $data = $this->Staff_m->getOnePatient($idPatient);
        $this->load->view('eng/staff/v_head_patient_file',$data);
        $data['tooth_file'] = $this->Staff_m->getToothFile($idPatient);
        $this->load->view('eng/staff/v_new_treatment',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function newJobDone($idTooth,$idPatient){
        $data = $this->Staff_m->getOnePatient($idPatient);
        $this->load->view('eng/staff/v_head_patient_file',$data);
        $data = $this->Staff_m->getOneToothByPatient($idPatient,$idTooth);
        $data['vat'] = $this->Staff_m->getVAT();
        $data['appointment'] = $this->Staff_m->getOldAppointmentsByPatientList($idPatient);
        $data['today'] = $this->Staff_m->getAppointmentTodayByPatientList($idPatient);
        $data['classic'] = $this->Staff_m->getTreatmentsClassic();
        $data['filling'] = $this->Staff_m->getTreatmentsFilling();
        $data['crown'] = $this->Staff_m->getTreatmentsCrown();
        $data['brace'] = $this->Staff_m->getTreatmentsBrace();
        $this->load->view('eng/staff/v_add_job_done',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmAddNewJobDone(){

        $this->form_validation->set_rules('appointment_job','appointment','required|numeric');
        $this->form_validation->set_rules('treatment_job','treatment','required|numeric');

        if(isset($_POST['job_completed'])==1){
            $this->form_validation->set_rules('treatment_job','treatment','required|numeric');
            $data['job_complete']=1;
            $data['job_price_incl_tax']=$_POST['job_price_incl_tax'];
            $data['job_vat']=$_POST['vat'];
        }else{
            $data['job_complete']=0;
        }

        $data['id_tooth']=$_POST['id_tooth'];
        $data['id_appointment']=$_POST['appointment_job'];
        $data['id_treatment']=$_POST['treatment_job'];
        $data['job_info']=$_POST['job_info'];

        $jobdone['id_appointment']=$_POST['appointment_job'];

        if($data['id_treatment']==16){
            $extract['tooth_extracted']=1;
        }

        if($this->form_validation->run() == FALSE){
            $data = $this->Staff_m->getOnePatient($_POST['id_patient']);
            $this->load->view('eng/staff/v_head_patient_file',$data);
            $data = $this->Staff_m->getOneToothByPatient($_POST['id_patient'],$_POST['id_tooth']);
            $data['appointment'] = $this->Staff_m->getAppointmentsByPatientList($_POST['id_patient']);
            $data['classic'] = $this->Staff_m->getTreatmentsClassic();
            $data['filling'] = $this->Staff_m->getTreatmentsFilling();
            $data['crown'] = $this->Staff_m->getTreatmentsCrown();
            $data['brace'] = $this->Staff_m->getTreatmentsBrace();
            $this->load->view('eng/staff/v_add_job_done',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{

            $this->Staff_m->insertjobDone($data);
            if($data['id_treatment']==16) {
                $this->Staff_m->updateToothFile($data['id_tooth'], $_POST['id_patient'], $extract);
            }
            redirect('Staff_c/patientFile/'.$_POST['id_patient'].'/#job');
        }
    }

    public function editJobDone($idTooth,$idPatient,$idJobDone){
        $data = $this->Staff_m->getOnePatient($idPatient);
        $this->load->view('eng/staff/v_head_patient_file',$data);
        $data = $this->Staff_m->getOneToothByPatient($idPatient,$idTooth);
        $data['vat'] = $this->Staff_m->getVAT();
        $data['appointment'] = $this->Staff_m->getOldAppointmentsByPatientList($idPatient);
        $data['today'] = $this->Staff_m->getAppointmentTodayByPatientList($idPatient);
        $data['classic'] = $this->Staff_m->getTreatmentsClassic();
        $data['filling'] = $this->Staff_m->getTreatmentsFilling();
        $data['crown'] = $this->Staff_m->getTreatmentsCrown();
        $data['brace'] = $this->Staff_m->getTreatmentsBrace();
        $data['job_done'] = $this->Staff_m->getOneTreatment($idJobDone);
        $this->load->view('eng/staff/v_edit_job_done',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditJobDone(){

        $this->form_validation->set_rules('appointment_job','appointment','required|is_natural');
        $this->form_validation->set_rules('treatment_job','treatment','required|is_natural');

        if(isset($_POST['job_completed'])==1){
            $data['job_complete']=1;
            $data['job_price_incl_tax']=$_POST['job_price_incl_tax'];
            $data['job_vat']=$_POST['vat'];
        }else{
            $data['job_complete']=0;
        }

        $data['id_job_done']=$_POST['id_job_done'];
        $data['id_appointment']=$_POST['appointment_job'];
        $data['id_tooth']=$_POST['id_tooth'];
        $data['id_treatment']=$_POST['treatment_job'];
        $data['job_info']=$_POST['job_info'];


        if($data['id_treatment']==16){
            $extract['tooth_extracted']=1;
        }

        if($this->form_validation->run() == FALSE){
            $data = $this->Staff_m->getOnePatient($_POST['id_patient']);
            $this->load->view('eng/staff/v_head_patient_file',$data);
            $data = $this->Staff_m->getOneToothByPatient($_POST['id_patient'],$_POST['id_tooth']);
            $data['appointment'] = $this->Staff_m->getOldAppointmentsByPatientList($_POST['id_patient']);
            $data['appointment'] = $this->Staff_m->getAppointmentTodayByPatientList($_POST['id_patient']);
            $data['classic'] = $this->Staff_m->getTreatmentsClassic();
            $data['filling'] = $this->Staff_m->getTreatmentsFilling();
            $data['crown'] = $this->Staff_m->getTreatmentsCrown();
            $data['brace'] = $this->Staff_m->getTreatmentsBrace();
            $data['job_done'] = $this->Staff_m->getOneTreatment($_POST['id_job_done']);
            $this->load->view('eng/staff/v_add_job_done',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updatejobDone($_POST['id_job_done'],$data);
            if($data['id_treatment']==16) {
                $this->Staff_m->updateToothFile($data['id_tooth'], $_POST['id_patient'], $extract);
            }
            redirect('Staff_c/patientFile/'.$_POST['id_patient'].'/#job');
        }

    }

    public function finishJob($idPatient,$idJob){
        $data = $this->Staff_m->getOnePatient($idPatient);
        $data['vat'] = $this->Staff_m->getVAT();
        $this->load->view('eng/staff/v_head_patient_file',$data);
        $data['job_done'] = $this->Staff_m->getOneTreatment($idJob);
        $this->load->view('eng/staff/v_finish_job',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmFinishJob(){

        $this->form_validation->set_rules('job_price_incl_tax','price','required|numeric');


        $data['id_job_done']=$_POST['id_job'];
        $data['job_price_incl_tax']=$_POST['job_price_incl_tax'];
        $data['job_complete']=1;

        if($this->form_validation->run() == FALSE){
            $data = $this->Staff_m->getOnePatient($_POST['idPatient']);
            $this->load->view('eng/staff/v_head_patient_file',$data);
            $data['job_done'] = $this->Staff_m->getOneTreatment($data['id_job_done']);
            $this->load->view('eng/staff/v_finish_job',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updatejobDone($data['id_job_done'],$data);
            redirect('Staff_c/patientFile/'.$_POST['id_patient'].'/#job');
        }
    }

    public function deleteJobDone($idJob){
            $this->Staff_m->deleteJobDone($idJob);
            redirect('Staff_c/settingStaff');
    }



    /**** INVOICE ****/
    public function invoiceStaff(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data['invoices'] = $this->Staff_m->getAllInvoices();
        $this->load->view('eng/staff/v_invoice_staff',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function generateNewInvoice($idPatient){
        $data = $this->Staff_m->getOnePatient($idPatient);
        $this->load->view('eng/staff/v_head_patient_file',$data);
        $data['job']= $this->Staff_m->getJobDoneWithoutInvoice($idPatient);
        $this->load->view('eng/staff/v_new_invoice',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function addNewInvoice($idPatient){
        if($_POST['Job']==null){
            $data = $this->Staff_m->getOnePatient($idPatient);
            $this->load->view('eng/staff/v_head_patient_file',$data);
            $data['job']= $this->Staff_m->getJobDoneWithoutInvoice($idPatient);
            $this->load->view('eng/staff/v_new_invoice',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }else{
            $idStaff = $this->session->userdata('id_staff');

            $data['id_staff']=$idStaff;
            $data['id_patient']=$idPatient;
            $data['invoice_date']=date('Y-m-d');
            $this->Staff_m->insertNewInvoice($data);

            $invoice['invoice'] = $this->Staff_m->getLastInvoiceByStaff($idStaff);
            $dataa['id_invoice']=$invoice['invoice']['id_invoice'];
            foreach($_POST['Job'] as $value){
                $this->Staff_m->updateJobDone($value,$dataa);
            }

            $job=$this->Staff_m->getJobByInvoice($dataa['id_invoice']);
            $total['invoice_amount']=0;
            foreach($job as $r){
                $total['invoice_amount'] = $total['invoice_amount'] + $r->job_price_incl_tax;
            }
            $this->Staff_m->updateInvoice($dataa['id_invoice'],$total);
            redirect('Staff_c/patientFile/'.$idPatient.'/#invoice');
        }
    }

    public function PDFInvoice($idInvoice,$idPatient){
        $this->load->library('Fpdf');

        $data['patient']= $this->Staff_m->getOnePatient($idPatient);
        $data['invoice']= $this->Staff_m->getOneInvoice($idInvoice);
        $data['job']= $this->Staff_m->getJobByInvoice($idInvoice);
        $data['firm']= $this->Home_m->getAllInfo(1);
        define('FPDF_FONTPATH',$this->config->item('fonts_path'));
        $this->fpdf->Open();
        $this->fpdf->AddPage();

        //LOGO
        $this->fpdf->Image('assets/images/logoInvoice.png',20,13,45);

        //TITLE INVOICE
        $this->fpdf->SetFont('Helvetica','I',24);
        $this->fpdf->Cell(80);
        $this->fpdf->SetFillColor(192);
        $this->fpdf->RoundedRect(120, 15, 70, 10, 5, '12', 'DF');
        $this->fpdf->RoundedRect(120, 25, 35, 20, 5, '4', '');
        $this->fpdf->RoundedRect(155, 25, 35, 20, 5, '3', '');
        $this->fpdf->Cell(80,20,'Invoice',0,0,'R');
        $this->fpdf->SetFont('Helvetica','B',12);
        $this->fpdf->Ln(10);
        $this->fpdf->Cell(110);
        $this->fpdf->Cell(35,20,'Reference : ',0,0,'L');
        $this->fpdf->Cell(30,20,'Date : ',0,0,'L');
        $this->fpdf->Ln(8);
        $this->fpdf->SetFont('Helvetica','',12);
        $this->fpdf->Cell(110);
        $this->fpdf->Cell(35,20,$data['invoice']['id_invoice'],0,0,'C');
        $this->fpdf->Cell(30,20,date("d-m-Y",strtotime($data['invoice']['invoice_date'])),0,0,'C');

        //FIRM ADDRESS
        $this->fpdf->SetFont('Helvetica','',12);
        $this->fpdf->Ln(8);
        $this->fpdf->Cell(12);
        $this->fpdf->Cell(40,30,"SouthSea Dental",0,0,'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(12);
        $this->fpdf->Cell(40,30,$data['firm']['info_address'],0,0,'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(12);
        $this->fpdf->Cell(40,30,$data['firm']['info_city'].' '.$data['firm']['info_code'],0,0,'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(12);
        $this->fpdf->Cell(40,30,$data['firm']['info_country'],0,0,'L');

        //PATIENT ADDRESS
        $this->fpdf->Cell(70);
        $this->fpdf->Cell(40,30,$data['patient']['patient_name'].' '.$data['patient']['patient_surname'],0,0,'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(122);
        $this->fpdf->Cell(40,30,$data['patient']['patient_address'],0,0,'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(122);
        $this->fpdf->Cell(40,30,$data['patient']['patient_city'].' '.$data['patient']['patient_code'],0,0,'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(122);
        $this->fpdf->Cell(40,30,$data['patient']['patient_country'],0,0,'L');

        //TABLE INVOICE
        $this->fpdf->Ln(30);
        $this->fpdf->SetFillColor(192);
        //THEAD
        $this->fpdf->RoundedRect(20, 100, 20, 10, 1, '1', 'DF');
        $this->fpdf->RoundedRect(40, 100, 60, 10, 1, '', 'DF');
        $this->fpdf->RoundedRect(100, 100, 35, 10, 1, '', 'DF');
        $this->fpdf->RoundedRect(135, 100, 35, 10, 1, '', 'DF');
        $this->fpdf->RoundedRect(170, 100, 20, 10, 1, '2', 'DF');
        //TBODY
        $this->fpdf->RoundedRect(20, 110, 20, 130, 1, '4', '');
        $this->fpdf->RoundedRect(40, 110, 60, 130, 1, '', '');
        $this->fpdf->RoundedRect(100, 110, 35, 130, 1, '', '');
        $this->fpdf->RoundedRect(135, 110, 35, 130, 1, '', '');
        $this->fpdf->RoundedRect(170, 110, 20, 130, 1, '3', '');

        $this->fpdf->SetFont('Helvetica','',10);
        $this->fpdf->Cell(13);
        $this->fpdf->Cell(20,20,"Tooth",0,0,'L');
        $this->fpdf->Cell(60,20,"Treatment",0,0,'L');
        $this->fpdf->Cell(35,20,"Price excl. tax",0,0,'L');
        $this->fpdf->Cell(35,20,"Price incl. tax",0,0,'L');
        $this->fpdf->Cell(35,20,"VAT",0,0,'L');
        $totalExlTax = 0;
        foreach($data['job'] as $job){
            $this->fpdf->Ln(10);
            $this->fpdf->SetFont('Helvetica','',10);
            $this->fpdf->Cell(17);
            $this->fpdf->Cell(20,20,$job->id_tooth,0,0,'L');
            $this->fpdf->Cell(60,20,date("d-m-Y",strtotime($job->appointment_date)).' - '.$job->treatment_name,0,0,'L');
            $VAT=100/(100+$job->job_vat);
            $priceExclVat=$VAT*$job->job_price_incl_tax;
            $totalExlTax += $priceExclVat;
            $this->fpdf->Cell(35,20,number_format($priceExclVat,2),0,0,'L');
            $this->fpdf->Cell(32,20,number_format($job->job_price_incl_tax,2),0,0,'L');
            $this->fpdf->Cell(20,20,number_format($job->job_vat,2).'%',0,0,'L');
            $this->fpdf->Ln(5);
            $this->fpdf->SetFont('Helvetica','I',8);
            $this->fpdf->Cell(37);
            $this->fpdf->Cell(10,20,$job->type_name,0,0,'L');


        }

        $this->fpdf->SetY(245);
        $this->fpdf->SetFont('Helvetica','B',12);
        $this->fpdf->Cell(110);
        $this->fpdf->Cell(38,10,"Total excl. tax (GBP)",0,0,'L');
        $this->fpdf->SetFont('Helvetica','',12);
        $this->fpdf->Cell(20,10,round($totalExlTax,2),0,0,'R');
        $this->fpdf->Ln(10);
        $this->fpdf->SetFont('Helvetica','B',12);
        $this->fpdf->Cell(110);
        $this->fpdf->Cell(38,10,"Total incl. tax (GBP)",0,0,'L');
        $this->fpdf->SetFont('Helvetica','',12);
        $this->fpdf->Cell(20,10,number_format($data['invoice']['invoice_amount'],2),0,0,'R');


        $this->fpdf->Output();



    }

    public function editInvoice($idInvoice,$idPatient){
        $data = $this->Staff_m->getOnePatient($idPatient);
        $this->load->view('eng/staff/v_head_patient_file',$data);
        $data['invoice'] = $this->Staff_m->getOneInvoice($idInvoice);
        $data['job']= $this->Staff_m->getAllJobDoneByPatient($idPatient);
        $this->load->view('eng/staff/v_edit_invoice',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditInvoice($idPatient){
        if($_POST['Job_done[]']==null){
            $data = $this->Staff_m->getOnePatient($idPatient);
            $this->load->view('eng/staff/v_head_patient_file',$data);
            $data['job']= $this->Staff_m->getJobDoneWithoutInvoice($idPatient);
            $this->load->view('eng/staff/v_new_invoice',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }else{
            $idStaff = $this->session->userdata('id_staff');

            $data['id_staff']=$idStaff;
            $data['id_patient']=$idPatient;
            $data['invoice_date']=date('Y-m-d');
            $this->Staff_m->insertNewInvoice($data);

            $invoice['invoice'] = $this->Staff_m->getLastInvoiceByStaff($idStaff);
            $dataa['id_invoice']=$invoice['invoice']['id_invoice'];
            foreach($_POST['Job'] as $value){
                $this->Staff_m->updateJobDone($value,$dataa);
            }

            $job=$this->Staff_m->getJobByInvoice($dataa['id_invoice']);
            $total['invoice_amount']=0;
            foreach($job as $r){
                $total['invoice_amount'] = $total['invoice_amount'] + $r->job_price_incl_tax;
            }
            $this->Staff_m->updateInvoice($dataa['id_invoice'],$total);
            redirect('Staff_c/patientFile/'.$idPatient.'/#invoice');
        }
    }

    public function deleteInvoice($idInvoice,$idPatient){
       $data['job_done']=$this->Staff_m->getJobByInvoice($idInvoice);
       $update['id_invoice']=null;

       foreach($data['job_done'] as $r){
           $this->Staff_m->updateJobDone($r->id_job_done,$update);
       }
       $this->Staff_m->deleteInvoice($idInvoice);
       redirect('/Staff_c/patientFile/'.$idPatient.'/#invoice');

    }



    /**** DOCUMENTATION ****/
    public function documentationFilling(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $this->load->view('eng/staff/v_documentationFilling');
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function documentationCrown(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $this->load->view('eng/staff/v_documentationCrown');
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function documentationBrace(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $this->load->view('eng/staff/v_documentationBrace');
        $this->load->view('eng/staff/v_foot_staff');
    }


    /**** GALLERY ****/
    public function gallery(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data['gallery']=$this->Staff_m->getAllPhotos();
        $this->load->view('eng/staff/v_gallery',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function newPhoto(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $this->load->view('eng/staff/v_new_photo_gallery',array('error' => ' ' ));
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmAddPhoto(){

        $this->form_validation->set_rules('title_photo','title','required|max_length[50]');
        $this->form_validation->set_rules('caption_photo','caption','max_length[50]');

        $data['img_title']=$_POST['title_photo'];
        $data['img_caption']=$_POST['caption_photo'];
        $data['img_date']=date('Y-m-d');
        $data['id_staff']=$this->session->userdata('id_staff');


        if($this->form_validation->run() == FALSE) {
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $this->load->view('eng/staff/v_new_photo_gallery',array('error' => ' ' ));
            $this->load->view('eng/staff/v_foot_staff');
        }else{

            $fileGallery='./gallery';

            if (!file_exists($fileGallery)) {
                mkdir('./gallery', 0777);
            } else {

                $config['upload_path'] = './gallery/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '4000';
                $config['max_width'] = '3000';
                $config['max_height'] = '3000';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('img_photo')) {
                    $this->load->view('eng/staff/v_head_staff');
                    $this->load->view('eng/staff/v_menu_staff');
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('eng/staff/v_new_photo_gallery', $error);
                    $this->load->view('eng/staff/v_foot_staff');

                } else {
                    $upload = $this->upload->data();
                    $data['img_gallery'] = $upload['file_name'];
                    $this->Staff_m->insertPhoto($data);
                    redirect('Staff_c/gallery');
                }
            }
        }
    }

    public function editPhoto($idPhoto){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data=$this->Staff_m->getOnePhoto($idPhoto);
        $data['error']='';
        $this->load->view('eng/staff/v_edit_photo_gallery',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditPhoto(){

        $this->form_validation->set_rules('title_photo','title','required|max_length[50]');
        $this->form_validation->set_rules('caption_photo','caption','max_length[50]');

        $data['id_img']=$_POST['id_photo'];
        $data['img_title']=$_POST['title_photo'];
        $data['img_caption']=$_POST['caption_photo'];


        if($this->form_validation->run() == FALSE) {
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data=$this->Staff_m->getOnePhoto($data['id_img']);
            $data['error']='';
            $this->load->view('eng/staff/v_edit_photo_gallery',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }else{


                $fileGallery = './gallery';

                if (!file_exists($fileGallery)) {
                    mkdir('./gallery', 0777);
                } else {

                    $config['upload_path'] = './gallery/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '4000';
                    $config['max_width'] = '3000';
                    $config['max_height'] = '3000';

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('img_photo')) {
                        $this->Staff_m->updatePhoto($data['id_img'],$data);
                        redirect('Staff_c/gallery');

                    } else {
                        $upload = $this->upload->data();
                        $data['img_gallery'] = $upload['file_name'];
                        $this->Staff_m->updatePhoto($data['id_img'],$data);
                        redirect('Staff_c/gallery');
                    }
                }

        }
    }

    public function deletePhoto($idPhoto){
            $data['photo']=$this->Staff_m->getOnePhoto($idPhoto);
            $url=FCPATH.'gallery/'.$data['photo']['img_gallery'];
            unlink($url);
            $this->Staff_m->deletePhoto($idPhoto);
            redirect('Staff_c/gallery');
    }


    /**** ARTICLES ****/
    public function articles(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data['articles']=$this->Staff_m->getAllArticles();
        $this->load->view('eng/staff/v_articles',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function newArticle(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data['tab']=$this->Staff_m->getAllTabsList();
        $this->load->view('eng/staff/v_new_article',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmAddArticle(){
        $this->form_validation->set_rules('title_article','title','required|max_length[50]|min_length[5]');
        $this->form_validation->set_rules('tab_article','tab','required|is_natural');
        $this->form_validation->set_rules('content_article','content','required|min_length[20]');

        $data['article_title']=$_POST['title_article'];
        $data['article_content']=$_POST['content_article'];
        $data['article_date']=date('Y-m-d');
        $data['id_staff']=$this->session->userdata('id_staff');
        $data['id_tab']=$_POST['tab_article'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data['tab']=$this->Staff_m->getAllTabsList();
            $this->load->view('eng/staff/v_new_article',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->insertArticle($data);
            redirect('Staff_c/articles');
        }
    }

    public function editArticle($idArticle){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data=$this->Staff_m->getOneArticle($idArticle);
        $data['tab']=$this->Staff_m->getAllTabsList();
        $this->load->view('eng/staff/v_edit_article',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditArticle(){
        $this->form_validation->set_rules('title_article','title','required|max_length[50]|min_length[5]');
        $this->form_validation->set_rules('tab_article','tab','required|is_natural');
        $this->form_validation->set_rules('content_article','content','required|max_length[510]|min_length[20]');

        $data['id_article']=$_POST['id_article'];
        $data['article_title']=$_POST['title_article'];
        $data['article_content']=$_POST['content_article'];
        $data['id_tab']=$_POST['tab_article'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data=$this->Staff_m->getOneArticle($data['id_article']);
            $data['tab']=$this->Staff_m->getAllTabsList();
            $this->load->view('eng/staff/v_edit_article',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updateArticle($data['id_article'],$data);
            redirect('Staff_c/articles');
        }
    }

    public function deleteArticle($idArticle){
            $this->Staff_m->deleteArticle($idArticle);
            redirect('Staff_c/articles');
    }


    /**** SURVEY ANSWER ****/
    public function surveyAnswer(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data['q1a1']=$this->Staff_m->questionOneAnswerOne();
        $data['q1a2']=$this->Staff_m->questionOneAnswerTwo();
        $data['q1a3']=$this->Staff_m->questionOneAnswerThree();
        $data['q1a4']=$this->Staff_m->questionOneAnswerFour();
        $data['q1a5']=$this->Staff_m->questionOneAnswerFive();

        $data['q2a1']=$this->Staff_m->questionTwoAnswerOne();
        $data['q2a2']=$this->Staff_m->questionTwoAnswerTwo();

        $data['q3a1']=$this->Staff_m->questionThreeAnswerOne();
        $data['q3a2']=$this->Staff_m->questionThreeAnswerTwo();
        $data['q3a3']=$this->Staff_m->questionThreeAnswerThree();
        $data['q3a4']=$this->Staff_m->questionThreeAnswerFour();
        $data['q3a5']=$this->Staff_m->questionThreeAnswerFive();
        $data['q3a6']=$this->Staff_m->questionThreeAnswerSix();

        $data['q4a1']=$this->Staff_m->questionFourAnswerOne();
        $data['q4a2']=$this->Staff_m->questionFourAnswerTwo();
        $data['q4a3']=$this->Staff_m->questionFourAnswerThree();
        $data['q4a4']=$this->Staff_m->questionFourAnswerFour();
        $data['q4a5']=$this->Staff_m->questionFourAnswerFive();
        $data['q4a6']=$this->Staff_m->questionFourAnswerSix();

        $data['q5a1']=$this->Staff_m->questionFiveAnswerOne();
        $data['q5a2']=$this->Staff_m->questionFiveAnswerTwo();
        $data['q5a3']=$this->Staff_m->questionFiveAnswerThree();
        $data['q5a4']=$this->Staff_m->questionFiveAnswerFour();
        $data['q5a5']=$this->Staff_m->questionFiveAnswerFive();
        $data['q5a6']=$this->Staff_m->questionFiveAnswerSix();

        $data['q6a1']=$this->Staff_m->questionSixAnswerOne();
        $data['q6a2']=$this->Staff_m->questionSixAnswerTwo();
        $data['q6a3']=$this->Staff_m->questionSixAnswerThree();
        $data['q6a4']=$this->Staff_m->questionSixAnswerFour();
        $data['q6a5']=$this->Staff_m->questionSixAnswerFive();
        $data['q6a6']=$this->Staff_m->questionSixAnswerSix();

        $data['q7a1']=$this->Staff_m->questionSevenAnswerOne();
        $data['q7a2']=$this->Staff_m->questionSevenAnswerTwo();
        $data['q7a3']=$this->Staff_m->questionSevenAnswerThree();
        $data['q7a4']=$this->Staff_m->questionSevenAnswerFour();
        $data['q7a5']=$this->Staff_m->questionSevenAnswerFive();
        $data['q7a6']=$this->Staff_m->questionSevenAnswerSix();

        $data['q8a1']=$this->Staff_m->questionEightAnswerOne();
        $data['q8a2']=$this->Staff_m->questionEightAnswerTwo();
        $data['q8a3']=$this->Staff_m->questionEightAnswerThree();
        $data['q8a4']=$this->Staff_m->questionEightAnswerFour();
        $data['q8a5']=$this->Staff_m->questionEightAnswerFive();
        $data['q8a6']=$this->Staff_m->questionEightAnswerSix();

        $data['q9a1']=$this->Staff_m->questionNineAnswerOne();
        $data['q9a2']=$this->Staff_m->questionNineAnswerTwo();
        $data['q9a3']=$this->Staff_m->questionNineAnswerThree();
        $data['q9a4']=$this->Staff_m->questionNineAnswerFour();
        $data['q9a5']=$this->Staff_m->questionNineAnswerFive();
        $data['q9a6']=$this->Staff_m->questionNineAnswerSix();

        $data['q10']=$this->Staff_m->questionTen();

        $data['patient']=$this->Staff_m->numberPatient();
        $data['patientTotal']=$this->Staff_m->numberPatientTotal();

        $this->load->view('eng/staff/v_survey_answer',$data);
    }


    /**** SETTING ****/
    public function settingStaff(){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data = $this->Home_m->getAllInfo(1);
        $data['vat']= $this->Staff_m->getVAT();
        $data['day']= $this->Home_m->getAllOpeningTimes();
        $data['staff']= $this->Staff_m->getAllStaff();
        $data['treatment']= $this->Staff_m->getAllTreatments();
        $this->load->view('eng/staff/v_setting_staff',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditInformation(){

        $this->form_validation->set_rules('address_info','address','required|max_length[100]|min_length[10]');
        $this->form_validation->set_rules('city_info','city','required|max_length[50]|min_length[2]');
        $this->form_validation->set_rules('code_info','postcode','required|max_length[10]|min_length[2]');
        $this->form_validation->set_rules('phone_info','phone','required|max_length[20]|min_length[2]|is_natural');
        $this->form_validation->set_rules('phone_emergency_info','emergency phone','required|max_length[20]|min_length[2]|is_natural');
        $this->form_validation->set_rules('email_info','email','required|max_length[50]|valid_email');
        $this->form_validation->set_rules('email_emergency_info','emergency email','required|max_length[50]|valid_email');

        $data['info_address']=$_POST['address_info'];
        $data['info_city']=$_POST['city_info'];
        $data['info_code']=$_POST['code_info'];
        $data['info_country']=$_POST['country_info'];
        $data['info_phone']=$_POST['phone_info'];
        $data['info_phone_emergency']=$_POST['phone_emergency_info'];
        $data['info_email']=$_POST['email_info'];
        $data['info_email_emergency']=$_POST['email_emergency_info'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data = $this->Home_m->getAllInfo(1);
            $data['vat']= $this->Staff_m->getVAT();
            $data['day']= $this->Home_m->getAllOpeningTimes();
            $data['staff']= $this->Staff_m->getAllStaff();
            $data['treatment']= $this->Staff_m->getAllTreatments();
            $this->load->view('eng/staff/v_setting_staff',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }else{
            $this->Home_m->updateInfo(1,$data);
            redirect('/Staff_c/settingStaff');
        }

    }

    public function confirmEditOpening(){
        for($i=1;$i<8;$i++){
            if((!empty($_POST['beginning_'.$i])) && (!empty($_POST['end'.$i]))){
                $data['beginning_day']=$_POST['beginning_'.$i];
                $data['end_day']=$_POST['end_'.$i];
                $this->Home_m->updateSchedule($i,$data);
            }else{
                $data['beginning_day']=null;
                $data['end_day']=null;
                $this->Home_m->updateSchedule($i,$data);
            }
        }
        redirect('/Staff_c/settingStaff');
    }

    public function newTreatmentStaff(){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data['type']=$this->Staff_m->getAllTypesList();
            $this->load->view('eng/staff/v_new_treatment_staff',$data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmAddTreatment(){

        $this->form_validation->set_rules('treatment_type','type','required|numeric');
        $this->form_validation->set_rules('treatment_name','treatment','required|max_length[50]');

        $data['id_type']=$_POST['treatment_type'];
        $data['treatment_name']=$_POST['treatment_name'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data['type']=$this->Staff_m->getAllTypesList();
            $this->load->view('eng/staff/v_new_treatment',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->insertTreatment($data);
            redirect('Staff_c/settingStaff');
        }
    }

    public function editTreatmentStaff($idTreatment){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data=$this->Staff_m->getOneTreatmentStaff($idTreatment);
            $data['type']=$this->Staff_m->getAllTypesList();
            $this->load->view('eng/staff/v_edit_treatment',$data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditTreatment(){

        $this->form_validation->set_rules('treatment_type','type','required|numeric');
        $this->form_validation->set_rules('treatment_name','treatment','required|max_length[50]');

        $data['id_treatment']=$_POST['id_treatment'];
        $data['id_type']=$_POST['treatment_type'];
        $data['treatment_name']=$_POST['treatment_name'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data=$this->Staff_m->getOneTreatmentStaff($data['id_treatment']);
            $data['type']=$this->Staff_m->getAllTypesList();
            $this->load->view('eng/staff/v_edit_treatment',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updateTreatment($data['id_treatment'],$data);
            redirect('Staff_c/settingStaff');
        }
    }

    public function deleteTreatment($idTreatment){
            $this->Staff_m->deleteTreatment($idTreatment);
            redirect('Staff_c/settingStaff');
    }

    public function confirmEditVAT(){
        $this->form_validation->set_rules('vat','VAT','required|numeric');

        $data['id_vat']=1;
        $data['rate']=$_POST['vat'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data = $this->Home_m->getAllInfo(1);
            $data['vat']= $this->Staff_m->getVAT();
            $data['day']= $this->Home_m->getAllOpeningTimes();
            $data['staff']= $this->Staff_m->getAllStaff();
            $data['treatment']= $this->Staff_m->getAllTreatments();
            $this->load->view('eng/staff/v_setting_staff',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updateVAT($data['id_vat'],$data);
            redirect('Staff_c/settingStaff');
        }


    }

    public function staffFile($idStaff){
        $this->load->view('eng/staff/v_head_staff');
        $this->load->view('eng/staff/v_menu_staff');
        $data = $this->Staff_m->getOneEmployee($idStaff);
        $this->load->view('eng/staff/v_employee_file',$data);
        $this->load->view('eng/staff/v_foot_staff');
    }

    public function newEmployee(){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data['post']= $this->Staff_m->getAllPostList();
            $this->load->view('eng/staff/v_new_employee',$data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmAddStaff(){

        $this->form_validation->set_rules('post_staff','post','required|numeric');
        $this->form_validation->set_rules('name_staff','name','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('surname_staff','surname','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('phone_staff','phone','trim|required|numeric|max_length[20]');
        $this->form_validation->set_rules('email_staff','email','trim|required|valid_email|is_unique[tbl_staff.staff_email]|max_length[50]');
        $this->form_validation->set_rules('login_staff','login','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('pass1_staff','password','trim|required|min_length[8]|max_length[50]');
        $this->form_validation->set_rules('pass2_staff',' confirm password','trim|required|matches[pass1_staff]');


        $data['staff_name']=$_POST['name_staff'];
        $data['staff_right']=$_POST['post_staff'];
        $data['staff_surname']=$_POST['surname_staff'];
        $data['staff_phone']=$_POST['phone_staff'];
        $data['staff_email']=$_POST['email_staff'];
        $data['staff_login']=$_POST['login_staff'];
        $data['staff_password']=$_POST['pass1_staff'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data['post']= $this->Staff_m->getAllPostList();
            $this->load->view('eng/staff/v_new_employee',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->insertStaff($data);
            redirect('Staff_c/settingStaff');
        }

    }

    public function editStaff($idStaff){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data = $this->Staff_m->getOneEmployee($idStaff);
            $data['post']= $this->Staff_m->getAllPostList();
            $this->load->view('eng/staff/v_edit_employee',$data);
            $this->load->view('eng/staff/v_foot_staff');

    }

    public function confirmEditStaff(){

        $this->form_validation->set_rules('post_staff','post','required|numeric');
        $this->form_validation->set_rules('name_staff','name','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('surname_staff','surname','trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('phone_staff','phone','trim|required|numeric|max_length[20]');
        $this->form_validation->set_rules('email_staff','email','trim|required|max_length[50]');

        $data['id_staff']=$_POST['idStaff'];
        $data['staff_name']=$_POST['name_staff'];
        $data['staff_right']=$_POST['post_staff'];
        $data['staff_surname']=$_POST['surname_staff'];
        $data['staff_phone']=$_POST['phone_staff'];

        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data = $this->Staff_m->getOneEmployee($data['id_staff']);
            $this->load->view('eng/staff/v_edit_employee',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updateStaff($data['id_staff'],$data);
            redirect('Staff_c/settingStaff');
        }

    }

    public function editLogStaff($idStaff){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data = $this->Staff_m->getOneEmployee($idStaff);
            $this->load->view('eng/staff/v_edit_log_employee',$data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditLogStaff(){

        $this->form_validation->set_rules('login_staff','login','trim|required|min_length[2]|max_length[50]');

        $data['id_staff']=$_POST['idStaff'];
        $data['staff_login']=$_POST['login_staff'];


        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data = $this->Staff_m->getOneEmployee($data['id_staff']);
            $this->load->view('eng/staff/v_edit_log_employee',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updateStaff($data['id_staff'],$data);
            redirect('Staff_c/settingStaff');
        }

    }

    public function editPasswordStaff($idStaff){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data = $this->Staff_m->getOneEmployee($idStaff);
            $this->load->view('eng/staff/v_edit_password_employee',$data);
            $this->load->view('eng/staff/v_foot_staff');
    }

    public function confirmEditPasswordStaff(){

        $this->form_validation->set_rules('pass1_staff','password','trim|required|min_length[8]|max_length[50]');
        $this->form_validation->set_rules('pass2_staff',' confirm password','trim|required|matches[pass1_staff]');

        $data['id_staff']=$_POST['idStaff'];
        $data['staff_password']=$_POST['pass1_staff'];


        if($this->form_validation->run() == FALSE){
            $this->load->view('eng/staff/v_head_staff');
            $this->load->view('eng/staff/v_menu_staff');
            $data = $this->Staff_m->getOneEmployee($data['id_staff']);
            $this->load->view('eng/staff/v_edit_log_employee',$data);
            $this->load->view('eng/staff/v_foot_staff');
        }
        else{
            $this->Staff_m->updateStaff($data['id_staff'],$data);
            redirect('Staff_c/settingStaff');
        }

    }

    public function fireEmployee($idStaff)
    {
            $data['staff_fire']=1;
            $this->Staff_m->updateStaff($idStaff,$data);
            redirect('Staff_c/settingStaff');

    }
}