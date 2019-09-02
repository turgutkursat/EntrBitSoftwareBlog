<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = 'home/errorPage';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = "do_login/index";
$route['signup'] = "do_login/signup";
$route['logout'] = "do_login/logout";
