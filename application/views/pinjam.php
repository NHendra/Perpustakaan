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
        <li class="active">Peminjaman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    

    
    
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Peminjaman Buku</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


            
            
            

           <?php if(!isset($anggota)&&!isset($buku)){ ?>

            <?php if ($this->session->flashdata('lebih')) {?>
        <div class="alert alert-warning">
              <strong>Warning!</strong> Pemjinjam telah meminjam 3 buku, peminjaman maksimal adalah 3 buku, silahkan melakukang pegembalian terlebih dahulu.
            </div>
      <?php }?>

            <form action="<?php echo site_url('crud/panggota') ?>"  class="form-horizontal" id="form-create_group" method="post" accept-charset="utf-8" >
            <div class="form-group">
            <label  class="col-sm-2 control-label">No. Anggota</label>
            <div class="col-sm-4"><input type="text" name="no_anggota" value=""  class="form-control" onkeydown="ModifyEnterKeyPressAsTab(event); return (event.keyCode!=13); " autofocus>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">ISBN</label>
            <div class="col-sm-4"><input type="text" name="isbn" value=""  class="form-control">
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-flat">Cari</button>  
            </div></div></div></form> 

           <?php }else{
             if(empty($anggota)||empty($buku)){
             if(empty($anggota)){
              echo '<div class="alert alert-warning">
              <strong>Warning!</strong> Data anggota tidak ditemukan.
            </div>';
            }
            if(empty($buku)){
              echo '<div class="alert alert-warning">
              <strong>Warning!</strong> Data buku tidak ditemukan.
            </div>';
            }
            echo '<form action="' .base_url(). 'pinjam">
            <div class="btn-group">
            <button type="submit" class="btn btn-warning btn-flat">Reset</button>  
            </div>
            </form>';
            }
            
             ?>
              
            <?php 
                  foreach($anggota as $u){  
                  foreach($buku as $i){ 
                    $j=0;
                    foreach($transaksi as $e){
                      if($e->status=='Pinjam'){
                        $j=$j+1;
                      }
                    }
                    if($j>=3){
                      
                      $this->session->set_flashdata('lebih',"a");
			                redirect('pinjam');
                    }

                    ?>


            <form action="<?php echo site_url('crud/aksipinjam') ?>"  class="form-horizontal" id="form-create_group" method="post" accept-charset="utf-8" >
            <div class="form-group">
            <label  class="col-sm-2 control-label">Nama Peminjam</label>
            <div class="col-sm-4"><input type="text" name="" value="<?php echo $u->nama ?>"  class="form-control" disabled>
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
            <div class="col-sm-4"><input type="text" name="" value="<?php echo  date("d/m/Y") ?>"  class="form-control" disabled>
            </div>
            </div>
            <div class="form-group">
            <label  class="col-sm-2 control-label">Tanggal kembali</label>
            <div class="col-sm-4"><input type="text" name="" value="<?php echo  date("d/m/Y",strtotime('+7 days')) ?>"  class="form-control" disabled>
            <div class="col-sm-4"><input type="hidden" name="jumlah" value="<?php echo $i->jumlah ?>"  class="form-control"></div>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-flat">Pinjam</button>  
            </div></div></div></form> 
            <form action="<?php echo base_url() ?>pinjam">
            <div class="btn-group">
            <button type="submit" class="btn btn-warning btn-flat">Reset</button>  
            </div>
            </form>

            <?php } } ?>

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
  