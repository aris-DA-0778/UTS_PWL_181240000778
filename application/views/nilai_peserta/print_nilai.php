<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <th>No</th>
        <th>Nama Peserta</th>
        <th>Univesitas Tujuan</th>
        <th>Jenis Beasiswa</th>
        <th>Nilai Tes</th>
        <th>Nilai Wawancara</th>
        <th>Nilai Total</th>
        <th>Keterangan</th>
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
      </tr>
    <?php endforeach; ?>
    </table>
    <!-- <script type="text/javascript">
      window.print();
    </script> -->
  </body>
</html>
