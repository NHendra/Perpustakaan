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
        Input Anggota
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Home</a></li>
        <li class="active">Input Anggota</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


    
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Anggota</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php foreach($anggota as $u){ ?>
            <form action="<?php echo site_url('crud/editanggota') ?>"  class="form-horizontal" id="form-create_group" method="post" accept-charset="utf-8" >
            <div class="form-group">
            <label  class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-4"><input type="text" name="nama" value="<?php echo $u->nama ?>"  class="form-control"required>
            <input type="hidden" name="no_anggota" value="<?php echo $u->no_anggota ?>"  class="form-control">
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Pekerjaan</label>
            <div class="col-sm-4"><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-4"><input type="text" name="alamat" value="<?php echo $u->alamat ?>"  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">No. HP</label>
            <div class="col-sm-4"><input type="number" name="no_hp" value="<?php echo $u->no_hp ?>"  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-4"><input type="date" name="tgl_lahir" value="<?php echo $u->tgl_lahir ?>"  class="form-control"required>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-flat">Update</button>  
            </div></div></div></form>   <?php } ?>  
           
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
  