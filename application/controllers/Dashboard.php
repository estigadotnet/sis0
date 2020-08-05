<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index() {
    $data['_view']    = 'dashboard/index';
    $data['_caption'] = 'Dashboard';
    $this->load->view('_layout', $data);
  }

}
