<div class="content-wrapper">
  <section class="content">
    <?php foreach ($nilai_peserta as $np) {    ?>
        <form action="<?php echo base_url().'index.php/nilai_peserta/update'; ?>" method="post">
          <div class="form-group">
            <label>Nama Peserta</label>
            <input type="hidden" name="unique_id_nilai" value="<?php echo $np->unique_id_nilai; ?>" class="form-control">
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
            <input type="number" name="nilai_tes" value="<?php echo $np->nilai_tes; ?>" class="form-control">
          </div>
          <div class="form-group">
            <label>Nilai Wawancara</label>
            <input type="number" name="nilai_wawancara" value="<?php echo $np->nilai_wawancara; ?>" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="Reset" class="btn btn-danger">Reset</button>
        </form>
    <?php } ?>
  </section>
</div>
