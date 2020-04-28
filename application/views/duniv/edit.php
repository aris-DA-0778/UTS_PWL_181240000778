<div class="content-wrapper">
  <section class="content">
    <?php foreach ($daftar_univ as $duniv) {    ?>
        <form action="<?php echo base_url().'index.php/duniv/update'; ?>" method="post">
          <div class="form-group">
            <label>Nama Beasiswa</label>
            <input type="hidden" name="id_univ" value="<?php echo $duniv->id_univ ?>" class="form-control">
            <input type="text" name="nama_univ" value="<?php echo $duniv->nama_univ ?>" class="form-control">
          </div>
          <div class="form-group">
            <label>Negara</label>
            <input type="text" name="negara" value="<?php echo $duniv->negara ?>" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="Reset" class="btn btn-danger">Reset</button>
        </form>
    <?php } ?>
  </section>
</div>
