<?php
/**
* TOR Records Model
*/
class tor_model extends CI_Model{

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

  public function deleteTorRecords($id){
    $this->db->where('tor_no', $id);
    $this->db->delete('tor_records');
  }

  public function updateTorRecords($id)
  {
    $data=array(
      'encoder' => $this->input->post('encoder'),
      'bus_no'=> $this->input->post('bus_no'),
      'driver'=> $this->input->post('driver'),
      'conductor'=> $this->input->post('conductor'),
      'tor_no'=> $this->input->post('tor_no')
    );
    if($id==0){
      return $this->db->insert('tor_records',$data);
    }else{
      $this->db->where('tor_no',$id);
      return $this->db->update('tor_records',$data);
    }
  }

}

?>
