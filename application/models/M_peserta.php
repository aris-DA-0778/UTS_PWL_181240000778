<?php
class M_peserta extends CI_Model {
  public function tampil_data(){
    return $this->db->get('peserta');
  }
  public function input_data($data){
    $this->db->insert('peserta',$data);
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
    $this->db->from('peserta');
    $this->db->like('no_peserta',$keyword);
    $this->db->or_like('nama',$keyword);
    $this->db->or_like('alamat',$keyword);
    $this->db->or_like('jenis_kelamin',$keyword);
    $this->db->or_like('ttl',$keyword);
    return $this->db->get()->result();
  }
}
 ?>
