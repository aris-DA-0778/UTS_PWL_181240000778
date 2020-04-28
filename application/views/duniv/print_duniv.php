<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="2">
      <tr>
        <th>No</th>
        <th>ID Beasiswa</th>
        <th>Nama Universitas</th>
        <th>Negara</th>
      </tr>
      <?php
      $no = 1;
      foreach ($daftar_univ as $duniv) :
       ?>
      <tr>
        <td><?php echo $no++  ?></td>
        <td><?php echo $duniv->id_univ  ?></td>
        <td><?php echo $duniv->nama_univ  ?></td>
        <td><?php echo $duniv->negara  ?></td>
      </tr>
    <?php endforeach; ?>
    </table>
    <script type="text/javascript">
      window.print();
    </script>
  </body>
</html>
