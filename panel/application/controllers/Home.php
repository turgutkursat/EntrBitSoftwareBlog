<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $view = "home_v";
    public $url = "home";

    public function __construct()
    {
        parent::__construct();
        //$this->load->model("home_model");
        if (!adminUserExist()) {
            redirect("login");
        }
    }

    public function index()
    {
        $this->load->view("$this->view/index");
    }

    public function errorPage()
    {
        $this->load->view("$this->view/errorPage");
    }

}
