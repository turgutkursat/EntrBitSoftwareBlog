<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public $view = "settings_v";
    public $url = "settings";

    public function __construct()
    {
        parent::__construct();
        if (!adminUserExist()) {
            redirect("login");
            die("Oturum Açınız!");
        }
        $this->load->model("settings_model");
    }

    public function seo()
    {
        $settings = $this->settings_model->get();
        if (empty($settings)) {
            //AYARLAR YOKSA EKLEME İŞLEMİ YAPILACAK
            if ($this->input->post("submit")) {
                $config = array(
                    array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required|min_length[3]',
                    ),
                );//POST KURALLARI
                $this->form_validation->set_rules($config);//POST KURAL KONTROLU
                if ($this->form_validation->run()) {
                    $data = array(
                        "title" => $this->input->post("title"),
                        "description" => $this->input->post("description"),
                        "keywords" => $this->input->post("keywords"),
                        "author" => $this->input->post("author"),
                        "revisitAfter" => $this->input->post("revisitAfter"),
                        "contentType" => $this->input->post("contentType"),
                        "robots" => $this->input->post("robots"),
                        "robotsFollow" => $this->input->post("robotsFollow"),
                        "language" => $this->input->post("language"),
                        "date" => date("Y-m-d H:i:s"),
                    );//VERİ TABANINA EKELNECEK DATA

                    if ($this->settings_model->add($data)) {
                        //EKLEME BAŞARILI
                        $session = array(
                            "type" => "success",
                            "text" => "Ayarlar Kaydedildi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url/seo"));
                    } else {
                        //EKLEME OLAYINDA HATA VAR
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu, daha sonra tekrar deneyiniz.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url/seo"));
                    }
                }
            }
        } else {
            //AYARLAR VAR İSE GÜNCELLEME İŞLEMİ YAPILACAK
            if ($this->input->post("submit")) {
                $config = array(
                    array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required|min_length[3]',
                    ),
                );//POST KURALLARI
                $this->form_validation->set_rules($config);//POST KURAL KONTROLU
                if ($this->form_validation->run()) {
                    $data = array(
                        "title" => $this->input->post("title"),
                        "description" => $this->input->post("description"),
                        "keywords" => $this->input->post("keywords"),
                        "author" => $this->input->post("author"),
                        "revisitAfter" => $this->input->post("revisitAfter"),
                        "contentType" => $this->input->post("contentType"),
                        "robots" => $this->input->post("robots"),
                        "robotsFollow" => $this->input->post("robotsFollow"),
                        "language" => $this->input->post("language"),
                        "date" => date("Y-m-d H:i:s"),
                    );//VERİ TABANINA EKELNECEK DATA

                    if ($this->settings_model->update(array("id" => $settings->id), $data)) {
                        //EKLEME BAŞARILI
                        $session = array(
                            "type" => "success",
                            "text" => "Ayarlar Kaydedildi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url/seo"));
                    } else {
                        //EKLEME OLAYINDA HATA VAR
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu, daha sonra tekrar deneyiniz.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url/seo"));
                    }
                }
            }
        }
        $resulData = array("settings" => $settings);
        $this->load->view("$this->view/seo", $resulData);
    }

    public function genel()
    {
        $settings = $this->settings_model->get();
        if (empty($settings)) {
            //AYARLAR YOKSA EKLEME İŞLEMİ YAPILACAK
            if ($this->input->post("submit")) {
                $config = array(
                    array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required|min_length[3]',
                    ),
                );//POST KURALLARI
                $this->form_validation->set_rules($config);//POST KURAL KONTROLU
                if ($this->form_validation->run()) {
                    $data = array(

                        "date" => date("Y-m-d H:i:s"),
                    );//VERİ TABANINA EKELNECEK DATA

                    if ($this->settings_model->add($data)) {
                        //EKLEME BAŞARILI
                        $session = array(
                            "type" => "success",
                            "text" => "Ayarlar Kaydedildi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url/genel"));
                    } else {
                        //EKLEME OLAYINDA HATA VAR
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu, daha sonra tekrar deneyiniz.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url/genel"));
                    }
                }
            }
        } else {
            //AYARLAR VAR İSE GÜNCELLEME İŞLEMİ YAPILACAK
            if ($this->input->post("submit")) {
                $config = array(
                    array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required|min_length[3]',
                    ),
                );//POST KURALLARI
                $this->form_validation->set_rules($config);//POST KURAL KONTROLU
                if ($this->form_validation->run()) {
                    $data = array(
                        "date" => date("Y-m-d H:i:s"),
                    );//VERİ TABANINA EKELNECEK DATA

                    if ($this->settings_model->update(array("id" => $settings->id), $data)) {
                        //EKLEME BAŞARILI
                        $session = array(
                            "type" => "success",
                            "text" => "Ayarlar Kaydedildi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url/genel"));
                    } else {
                        //EKLEME OLAYINDA HATA VAR
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu, daha sonra tekrar deneyiniz.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url/genel"));
                    }
                }
            }
        }
        $resulData = array("settings" => $settings);
        $this->load->view("$this->view/genel", $resulData);
    }
}
