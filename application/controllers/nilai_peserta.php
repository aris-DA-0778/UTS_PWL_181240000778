<?php
class Nilai_peserta extends CI_Controller {
  public function index() {
    $data['nilai_peserta'] = $this->m_nilai->tampil_data();
    $data['daftar_univ'] = $this->m_nilai->tampil_data3();
    $data['peserta'] = $this->m_nilai->tampil_data2();
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('nilai_peserta/nilai', $data);
		$this->load->view('templates/footer');
  }
  public function tambah_aksi(){
    $unique_id_nilai = uniqid();
    $no_peserta = $this->input->post('no_peserta');
    $id_univ = $this->input->post('id_univ');
    $jenis_beasiswa = $this->input->post('jenis_beasiswa');
    $nilai_tes = $this->input->post('nilai_tes');
    $nilai_wawancara = $this->input->post('nilai_wawancara');
    $nilai_total = $nilai_tes + $nilai_wawancara;
    $B1 = 750;
    $B2 = 600;
    $B3 = 550;
    if ($jenis_beasiswa == 'B1-Full') {
      if ($nilai_total >= $B1) {
        $keterangan = "Diterima";
      }
      else {
        $keterangan = "Tidak Diterima";
      }
    }
    elseif ($jenis_beasiswa == 'B2-75%') {
      if ($nilai_total >= $B2) {
        $keterangan = "Diterima";
      }
      else {
        $keterangan = "Tidak Diterima";
      }
    }
    elseif ($jenis_beasiswa == 'B3-50%') {
      if ($nilai_total >= $B3) {
        $keterangan = "Diterima";
      }
      else {
        $keterangan = "Tidak Diterima";
      }
    }
    $data = array(
      'unique_id_nilai' => $unique_id_nilai,
      'no_peserta' => $no_peserta,
      'id_univ' => $id_univ,
      'jenis_beasiswa' => $jenis_beasiswa,
      'nilai_tes' => $nilai_tes,
      'nilai_wawancara' => $nilai_wawancara,
      'nilai_total' => $nilai_total,
      'keterangan' => $keterangan,
    );
    $this->m_nilai->input_data($data, 'nilai_peserta');
    redirect('nilai_peserta/index');
  }
  public function hapus($unique_id_nilai){
    $where = array ('unique_id_nilai' => $unique_id_nilai);
    $this->m_peserta->hapus_data($where,'nilai_peserta','no_peserta');
    redirect ('nilai_peserta/index');
  }
  public function edit($unique_id_nilai){
    $data['daftar_univ'] = $this->m_nilai->tampil_data3();
    $data['peserta'] = $this->m_nilai->tampil_data2();
    $where = array ('unique_id_nilai' => $unique_id_nilai);
    $data['nilai_peserta'] = $this->m_nilai->edit_data($where,'nilai_peserta')->result();
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('nilai_peserta/edit', $data);
		$this->load->view('templates/footer');
  }
  public function update(){
    $unique_id_nilai = $this->input->post('unique_id_nilai');
    $no_peserta = $this->input->post('no_peserta');
    $id_univ = $this->input->post('id_univ');
    $jenis_beasiswa = $this->input->post('jenis_beasiswa');
    $nilai_tes = $this->input->post('nilai_tes');
    $nilai_wawancara = $this->input->post('nilai_wawancara');
    $nilai_total = $nilai_tes + $nilai_wawancara;
    $B1 = 750;
    $B2 = 600;
    $B3 = 550;
    if ($jenis_beasiswa == 'B1-Full') {
      if ($nilai_total >= $B1) {
        $keterangan = "Diterima";
      }
      else {
        $keterangan = "Tidak Diterima";
      }
    }
    elseif ($jenis_beasiswa == 'B2-75%') {
      if ($nilai_total >= $B2) {
        $keterangan = "Diterima";
      }
      else {
        $keterangan = "Tidak Diterima";
      }
    }
    elseif ($jenis_beasiswa == 'B3-50%') {
      if ($nilai_total >= $B3) {
        $keterangan = "Diterima";
      }
      else {
        $keterangan = "Tidak Diterima";
      }
    }
    $data = array(
      'unique_id_nilai' => $unique_id_nilai,
      'no_peserta' => $no_peserta,
      'id_univ' => $id_univ,
      'jenis_beasiswa' => $jenis_beasiswa,
      'nilai_tes' => $nilai_tes,
      'nilai_wawancara' => $nilai_wawancara,
      'nilai_total' => $nilai_total,
      'keterangan' => $keterangan,
    );
    $where = array('unique_id_nilai' => $unique_id_nilai);
    $this->m_peserta->update_data($where, $data, 'nilai_peserta');
    redirect('nilai_peserta/index');
  }
  public function print(){
    $data['nilai_peserta'] = $this->m_nilai->tampil_data('nilai_peserta');
    $this->load->view('nilai_peserta/print_nilai',$data);
  }
  public function search(){
    $keyword = $this->input->post('keyword');
    $data['nilai_peserta'] =$this->m_nilai->get_keyword($keyword);
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('nilai_peserta/nilai', $data);
		$this->load->view('templates/footer');
  }
}
 ?>
