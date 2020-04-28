  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Nilai Peserta
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Nilai Peserta</li>
      </ol>
    </section>
    <section class="content">
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Nilai Peserta</button>
      <a class="btn btn-danger" href="<?php echo base_url('index.php/nilai_peserta/print') ?>"><i class="fa fa-print"></i> Print</a>
      <div class="navbar-form navbar-right">
        <?php echo form_open('nilai_peserta/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>
        <?php echo form_close() ?>
      </div>
      <table class="table">
        <tr>
          <th>No</th>
          <th>Nama Peserta</th>
          <th>Universitas Tujuan</th>
          <th>Jenis Beasiswa</th>
          <th>Nilai Tes</th>
          <th>Nilai Wawancara</th>
          <th>Nilai Total</th>
          <th>Keterangan</th>
          <th colspan="2">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($nilai_peserta as $np) :
         ?>
        <tr>
          <td><?php echo $no++  ?></td>
          <td><?php echo $np->nama  ?></td>
          <td><?php echo $np->nama_univ  ?></td>
          <td><?php echo $np->jenis_beasiswa  ?></td>
          <td><?php echo $np->nilai_tes  ?></td>
          <td><?php echo $np->nilai_wawancara  ?></td>
          <td><?php echo $np->nilai_total  ?></td>
          <td><?php echo $np->keterangan  ?></td>
          <td onclick="javascript: return confirm('Anda yakin hapus')"><?php echo anchor('nilai_peserta/hapus/'.$np->unique_id_nilai, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?></td>
          <td><?php echo anchor('nilai_peserta/edit/'.$np->unique_id_nilai,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
        </tr>
      <?php endforeach; ?>
      </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Nilai Peserta</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'index.php/nilai_peserta/tambah_aksi'; ?>" method="post">
          <div class="form-group">
            <label>Nama Peserta</label>
            <select class="form-control" name="no_peserta">
              <?php
              foreach ($peserta as $p) :
               ?>
              <option value="<?php echo $p->no_peserta; ?>"><?php echo $p->no_peserta.'-'.$p->nama; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Nama Universitas</label>
            <select class="form-control" name="id_univ">
              <?php
              foreach ($daftar_univ as $du) :
               ?>
              <option value="<?php echo $du->id_univ; ?>"><?php echo $du->id_univ.'-'.$du->nama_univ; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Jenis Beasiswa</label>
            <select class="form-control" name="jenis_beasiswa">
              <option value="B1-Full">B1-Full</option>
              <option value="B2-75%">B2-75%</option>
              <option value="B3-50%">B3-50%</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nilai Tes</label>
            <input type="number" name="nilai_tes" class="form-control">
          </div>
          <div class="form-group">
            <label>Nilai Wawancara</label>
            <input type="number" name="nilai_wawancara" class="form-control">
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
