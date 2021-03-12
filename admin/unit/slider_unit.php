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
              <li>Slider</li>
							<li>Data Slider</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"> 
              <h1>Data Slider </h1>
            </div>
                 <h1>
                <a href="?unit=slider_unit&act=input">
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
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">Nama Slider</th>
                            <th style="text-align: center">Gambar</th>
                            <th style="text-align: center">Link</th>
                            <th style="text-align: center">Is Publish</th>
                            <th style="text-align: center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; 
                          $qdatagrid =" SELECT * FROM t_kontak ";
                            $rdatagrid = mysqli_query($mysqli, $qdatagrid);
                            while($ddatagrid=mysqli_fetch_assoc($rdatagrid)) {
                                echo "
                                <tr>
                                     <td style= text-align:center >$no</td>
                                     <td style= text-align:left  >$ddatagrid[no_telp]</td>
                                     <td style= text-align:center>$ddatagrid[no_hp]</td>
                                      <td style= text-align:center>$ddatagrid[instagram]</td>
                                      <td style= text-align:center>$ddatagrid[facebook]</td>
                                      <td style= text-align:center>$ddatagrid[email]</td>
                                      <td style= text-align:center>$ddatagrid[alamat]</td>
                                     <td style=text-align:center>
                                         <a href=?unit=slider_unit&act=update&kd_kontak=$ddatagrid[kd_kontak] class='btn btn-sm btn-warning glyphicon glyphicon-pencil' ></a> 
                                         <a href=?unit=slider_unit&act=delete&kd_kontak=$ddatagrid[kd_kontak] class='btn btn-sm btn-danger glyphicon glyphicon-trash' onclick='return confirm(\"Yakin Akan Menghapus Data?\")'></a>    
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
              <li>Slider</li>
							<li>Tambah Slider Baru</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"><h1>Tambah Slider Baru</h1></div>
						<div class="row">
							<div class="col-xs-12">
                                                            
<form  method="post" action="?unit=slider_unit&act=inputact" enctype="multipart/form-data" >
                  
                  <div class="form-group">
                      <label for="namaslider">Nama Slider:</label><br>
                    <input type="text" name="namaslider" id="nama" required />
                    <br><br>
                      
             
                      
                   <label for="diskripsi">Diskipsi</label><br>						
                    <textarea name="diskripsi" id="diskripsi" cols="50" rows="5"> </textarea>	<br><br>
                                                            
                   <label for="link">Link</label><br>
                      <input  type="text" name="link" id="link" required />
                    <br><br>
               
                                                            <hr>
                    
                      <label for="gambar">Gambar:</label><br>
                    <input type="file" name="gambar" id="gambar" accept="image/*" />
                      
                                                            <hr>
                  <label for="ispublish">Publish:</label><br>
                    <select name="ispublish" id="ispublish" required>
                        <option value=""></option>
                        <option value="Y">Y</option>
                        <option value="N">N</option>
                    </select><br><br>
                    
                  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                  <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                  <button type="button" name="kembali" class="btn btn-info" onclick="window.location='adminmainapp.php?unit=slider_unit&act=datagrid'">kembali</button>
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
          $namaslider = $_POST['namaslider'];							
            $diskripsi = $_POST['diskripsi'];
            $link = $_POST['link'];
            $ispublish = $_POST['ispublish'];	
            
            // menyimpan lokasi path file di variabel
            $lokasigambar = $_FILES['gambar']['tmp_name'];
            // menyimpan nama file di variabel
            $namagambar   = $_FILES['gambar']['name'];		
        
            
            $qinput = 
        "
        INSERT INTO t_kontak
        (
        namaslider,
        diskripsi,
        link,
        gambar,
        ispublish
        )
        VALUES
        (        
        '$namaslider',
        '$diskripsi',
        '$link',
        '$namagambar',
        '$ispublish'
        )
        ";
        
         move_uploaded_file($lokasigambar,"../gambar/$namagambar");		
         $cek = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM t_kontak WHERE namaslider = '$namaslider'"));
        
        if ($cek > 0) {
          echo "<script> alert('Data Produk Sudah Ada');
              document.location='adminmainapp.php?unit=slider_unit&act=input';
              </script>";
          } else {
          mysqli_query($mysqli,$qinput);
          echo "<script> alert('Data Tersimpan');
              document.location='adminmainapp.php?unit=slider_unit&act=datagrid';
              </script>";
          exit();
         }
            
            break;
    
        case "update":
            $kd_kontak = $_GET['kd_kontak'];
        $qupdate = "SELECT * FROM  t_kontak WHERE kd_kontak = '$kd_kontak'";
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
              <li>Kontak</li>
							<li>Edit Kontak</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"><h1>Edit Kontak</h1></div>
						<div class="row">
							<div class="col-xs-12">
                                                            
<form method="post"  class="form-horizontal" action="?unit=slider_unit&act=updateact" enctype="multipart/form-data" >
                    <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="no_telp">No Telpon</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="no_telp" id="no_telp" value="<?php echo  $dupdate['no_telp'] ?>" required />
                       <input class="col-xs-10 col-sm-5"type="hidden" name="kd_kontak" id="kd_kontak" value="<?php echo  $dupdate['kd_kontak'] ?>" required />
                       </div>
                       </div>
					   
					     <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="no_hp">No HP</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="no_hp" id="no_hp" value="<?php echo  $dupdate['no_hp'] ?>" required />
                       </div>
                       </div>
					   
					    <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="email">Email</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="email" id="email" value="<?php echo  $dupdate['email'] ?>" required />
                       </div>
                       </div>
					   
					     <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="instagram">Link Instagram</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="instagram" id="instagram" value="<?php echo  $dupdate['instagram'] ?>" required />
                       </div>
                       </div>
					   
					     <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="facebook">Link Facboook</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="facebook" id="facebook" value="<?php echo  $dupdate['facebook'] ?>" required />
                       </div>
                       </div>
					   
					    <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right"  for="alamat">Alamat</label>	
                   <div class="col-sm-9">
                   <textarea class="form-control limited" name="alamat" id="alamat"> <?php echo  $dupdate['alamat'] ?> </textarea>	
                    </div>
                       </div>
                 <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                  <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                  <button type="button" name="kembali" class="btn btn-info" onclick="window.location='adminmainapp.php?unit=dashboard'">kembali</button>
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
		$kd_kontak = $_POST['kd_kontak'];
        $no_telp = $_POST['no_telp'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];
        $instagram = $_POST['instagram'];
        $facebook = $_POST['facebook'];
        $alamat = $_POST['alamat'];
        $qupdate = "
          UPDATE t_kontak SET
            no_telp = '$no_telp',
            no_hp = '$no_hp',
            email = '$email',
            instagram = '$instagram',
            facebook = '$facebook',
            alamat = '$alamat'
          WHERE
            kd_kontak = '$kd_kontak'
        ";
        $rupdate = mysqli_query($mysqli,$qupdate);
        header("location:?unit=slider_unit&act=update&kd_kontak=1");    
                 break;
    
        case "delete":
        $kd_kontak = $_GET['kd_kontak'];
        $qdelete = "
          DELETE  FROM t_kontak 
       
          WHERE
            kd_kontak = '$kd_kontak'
        ";
        $rdelete = mysqli_query($mysqli,$qdelete);
        header("location:?unit=user_unit&act=datagrid");
            break;
}