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
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Home</a></li>
        <li class="active">Daftar Anggota</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data_buku" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Anggota</th>
                  <th>Nama</th>
                  <th>Pekerjaan</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                  <th>Tanggal Lahir</th>
                  <th>Alat</th>
                </tr>
                </thead>
                <tbody>
                
               
                <?php 
                    $no = 1;
                    foreach($anggota as $u){ 
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->no_anggota ?></td>
                      <td><?php echo $u->nama ?></td>
                      <td><?php echo $u->pekerjaan ?></td>
                      <td><?php echo $u->alamat ?></td>
                      <td><?php echo $u->no_hp ?></td>
                      <td><?php echo $u->tgl_lahir ?></td>
                      <td>
                      <a href="<?php echo 'crud/cetak/'.$u->no_anggota; ?>">
                      <small class="label  bg-green">Cetak Kartu</small> <a href="<?php echo 'crud/eanggota/'.$u->no_anggota; ?>">
                      <small class="label  bg-blue">Edit</small>
                      <a onclick="return confirm('Yakin Menghapus Anggota <?php echo $u->nama; ?>')" href="<?php echo 'crud/hapusanggota/'.$u->no_anggota; ?>">
                      <small class="label  bg-red">Hapus</small>
                      </td>
                    </tr>
                    <?php } ?>



                </tbody>

              </table>
              <a href="<?php echo site_url('/dataa') ?>" target="_blank"><button  action="<?php echo site_url('/dataa') ?>" class="btn btn-block btn-success btn-lg">Download Data Anggota</button></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  



  <?php $this->load->view("template/bottom.php") ?> 
  