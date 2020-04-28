<?php
class Duniv extends CI_Controller {
  public function index() {
    $data['daftar_univ'] = $this->m_duniv->tampil_data()->result();

    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('duniv/duniv', $data);
		$this->load->view('templates/footer');
  }
  public function tambah_aksi(){
    $id_univ = $this->input->post('id_univ');
    $nama_univ = $this->input->post('nama_univ');
    $negara = $this->input->post('negara');

    $data = array(
      'id_univ' => $id_univ,
      'nama_univ' => $nama_univ,
      'negara' => $negara,

    );
    $this->m_duniv->input_data($data, 'daftar_univ');
    redirect('duniv/index');
  }
  public function hapus($duniv){
    $where = array ('id_univ' => $duniv);
    $this->m_duniv->hapus_data($where,'daftar_univ','id_univ');
    redirect ('duniv/index');
  }
  public function edit($duniv){
    $where = array ('id_univ' => $duniv);
    $data['daftar_univ'] = $this->m_duniv->edit_data($where,'daftar_univ')->result();
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('duniv/edit', $data);
		$this->load->view('templates/footer');
  }
  public function update(){
    $id_univ = $this->input->post('id_univ');
    $nama_univ = $this->input->post('nama_univ');
    $negara = $this->input->post('negara');
    $data = array (
      'id_univ' => $id_univ,
      'nama_univ' => $nama_univ,
      'negara' => $negara,
    );
    $where = array('id_univ' => $id_univ);
    $this->m_duniv->update_data($where, $data, 'daftar_univ');
    redirect('duniv/index');
  }
  public function print(){
    $data['daftar_univ'] = $this->m_duniv->tampil_data('daftar_univ')->result();
    $this->load->view('duniv/print_duniv',$data);
  }
  public function search(){
    $keyword = $this->input->post('keyword');
    $data['daftar_univ'] =$this->m_duniv->get_keyword($keyword);
    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('duniv/duniv', $data);
		$this->load->view('templates/footer');
  }
}
 ?>
