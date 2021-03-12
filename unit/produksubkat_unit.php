<section>
    <div class="container">
        <div class="row">

            <?php
$kd_subkat =$_GET ['kd_subkat'];
$qsubkategori =
" SELECT 
    * 
  FROM
    t_subkat 
  WHERE
   kd_subkat = '$kd_subkat'

";
$rsubkategori = mysqli_query($mysqli, $qsubkategori);
$dsubkategori = mysqli_fetch_assoc($rsubkategori);
?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center"><?php echo $dsubkategori['nama_subkat']?></h2>
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

                        $kd_subkat =$_GET ['kd_subkat'];
                        $qsubkategori =
                        "  SELECT 
                            * 
                          FROM
                            t_tanaman , t_subkat 
                          WHERE
                           t_tanaman.kd_subkat = t_subkat.kd_subkat
                          AND
                           t_tanaman.kd_subkat = '$kd_subkat'
                      
                          ORDER BY
                           t_tanaman.kd_subkat DESC LIMIT $posisi,$batas "
                        ;
                        $rsubkategori = mysqli_query($mysqli, $qsubkategori);                
                        while($dsubkategori = mysqli_fetch_assoc($rsubkategori)){
                        ?>
                        <div class="col-sm-2">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                     <div class="productinfo text-center">
                                        <img src="gambar/<?php echo $dsubkategori['gambar_tam'] ?>" style="position: relative; height: 183px" alt="" />
                                        <h2><?php $judul = ($dsubkategori['nama_tam']);echo cutText($judul,17,1).'..'; ?></h2>
                                       
                                        <a href="mainapp.php?unit=detailproduk_unit&kd_tam=<?php echo $dsubkategori['kd_tam'] ?>" class="btn btn-default add-to-cart"><i  class="fa fa-eye"></i>Detail</a>  
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
                            $query2     = mysqli_query($mysqli, "select * from t_tanaman where kd_subkat = '$kd_subkat'");
                            $jmldata    = mysqli_num_rows($query2);
                            $jmlhalaman = ceil($jmldata/$batas);
                            
                            for($i=1;$i<=$jmlhalaman;$i++)
                            if ($i != $halaman){
                             echo " <li><a href=\"mainapp.php?unit=produksubkat_unit&kd_subkat=$kd_subkat&halaman=$i\">$i</a></li>  ";
                            }
                            else{
                             echo " <li><a>$i</a></li>  "; 
                            }
                            ?>
                    </ul>
        </div>
    </div></section>