<?php

/**
* This is a Controller for Pages
*/

class Home extends CI_Controller {

  public function __construct() {
    //load database in autoload libraries
    parent::__construct();
    $this->load->model('TorRecordsModel');
    $this->load->model("TorRecordsModel");
    $this->load->helper('date');
    $this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->library('session');
  }

  public function view($page = 'home'){
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
      // Whoops, we don't have a page for that!
      show_404();
    }

    $data['records'] = $this->TorRecordsModel->getTorRecords();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navigation', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }

  public function add_tor_page($page = 'addtor'){
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
      // Whoops, we don't have a page for that!
      show_404();
    }

    $this->load->view('templates/header');
    $this->load->view('templates/navigation');
    $this->load->view('pages/'.$page);
    $this->load->view('templates/footer');
  }

  public function form_validation(){

      $now1 = date("Y-d-m");
      $now2 = date("H:i:s");

      $data = array(
        'encoder' => $this->input->post("encoder"),
        'bus_no' => $this->input->post("bus_no"),
        'driver' => $this->input->post("driver"),
        'conductor' => $this->input->post("conductor"),
        'tor_no' => $this->input->post("tor_no"),
        'encode_date' => $now1,
        'encode_time' => $now2,
      );

      $addtor = $this->TorRecordsModel->addTorRecords($data);
      if($addtor == 1)
           {
               echo '<script>alert("You Have Successfully updated this Record!");</script>';
               redirect('home/view', 'refresh');
           }
           else{
               $this->session->set_flashdata("message","Record Not Updated!");
               redirect('home/add_tor_page', '');
           }
  }
}
?>
