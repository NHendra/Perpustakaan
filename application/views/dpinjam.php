
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
        <li class="active">Daftar Peminjaman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="data_buku" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Anggota</th>
                  <th>ISBN</th>
                  <th>Peminjam</th>
                  <th>Judul Buku</th>
                  <th>Tgl. Pinjam</th>
                  <th>Harus Kembali</th>
                  <th>Status</th>
                  <th>Dikembalikan</th>
                </tr>
                </thead>
                <tbody>

            <?php if(empty($transaksi)){
              echo '<div class="alert alert-warning">
              <strong>Warning!</strong> Data Peminjaman tidak ditemukan.
            </div>';
            }
                  foreach($transaksi as $u){  
                  foreach($pustaka as $i){
                  foreach($anggota as $a){
                  if($u->isbn==$i->isbn){
                  if($u->no_anggota==$a->no_anggota){
                    
                    $date_now = new DateTime();
                    $date2    = new DateTime($u->tgl_kembali);
                      ?>



                    <tr  <?php if($date_now > $date2&&$u->status=='Pinjam'){echo 'class="bg-red"';} ?> >
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
                    <?php } } } } } ?>



                </tbody>

              </table><?php if($this->session->userdata('status') == "login"){ ?>
              <a href="<?php echo site_url('/datat') ?>" target="_blank"><button  action="<?php echo site_url('/datat') ?>" class="btn btn-block btn-success btn-lg">Download data peminjaman</button></a><?php } ?>
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
  