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
              <li>youtube</li>
							<li>Data youtube</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"> 
              <h1>Data youtube
                
              </h1>
            </div>

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
                            <th style="text-align: center">Nama youtube</th>
                            <th style="text-align: center">Link</th>
                            <th style="text-align: center">Gambar</th>
                            <th style="text-align: center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; 
                          $qdatagrid =" SELECT * FROM youtubetb ";
                            $rdatagrid = mysqli_query($mysqli, $qdatagrid);
                            while($ddatagrid=mysqli_fetch_assoc($rdatagrid)) {
                                echo "
                                <tr>
                                     <td style= text-align:center >$no</td>
                                     <td style= text-align:left  >$ddatagrid[nama]</td>
                                    <td style= text-align:center>$ddatagrid[link]</td>
                                     <td style= text-align:center><img src=../gambar/$ddatagrid[gambar] width=100px></td>
                                   
                                     <td style=text-align:center>
                                         <a href=?unit=youtube_unit&act=update&youtubeid=$ddatagrid[youtubeid] class='btn btn-sm btn-warning glyphicon glyphicon-pencil' ></a> 
                                
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

	</body>
</html>
        <?php
        
        break;
    
        case "update":
            $youtubeid = $_GET['youtubeid'];
        $qupdate = "SELECT * FROM  youtubetb WHERE youtubeid = '$youtubeid'";
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
              <li>youtube</li>
							<li>Edit youtube Baru</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"><h1>Edit youtube Baru</h1></div>
						<div class="row">
							<div class="col-xs-12">
                                                            
<form method="post" action="?unit=youtube_unit&act=updateact" enctype="multipart/form-data" >
                  
                  <div class="form-group">
                      <label for = "youtubeid">ID Youtube</label><br>
                    <input type="text" name="youtubeid" id="youtubeid" value="<?php echo $dupdate['youtubeid'] ?>" readonly="readonly" /> 
                    <br><br>
                    
                      <label for="nama">Nama </label><br>
                    <input type="text" name="nama" id="nama" required value="<?php echo $dupdate['nama'] ?>"/>
                    <br><br>
                      
                                                            
                   <label for="link">Link</label><br>
                      <input  type="text" name="link" id="link" required  value="<?php echo $dupdate['link'] ?>"/>
                    <br><br>
               
                                                            <hr>
                    
                      <label for="gambar">Gambar:</label><br>
                    <input type="file" name="gambar" id="gambar" accept="image/*" />
                    
                    <?php
                    if($dupdate['gambar']!="") {
                        echo "<img src=../gambar/$dupdate[gambar] width=100 height=100 />";
                    }
                    ?>
                 
                      
                                                            <hr>
                 
                    
                  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                  <button type="reset" name="reset" class="btn btn-danger">Reset</button>
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
            $youtubeid = $_POST['youtubeid'];						
           $nama = $_POST['nama'];						
        $link = $_POST['link'];
	
        
        // menyimpan lokasi path file di variabel
        $lokasigambar = $_FILES['gambar']['tmp_name'];
        // menyimpan nama file di variabel
        $namagambar   = $_FILES['gambar']['name'];	
        
        $qupdate = "";
         if($lokasigambar == "") {
                $qupdate = 
                "
                UPDATE youtubetb SET
                nama = '$nama',
                link = '$link'
                WHERE
                youtubeid = '$youtubeid'
                ";			
        }
        else {
                $qupdate = 
                "
                UPDATE youtubetb SET
                nama = '$nama',		
                link = '$link',
                gambar = '$namagambar'
                WHERE
                youtubeid = '$youtubeid'
                ";					
                move_uploaded_file($lokasigambar,"../gambar/$namagambar");		
        }
       
        $rupdate = mysqli_query($mysqli,$qupdate);
        header("location:?unit=youtube_unit&act=datagrid");    
                 break;

}