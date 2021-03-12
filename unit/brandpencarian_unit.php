<section>
    <div class="container">
        <div class="row">
<?php
            include("unit/brand_unit.php");
            ?>
            <?php
$produkid =$_GET ['merekid'];
$qcounter ="UPDATE merektb SET counter = counter + 1 WHERE merekid = '$produkid' ";
$rcounter = mysqli_query($mysqli, $qcounter);
$qproduk =
" SELECT 
    * 
  FROM
    merektb 
  WHERE
   merekid = '$produkid'

";
$rproduk = mysqli_query($mysqli, $qproduk);
$dproduk = mysqli_fetch_assoc($rproduk);
?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Brands '<?php echo $dproduk['namamerek']?>'</h2>
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
                        $produkid =$_GET ['merekid'];
                        $qproduk =
                        "  SELECT 
                            * 
                          FROM
                            produktb , merektb 
                          WHERE
                           produktb.merekid = merektb.merekid
                          AND
                           produktb.merekid = '$produkid'
                      
                          ORDER BY
                          produktb.created DESC LIMIT $posisi,$batas "
                        ;
                        $rproduk = mysqli_query($mysqli, $qproduk);                
                        while($dproduk = mysqli_fetch_assoc($rproduk)){
                        ?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="gambar/<?php echo $dproduk['foto'] ?>" style="position: relative; height: 183px" alt="" />
                                        <h2><strike>Rp.<?php echo number_format($dproduk['hargaasal'],2)  ?><br></strike>Rp.<?php echo number_format($dproduk['hargadiskon'],2) ?></h2>
                                        <p><?php $judul = ($dproduk['namaproduk']);
                                            echo cutText($judul,17,1).'..';
                                        ?></p>
                                        <a href="mainapp.php?unit=detailproduk_unit&produkid=<?php echo $dproduk['produkid'] ?>" class="btn btn-default add-to-cart"><i  class="fa fa-shopping-cart"></i>Preview</a>  
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
                            $query2     = mysqli_query($mysqli, "select * from produktb where merekid = '$produkid'");
                            $jmldata    = mysqli_num_rows($query2);
                            $jmlhalaman = ceil($jmldata/$batas);
                            
                            for($i=1;$i<=$jmlhalaman;$i++)
                            if ($i != $halaman){
                             echo " <li><a href=\"mainapp.php?unit=brandpencarian_unit&merekid=$produkid&halaman=$i\">$i</a></li>  ";
                            }
                            else{
                             echo " <li><a>$i</a></li>  "; 
                            }
                            ?>
                    </ul>
        </div>
    </div></section>