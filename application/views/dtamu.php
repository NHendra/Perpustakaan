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
        <li class="active">Daftar Buku Pengunjung</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Buku Pengunjung</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data_buku" class="table table-bordered table-striped">
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
                
               
                <?php 
                    $no = 1;
                    foreach($dtamu as $u){ 
                    ?>
                    <tr>
                      <td><?php echo $u->id_tamu ?></td>
                      <td><?php echo $u->tanggal ?></td>
                      <td><?php echo $u->nama_pengunjung ?></td>
                      <td><?php echo $u->alamat ?></td>
                      <td><?php echo $u->pekerjaan ?></td>
                      <td><?php echo $u->no_telp ?></td>
                      <td><?php echo $u->pesan ?></td>
                      <td><?php echo $u->minat ?></td>
                    </tr>
                    <?php } ?>



                </tbody>

              </table>
              <a href="<?php echo site_url('/datap') ?>" target="_blank"><button  action="<?php echo site_url('/datap') ?>" class="btn btn-block btn-success btn-lg">Download Data Pengunjung</button></a>
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
  