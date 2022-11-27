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
        <li class="active">Tambah Anggota</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


    
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Anggota</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            <form action="<?php echo site_url('crud/tanggota') ?>"  class="form-horizontal" id="form-create_group" method="post" accept-charset="utf-8" >
            <div class="form-group">
            <label  class="col-sm-2 control-label">No Anggota</label>
            <div class="col-sm-4"><input type="number" name="no_anggota" value=""  class="form-control" required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-4"><input type="text" name="nama" value=""  class="form-control" required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Pekerjaan</label>
            <div class="col-sm-4"><input type="text" name="pekerjaan" value=""  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-4"><input type="text" name="alamat" value=""  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">No. HP</label>
            <div class="col-sm-4"><input type="number" name="no_hp" value=""  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-4"><input type="date" name="tgl_lahir" value=""  class="form-control"required>
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
  