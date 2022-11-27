<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>
 
           <th>No</th>
                          <th>Judul</th>
                          <th>Pengarang</th>
                          <th>Tahun Terbit</th>
                          <th>Tahun Daftar</th>
                          <th>Asal</th>
                          <th>No Klasifikasi</th>
                          <th>Jumlah</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $no=1; $i=1; foreach($buku as $buku) { ?>
 
           <tr>
 
           <td><?php echo $no++; ?></td>
                          <td><?php echo $buku->judul; ?></td>
                          <td><?php echo $buku->pengarang; ?></td>
                          <td><?php echo $buku->tahun_terbit; ?></td>
                          <td><?php echo $buku->tahun_pendaftaran; ?></td>
                          <td><?php echo $buku->asal; ?></td>
                          <td><?php echo $buku->no_klasifikasi; ?></td>
                          <td><?php echo $buku->jumlah; ?></td>
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>