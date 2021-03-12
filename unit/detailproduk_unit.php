<section>
   
    <div class="container">
        <div class="row">	
         
             <div class="features_items"><!--features_items-->
    <h2 class="title text-center">Detail Tanaman</h2>
            <?php
            $kd_tam = $_GET['kd_tam'];
          
            $qproduk =
            " SELECT 
                * 
              FROM
                t_tanaman
              WHERE
               
               t_tanaman.kd_tam = '$kd_tam'
              ORDER BY
              t_tanaman.kd_tam DESC
            ";
            $rproduk = mysqli_query($mysqli, $qproduk);
            $dproduk = mysqli_fetch_assoc($rproduk);
            ?>
            <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                                <img src="gambar/<?php echo $dproduk['gambar_tam'] ?>" style="position: relative; height: 410px"alt="" />
                                
                        </div>                       
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                                <p>Kode Tanaman : <?php echo $dproduk['kode_tam'] ?></p>
                                 <span>
                                     <h2></h2>
                                     <span><?php echo $dproduk['nama_tam'] ?></span>
                                     <span></span>
                                
                                </span>
                               <!-- <br>
                                <a href="https://api.whatsapp.com/send?phone=+082358291415&text=Hi%20Gan,%20Saya%20minat%20dengan%20barangnya%20yang%20di%20website">
                                    <button type="submit" name="button" class="btn btn-success ">Via Whatsapp</button>
                                </a>

                                <a href="<?php echo $dproduk['linkshopee'] ?>"> 
                                    <button type="submit" name="button" class="btn btn-warning" >Via Shoppe</button>
                                </a>-->                      
                                <p><b>Harga Prosuden : Rp. <?php echo number_format($dproduk['harga_produsen'] , 0) ?></p>
                                <p><b>Harga Grosir : Rp. <?php echo number_format($dproduk['harga_grosir'] , 0) ?></p>
                                <p><b>Harga Eceran : Rp. <?php echo number_format($dproduk['harga_eceran'] , 0) ?></p>
                        </div><!--/product-information-->
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="product-information"><!--/product-information-->
                            <p><b>Keterangan: </b>
                                 <p><?php $kalimat = strtok(nl2br($dproduk['ket_tam'])," ");
                                for($i=1; $i<=100000; $i++) {
                                echo $kalimat;
                                echo " ";
                                $kalimat = strtok(" ");
                                }
                         ?></p>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                        <?php
                        $kd_tam =$_GET ['kd_tam'];
                        $qkategori =" SELECT * FROM t_komentar   WHERE kd_tam = '$kd_tam'";
                        $rkategori = mysqli_query($mysqli, $qkategori);
                        $dkategori= mysqli_num_rows($rkategori);
                        echo "<li class='active'><a href='#reviews' data-toggle='tab'>Komentar ($dkategori)</a></li>";
                        ?> 
                        </ul>
                    </div>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="reviews" >
                        <div class="col-sm-12">
                            <div class="media-body">
                            <?php
                            $qkomentar = "SELECT * FROM t_komentar WHERE kd_tam = '$kd_tam'";
                            $rkomentar = mysqli_query($mysqli, $qkomentar);
                            while($dkomentar = mysqli_fetch_assoc($rkomentar)){
                            ?>
                            <ul>
                                    <li><a href=""><i class="fa fa-user"></i><?php echo $dkomentar['nama'] ?></a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i><?php echo $dkomentar['jam'] ?></a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i><?php echo $dkomentar['tanggal'] ?></a></li>
                            </ul>
                            <p><?php echo $dkomentar['komentar'] ?></p>
                            <br>
                             <?php
                            }
                            ?>
                            </div>
                            <br>
                            <p><b>Masukan Komentar</b></p>
                            <?php
                                if(isset($_POST['submit'])){
                                    $yname = $_POST['nama'];
                                    $yemail = $_POST['email'];
                                    $ykomentar = $_POST['komentartext'];

                                    if(!empty($yname) and !empty($yemail) and !empty($ykomentar)){
                                        $qsenddata = mysqli_query($mysqli, "INSERT INTO t_komentar (kd_tam, komentar, tanggal, nama, email, jam) VALUE ('$kd_tam', '$ykomentar', '".date('Y-m-d')."', '$yname', '$yemail', '".date('H:i:s')."')");
                                        if($qsenddata){
                                            echo "Komentar anda sudah terkirim.";
                                            ?><script type="text/javascript">alert("Komentar anda sudah terkirim.");setInterval(function(){ document.location=""; }, 1000);</script><?php
                                        }
                                        else{
                                            echo "Gagal mengirimkan komentar !";
                                        }
                                    }
                                    else{
                                        echo "Form tidak boleh kosong !";
                                    }
                                }
                            ?>
                            <form action="#" method="post">
                                    <span>
                                            <input type="text" placeholder="Nama " name="nama" />
                                            <input type="email" placeholder="Email" name="email" />
                                    </span>
                                    <textarea name="komentartext" ></textarea>
                                    
                                    <button type="submit" name="submit" class="btn btn-default pull-right">
                                            Kirim
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--/category-tab-->
          
            </div>
        </div>
    </div>
    </div>
</section>