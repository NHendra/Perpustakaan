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
                          <th>No Anggota</th>
                          <th>Nama</th>
                          <th>Pekerjaan</th>
                          <th>Alamat</th>
                          <th>No HP</th>
                          <th>Tgl Lahir</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $no=1; $i=1; foreach($anggota as $anggota) { ?>
 
           <tr>
 
           <td><?php echo $no++; ?></td>
                          <td><?php echo $anggota->no_anggota; ?></td>
                          <td><?php echo $anggota->nama; ?></td>
                          <td><?php echo $anggota->pekerjaan; ?></td>
                          <td><?php echo $anggota->alamat; ?></td>
                          <td><?php echo $anggota->no_hp; ?></td>
                          <td><?php echo $anggota->tgl_lahir; ?></td>
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>