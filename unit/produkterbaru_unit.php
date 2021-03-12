<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Produk Terbaru</h2>
    <?php
    $batas   = 16;
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
    $mysqli= mysqli_connect("localhost","root","","bahjahmartdb");
    $qproduk =" SELECT * FROM produktb ORDER BY created DESC LIMIT $posisi,$batas";
    $rproduk = mysqli_query($mysqli, $qproduk);
    while($dproduk = mysqli_fetch_assoc($rproduk)){
    ?>
    <div class="col-sm-3">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="gambar/<?php echo $dproduk['foto'] ?>" style="position: relative; height: 183px" alt="">
                    <h2><strike>Rp.<?php echo number_format($dproduk['hargaasal'],2)  ?><br></strike>Rp.<?php echo number_format($dproduk['hargadiskon'],2) ?></h2>
                    <p><?php $judul = ($dproduk['namaproduk']);
                                            echo cutText($judul,17,1).'..';
                                        ?></p>
                    <a href="mainapp.php?unit=detailproduk_unit&produkid=<?php echo $dproduk['produkid'] ?>"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Preview</a>  
                </div> 
            </div> 
        </div>
    </div>
    <?php
    }
    ?>
       
						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="?unit=produk_unit">Lihat Semua Produk</a></li>
							</ul>
						</div>
</div>
