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
                          <th>Tanggal</th>
                          <th>Nama Pengunjung</th>
                          <th>Alamat</th>
                          <th>Pekerjaan</th>
                          <th>No HP</th>
                          <th>Pesan & Kesan</th>
                          <th>Buku Yang Diminati</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $no=1; $i=1; foreach($pengunjung as $pengunjung) { ?>
 
           <tr>
 
           <td><?php echo $no++; ?></td>
                          <td><?php echo $pengunjung->tanggal; ?></td>
                          <td><?php echo $pengunjung->nama_pengunjung; ?></td>
                          <td><?php echo $pengunjung->alamat; ?></td>
                          <td><?php echo $pengunjung->pekerjaan; ?></td>
                          <td><?php echo $pengunjung->no_telp; ?></td>
                          <td><?php echo $pengunjung->pesan; ?></td>
                          <td><?php echo $pengunjung->minat; ?></td>
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>