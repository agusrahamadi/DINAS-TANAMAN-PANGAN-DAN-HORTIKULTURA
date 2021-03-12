<section>
    <div class="container">
        <div class="row">

            <?php
$kd_kat =$_GET ['kd_kat'];
$qkategori =
" SELECT 
    * 
  FROM
    t_kategori 
  WHERE
   kd_kat = '$kd_kat'

";
$rkategori = mysqli_query($mysqli, $qkategori);
$dkategori = mysqli_fetch_assoc($rkategori);
?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center"><?php echo $dkategori['nama_kat']?></h2>
<?php
                  
                    $batas   = 24;
                    $halaman = @$_GET['halaman'];
                    if(empty($halaman)){
                     $posisi  = 0;
                     $halaman = 1;
                    }
                    else{ 
                      $posisi  = ($halaman-1) * $batas; 
                    }
                    function cutText($judul, $length, $mode = 2)
                    {
                            if ($mode != 1)
                            {
                                    $char = $judul{$length - 1};
                                    switch($mode)
                                    {
                                            case 2: 
                                                    while($char != ' ') {
                                                            $char = $judul{--$length};
                                                    }
                                            case 3:
                                                    while($char != ' ') {
                                                            $char = $judul{++$num_char};
                                                    }
                                    }
                            }
                            return substr($judul, 0, $length);
                    }
                        $kd_kat =$_GET ['kd_kat'];
                        $qkategori =
                        "  SELECT 
                            * 
                          FROM
                            t_tanaman , t_kategori 
                          WHERE
                           t_tanaman.kd_kat = t_kategori.kd_kat
                          AND
                           t_tanaman.kd_kat = '$kd_kat'
                      
                          ORDER BY
                           t_tanaman.kd_kat DESC LIMIT $posisi,$batas "
                        ;
                        $rkategori = mysqli_query($mysqli, $qkategori);                
                        while($dkategori = mysqli_fetch_assoc($rkategori)){
                        ?>
                        <div class="col-sm-2">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="gambar/<?php echo $dkategori['gambar_tam'] ?>" style="position: relative; height: 183px" alt="" />
                                        <h2><?php $judul = ($dkategori['nama_tam']);echo cutText($judul,17,1).'..'; ?></h2>
                                       
                                        <a href="mainapp.php?unit=detailproduk_unit&kd_tam=<?php echo $dkategori['kd_tam'] ?>" class="btn btn-default add-to-cart"><i  class="fa fa-eye"></i>Detail</a>  
                                    </div> 
                                </div> 
                            </div>
                        </div>
     <?php
    }
    ?>
</div>
              <ul class="pagination">
                                                    <?php
                            $query2     = mysqli_query($mysqli, "select * from t_tanaman where kd_kat = '$kd_kat'");
                            $jmldata    = mysqli_num_rows($query2);
                            $jmlhalaman = ceil($jmldata/$batas);
                            
                            for($i=1;$i<=$jmlhalaman;$i++)
                            if ($i != $halaman){
                             echo " <li><a href=\"mainapp.php?unit=produkkat_unit&kd_kat=$kd_kat&halaman=$i\">$i</a></li>  ";
                            }
                            else{
                             echo " <li><a>$i</a></li>  "; 
                            }
                            ?>
                    </ul>
        </div>
    </div></section>