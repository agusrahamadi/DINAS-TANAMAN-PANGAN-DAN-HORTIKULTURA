<section>
    <div class="container">
	<div class="row">

            <div class="col-sm-12 padding-right"> 
<?php
$keyword = $_GET['keyword'];
?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Cari '<?php echo $keyword ?>'</h2>
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
$keyword = $_GET['keyword'];
$qproduk =
" SELECT 
    * 
  FROM
    t_tanaman  
  WHERE
   kd_tam
   AND
   (nama_tam LIKE '%$keyword%')
  ORDER BY
  kd_tam DESC LIMIT $posisi,$batas
";
$rproduk = mysqli_query($mysqli, $qproduk);
while($dproduk = mysqli_fetch_assoc($rproduk)){
?>
    <div class="col-sm-2">
        <div class="product-image-wrapper">
            <div class="single-products">
                 <div class="productinfo text-center">
                                        <img src="gambar/<?php echo $dproduk['gambar_tam'] ?>" style="position: relative; height: 183px" alt="" />
                                        <h2><?php $judul = ($dproduk['nama_tam']);echo cutText($judul,17,1).'..'; ?></h2>
                                       
                                        <a href="mainapp.php?unit=detailproduk_unit&kd_tam=<?php echo $dproduk['kd_tam'] ?>" class="btn btn-default add-to-cart"><i  class="fa fa-eye"></i>Detail</a>  
                                    </div> 
            </div> 
        </div>
    </div>
    <?php
    }
    ?>
    
    <div  class="pagination-area">
    <ul class="pagination">
                                                    <?php
                            $query2     = mysqli_query($mysqli, "select * FROM
    t_tanaman 
  WHERE
   kd_tam
   AND
   (nama_tam LIKE '%$keyword%' )
  ORDER BY
  created DESC");
                            $jmldata    = mysqli_num_rows($query2);
                            $jmlhalaman = ceil($jmldata/$batas);
                            
                            for($i=1;$i<=$jmlhalaman;$i++)
                            if ($i != $halaman){
                             echo " <li><a href=\"mainapp.php?unit=produkpencarian_unit&keyword=$keyword&halaman=$i\">$i</a></li>  ";
                            }
                            else{
                             echo " <li><a>$i</a></li>  "; 
                            }
                            ?>
                    </ul>
    </div>
</div>
               </div>
        </div>
    </div>
</section>
