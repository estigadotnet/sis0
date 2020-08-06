<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('Users_model');
  }

  public function index() {

    $username = '';
    // check apakah ada user yang login
    if ($this->session->userdata('user_id') != '') {
      $users = $this->Users_model->get_by_id($this->session->userdata('user_id'));
      $username = $users->first_name . ' ' . $users->last_name;
    }

    $data['username'] = $username;
    $data['_view']    = 'dashboard/index';
    $data['_caption'] = 'Dashboard';
    $this->load->view('_layout', $data);
  }

}
