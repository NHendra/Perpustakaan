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
           <p><a href="<?php echo base_url('c_excel/export_excel') ?>">Export ke Excel</a></p>
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
                     </tr>
                </thead>
                <tbody>
                     <?php $no=1;  $i=1; foreach($buku as $buku) { ?>
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
      </main>
 </body>
 </html>