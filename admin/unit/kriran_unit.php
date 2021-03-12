<?php
$act = $_GET['act'];
switch($act){
    case "datagrid":
        ?>
<?php
include("../admin/leftbar.php");
?> 
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="adminmainapp.php?unit=dashboard">Dashboard</a>
							</li>
              <li>Kritik & Saran</li>
							<li>Data Kritik & Saran</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>Data Kritik & Saran
								
							</h1>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
                  <div class="box box-primary">
                    <div class="box-body table-responsive padding">
                      
                      <table id="datatable" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th style="text-align: center">No.</th>
                            <th style="text-align: center">kriran id</th>
                            <th style="text-align: center">Isi</th>
                            <th style="text-align: center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1;
                            $qdatagrid =  " SELECT * FROM krirantb  ";
                            $rdatagrid = mysqli_query($mysqli, $qdatagrid);
                            while($ddatagrid=mysqli_fetch_assoc($rdatagrid)) {
                                echo "
                                <tr>
                                     <td style= text-align:center >$no</td>
                                     <td style= text-align:center>$ddatagrid[kriranid]</td>
                                     <td style= text-align:left >$ddatagrid[isi]</td>
                                     <td style=text-align:center>
                                         
                                         <a href=?unit=kriran_unit&act=delete&kriranid=$ddatagrid[kriranid] class='btn btn-sm btn-danger glyphicon glyphicon-trash' onclick='return confirm(\"Yakin Akan Menghapus Data?\")'></a>    
                                     </td>                
                                </tr>
                                ";
                                $no++;
                             }
                             ?>
                            
               
                        </tbody>
                      </table>
                    </div>
                  </div>
								</div><!-- /.row -->
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<?php
            include("../admin/footer.php");
            ?> 
      <!-- DATA TABLES SCRIPT -->
      <script src="../css/backend/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <script src="../css/backend/js/jquery.dataTables.bootstrap.min.js" type="text/javascript"></script>
      <script type="text/javascript">
      function confirmDialog() {
       return confirm('Apakah anda yakin?')
      }
        $('#datatable').dataTable({
          "lengthMenu": [[10, 25, 50, 100, 500, 1000, -1], [10, 25, 50, 100, 500, 1000, "Semua"]]
        });
      </script>
	</body>
</html>
<?php
        
        break;
    
        case "delete":
             $kriranid = $_GET['kriranid'];
        $qdelete = "
          DELETE  FROM krirantb 
       
          WHERE
            kriranid = '$kriranid'
        ";
        $rdelete = mysqli_query($mysqli,$qdelete);
        header("location:?unit=kriran_unit&act=datagrid");
                         break;
}
           