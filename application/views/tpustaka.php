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
        <li class="active">Tambah Pustaka</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


    
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pustaka</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            <form action="<?php echo site_url('crud/tpustaka') ?>"  class="form-horizontal" id="form-create_group" method="post" accept-charset="utf-8" >
            <div class="form-group">
            <label  class="col-sm-2 control-label">ISBN</label>
            <div class="col-sm-2"><input type="text" name="isbn" value=""  class="form-control"onkeydown="return (event.keyCode!=13);" autofocus required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">No Klasifikasi</label>
            <div class="col-sm-2"><input type="text" name="no_klasifikasi" value=""  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-8"><input type="text" name="judul" value=""  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Pengarang</label>
            <div class="col-sm-8"><input type="text" name="pengarang" value=""  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Tahun Terbit</label>
            <div class="col-sm-1"><input type="number" name="tahun_terbit" value=""  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Tahun Pendaftaran</label>
            <div class="col-sm-1"><input type="number" name="tahun_pendaftaran" value=""  class="form-control"required>
            </div>
            </div>          
            <div class="form-group">
            <label  class="col-sm-2 control-label">Asal Pembelian/Bantuan</label>
            <div class="col-sm-8"><input type="text" name="asal" value=""  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Jumlah</label>
            <div class="col-sm-1"><input type="number" name="jumlah" value="" min="1"  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-8"><input type="text" name="keterangan" value=""  class="form-control">
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-flat">Submit</button>  
            <button type="reset" class="btn btn-warning btn-flat">Reset</button>
            </div></div></div></form>   
           
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("template/bottom.php") ?> 
  