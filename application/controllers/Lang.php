<?php
class Lang extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index($language = "") {
        $language = ($language != "") ? $language : "he";
        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }

}
