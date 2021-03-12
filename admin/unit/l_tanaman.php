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
		<h3 align="center">LAPORAN DATA TANAMAN</h3>
		
		<table  align="center" border="3" style="font-size: 16px; border-collapse: collapse; width: 100%;">
			<tr>
			<td>&nbsp;No&nbsp;</td>
			<td>&nbsp; Kode Tanaman &nbsp;</td>
			<td> &nbsp; Nama Tanaman &nbsp;</td>
			<td> &nbsp; Kadar Air &nbsp;</td>
			<td> &nbsp; Harga Produsen &nbsp;</td>
			<td> &nbsp; Harga Grosir &nbsp;</td>
			<td> &nbsp; Harga Eceran &nbsp;</td>
			<td> &nbsp; Jenis Tanaman &nbsp;</td>
			<td> &nbsp; Kategori &nbsp;</td>
			</tr>
			
			
			
							
		 <?php
			include("../lib/koneksi.php");
		 $no=1;
   
        $qupdate = " SELECT 
                            t_tanaman.kd_tam, t_tanaman.nama_tam, t_tanaman.kadar_air, t_tanaman.harga_produsen, t_tanaman.harga_grosir, t_tanaman.harga_eceran, 
							t_tanaman.kd_subkat,t_tanaman.kode_tam, t_tanaman.gambar_tam, t_tanaman.ket_tam,
							t_subkat.kd_subkat, t_subkat.nama_subkat,
							t_kategori.kd_kat, t_kategori.nama_kat
                            FROM 
                                t_tanaman
                                    JOIN t_subkat ON t_tanaman.kd_subkat = t_subkat.kd_subkat
                                    JOIN t_kategori ON t_tanaman.kd_kat = t_kategori.kd_kat
                                ORDER BY t_tanaman.kd_tam DESC";
        $rupdate = mysqli_query($mysqli, $qupdate);
        while($dupdate = mysqli_fetch_assoc($rupdate)){
      
		?>
<tr><td>&nbsp;<?php echo $no ?>&nbsp;</td>
<td>&nbsp;<?php echo $dupdate['kode_tam']; ?>&nbsp;</td>
<td> &nbsp; <?php echo $dupdate['nama_tam']; ?>&nbsp;</td>
<td> &nbsp; <?php echo $dupdate['kadar_air']; ?>&nbsp;</td>
<td> &nbsp;Rp. <?php echo number_format($dupdate['harga_produsen'],2); ?>&nbsp;</td>
<td> &nbsp;Rp. <?php echo number_format($dupdate['harga_grosir'],2); ?>&nbsp;</td>
<td> &nbsp;Rp. <?php echo number_format($dupdate['harga_eceran'],2); ?>&nbsp;</td>
<td> &nbsp; <?php echo $dupdate['nama_subkat']; ?>&nbsp;</td>
<td> &nbsp; <?php echo $dupdate['nama_kat']; ?>&nbsp;</td>
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