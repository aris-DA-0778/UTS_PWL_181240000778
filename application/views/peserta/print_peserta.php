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
        <th>No Peserta</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lair</th>
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
      </tr>
    <?php endforeach; ?>
    </table>
    <script type="text/javascript">
      window.print();
    </script>
  </body>
</html>
