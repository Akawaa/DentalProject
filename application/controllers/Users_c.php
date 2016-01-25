<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_c extends CI_Controller
{

    public function index()
    {
        $this->load->view('eng/v_head');
        $this->load->view('eng/v_menu');
        $this->load->view('eng/v_co');
        $data['info'] = $this->Home_m->getAllInfo(1);
        $this->load->view('eng/v_foot',$data);
    }

    /******** CONNECTION PATIENT *********/
    public function ConnectionViewPatient()
    {
        if ($this->Users_m->beConnectedPatient()) {
            redirect('Users_c/connectionPatient');
        }
        if ($this->Users_m->beConnectedStaff()) {
            redirect('Users_c/connectionStaff');
        }
        $this->form_validation->set_rules('username', 'Login', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        /* rappeler la vue à la fin de la méthode */
        if ($this->form_validation->run()) {
            $donnees = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $donnees_session = $this->Users_m->check_connectionPatient($donnees);
            if (isset($donnees_session)) {
                $this->session->set_userdata($donnees_session);
                redirect('Users_c/ConnectionViewPatient');
            } else {
                $donnees['erreur'] = "Mot de passe ou login incorrect";
            }
        }


        // fin d'ajout et redirection
        $this->load->view('eng/v_head');
        $this->load->view('eng/v_menu');
        $this->load->view('eng/v_co');
        $data['info'] = $this->Home_m->getAllInfo(1);
        $this->load->view('eng/v_foot',$data);
    }

    public function connectionPatient(){
        redirect('Patient_c');
    }


    /******** CONNECTION STAFF *********/
    public function ConnectionViewStaff()
    {
        if ($this->Users_m->beConnectedStaff()) {
            redirect('Users_c/connectionStaff');
        }
        if ($this->Users_m->beConnectedPatient()) {
            redirect('Users_c/connectionPatient');
        }
        $this->form_validation->set_rules('username', 'Login', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        /* rappeler la vue à la fin de la méthode */
        if ($this->form_validation->run()) {
            $donnees = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $donnees_session = $this->Users_m->check_connectionStaff($donnees);
            if (isset($donnees_session)) {
                $this->session->set_userdata($donnees_session);
                redirect('Users_c/ConnectionViewStaff');
            } else {
                $donnees['erreur'] = "Mot de passe ou login incorrect";
            }
        }


        // fin d'ajout et redirection
        $this->load->view('eng/v_head');
        $this->load->view('eng/v_menu');
        $this->load->view('eng/v_co');
        $data['info'] = $this->Home_m->getAllInfo(1);
        $this->load->view('eng/v_foot',$data);
    }

    public function connectionStaff(){
        redirect('Staff_c');
    }

    /******** DECONNECTION *********/
    public function deconnection()
    {
        $this->session->sess_destroy();
        redirect('Home_c/index');exit;
    }

}