<?php if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		} ?>
      <?php $this->load->view("template/top.php") ?>  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <button class="btn btn-danger" onclick="myFunction()">Cetak Kartu <i class="fa fa-print"></i></button>
      <script>function myFunction() {window.print();}</script>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
    

            <!-- /.box-header -->

          


            <style type="text/css">
.tg  {font-weight:bold;border-collapse:collapse;border-spacing:0;border-width:1px;border-style:solid;border-color:black;}
.tg td{ font-family: "Times New Roman", Times, serif;font-size:14px;font-weight:bold;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
.tg th{ font-family: "Times New Roman", Times, serif;font-size:14px;font-weight:bold;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
.tg .tg-0pky{border-color:inherit;text-align:left;font-weight:bold;vertical-align:top}
.tg .tg-73a0{font-size:14px;font-weight:bold;border-color:inherit;text-align:left;vertical-align:top}
</style>
<?php 
		$no = 1;
		foreach($anggota as $u){ 
    ?>
    <?php $kode = $u->no_anggota;?>
<table class="tg" style="undefined;table-layout: fixed; width: 500px">
<colgroup>
<col style="width: 85px">
<col style="width: 78px">
<col style="width: 166px">
<col style="width: 94px">
</colgroup>
  <tr>
    <th class="tg-0pky" colspan="4"><img width="506px" src="<?php echo base_url() ?>/images/baner.png"  style="object-fit: cover; width:500px;"></th>
  </tr>
  <tr>
    <td class="tg-0pky" rowspan="2"></td>
    <td class="tg-73a0" rowspan="2">Nama<br>Pekerjaan<br>Alamat<br>No. Angota</td>
    <td class="tg-73a0" rowspan="2">: <?php echo $u->nama ?><br>: <?php echo $u->pekerjaan ?><br>: <?php echo $u->alamat ?><br>: <?php echo $u->no_anggota ?></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky" rowspan="2"></td>
    <td class="tg-0pky" rowspan="2"><img height="80px" src="<?php echo site_url();?>/welcome/bikin_barcode/<?php echo $kode;?>"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
</table>
<?php } ?>       
           




    





            
        </div>
        <!-- /.col -->
      </div>
      <!-- KONTEN disini :'v'-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("template/bottom.php") ?> 
  