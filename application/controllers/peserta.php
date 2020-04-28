<?php
class Peserta extends CI_Controller {
  public function index() {
    $data['peserta'] = $this->m_peserta->tampil_data()->result();

    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peserta/peserta', $data);
		$this->load->view('templates/footer');
  }
  public function tambah_aksi(){
    $no_peserta = $this->input->post('no_peserta');
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $ttl = $this->input->post('ttl');

    $data = array(
      'no_peserta' => $no_peserta,
      'nama' => $nama,
      'alamat' => $alamat,
      'jenis_kelamin' => $jenis_kelamin,
      'ttl' => $ttl,
    );
    $this->m_peserta->input_data($data, 'peserta');
    redirect('peserta/index');
  }
  public function hapus($no_peserta){
    $where = array ('no_peserta' => $no_peserta);
    $this->m_peserta->hapus_data($where,'peserta','no_peserta');
    redirect ('peserta/index');
  }
  public function edit($no_peserta){
    $where = array ('no_peserta' => $no_peserta);
    $data['peserta'] = $this->m_peserta->edit_data($where,'peserta')->result();
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peserta/edit', $data);
		$this->load->view('templates/footer');
  }
  public function update(){
    $no_peserta = $this->input->post('no_peserta');
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('ttl');
    $ttl = $this->input->post('ttl');
    $data = array (
      'no_peserta' => $no_peserta,
      'nama' => $nama,
      'alamat' => $alamat,
      'jenis_kelamin' => $jenis_kelamin,
      'ttl' => $ttl,
    );
    $where = array('no_peserta' => $no_peserta);
    $this->m_peserta->update_data($where, $data, 'peserta');
    redirect('peserta/index');
  }
  public function print(){
    $data['peserta'] = $this->m_peserta->tampil_data('peserta')->result();
    $this->load->view('peserta/print_peserta',$data);
  }
  public function search(){
    $keyword = $this->input->post('keyword');
    $data['peserta'] =$this->m_peserta->get_keyword($keyword);
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peserta/peserta', $data);
		$this->load->view('templates/footer');
  }
}
 ?>
