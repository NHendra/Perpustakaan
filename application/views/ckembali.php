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
        Dashboard 
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
              <h3 class="box-title">Konfirmasi Pengembalian Buku</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <?php foreach($transaksi as $u){  
                  foreach($pustaka as $i){
                  foreach($anggota as $a){
                  if($u->isbn==$i->isbn){
                  if($u->no_anggota==$a->no_anggota){
                    
                      ?>
            
            
            <form action="<?php echo site_url('crud/aksikembali') ?>"  class="form-horizontal" id="form-create_group" method="post" accept-charset="utf-8" >
            <div class="form-group">
            <label  class="col-sm-2 control-label">Nama Peminjam</label>
            <div class="col-sm-4"><input type="text" name="" value="<?php echo $a->nama ?>"  class="form-control" disabled>
            <div class="col-sm-4"><input type="hidden" name="no_anggota" value="<?php echo $u->no_anggota ?>"  class="form-control" ></div>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Judul Buku</label>
            <div class="col-sm-4"><input type="text" name="" value="<?php echo $i->judul ?>"  class="form-control" disabled>
            <div class="col-sm-4"><input type="hidden" name="isbn" value="<?php echo $i->isbn ?>"  class="form-control" ></div>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Tanggal Pinjam</label>
            <div class="col-sm-4"><input type="text" name="" value="<?php echo $u->tgl_pinjam ?>"  class="form-control" disabled>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Tanggal kembali</label>
            <div class="col-sm-4"><input type="text" name="" value="<?php echo $u->tgl_kembali ?>"  class="form-control" disabled>
            <div class="col-sm-4"><input type="hidden" name="jumlah" value="<?php echo $i->jumlah ?>"  class="form-control"></div>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Tanggal di kembalikan</label>
            <div class="col-sm-4"><input type="text" name="" value="<?php echo  date("d/m/Y") ?>"  class="form-control" disabled>
            <div class="col-sm-4"><input type="hidden" name="kode_transaksi" value="<?php echo $u->kode_transaksi ?>"  class="form-control"></div>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-flat">Kembali</button>  
            </div></div></div></form> 
            <form action="<?php echo base_url() ?>kembali">
            <div class="btn-group">
            <button type="submit" class="btn btn-warning btn-flat">Reset</button>  
            </div>
            </form>

            <?php } } } } } ?>
            
           
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
  