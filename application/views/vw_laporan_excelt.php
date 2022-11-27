<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
 <thead>
                     <tr><th>No</th>
                         <th>No Anggota</th>
                         <th>ISBN</th>
                         <th>Peminjam</th>
                         <th>Judul Buku</th>
                         <th>Tgl. Pinjam</th>
                         <th>Harus Kembali</th>
                         <th>Status</th>
                         <th>Dikembalikan</th>
                     </tr>
                     </tr>
                </thead>
 
                <tbody>
                     <?php $no=1;  $i=1; 
                     foreach($transaksi as $u){  
                         foreach($pustaka as $i){
                         foreach($anggota as $a){
                         if($u->isbn==$i->isbn){
                         if($u->no_anggota==$a->no_anggota){
                           
                           $date_now = new DateTime();
                           $date2    = new DateTime($u->tgl_kembali); ?>
                     <tr>
                          <td><?php echo $no++; ?></td>
                         <td><?php echo $a->no_anggota ?></td>
                         <td><?php echo $i->isbn ?></td>
                         <td><?php echo $a->nama ?></td>
                         <td><?php echo $i->judul ?></td>
                         <td><?php echo $u->tgl_pinjam ?></td>
                         <td><?php echo $u->tgl_kembali ?></td>
                         <td><?php echo $u->status ?></td>
                         <td>
                      <?php if($u->status=='Pinjam'){ echo 'Belum Kembali'; }else{echo $u->tgl_dikembalikan;} ?>
                      
                      </td>
                     </tr>
                     <?php $i++; }}}}} ?>
                </tbody>
 
 </table>