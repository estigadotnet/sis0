<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  // function __construct() {
  //   parent::__construct();
  //   $this->load->database();
  // }

  public function index() {
    $data['_view']    = 'dashboard/index';
    $data['_caption'] = 'Dashboard';
    $this->load->view('_layout', $data);
  }

}
