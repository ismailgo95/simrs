<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_C extends CI_Controller
{
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view("dashboard_v");
    $this->load->view('template/footer');
  }
}
