<?php

/**
* This is a Controller for Pages
*/

class Tor extends CI_Controller {

  public function __construct() {
    //load database in autoload libraries
    parent::__construct();
    $this->load->model('tor_model');
    $this->load->helper('date');
    $this->load->helper('url');
    $this->load->library('form_validation');
  }

  public function view($page = 'TORRecords'){
    $data['data'] = $this->tor_model->getTorRecords();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navigation', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }

  public function form_validation(){
    $now1 = date("Y-d-m");
    $now2 = date("hh:mm:ss");
    $data = array(
      'encoder' => $this->input->post("encoder"),
      'bus_no' => $this->input->post("bus_no"),
      'driver' => $this->input->post("driver"),
      'conductor' => $this->input->post("conductor"),
      'tor_no' => $this->input->post("tor_no"),
      'encode_date' => $now1,
      'encode_time' => $now2,
    );
    $addtor = $this->tor_model->addTorRecords($data);
    if($addtor == 1){
      echo '<script>alert("You have successfully added this record!");</script>';
      redirect('tor/view', 'refresh');
    }
    else{
      $this->session->set_flashdata("message","Record not added!");
      redirect('tor/add_tor', '');
    }
  }

  public function delete_tor() {
    $id = $this->uri->segment(3);
    if (empty($id))
    {
      show_404();
    }

    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->tor_model->deleteTorRecords($id);
    $this->view();
  }

  public function edit_tor($id){
    $data = $this->db->get_where('tor_records', array('tor_no' => $id))->row();
    $this->load->view('templates/header');
    $this->load->view('templates/navigation');
    $this->load->view('pages/updatetor', array('item'=>$data));
    $this->load->view('templates/footer');
  }
  public function update_tor($id){
    $item=new tor_model;
    $item->updateTorRecords($id);
    redirect(base_url('tor'));
  }

}
?>
