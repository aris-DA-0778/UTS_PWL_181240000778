<div class="content-wrapper">
  <section class="content">
    <?php foreach ($peserta as $psrt) {    ?>
        <form action="<?php echo base_url().'index.php/peserta/update'; ?>" method="post">
          <div class="form-group">
            <label>No Peserta</label>
            <input type="hidden" name="no_peserta" value="<?php echo $psrt->no_peserta ?>" class="form-control">
            <input type="text" name="nama" value="<?php echo $psrt->nama ?>" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?php echo $psrt->alamat ?>" class="form-control">
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
            <input type="date" name="ttl" value="<?php echo $psrt->ttl ?>" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="Reset" class="btn btn-danger">Reset</button>
        </form>
    <?php } ?>
  </section>
</div>
