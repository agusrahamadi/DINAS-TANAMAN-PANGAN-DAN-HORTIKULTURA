<!DOCTYPE html>
<?php 
ob_start();
?>
<page>
		<style type="text/css">
		table#barang{
			border: 2px solid darkgrey;
		}
		th{
			border-bottom: 2px solid darkgrey;
		}
		td.table-td{
			border-bottom: 2px solid darkgrey;
			border-right: 0.5px solid darkgrey;
		}
		</style>
		<h1 align="center"> </h1>
		<table border="0" align="center" style="font-size: 16px; border-collapse: collapse; width: 100%;">
		
		<tr><td style="font-size: 18px; width: 90%;" align="center;"><b>APLIKASI SISTEM INFORMASI HARGA TANAMAN PANGAN DAN <br> HORTIKULTURA DINAS TANAMAN PANGAN DAN <br> HORTIKULTURA KABUPATEN BANJAR BERBASIS WEB</b></td></tr>
			
			<tr><td style="font-size: 14px; width: 92%;" align="center;">Jl. Padang anyar No.331 Rt.04 Rw.02 Desa Tungmkarang, Kab. Banjar, Prov. Kalimantan Selatan <br> Kode Pos : 71154</td></tr>
		</table>
		<hr>
		<h3 align="center">LAPORAN DATA KOMENTAR TANAMAN</h3>
		
		<table  align="center" border="3" style="font-size: 16px; border-collapse: collapse; width: 100%;">
			<tr>
			<td>&nbsp;No&nbsp;</td>
			<td>&nbsp; Tanggal/Jam &nbsp;</td>
			<td> &nbsp; Kode Tanaman &nbsp;</td>
			<td> &nbsp; Nama Tanaman &nbsp;</td>
			<td> &nbsp; Email &nbsp;</td>
			<td> &nbsp; Nama &nbsp;</td>
			<td> &nbsp; Isi Komentar &nbsp;</td>
			</tr>
		 <?php
			include("../lib/koneksi.php");
		 $no=1;
   
        $qupdate = " SELECT 
							t_komentar.kd_tam,t_komentar.kd_komentar,t_komentar.tanggal,t_komentar.nama,t_komentar.email,
							t_komentar.jam,t_komentar.kd_info,t_komentar.komentar,
							t_tanaman.nama_tam, t_tanaman.kode_tam, t_tanaman.kd_tam
								FROM t_komentar
										JOIN t_tanaman ON t_komentar.kd_tam = t_tanaman.kd_tam
										WHERE t_komentar.kd_info = '0'  ";
        $rupdate = mysqli_query($mysqli, $qupdate);
        while($dupdate = mysqli_fetch_assoc($rupdate)){
      
		?>
<tr><td>&nbsp;<?php echo $no ?>&nbsp;</td>
<td>&nbsp;<?php echo $dupdate['tanggal']; ?> <?php echo $dupdate['jam']; ?>&nbsp;</td>
<td> &nbsp; <?php echo $dupdate['kode_tam']; ?>&nbsp;</td>
<td> &nbsp; <?php echo $dupdate['nama_tam']; ?>&nbsp;</td>
<td> &nbsp; <?php echo $dupdate['email']; ?>&nbsp;</td>
<td> &nbsp; <?php echo $dupdate['nama']; ?>&nbsp;</td>
<td> &nbsp; <?php echo $dupdate['komentar']; ?>&nbsp;</td>
</tr>

<?php $no++; } ?>
		</table>
       
		
<p></p>
	


		
		
		<br />
        <p></p>
		<?php
		
        ?>
		
</page>
<?php
    $content = ob_get_clean();

// conversion HTML => PDF
 require_once(dirname(__FILE__).'../../../html2pdf/html2pdf.class.php');
 try
 {
 $html2pdf = new HTML2PDF('L','A4', 'fr', false, 'ISO-8859-15');
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 ob_end_clean();
 $html2pdf->Output();
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>
</html>