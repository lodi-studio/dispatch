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

  public function addTorPage($page = 'addtor')
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
    $data = array(
      $encoder=>$_POST['encoder'],
      $bus_no=>$_POST['bus_no'],
      $driver=>$_POST['driver'],
      $conductor=>$_POST['conductor'],
      $tor_no=>$_POST['tor_no'],
      $encode_date=>$_POST['encode_date'],
      $encode_time=>$_POST['encode_time']
    );
    $this->TorRecordsModel->addTorRecords($data);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navigation', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
}
?>
