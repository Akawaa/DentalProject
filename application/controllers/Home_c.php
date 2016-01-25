<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller {

    public function index(){
        $this->load->view('eng/v_head');
        $this->load->view('eng/v_menu');
        $this->load->view('eng/v_index');
        $data['info'] = $this->Home_m->getAllInfo(1);
        $this->load->view('eng/v_foot',$data);
    }

    public function pricing(){
        $this->load->view('eng/v_head');
        $this->load->view('eng/v_menu');
        $data['articles']=$this->Home_m->getAllArticlesPrincing();
        $this->load->view('eng/v_pricing',$data);
        $data['info'] = $this->Home_m->getAllInfo(1);
        $this->load->view('eng/v_foot',$data);
    }

    public function facilities(){
        $this->load->view('eng/v_head');
        $this->load->view('eng/v_menu');
        $data['articles']=$this->Home_m->getAllArticlesFacilities();
        $this->load->view('eng/v_facilities',$data);
        $data['info'] = $this->Home_m->getAllInfo(1);
        $this->load->view('eng/v_foot',$data);    }

    public function gallery(){
        $this->load->view('eng/v_head');
        $this->load->view('eng/v_menu');
        $data['articles']=$this->Home_m->getAllArticlesGallery();
        $data['gallery']=$this->Staff_m->getAllPhotos();
        $this->load->view('eng/v_gallery',$data);
        $data['info'] = $this->Home_m->getAllInfo(1);
        $this->load->view('eng/v_foot',$data);    }

    public function news(){
        $this->load->view('eng/v_head');
        $this->load->view('eng/v_menu');
        $data['articles']=$this->Home_m->getAllArticlesNews();
        $this->load->view('eng/v_news',$data);
        $data['info'] = $this->Home_m->getAllInfo(1);
        $this->load->view('eng/v_foot',$data);    }

    public function contact(){
        $this->load->view('eng/v_head');
        $this->load->view('eng/v_menu');
        $data['day']=$this->Home_m->getAllOpeningTimes();
        $data['articles']=$this->Home_m->getAllArticlesContact();
        $this->load->view('eng/v_contact',$data);
        $data['info'] = $this->Home_m->getAllInfo(1);
        $this->load->view('eng/v_foot',$data);
    }

}