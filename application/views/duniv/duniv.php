  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Universitas
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Universitas</li>
      </ol>
    </section>
    <section class="content">
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Daftar Beasiswa</button>
      <a class="btn btn-danger" href="<?php echo base_url('index.php/duniv/print') ?>"><i class="fa fa-print"></i> Print</a>
      <div class="navbar-form navbar-right">
        <?php echo form_open('duniv/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>
        <?php echo form_close() ?>
      </div>
      <table class="table">
        <tr>
          <th>No</th>
          <th>ID</th>
          <th>Nama Universitas</th>
          <th>Negara</th>
          <th colspan="2">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($daftar_univ as $duniv) :
         ?>
        <tr>
          <td><?php echo $no++  ?></td>
          <td><?php echo $duniv->id_univ ?></td>
          <td><?php echo $duniv->nama_univ  ?></td>
          <td><?php echo $duniv->negara  ?></td>
          <td onclick="javascript: return confirm('Anda yakin hapus')"><?php echo anchor('duniv/hapus/'.$duniv->id_univ, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?></td>
          <td><?php echo anchor('duniv/edit/'.$duniv->id_univ,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
        </tr>
      <?php endforeach; ?>
      </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Daftar Universitas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'index.php/duniv/tambah_aksi'; ?>" method="post">
          <div class="form-group">
            <label>ID</label>
            <input type="text" name="id_univ" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama Universitas</label>
            <input type="text" name="nama_univ" class="form-control">
          </div>
          <div class="form-group">
            <label>Negara</label>
            <input type="text" name="negara" class="form-control">
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
