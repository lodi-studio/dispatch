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
  $this->db->insert('tor_records', $data);
  }

}

?>
