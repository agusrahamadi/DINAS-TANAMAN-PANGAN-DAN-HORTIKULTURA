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
              <li>Komentar Tanaman</li>
							<li>Data Komentar Tanaman</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>Data Komentar Tanaman
								
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
                            <th style="text-align: center">Kode Tanaman</th>
                            <th style="text-align: center">Nama Tanaman</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Nama</th>
                            <th style="text-align: center">Isi Komentar</th>
                            <th style="text-align: center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1;
                                
                            $qdatagrid =  " SELECT 
							t_komentar.kd_tam,t_komentar.kd_komentar,t_komentar.tanggal,t_komentar.nama,t_komentar.email,
							t_komentar.jam,t_komentar.kd_info,t_komentar.komentar,
							t_tanaman.nama_tam, t_tanaman.kode_tam, t_tanaman.kd_tam
								FROM t_komentar
										JOIN t_tanaman ON t_komentar.kd_tam = t_tanaman.kd_tam
										WHERE t_komentar.kd_info = '0'  ";
                            $rdatagrid = mysqli_query($mysqli, $qdatagrid);
                            while($ddatagrid=mysqli_fetch_assoc($rdatagrid)) {
                                echo "
                                <tr>
                                     <td style= text-align:center >$no</td>
                                     <td style= text-align:left>$ddatagrid[tanggal] $ddatagrid[jam]</td>
                                     <td style= text-align:center>$ddatagrid[kode_tam]</td>
                                     <td style= text-align:center>$ddatagrid[nama_tam]</td>
                                     <td style= text-align:left >$ddatagrid[email]</td>
                                     <td style= text-align:left >$ddatagrid[nama]</td>
                                     <td style= text-align:left>$ddatagrid[komentar]</td>
                                     <td style=text-align:center>
                                         
                                         <a href=?unit=komentar_unit&act=delete&kd_komentar=$ddatagrid[kd_komentar] class='btn btn-sm btn-danger glyphicon glyphicon-trash' onclick='return confirm(\"Yakin Akan Menghapus Data?\")'></a>    
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
             $kd_komentar = $_GET['kd_komentar'];
        $qdelete = "
          DELETE  FROM t_komentar 
       
          WHERE
            kd_komentar = '$kd_komentar'
        ";
        $rdelete = mysqli_query($mysqli,$qdelete);
        header("location:?unit=komentar_unit&act=datagrid");
                         break;
}
           