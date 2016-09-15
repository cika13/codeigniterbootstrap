<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/admin
     * 	- or -
     * 		http://example.com/index.php/admin/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        //load helpers
        $this->load->helper(array('url', 'cookie', 'form'));
    }

    public function _output($output) {
        $data = array(
            'base_url' => base_url(),
        );
        echo $this->load->view('templates/header', '', true)
        . $this->load->view('templates/navigation', '', true)
        . $output
        . $this->load->view('templates/footer', '', true);
    }

    public function index() {
        $this->load->view('admin/index');
    }

}
