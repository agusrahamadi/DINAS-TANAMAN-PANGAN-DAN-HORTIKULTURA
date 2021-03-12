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
              <li>Tanaman</li>
							<li>Data Tanaman</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>Data Tanaman </h1>
						</div>
                                            
                                            
                                         
                                            
                                            <h1>
								<a href="?unit=produk_unitwa&act=input">
              		<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</button>
            		</a>
							</h1>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
                  <div class="box box-primary">
                    <div class="box-body table-responsive padding">   
                      <table id="datatable" class="table table-striped table-bordered table-hover " cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th style="text-align: center">No.</th>
                            <th style="text-align: center">Kode Tanaman</th>
                            <th style="text-align: center">Nama Tanaman</th>
                            <th style="text-align: center">Kadar Air</th>
                            <th style="text-align: center">Harga Produsen</th>
                            <th style="text-align: center">Harga Grosir</th>
                            <th style="text-align: center">Harga Eceran</th>
                            <th style="text-align: center">Jenis Tanaman</th>
                            <th style="text-align: center">Kategori</th>
                            <th style="text-align: center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1;
						  
                            $qdatagrid = 
                            "
                            SELECT 
                            t_tanaman.kd_tam, t_tanaman.nama_tam, t_tanaman.kadar_air, t_tanaman.harga_produsen, t_tanaman.harga_grosir, t_tanaman.harga_eceran, 
							t_tanaman.kd_subkat,t_tanaman.kode_tam, t_tanaman.gambar_tam, t_tanaman.ket_tam,
							t_subkat.kd_subkat, t_subkat.nama_subkat,
							t_kategori.kd_kat, t_kategori.nama_kat
                            FROM 
                                t_tanaman
                                    JOIN t_subkat ON t_tanaman.kd_subkat = t_subkat.kd_subkat
                                    JOIN t_kategori ON t_tanaman.kd_kat = t_kategori.kd_kat
                                ORDER BY t_tanaman.kd_tam DESC";
                                
                            $rdatagrid = mysqli_query($mysqli, $qdatagrid);
                            while($ddatagrid=mysqli_fetch_assoc($rdatagrid)) {
                              $a = "Rp. " .number_format($ddatagrid['harga_produsen'], 2);
                               $b = "Rp. " .number_format($ddatagrid['harga_grosir'], 2);
                               $c = "Rp. " .number_format($ddatagrid['harga_eceran'], 2);
                                echo "
                                <tr>
                                     <td style= text-align:center >$no</td>
                                     <td style= text-align:center>$ddatagrid[kode_tam]</td>
                                     <td style= text-align:left  >$ddatagrid[nama_tam]</td>
                                     <td style= text-align:center>$ddatagrid[kadar_air]%</td>
                                     <td style= text-align:center>$a</td>
                                     <td style= text-align:center>$b</td>
                                     <td style= text-align:center>$c</td>
                                     <td style= text-align:left  >$ddatagrid[nama_subkat]</td>
                                     <td style= text-align:left  >$ddatagrid[nama_kat]</td>
                                     <td style=text-align:center>
                                         <a href=?unit=produk_unitwa&act=update&kd_tam=$ddatagrid[kd_tam]  class='btn btn-sm btn-warning' >Ajukan Harga</a>    
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
              <li>Tanaman</li>
							<li>Tambah Tanaman Baru</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<?php
				$mysqli= mysqli_connect("localhost","u8110790_db_tanaman","metalbest149","u8110790_db_tanaman");
                $qupdate = "SELECT max(kode_tam) as maxKode FROM t_tanaman";
                $rupdate = mysqli_query($mysqli, $qupdate);
                $dupdate = mysqli_fetch_assoc($rupdate);
                $kd_daftar = $dupdate['maxKode'];
                $a = substr($kd_daftar,4);
                $no_urut = $a + 1;
                $char = "TAM-";
                $newID = $char.sprintf("%03s",$no_urut);
                    ?>
					<div class="page-content">
						<div class="page-header"><h1>Tambah Tanaman Baru</h1></div>
						<div class="row">
							<div class="col-xs-12">
                                                            
       <form id="tambah_pro" name="tambah_pro"  class="form-horizontal"  method="post" action="?unit=produk_unitwa&act=inputact" enctype="multipart/form-data" >
                     <div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right">Kode Tanaman</label>
                            <div class="col-sm-9">
                                <input class="col-xs-10 col-sm-5" type="text" name="kode_tam" value="<?php echo "$newID"; ?>" readonly="readonly"  id="kode_tam" required="required" autofocus="autofocus" />
                                <input class="col-xs-10 col-sm-5" type="hidden" name="userid" value="<?php echo  $_SESSION['userid'] ?>" readonly="readonly"  id="userid" required="required" autofocus="autofocus" />
                            </div>
                       </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="nama_tam">Nama Tanaman</label>
                      <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="nama_tam" id="nama_tam" required />
                       </div>
                           </div>
						   
						   
                         
						
						 <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="kadar_air">Kadar Air</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="kadar_air" id="kadar_air" required />
                       </div>
                       </div>
					   
					   <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="harga_produsen">Harga Produsen</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="harga_produsen" id="harga_produsen" required />
                       </div>
                       </div>

					   <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="harga_grosir">Harga Grosir</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="harga_grosir" id="harga_grosir" required />
                       </div>
                       </div>

					   <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="harga_eceran">Harga Eceran</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="harga_eceran" id="harga_eceran" required />
                       </div>
                       </div>
					   
					   
                    <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="kd_kat">Kategori</label>
                    <div class="col-sm-9">
                        <select class="col-xs-10 col-sm-5" name="kd_kat" id="kd_kat"  required>
                        <option selected="selected">-Pilih Kategori-</option>
                        <?php
                        $qcombo = 
                        "
                        SELECT * FROM t_kategori
                        ";
                        $rcombo = mysqli_query($mysqli,$qcombo);
                        while($data = mysqli_fetch_assoc($rcombo)) {
                            echo "
                            <option value=$data[kd_kat]>$data[nama_kat]</option> 
                            ";
                        }
                        ?>
                    </select>
                       </div>
                       </div>    
                     <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="kd_subkat">Jenis</label>
                     <div class="col-sm-9">
                        <select class="col-xs-10 col-sm-5" name="kd_subkat" id="kd_subkat" required>
                        <option selected="selected">-Pilih Kategori Dulu-</option>

                    </select>
                       </div>
                       </div>
					   
                     <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right"  for="deskripsi">Keterangan</label>	
                   <div class="col-sm-9">
                   <textarea class="form-control limited" name="ket_tam" id="ket_tam"> </textarea>	
                    </div>
                       </div>
    

                   
                                                          
                    
                       <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="gambar_tam">Gambar:</label>
                    <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5" type="file" name="gambar_tam" id="gambar_tam" accept="image/*" />
                       </div>
                       </div>
                      
                            
                   <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                         <button type="button" name="kembali" class="btn btn-info" onclick="window.location='adminmainapp.php?unit=produk_unitwa&act=datagrid'">kembali</button>
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
	$(document).ready(function()
{
 <!-- handle event combobox kategori ketika nilainya di ganti -->
 $("#kd_kat").change(function() {
  <!-- mendapatkan value dari combobox -->
  var a = $(this).val();
  if (a != "")
  {
   <!-- Request data sub kategori berdasarkan idkategori yang dipilih -->
   $.ajax({
    type:"post",
    url:"../getsubkategori.php",
    data:"id="+ a,
    success: function(data){
     $("#kd_subkat").html(data);
    }
   });
  }
 });
});
    function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.tambah_pro.hargaasal.value;
two = document.tambah_pro.diskon.value;
document.tambah_pro.hargadiskon.value =(one * 1) - ((two * 1) * (one * 1) / 100) ;}
function stopCalc(){
clearInterval(interval);}

     var frmvalidator = new Validator("tambah_pro");
 frmvalidator.addValidation("hargaasal","maxlen=15","Maksimal Karakter Nama 15 digit");
 frmvalidator.addValidation("hargaasal","numeric","Hanya Huruf Saja");
 frmvalidator.addValidation("hargaasal","simbol","Hanya Huruf Saja");

  frmvalidator.addValidation("hargadiskon","maxlen=15","Maksimal Karakter Nama 15 digit");
 frmvalidator.addValidation("hargadiskon","numeric","Hanya Huruf Saja");
 frmvalidator.addValidation("hargadiskon","simbol","Hanya Huruf Saja");

    $('#hargaasal').inputmask("numeric", {
         
          digits: 2,
          autoGroup: true,
          rightAlign: false,
          oncleared: function () { self.Value(''); }
      });
    $('#hargadiskon').inputmask("numeric", {
          
          digits: 2,
          autoGroup: true,
          rightAlign: false,
          oncleared: function () { self.Value(''); }
      });






</script> 
	</body>
</html>

 <?php
        break;
    
        case "inputact":
             

            $userid = $_POST['userid'];						
            $kode_tam = $_POST['kode_tam'];						
            $nama_tam = $_POST['nama_tam'];						
            $kadar_air = $_POST['kadar_air'];						
            $harga_produsen = $_POST['harga_produsen'];
            $harga_grosir = $_POST['harga_grosir'];
            $harga_eceran = $_POST['harga_eceran'];
            $kd_kat = $_POST['kd_kat'];
            $kd_subkat = $_POST['kd_subkat'];
            $ket_tam = $_POST['ket_tam'];
            
            // menyimpan lokasi path file di variabel
            $lokasigambar = $_FILES['gambar_tam']['tmp_name'];
            // menyimpan nama file di variabel
            $namagambar   = $_FILES['gambar_tam']['name'];	
            $qinput = 
        "
        INSERT INTO t_tanaman
        (
        userid,
        kode_tam,
        nama_tam,
        kadar_air,
        harga_produsen,
        harga_grosir,
        harga_eceran,
        kd_kat,
        kd_subkat,
        ket_tam,
        gambar_tam
        )
        VALUES
        (        
        '$userid',
        '$kode_tam',
        '$nama_tam',
        '$kadar_air',
        '$harga_produsen',
        '$harga_grosir',
        '$harga_eceran',
        '$kd_kat',
        '$kd_subkat',
        '$ket_tam',
        '$namagambar'
        )
        ";
         move_uploaded_file($lokasigambar,"../gambar/$namagambar");		   
          $cek = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM t_tanaman WHERE nama_tam = '$nama_tam'"));
        
        if ($cek > 0) {
          echo "<script> alert('Data Tanaman Sudah Ada');
              document.location='adminmainapp.php?unit=produk_unitwa&act=input';
              </script>";
          } else {
          mysqli_query($mysqli,$qinput);
          echo "<script> alert('Data Tersimpan');
              document.location='adminmainapp.php?unit=produk_unitwa&act=datagrid';
              </script>";
          exit();
         }
             break;
    
        case "update":
        $kd_tam = $_GET['kd_tam'];
        $qupdate = "SELECT * FROM t_tanaman WHERE kd_tam = '$kd_tam'";
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
              <li>Tanaman</li>
							<li>Edit Tanaman </li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header"><h1>Edit Tanaman </h1></div>
						<div class="row">
							<div class="col-xs-12">
                        <form id="tambah_pro" class="form-horizontal" name="tambah_pro"  method="post" action="?unit=produk_unitwa&act=updateact" enctype="multipart/form-data" >
                    
					<div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right">Kode Tanaman</label>
                            <div class="col-sm-9">
                                <input class="col-xs-10 col-sm-5" type="text" name="kode_tam" value="<?php echo  $dupdate['kode_tam'] ?>" readonly="readonly"  id="kode_tam" required="required" autofocus="autofocus" />
                                <input class="col-xs-10 col-sm-5" type="hidden" name="userid" value="<?php echo  $dupdate['userid'] ?>" readonly="readonly"  id="userid" required="required" autofocus="autofocus" />
                                <input class="col-xs-10 col-sm-5" type="hidden" name="kd_tam" value="<?php echo  $dupdate['kd_tam'] ?>" readonly="readonly"  id="kd_tam" required="required" autofocus="autofocus" />
                            </div>
                       </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="nama_tam">Nama Tanaman</label>
                      <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" value="<?php echo  $dupdate['nama_tam'] ?>" name="nama_tam" id="nama_tam"  readonly="readonly" required />
                       </div>
                           </div>
						   
						   
                         
						
						
                       <input class="col-xs-10 col-sm-5" type="hidden" name="kadar_air" value="<?php echo  $dupdate['kadar_air'] ?>" id="kadar_air" required />
                       
					   
					   <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="harga_produsen">Harga Produsen</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="harga_produsen" id="harga_produsen" value="<?php echo  $dupdate['harga_produsen'] ?>" required />
                       </div>
                       </div>

					   <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="harga_grosir">Harga Grosir</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="harga_grosir" id="harga_grosir" value="<?php echo  $dupdate['harga_grosir'] ?>" required />
                       </div>
                       </div>

					   <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right"for="harga_eceran">Harga Eceran</label>
                     <div class="col-sm-9">
                       <input class="col-xs-10 col-sm-5"type="text" name="harga_eceran" id="harga_eceran" value="<?php echo  $dupdate['harga_eceran'] ?>" required />
                       </div>
                       </div>
					   
					   
                    
                        
                      
                            
                   <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                         <button type="button" name="kembali" class="btn btn-info" onclick="window.location='adminmainapp.php?unit=produk_unitwa&act=datagrid'">kembali</button>
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
      $('#hargaasal').inputmask("numeric", {
       
          digits: 2,
          autoGroup: true,
          rightAlign: false,
          oncleared: function () { self.Value(''); }
      });
    $('#hargadiskon').inputmask("numeric", {
        
          digits: 2,
          autoGroup: true,
          rightAlign: false,
          oncleared: function () { self.Value(''); }
      });

 
</script> 
    
	</body>
</html>
 <?php
        break;
    
            case "updateact":
            $kd_tam = $_POST['kd_tam'];	
            $nama_tam = $_POST['nama_tam'];						
            $kadar_air = $_POST['kadar_air'];
            $harga_produsen = $_POST['harga_produsen'];
            $harga_grosir = $_POST['harga_grosir'];
            $harga_eceran = $_POST['harga_eceran'];
        
        
                $qupdate = 
                "
                UPDATE t_tanaman SET
                nama_tam ='$nama_tam',
                kadar_air ='$kadar_air',
                h_produsen_p ='$harga_produsen',
                h_grosir_p ='$harga_grosir',
                h_eceran_p ='$harga_eceran',
                petani ='petani1'
                WHERE
                kd_tam = '$kd_tam'
                ";			
        
        
       
        $rupdate = mysqli_query($mysqli,$qupdate);
        header("location:?unit=produk_unitbb&act=datagrid");
                break;
    
        case "delete":
       $kd_tam = $_GET['kd_tam'];
        $qdelete = "
          DELETE  FROM t_tanaman
       
          WHERE
            kd_tam = '$kd_tam'
        ";

        $rdelete = mysqli_query($mysqli,$qdelete);
        header("location:?unit=produk_unitwa&act=datagrid");    
             break;
}