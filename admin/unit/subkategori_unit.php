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
              <li>Jenis</li>
							<li>Data Jenis</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>Data Jenis</h1>
						</div>
                                                <h1>
								<a href="?unit=subkategori_unit&act=input">
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
                            <th style="text-align: center">Kode Jenis</th>
                            <th style="text-align: center">Nama Jenis</th>
                            <th style="text-align: center">Kategori</th>
                            <th style="text-align: center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php $no=1; 
                          $qdatagrid ="  SELECT 
                           t_subkat.kd_subkat, t_subkat.nama_subkat, t_subkat.kd_kat,  t_subkat.kode_subkat,
						   t_kategori.nama_kat,t_kategori.kd_kat
                            FROM 
                                t_subkat
                                    JOIN t_kategori ON t_subkat.kd_kat = t_kategori.kd_kat";
                            $rdatagrid = mysqli_query($mysqli, $qdatagrid);
                            while($ddatagrid=mysqli_fetch_assoc($rdatagrid)) {
                                echo "
                                <tr>
                                     <td style= text-align:center>$no</td>
                                     <td style= text-align:center>$ddatagrid[kode_subkat]</td>
                                     <td style= text-align:center>$ddatagrid[nama_subkat]</td>
                                     <td style= text-align:center>$ddatagrid[nama_kat]</td>
                                     <td style=text-align:center>
                                         <a href=?unit=subkategori_unit&act=update&kd_subkat=$ddatagrid[kd_subkat] class='btn btn-sm btn-warning glyphicon glyphicon-pencil' ></a> 
                                         <a href=?unit=subkategori_unit&act=delete&kd_subkat=$ddatagrid[kd_subkat] class='btn btn-sm btn-danger glyphicon glyphicon-trash' onclick='return confirm(\"Yakin Akan Menghapus Data?\")'></a>    
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
              <li>Jenis</li>
							<li>Tambah Jenis Baru</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"><h1>Tambah Jenis Baru</h1></div>
						<div class="row">
							<div class="col-xs-12">
                              
                   <?php
				require_once '../lib/koneksi.php';
                $qupdate = "SELECT max(kode_subkat) as maxKode FROM t_subkat";
                $rupdate = mysqli_query($mysqli, $qupdate);
                $dupdate = mysqli_fetch_assoc($rupdate);
                $kd_daftar = $dupdate['maxKode'];
                $a = substr($kd_daftar,4);
                $no_urut = $a + 1;
                $char = "JNS-";
                $newID = $char.sprintf("%03s",$no_urut);
                    ?>          
					
             <form class="form-horizontal" name="tambah_subkat" id="tambah_subkat" method="post" action="?unit=subkategori_unit&act=inputact" enctype="multipart/form-data">
                 <div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right">Kode Jenis</label>
                            <div class="col-sm-9">
                                <input class="col-xs-10 col-sm-5" type="text" name="kode_subkat" value="<?php echo "$newID"; ?>" readonly="readonly"  id="kode_subkat" required="required" autofocus="autofocus" />
                            </div>
                       </div>

                 <div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right">Kategori Tanaman</label>
                            <div class="col-sm-9"> 
                    <select  class="col-xs-10 col-sm-5"name="kd_kat" id="kd_kat" required>
                        <option value=""></option> 
                       <?php
                        $qcombo = 
                        "
                        SELECT * FROM t_kategori
                        ";
                        $rcombo = mysqli_query($mysqli,$qcombo);
                        while($dcombo = mysqli_fetch_assoc($rcombo)) {
                            echo "
                            <option value=$dcombo[kd_kat]>$dcombo[nama_kat]</option> 
                            ";
                        }
                        ?>
                    </select>
                      
                
                  </div>
                  </div>
                    
						<div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right">Jenis</label>
                            <div class="col-sm-9">
                                <input class="col-xs-10 col-sm-5" type="text" name="nama_subkat" id="judul" required />
								</div>
                       </div>	
					   
                  <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9"> 
                  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                  <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                   <button type="button" name="kembali" class="btn btn-info" onclick="window.location='adminmainapp.php?unit=subkategori_unit&act=datagrid'">kembali</button>                                                        
                  </div>
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
 <script  type="text/javascript">
 var frmvalidator = new Validator("tambah_subkat");
 
 frmvalidator.addValidation("kd_kat","req","Silakan Pilih kategori");
 frmvalidator.addValidation("nama_subkat","req","Silakan Masukkan Nama Jenis");
 frmvalidator.addValidation("nama_subkat","maxlen=35","Maksimal Karakter Nama 35 digit");
 frmvalidator.addValidation("nama_subkat","alpha_s","Hanya Huruf Saja");
 frmvalidator.addValidation("nama_subkat","simbol","Hanya Huruf Saja");
</script>
	</body>
</html>


 <?php
        break;
    
        case "inputact":
     
            $kode_subkat = $_POST['kode_subkat'];
            $nama_subkat = $_POST['nama_subkat'];
            $kd_kat = $_POST['kd_kat'];
             $qinput = 
        "
        INSERT INTO t_subkat
        (kode_subkat,nama_subkat,kd_kat)
        VALUES ('$kode_subkat','$nama_subkat','$kd_kat')";
         	
         $cek = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM t_subkat WHERE nama_subkat = '$nama_subkat'"));
        
        if ($cek > 0) {
          echo "<script> alert('Data Jenis Sudah Ada');
              document.location='adminmainapp.php?unit=subkategori_unit&act=input';
              </script>";
          } else {
          mysqli_query($mysqli,$qinput);
          echo "<script> alert('Data Tersimpan');
              document.location='adminmainapp.php?unit=subkategori_unit&act=datagrid';
              </script>";
          exit();
         }
        break;
    
        case "update":
        $kd_subkat = $_GET['kd_subkat'];
        $qupdate = "SELECT * FROM t_subkat WHERE kd_subkat = '$kd_subkat'";
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
              <li>Jenis</li>
							<li>Edit Jenis </li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"><h1>Edit Jenis </h1></div>
						<div class="row">
							<div class="col-xs-12">
                                                            
                <form class="form-horizontal" method="post" action="?unit=subkategori_unit&act=updateact" enctype="multipart/form-data">
                  
                    
                     <div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right">Kode Jenis</label>
                            <div class="col-sm-9">
                                  <input type="text" class="col-xs-10 col-sm-5" name="kode_subkat" id="kode_subkat" value="<?php echo $dupdate['kode_subkat'] ?>" readonly="readonly" >
                                  <input type="hidden" class="col-xs-10 col-sm-5" name="kd_subkat" id="kd_subkat" value="<?php echo $dupdate['kd_subkat'] ?>" readonly="readonly" >
                       </div>
                       </div>
                
       
				  
                        <div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right">Kategori Tanaman</label>
                            <div class="col-sm-9">
                    <select class="col-xs-10 col-sm-5" name="kd_kat" id="kd_kat" required>
                        <?php
                        $qcombo = 
                        "
                        SELECT * FROM t_kategori
                        ";
                        $rcombo = mysqli_query($mysqli,$qcombo);
                        while($dcombo = mysqli_fetch_assoc($rcombo)) {
                            if($dcombo['kd_kat'] == $dupdate['kd_kat']) {
                                echo "
                                <option value=$dcombo[kd_kat] selected=selected>$dcombo[nama_kat]</option> 
                                ";                                
                            }
                            else {
                                echo "
                                <option value=$dcombo[kd_kat]>$dcombo[nama_kat]</option> 
                                ";                                
                            }

                        }
                        ?>
                    </select>
                
                  </div>
                  </div>
				  
				   <div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right">Nama Jenis</label>
                            <div class="col-sm-9">
                      <input  class="col-xs-10 col-sm-5"  type="text" name="nama_subkat" id="nama_subkat" required value="<?php echo $dupdate['nama_subkat'] ?>" />
                   </div>
                       </div>
					   
              <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9"> 
                  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                  <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                  <button type="button" name="kembali" class="btn btn-info" onclick="window.location='adminmainapp.php?unit=subkategori_unit&act=datagrid'">kembali</button>                                                         
                </div>
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
    
            case "updateact":
                $kd_subkat = $_POST['kd_subkat'];
                 $kd_kat = $_POST['kd_kat'];
            $nama_subkat = $_POST['nama_subkat'];
             $qinput = 
        
       "
                UPDATE t_subkat SET
                nama_subkat= '$nama_subkat',			
                kd_kat = '$kd_kat'
               
                WHERE
                kd_subkat = '$kd_subkat'";			
         $rinput = mysqli_query($mysqli,$qinput);
         	
        header("location:?unit=subkategori_unit&act=datagrid");     
                 break;
    
        case "delete":
               $kd_subkat = $_GET['kd_subkat'];
        $qdelete = "
          DELETE  FROM t_subkat
       
          WHERE
            kd_subkat = '$kd_subkat'
        ";

        $rdelete = mysqli_query($mysqli,$qdelete);
        header("location:?unit=subkategori_unit&act=datagrid");
             break;
}
            
            