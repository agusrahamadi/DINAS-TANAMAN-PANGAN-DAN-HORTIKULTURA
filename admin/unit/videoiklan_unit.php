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
              <li>Biografi</li>
							<li>Data Biografi</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"> 
              <h1>Data Biografi
                
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
                            <th style="text-align: center">Biografi</th>
                            <th style="text-align: center">Gambar</th>
                            <th style="text-align: center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; 
                          $qdatagrid =" SELECT * FROM t_biografi ";
                            $rdatagrid = mysqli_query($mysqli, $qdatagrid);
                            while($ddatagrid=mysqli_fetch_assoc($rdatagrid)) {
                                echo "
                                <tr>
                                     <td style= text-align:left  >$ddatagrid[isi]</td>
                                     <td style= text-align:center><img src=../gambar/$ddatagrid[gambar] width=100px></td>
                                   
                                     <td style=text-align:center>
                                         <a href=?unit=videoiklan_unit&act=update&kd_biografi=$ddatagrid[kd_biografi] class='btn btn-sm btn-warning glyphicon glyphicon-pencil' ></a> 
                                
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
            $kd_biografi = $_GET['kd_biografi'];
        $qupdate = "SELECT * FROM  t_biografi WHERE kd_biografi = '$kd_biografi'";
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
              <li>Biografi</li>
							<li>Edit Biografi</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"><h1>Edit Biografi</h1></div>
						<div class="row">
							<div class="col-xs-12">
                                                            
<form method="post"  class="form-horizontal"  action="?unit=videoiklan_unit&act=updateact" enctype="multipart/form-data" >
                  
                 	
							<div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="gambar">Gambar</label>
                    <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5" type="file" name="gambar" id="gambar" accept="image/*" />
					   <?php
                    if($dupdate['gambar']!="") {
                        echo "<img src=../gambar/$dupdate[gambar] width=100 height=100 />";
                    }
                    ?>
                       </div>
                       </div>
					    <input class="col-xs-10 col-sm-5" type="hidden" name="kd_biografi" value="<?php echo  $dupdate['kd_biografi'] ?>" readonly="readonly"  id="kd_biografi" required="required" autofocus="autofocus" />
                        
					   
                       <div class="form-group">
                      <label class=" col-sm-3  control-label no-padding-right"for="isi">Isi :</label>
                     <div class="col-sm-12">					
                    <textarea   name="isi" id="textarea" cols="50" rows="5"> <?php echo $dupdate['isi'] ?> </textarea>
                   </div>
                       </div>
					
						           
                   <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                  <button type="submit" name="submit" class="btn btn-su
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
			<script type="text/javascript">
  tinymce.init({
        selector: "textarea",

        // ===========================================
        // INCLUDE THE PLUGIN
        // ===========================================

        plugins: [
          "advlist autolink lists link image charmap print preview anchor",
          "searchreplace visualblocks code fullscreen",
          "insertdatetime media table contextmenu paste jbimages"
        ],

        // ===========================================
        // PUT PLUGIN'S BUTTON on the toolbar
        // ===========================================

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

        // ===========================================
        // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
        // ===========================================

        relative_urls: false,
        remove_script_host : false,
        convert_urls : true,

      });
</script>
	</body>
</html>
    
       <?php
        break;
    
            case "updateact":
        $kd_biografi = $_POST['kd_biografi'];						
        $isi = $_POST['isi'];
        
        // menyimpan lokasi path file di variabel
        $lokasigambar = $_FILES['gambar']['tmp_name'];
        // menyimpan isi file di variabel
        $isigambar   = $_FILES['gambar']['name'];	
        
        $qupdate = "";
         if($lokasigambar == "") {
                $qupdate = 
                "
                UPDATE t_biografi SET
                isi = '$isi'
                WHERE
                kd_biografi = '$kd_biografi'
                ";			
        }
        else {
                $qupdate = 
                "
                UPDATE t_biografi SET
                isi = '$isi',
                gambar = '$isigambar'
                WHERE
                kd_biografi = '$kd_biografi'
                ";					
                move_uploaded_file($lokasigambar,"../gambar/$isigambar");		
        }
       
        $rupdate = mysqli_query($mysqli,$qupdate);
        header("location:?unit=videoiklan_unit&act=update&kd_biografi=1");    
                 break;
                 

}