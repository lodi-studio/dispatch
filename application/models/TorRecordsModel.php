<?php
/**
* TOR Records Model
*/
class TorRecordsModel extends CI_Model{

  public function getTorRecords(){
    if(!empty($this->input->get("search"))){
      $this->db->like('bus_no', $this->input->get("search"));
      $this->db->or_like('tor_no', $this->input->get("search"));
    }
    $query = $this->db->get('tor_records');
    return $query->result();
  }

  public function addTorRecords($data){

    $now1 = date('YYYY-MM-DD');
    $now2 = date('H:i:s');

    $data = array(
      $encoder = $this->input->post('encoder'),
      $bus_no = $this->input->post('bus_no'),
      $driver = $this->input->post('driver'),
      $conductor = $this->input->post('conductor'),
      $tor_no = $this->input->post('tor_no'),
      $encode_date = $this->input->post('encode_date'),
      $encode_time = $this->input->post('encode_time')
    );

    $this->db->insert('tor_records', $data);
  }

}

?>
