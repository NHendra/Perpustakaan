<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; Czysta.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      
    </div>
      
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>


<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>template/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url() ?>template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>template/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>template/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>template/dist/js/demo.js"></script>
<script src="<?php echo base_url() ?>template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#data_buku').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
            function ModifyEnterKeyPressAsTab(event)
{
    var caller;
    var key;
    if (window.event)
    {
        caller = window.event.srcElement; //Get the event caller in IE.
        key = window.event.keyCode; //Get the keycode in IE.
    }
    else
    {
        caller = event.target; //Get the event caller in Firefox.
        key = event.which; //Get the keycode in Firefox.
    }
    if (key == 13) //Enter key was pressed.
    {
        cTab = caller.tabIndex; //caller tabIndex.
        maxTab = 0; //highest tabIndex (start at 0 to change)
        minTab = cTab; //lowest tabIndex (this may change, but start at caller)
        allById = document.getElementsByTagName("input"); //Get input elements.
        allByIndex = []; //Storage for elements by index.
        c = 0; //index of the caller in allByIndex (start at 0 to change)
        i = 0; //generic indexer for allByIndex;
        for (id in allById) //Loop through all the input elements by id.
        {
            allByIndex[i] = allById[id]; //Set allByIndex.
            tab = allByIndex[i].tabIndex;
            if (caller == allByIndex[i])
                c = i; //Get the index of the caller.
            if (tab > maxTab)
                maxTab = tab; //Get the highest tabIndex on the page.
            if (tab < minTab && tab >= 0)
                minTab = tab; //Get the lowest positive tabIndex on the page.
            i++;
        }
        //Loop through tab indexes from caller to highest.
        for (tab = cTab; tab <= maxTab; tab++)
        {
            //Look for this tabIndex from the caller to the end of page.
            for (i = c + 1; i < allByIndex.length; i++)
            {
                if (allByIndex[i].tabIndex == tab)
                {
                    allByIndex[i].focus(); //Move to that element and stop.
                    return;
                }
            }
            //Look for the next tabIndex from the start of page to the caller.
            for (i = 0; i < c; i++)
            {
                if (allByIndex[i].tabIndex == tab + 1)
                {
                    allByIndex[i].focus(); //Move to that element and stop.
                    return;
                }
            }
            //Continue searching from the caller for the next tabIndex.
        }

        //The caller was the last element with the highest tabIndex,
        //so find the first element with the lowest tabIndex.
        for (i = 0; i < allByIndex.length; i++)
        {
            if (allByIndex[i].tabIndex == minTab)
            {
                allByIndex[i].focus(); //Move to that element and stop.
                return;
            }
        }
    }
}
            </script>
</body>
<?php if ($this->session->flashdata('something')) {?>
      <script type='text/javascript'>alert('Data Berhasil Disimpan !');</script>
<?php }?>
<?php if ($this->session->flashdata('updatebuku')) {?>
      <script type='text/javascript'>alert('Buku Berhasil Di Update !');</script>
<?php }?>
</html>
