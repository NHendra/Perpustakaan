
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
        <li class="active">Daftar Pustaka</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Pustaka</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data_buku" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ISBN</th>
                  <th>No. Klas.</th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Thn Terbit</th>
                  <th>Thn Daftar</th>
                  <th>Asal</th>
                  <th>Jumlah</th>
                  <th>Keterangan</th>
                  <?php if($this->session->userdata('status') == "login"){ ?>
                  <th>Pengaturan</th> <?php } ?>
                </tr>
                </thead>
                <tbody>
                
               
                <?php 
                    $no = 1;
                    foreach($pustaka as $u){ 
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->isbn ?></td>
                      <td><?php echo $u->no_klasifikasi ?></td>
                      <td><?php echo $u->judul ?></td>
                      <td><?php echo $u->pengarang ?></td>
                      <td><?php echo $u->tahun_terbit ?></td>
                      <td><?php echo $u->tahun_pendaftaran ?></td>
                      <td><?php echo $u->asal ?></td>
                      <td><?php echo $u->jumlah ?></td>
                      <td><?php echo $u->keterangan ?></td>
                      <?php if($this->session->userdata('status') == "login"){ ?><td>
                      <a href="<?php echo 'crud/edit/'.$u->isbn; ?>"><small class="label  bg-blue">Edit</small>
                      <a onclick="return confirm('Yakin Menghapus Buku <?php echo $u->judul; ?>')" href="<?php echo 'crud/hapus/'.$u->isbn; ?>"><small class="label  bg-red">Hapus</small>
                      </td><?php } ?>
                    </tr>
                    <?php } ?>



                </tbody>
                      
              </table><?php if($this->session->userdata('status') == "login"){ ?>
              <a href="<?php echo site_url('/data') ?>" target="_blank"><button  action="<?php echo site_url('/data') ?>" class="btn btn-block btn-success btn-lg">Download data buku</button></a><?php } ?>
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
  