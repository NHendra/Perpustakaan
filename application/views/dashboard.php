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
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-person-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Anggota</span>
              <span class="info-box-number">
              <?php 
                    $totaltm = 0;
                    foreach($jmlhm as $t){ 
                      
                      $totaltm=$totaltm+1
                      
                    ?>
                    
              <?php } ?>
              <?php echo $totaltm ?>
              
              <span id="time_span"></span>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
    </div>
    

    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-book-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Buku</span>
              <span class="info-box-number">
              
              <?php 
                    $totalbuku = 0;
                    foreach($pustaka as $u){ 
                      $totalbuku=$totalbuku+$u->jumlah
                    ?>
                    
              <?php } ?>
              <?php echo $totalbuku ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
    </div>

    

    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-book-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Buku Sedang Dipinjam</span>
              <span class="info-box-number">
              
              <?php 
                    $totalt = 0;
                    foreach($transaksi as $i){ 
                      if($i->status=='Pinjam')
                      $totalt=$totalt+1
                      
                    ?>
                    
              <?php } ?>
              <?php echo $totalt ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-book-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Buku Telat Dikembalikan</span>
              <span class="info-box-number">
              
              <?php 
                     $totalte = 0;
                     foreach($telat as $i){ 
                       if($i->status=='Pinjam')
                       $totalte=$totalte+1
                      
                      
                    ?>
                    
              <?php } ?>
              <?php echo $totalte ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
    </div>
    
    
   
      <!-- KONTEN disini :'v'-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("template/bottom.php") ?> 
  