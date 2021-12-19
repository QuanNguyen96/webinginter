<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        echo "day la trang chủ";
    }
}



?>