<?php
/**
* TOR Records Model
*/
class TorModel extends CI_Model{

  public function GetTorRecords(){
    if(!empty($this->input->get("search"))){
      $this->db->like('bus_no', $this->input->get("search"));
      $this->db->or_like('tor_no', $this->input->get("search"));
    }
    $query = $this->db->get('tor_records');
    return $query->result();
  }

  public function AddTorRecords($data){
    $this->db->insert('tor_records', $data);
  }

  public function DeleteTorRecords($id){
    $this->db->where('tor_no', $id);
    $this->db->delete('tor_records');
  }

  public function UpdateTorRecords($id)
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
