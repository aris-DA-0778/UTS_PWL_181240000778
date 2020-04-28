<?php
class M_nilai extends CI_Model {
  public function tampil_data(){
    $this->db->select('*');
    $this->db->from('nilai_peserta');
    $this->db->join('peserta','peserta.no_peserta = nilai_peserta.no_peserta');
    $this->db->join('daftar_univ','daftar_univ.id_univ = nilai_peserta.id_univ');
    $query = $this->db->get();
    return $query->result();
  }
  public function tampil_data2(){
    $this->db->select('*');
    $this->db->from('peserta');
    $query = $this->db->get();
    return $query->result();
  }
  public function tampil_data3(){
    $this->db->select('*');
    $this->db->from('daftar_univ');
    $query = $this->db->get();
    return $query->result();
  }
  public function tampil_data4($id_bsw){
    $this->db->select('*');
    $this->db->from('daftar_beasiswa');
    $this->db->like('id_bsw',$id_bsw);
    return $this->db->get()->result();
  }
  public function input_data($data){
    $this->db->insert('nilai_peserta',$data);
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
    $this->db->from('nilai_peserta');
    $this->db->join('peserta','peserta.no_peserta = nilai_peserta.no_peserta');
    $this->db->join('daftar_univ','daftar_univ.id_univ = nilai_peserta.id_univ');
    $this->db->like('nama',$keyword);
    $this->db->or_like('nama_univ',$keyword);
    $this->db->or_like('jenis_beasiswa',$keyword);
    $this->db->or_like('nilai_tes',$keyword);
    $this->db->or_like('nilai_wawancara',$keyword);
    $this->db->or_like('nilai_total',$keyword);
    $this->db->or_like('keterangan',$keyword);
    return $this->db->get()->result();
  }
}
 ?>
