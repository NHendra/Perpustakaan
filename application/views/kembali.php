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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengembalian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    

    
    
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pengembalian Buku</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            

           <?php if(!isset($transaksi)){ ?>

            <form action="<?php echo site_url('crud/kembali') ?>"  class="form-horizontal" id="form-create_group" method="post" accept-charset="utf-8" >
            <div class="form-group">
            <label  class="col-sm-2 control-label">No. Anggota</label>
            <div class="col-sm-4"><input type="text" name="no_anggota" value=""  class="form-control" onkeydown="ModifyEnterKeyPressAsTab(event); return (event.keyCode!=13); " autofocus>
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-flat">Cari</button>  
            </div></div></div></form> 

           <?php }else{ ?>

            <table id="data_buku" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Peminjam</th>
                  <th>Judul Buku</th>
                  <th>Tgl. Pinjam</th>
                  <th>Harus Kembali</th>
                  <th>Status</th>
                  <th>Tools</th>
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
                      <td><?php echo $a->nama ?></td>
                      <td><?php echo $i->judul ?></td>
                      <td><?php echo $u->tgl_pinjam ?></td>
                      <td><?php echo $u->tgl_kembali ?></td>
                      <td><?php echo $u->status ?></td>
                      <td>
                      <?php if($u->status=='Pinjam'){ echo '<a href="'.base_url().'crud/kembalikan/'.$u->kode_transaksi. '"><small class="label  bg-blue">kembali</small>'; }else{echo $u->tgl_dikembalikan;} ?>
                      
                      </td>
                    </tr>
                    <?php } } } } } ?>



                </tbody>

              </table>



           <?php } ?>

            
           
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- KONTEN disini :'v'-->
    </section>

    <section class="content">
    

    
    


           
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              bottom
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- KONTEN disini :'v'-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("template/bottom.php") ?> 
  