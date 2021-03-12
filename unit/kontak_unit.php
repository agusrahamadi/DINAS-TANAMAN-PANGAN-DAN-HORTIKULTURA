        <!--/slider-->
        <footer id="footer">
            <!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
						 <?php
                                        $qblog =" SELECT * FROM t_kontak";
                                        $rblog = mysqli_query($mysqli, $qblog);
                                        $dblog = mysqli_fetch_assoc($rblog);
                                        ?>
                            <div class="companyinfo">
                                <h2><span> Dinas TANAMAN PANGAN DAN HORTIKULTURA</span></h2>
                                <h5>No Telpon : <?php echo $dblog['no_telp'] ?></h5>
                                <h5>No Hp     : <?php echo $dblog['no_hp'] ?></h5>
                                <h5>Email     : <?php echo $dblog['email'] ?></h5>
                            </div>
                        </div>
                     
                        <div class="col-sm-3">
						 <div class="companyinfo">
						<h2><span> ALAMAT</span></h2>
                            <h5 ><?php echo $dblog['alamat'] ?></h5>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="footer-widget">
                    <div class="container">
                        <div class="row">
                           
                            <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2>Sosial Media</h2>
            
                                </div>
                            </div>
                               <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2><li><a href="<?php echo $dblog['instagram'] ?>"><i class="fa fa-instagram"></i>Instagram</a></li></h2>
                                    
                                </div>
                            </div> 
							<div class="col-sm-2">
                                <div class="single-widget">
                                    <h2><li><a href="<?php echo $dblog['facebook'] ?>"><i class="fa fa-facebook"></i>Facebook</a></li></h2>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </footer>