<?php

/**
* This is a Controller for Pages
*/

class Home extends CI_Controller {

  public function __construct() {
    //load database in autoload libraries
    parent::__construct();
    $this->load->model('TorRecordsModel');
  }
  public function view($page = 'home')
  {
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
      // Whoops, we don't have a page for that!
      show_404();
    }

    $data['records'] = $this->TorRecordsModel->getTorRecords();
    $data['title'] = ucfirst($page);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navigation', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }

  public function addTor($page = 'addtor')
  {
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

  public function addTorRecords() {
    $this->load->model('TorRecordsModel');

          $data = array(
            'encoder' => $this->input->post('encoder'),
            'bus_no' => $this->input->post('bus_no'),
            'driver' => $this->input->post('driver'),
            'conductor' => $this->input->post('conductor'),
            'tor_no' => $this->input->post('tor_no'),
            'encode_date' => $this->input->post('encode_date'),
            'encode_time' => $this->input->post('encode_time')
          );

          $this->TorRecordsModel->addTorRecords($data);
          $data['message'] = 'Data Inserted Successfully';

          $query = $this->db->get("tor_records");
          $data['records'] = $query->result();
          $this->load->view('templates/header', $data);
          $this->load->view('templates/navigation', $data);
          $this->load->view('pages/'.$page, $data);
          $this->load->view('templates/footer', $data);
  }
}


?>
