  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Peserta</li>
      </ol>
    </section>
    <section class="content">
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
      <a class="btn btn-danger" href="<?php echo base_url('index.php/peserta/print') ?>"><i class="fa fa-print"></i> Print</a>
      <div class="navbar-form navbar-right">
        <?php echo form_open('peserta/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>
        <?php echo form_close() ?>
      </div>
      <table class="table">
        <tr>
          <th>No</th>
          <th>No Peserta</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th colspan="2">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($peserta as $psrt) :
         ?>
        <tr>
          <td><?php echo $no++  ?></td>
          <td><?php echo $psrt->no_peserta  ?></td>
          <td><?php echo $psrt->nama  ?></td>
          <td><?php echo $psrt->alamat  ?></td>
          <td><?php echo $psrt->jenis_kelamin  ?></td>
          <td><?php echo $psrt->ttl  ?></td>
          <td onclick="javascript: return confirm('Anda yakin hapus')"><?php echo anchor('peserta/hapus/'.$psrt->no_peserta, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?></td>
          <td><?php echo anchor('peserta/edit/'.$psrt->no_peserta,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
        </tr>
      <?php endforeach; ?>
      </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Peserta</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'index.php/peserta/tambah_aksi'; ?>" method="post">
          <div class="form-group">
            <label>No Peserta</label>
            <input type="text" name="no_peserta" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label> <br>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="male">
            <label for="male">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="female">
            <label for="female">Perempuan</label>
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="ttl" class="form-control">
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
