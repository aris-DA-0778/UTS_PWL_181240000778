<?php
class M_duniv extends CI_Model {
  public function tampil_data(){
    return $this->db->get('daftar_univ');
  }
  public function input_data($data){
    $this->db->insert('daftar_univ',$data);
  }
  public function hapus_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }
  public function edit_data($where,$table){
    return $this->db->get_where($table,$where);
  }
  public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  public function get_keyword($keyword){
    $this->db->select('*');
    $this->db->from('daftar_univ');
    $this->db->like('id_univ',$keyword);
    $this->db->or_like('nama_univ',$keyword);
    $this->db->or_like('negara',$keyword);
    return $this->db->get()->result();
  }
}
 ?>
