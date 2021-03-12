<section>
    <div class="container">
	<div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Iklan Produk</h2>
                        <?php
                        
                        $qvideoiklan =" SELECT * FROM videoiklantb ORDER BY videoiklanid ASC  LIMIT 4 ";
                        $rvideoiklan = mysqli_query($mysqli, $qvideoiklan);
                        while($dvideoiklan = mysqli_fetch_assoc($rvideoiklan)){
                        ?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                         <a href="<?php echo $dvideoiklan['link'] ?>">
                                    	<div class="iframe-img">
                                            <img src="gambar/<?php echo $dvideoiklan['gambar'] ?>" alt="" />
					</div>
					<div class="overlay-icon">
                                            <i class="fa fa-play-circle-o"></i>
					</div>
                                         <p><?php echo $dvideoiklan['nama'] ?></p>
                                       
                                    </a>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
