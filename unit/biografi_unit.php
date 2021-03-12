<section>
   
    <div class="container">
        <div class="row">	
         
             <div class="features_items"><!--features_items-->
    <h2 class="title text-center">Biografi Dinas</h2>
            <?php
            $qproduk =
            " SELECT 
                * 
              FROM
			  t_biografi
			  ";
            $rproduk = mysqli_query($mysqli, $qproduk);
            $dproduk = mysqli_fetch_assoc($rproduk);
            ?>
            <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                                <img src="gambar/<?php echo $dproduk['gambar'] ?>" style="position: relative; height: 410px"alt="" />
                                
                        </div>                       
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                                             
                                <p><b><?php echo $dproduk['isi']  ?></p>
                                
                        </div><!--/product-information-->
                    </div>
                    
                  
                </div><!--/product-details-->

            </div>
        </div>
    </div>
    </div>
</section>