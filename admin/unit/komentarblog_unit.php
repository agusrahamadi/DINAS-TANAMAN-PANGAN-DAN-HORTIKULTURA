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
              <li> Komentar Informasi</li>
							<li>Data Komentar Informasi</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>Data Komentar Informasi
								
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
                            <th style="text-align: center">Tanggal/Jam</th>
                            <th style="text-align: center">Kode Informasi</th>
                            <th style="text-align: center">Judul Informasi</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Nama</th>
                            <th style="text-align: center">Isi Komentar</th>
                            <th style="text-align: center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1;
                                
                            $qdatagrid =  "SELECT 
							t_komentar.kd_tam,t_komentar.kd_komentar,t_komentar.tanggal,t_komentar.nama,t_komentar.email,
							t_komentar.jam,t_komentar.kd_info,t_komentar.komentar,
							t_informasi.judul, t_informasi.kode_info, t_informasi.kd_info
								FROM t_komentar
										JOIN t_informasi ON t_komentar.kd_info = t_informasi.kd_info
										WHERE t_komentar.kd_tam = '0'  ";
                            $rdatagrid = mysqli_query($mysqli, $qdatagrid);
                            while($ddatagrid=mysqli_fetch_assoc($rdatagrid)) {
                                echo "
                                <tr>
                                     <td style= text-align:center >$no</td>
                                     <td style= text-align:left>$ddatagrid[tanggal] $ddatagrid[jam]</td>
                                     <td style= text-align:center>$ddatagrid[kode_info]</td>
                                     <td style= text-align:center>$ddatagrid[judul]</td>
                                     <td style= text-align:left >$ddatagrid[email]</td>
                                     <td style= text-align:left >$ddatagrid[nama]</td>
                                     <td style= text-align:left>$ddatagrid[komentar]</td>
                                     <td style=text-align:center>
                                         
                                         <a href=?unit=komentar_unit&act=delete&komentarid=$ddatagrid[komentarid] class='btn btn-sm btn-danger glyphicon glyphicon-trash' onclick='return confirm(\"Yakin Akan Menghapus Data?\")'></a>    
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
             $komentarid = $_GET['komentarid'];
        $qdelete = "
          DELETE  FROM komentartb 
       
          WHERE
            komentarid = '$komentarid'
        ";
        $rdelete = mysqli_query($mysqli,$qdelete);
        header("location:?unit=komentar_unit&act=datagrid");
                         break;
}
           