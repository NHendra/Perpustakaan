<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="utf-8">
      <title><?php echo $title ?></title>
      <style>
           ::selection { background-color: #E13300; color: white; }
           ::-moz-selection { background-color: #E13300; color: white; }
 
           body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
           }
 
           main {
                width: 80%;
                padding: 20px;
                background-color: white;
                min-height: 300px;
                border-radius: 5px;
                margin: 30px auto;
                box-shadow: 0 0 8px #D0D0D0;
           }
           table {
                border-top: solid thin #000;
                border-collapse: collapse;
           }
           th, td {
                border-top: border-top: solid thin #000;
                padding: 6px 12px;
           }
 
           a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
           }
      </style>
 </head>
 
 <body>
      <main>
           <h1>Laporan Excel</h1>
           <p><a href="<?php echo base_url('c_excelt/export_excelt') ?>">Export ke Excel</a></p>
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
      </main>
 </body>
 </html>