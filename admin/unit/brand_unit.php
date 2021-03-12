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
                <li>Brand</li>
		<li>Data Brand</li>
            </ul><!-- /.breadcrumb -->
	</div>
        <div class="page-content">
            <div class="page-header">
                <h1>Data Brand 
                </h1>
            </div>
                <h1>
                    <a href="?unit=brand_unit&act=input">
                        <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</button>
                    </a>
                </h1>

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="box box-primary">
                            <div class="box-body table-responsive padding">
                              <table id="datatable" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">No.</th>

                                        <th style="text-align: center">Kode Brand</th>
                                        <th style="text-align: center">Nama Brand</th>
                                        <th style="text-align: center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; 
                                    $qdatagrid =" SELECT * FROM merektb ";
                                    $rdatagrid = mysqli_query($mysqli, $qdatagrid);
                                    while($ddatagrid=mysqli_fetch_assoc($rdatagrid)) {
                                        echo "
                                        <tr>
                                             <td style= text-align:center>$no</td>
                                             <td style= text-align:center  >$ddatagrid[merekid]</td>
                                             <td style= text-align:center  >$ddatagrid[namamerek]</td>
                                             <td style=text-align:center>
                                                 <a href=?unit=brand_unit&act=update&merekid=$ddatagrid[merekid] class='btn btn-sm btn-warning glyphicon glyphicon-pencil' ></a> 
                                                 <a href=?unit=brand_unit&act=delete&merekid=$ddatagrid[merekid] class='btn btn-sm btn-danger glyphicon glyphicon-trash' onclick='return confirm(\"Yakin Akan Menghapus Data?\")'></a>    
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
    
        case "input":
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
								<a href="#">Dashboard</a>
							</li>
              <li>Brand</li>
							<li>Tambah Brand Baru</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"><h1>Tambah Brand Baru</h1></div>
						<div class="row">
							<div class="col-xs-12">
                                                            
                 
                                      
                  
                      <form id="tambah_brand" nama="tambah_brand" method="post" action="?unit=brand_unit&act=inputact" enctype="multipart/form-data" >    
                          <div  class="form-group"><label>Nama Brand</label><br>
                            <input type="text" name="namamerek" id="namamerek" required="required" autofocus="autofocus" />
                        <hr>
                        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                      <button type="button" name="kembali" class="btn btn-info" onclick="window.location='adminmainapp.php?unit=brand_unit&act=datagrid'">kembali</button>
                      </div> 
                      </form>
                  
             

                   
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
                
			</div><!-- /.main-content -->
		<?php
            include("../admin/footer.php");
            ?>

	</body>
</html>
<?php
        break;
    
        case "inputact":
             $namamerek = $_POST['namamerek'];
             $qinput = "
          INSERT INTO merektb
          (namamerek)
          VALUES
          ('$namamerek')
        ";
       
         $cek = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM merektb WHERE namamerek = '$namamerek'"));
        
        if ($cek > 0) {
          echo "<script> alert('Data Brand Sudah Ada');
              document.location='adminmainapp.php?unit=brand_unit&act=input';
              </script>";
          } else {
          mysqli_query($mysqli,$qinput);
          echo "<script> alert('Data Tersimpan');
              document.location='adminmainapp.php?unit=brand_unit&act=datagrid';
              </script>";
          exit();
         }
        break;
    
        case "update":
        $merekid = $_GET['merekid'];
        $qupdate = "SELECT * FROM merektb WHERE merekid = '$merekid'";
        $rupdate = mysqli_query($mysqli, $qupdate);
        $dupdate = mysqli_fetch_assoc($rupdate);
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
								<a href="#">Dashboard</a>
							</li>
              <li>Brand</li>
							<li>Edit Brand Baru</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"><h1>Edit Brand Baru</h1></div>
						<div class="row">
							<div class="col-xs-12">
                                                            
                 
                                      
                  <div class="form-group"><label>Brand ID</label>
                      <form id="tambah_brand" nama="tambah_brand"  method="post" action="adminmainapp.php?unit=brand_unit&act=updateact" enctype="multipart/form-data" >    
                        <input type="text" name="merekid" id="merekid" required="required" value="<?php echo $dupdate['merekid'] ?>" readonly="readonly" autofocus="autofocus" />
                        <br><br>
                        <label>Nama Brand</label><br>
                        <input type="text" name="namamerek" id="namamerek" required="required" value="<?php echo $dupdate['namamerek'] ?>"autofocus="autofocus" />
                        <hr>
                        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                      <button type="button" name="kembali" class="btn btn-info" onclick="window.location='adminmainapp.php?unit=brand_unit&act=datagrid'">kembali</button>
                       </form>
                  </div>
             

                   
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
                
			</div><!-- /.main-content -->
		<?php
            include("../admin/footer.php");
            ?>
<script  type="text/javascript">
 var frmvalidator = new Validator("tambah_brand");
 frmvalidator.addValidation("namamerek","req","Silakan Masukkan Nama Kategori");
 frmvalidator.addValidation("namamerek","maxlen=35","Maksimal Karakter Nama 35 digit");
 frmvalidator.addValidation("namamerek","alpha_s","Hanya Huruf Saja");
 frmvalidator.addValidation("namamerek","simbol","Hanya Huruf Saja");
</script>
	</body>
</html>
 <?php
        break;
    
            case "updateact":
                $merekid = $_POST['merekid'];
        $namamerek = $_POST['namamerek'];
        $qupdate = "
          UPDATE merektb SET
            namamerek = '$namamerek'
          WHERE
            merekid = '$merekid'
        ";
        $rupdate = mysqli_query($mysqli,$qupdate);
        header("location:?unit=brand_unit&act=datagrid");
                 break;
    
        case "delete":
              $merekid = $_GET['merekid'];
        $qdelete = "
          DELETE  FROM merektb
       
          WHERE
            merekid = '$merekid'
        ";

        $rdelete = mysqli_query($mysqli,$qdelete);
        header("location:?unit=brand_unit&act=datagrid");
        break;
}