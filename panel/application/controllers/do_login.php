<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class do_login extends CI_Controller
{
    public $view = "login_v";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        if (adminUserExist() && $this->uri->segment(1) != "logout") {
            redirect(base_url());
        }
    }

    public function index()
    {
        if ($this->input->post("submit")) {
            if ($this->input->post("captcha") == $this->session->captcha) {
                $config = array(
                    array(
                        'field' => 'email',
                        'label' => 'E-mail',
                        'rules' => 'required|valid_email|min_length[6]',
                    ),
                    array(
                        'field' => 'pass',
                        'label' => 'Şifre',
                        'rules' => 'min_length[6]|trim|required',
                    ),
                );

                $this->form_validation->set_rules($config);

                if ($this->form_validation->run()) {
                    $userData = array(
                        "email" => $this->input->post("email"),
                        "password" => md5(base64_encode(gzcompress(serialize($this->input->post("pass"))))),
                        "rank" => 2,//rank 1=user , 2=admin
                    );
                    if ($result = $this->user_model->get($userData)) {
                        $session = array(
                            "type" => "success",
                            "text" => "Signing in, please wait.",
                        );
                        $this->session->set_flashdata($session);
                        $userData = array(
                            "logged_in" => true,
                            "adminUser" => $result,
                        );
                        $this->session->set_userdata($userData);
                        header("refresh:3;url=" . base_url());
                    } else {
                        $session = array(
                            "type" => "danger",
                            "text" => "No account found, please check your details.",
                        );
                        $this->session->set_flashdata($session);
                    }
                }
            } else {
                $session = array(
                    "type" => "danger",
                    "text" => "Incorrect captcha code.",
                );
                $this->session->set_flashdata($session);
                redirect(base_url("login"));
            }
        }

        $vals = array(
            //'word' => generateRandomString(),
            'img_path' => 'upload/captcha/',
            'img_url' => base_url().'/upload/captcha/',
            //'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => '100',
            'img_height' => 30,
            'expiration' => 7200,
            'word_length' => 5,
            'font_size' => 16,
            //'img_id' => 'Imageid',
            'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!+',

            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(0, 0, 0),
                'border' => array(255, 255, 255),
                'text' => array(255, 255, 255),
                'grid' => array(255, 40, 40)
            )
        );

        $cap = create_captcha($vals);
        $this->session->set_userdata("captcha", $cap["word"]);
        $viewData = array("captcha" => $cap);

        $this->load->view("$this->view/login", $viewData);
    }

    public function logout()
    {
        $array_items = array('adminUser', 'logged_in');
        $this->session->unset_userdata($array_items);
        redirect(base_url("login"));
    }

    public function signup()
    {
        if ($this->input->post("submit")) {
            if ($this->input->post("captcha") == $this->session->captcha) {

                $config = array(
                    array(
                        'field' => 'fullName',
                        'label' => 'FullName',
                        'rules' => 'min_length[6]|trim|required'
                    ),
                    array(
                        'field' => 'email',
                        'label' => 'E-mail',
                        'rules' => 'required|valid_email|min_length[6]|is_unique[users.email]',
                    ),
                    array(
                        'field' => 'pass',
                        'label' => 'Password',
                        'rules' => 'matches[rePass]|min_length[6]|trim|required',
                    ),
                    array(
                        'field' => 'rePass',
                        'label' => 'Password Repeat',
                        'rules' => 'min_length[6]|trim|required',

                    ),
                );

                $this->form_validation->set_rules($config);

                if ($this->form_validation->run()) {
                    $data = array(
                        "fullName" => htmlspecialchars_decode($this->input->post("fullName")),
                        "email" => strtolower(trim(htmlspecialchars_decode($this->input->post("email")))),
                        "password" => md5(base64_encode(gzcompress(serialize($this->input->post("pass"))))),
                        "image" => "upload/users/user.png",
                        "rank" => "1",
                        "createdDate" => date("Y-m-d H:i:s"),
                    );
                    $insertUser = $this->user_model->add($data);

                    if ($insertUser) {
                        $session = array(
                            "type" => "success",
                            "text" => "Your account has been created and will be approved by the administrator as soon as possible.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("login"));
                    } else {
                        $session = array(
                            "type" => "danger",
                            "text" => "We were unable to create your account, please try again as soon as possible.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("signup"));
                    }
                }
            } else {
                $session = array(
                    "type" => "danger",
                    "text" => "Incorrect captcha code.",
                );
                $this->session->set_flashdata($session);
                redirect(base_url("signup"));
            }

        }

        $vals = array(
            //'word' => generateRandomString(),
            'img_path' => 'upload/captcha/',
            'img_url' => base_url().'/upload/captcha/',
            //'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => '100',
            'img_height' => 30,
            'expiration' => 7200,
            'word_length' => 5,
            'font_size' => 16,
            //'img_id' => 'Imageid',
            'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!+',

            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(0, 0, 0),
                'border' => array(255, 255, 255),
                'text' => array(255, 255, 255),
                'grid' => array(255, 40, 40)
            )
        );

        $cap = create_captcha($vals);
        $this->session->set_userdata("captcha", $cap["word"]);
        $viewData = array("captcha" => $cap);
        $this->load->view("$this->view/signup", $viewData);
    }


}
