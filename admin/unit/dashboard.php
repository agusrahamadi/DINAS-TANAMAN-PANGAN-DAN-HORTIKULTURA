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
					</ul><!-- /.breadcrumb -->
				</div>

				<div class="page-content">
					<div class="page-header">
						<h1>Dashboard</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<div class="col-md-12" id="logo-awal">
<center><h2>APLIKASI SISTEM INFORMASI HARGA TANAMAN PANGAN DAN <br> HORTIKULTURA DINAS TANAMAN PANGAN DAN <br>HORTIKULTURA KABUPATEN BANJAR BERBASIS WEB</h2></center>

<center><h5>Jl. Padang anyar No.331 Rt.04 Rw.02 Desa Tungmkarang, Kab. Banjar, Prov. Kalimantan Selatan, Kode Pos : 71154</h5></center>
<br>
<br>
</div>
						</div><!-- /.col -->
						<div class="col-xs-12 infobox-container">
		          <div class="infobox infobox-green">
		            <div class="infobox-icon"><i class="ace-icon fa fa-list"></i></div>
                             <?php
                $qproduk =" SELECT * FROM t_kategori ";
                $rproduk = mysqli_query($mysqli, $qproduk);
                $dproduk = mysqli_num_rows($rproduk);
                echo "<div class='infobox-data'><span class='infobox-data-number'>$dproduk</span>";
                ?>
                
                
		            
          
                
		              <div class="infobox-content">Data Kategori</div>
		            </div>
		          </div>

		          <div class="infobox infobox-blue">
		            <div class="infobox-icon"><i class="ace-icon fa fa-list"></i></div>
		             <?php
                $qslider =" SELECT * FROM t_subkat ";
                $rslider = mysqli_query($mysqli, $qslider);
                $dslider = mysqli_num_rows($rslider);
                echo "<div class='infobox-data'><span class='infobox-data-number'>$dslider</span>";
                ?>
		              <div class="infobox-content">Data Jenis</div>
		            </div>
		          </div>

		          <div class="infobox infobox-pink">
		            <div class="infobox-icon"><i class="ace-icon fa fa-list"></i></div>
		           <?php
                $qkategori =" SELECT * FROM t_tanaman ";
                $rkategori = mysqli_query($mysqli, $qkategori);
                $dkategori= mysqli_num_rows($rkategori);
                echo "<div class='infobox-data'><span class='infobox-data-number'>$dkategori</span>";
                ?> 
		              <div class="infobox-content">Data Tanaman</div>
		            </div>
		          </div>

							<div class="infobox infobox-red">
		            <div class="infobox-icon"><i class="ace-icon fa fa-list"></i></div>
		<?php
                $qsubkategori =" SELECT * FROM t_informasi ";
                $rsubkategori = mysqli_query($mysqli, $qsubkategori);
                $dsubkategori= mysqli_num_rows($rsubkategori);
                echo "<div class='infobox-data'><span class='infobox-data-number'>$dsubkategori</span>";
                ?> 
		              <div class="infobox-content">Data Informasi</div>
		            </div>
		          </div>

							<div class="infobox infobox-orange">
		            <div class="infobox-icon"><i class="ace-icon fa fa-list"></i></div>
		        <?php
                $qbrand =" SELECT * FROM t_komentar ";
                $rbrand = mysqli_query($mysqli, $qbrand);
                $dbrand= mysqli_num_rows($rbrand);
                echo "<div class='infobox-data'><span class='infobox-data-number'>$dbrand</span>";
                ?> 
		              <div class="infobox-content">Data Komen Tanaman</div>
		            </div>
		          </div>
            
							<div class="infobox infobox-red">
		            <div class="infobox-icon"><i class="ace-icon fa fa-comment"></i></div>
		<?php
                $qblog =" SELECT * FROM t_komentar ";
                $rblog = mysqli_query($mysqli, $qblog);
                $dblog = mysqli_num_rows($rblog);
                echo "<div class='infobox-data'><span class='infobox-data-number'>$dblog</span>";
                ?> 
		              <div class="infobox-content">Data Komen Informasi</div>
		            </div>
		          </div>

							<div class="infobox infobox-blue">
		            <div class="infobox-icon"><i class="ace-icon fa fa-book"></i></div>
		 <?php
                $qkomentar =" SELECT * FROM t_biografi ";
                $rkomentar = mysqli_query($mysqli, $qkomentar);
                $dkomentar= mysqli_num_rows($rkomentar);
                echo "<div class='infobox-data'><span class='infobox-data-number'>$dkomentar</span>";
                ?> 
		              <div class="infobox-content">Data Biografi</div>
		            </div>
		          </div>
                          
                          <div class="infobox infobox-red">
		            <div class="infobox-icon"><i class="ace-icon fa fa-phone"></i></div>
		 <?php
                $qkomentar =" SELECT * FROM t_kontak ";
                $rkomentar = mysqli_query($mysqli, $qkomentar);
                $dkomentar= mysqli_num_rows($rkomentar);
                echo "<div class='infobox-data'><span class='infobox-data-number'>$dkomentar</span>";
                ?> 
		              <div class="infobox-content">Data Kontak</div>
		            </div>
		          </div>  
                          
                          
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div></div>
		</div><!-- /.main-content -->
            <?php
            include("../admin/footer.php");
            ?>    
	</body>
</html>

