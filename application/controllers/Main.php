<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
    }

    public function index() {
        $this->homepage();
    }

    public function homepage() {
        $data['title'] = 'Welcome to Gbu Online. ';
        $data['news'] = $this->news_model->get_news();
        $this->load->view('pages/homepage', $data);

        $this->load->helper('date');
    }

    public function homepage_v2() {
        $data['title'] = 'Welcome to GBU Online ';
        $data['news'] = $this->news_model->get_news();
        $this->load->view('pages/home/home', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/footer');
        $this->load->helper('date');
    }

}
