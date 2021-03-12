<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">rekomendasi produk</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<?php
				                        $qproduk = "SELECT * FROM produktb WHERE rekomendasi = 'Y' LIMIT 0, 4";
				                        $rproduk = mysqli_query($mysqli, $qproduk);
				                        while($dproduk = mysqli_fetch_assoc($rproduk)){
				                        	?>
											<div class="col-sm-3">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="gambar/<?php echo $dproduk['foto'] ?>" style="position: relative; height: 183px"alt="" />
															<h2><strike>Rp.<?php echo number_format($dproduk['hargaasal'],2)  ?><br></strike>Rp.<?php echo number_format($dproduk['hargadiskon'],2) ?></h2>
															<p>
																<?php
																$kalimat = strtok(nl2br($dproduk['namaproduk'])," ");
								                                for($i=1; $i<=2; $i++) {
									                                echo $kalimat;
									                                echo " ";
									                                $kalimat = strtok(" ");
								                                }
								                                ?>
								                            </p>
															<a href="mainapp.php?unit=detailproduk_unit&produkid=<?php echo $dproduk['produkid'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Preview</a>
														</div>
														
													</div>
												</div>
											</div>
				                        	<?php
				                        }
				                    ?>
								</div>
								<div class="item">	
									<?php
				                        $qproduk = "SELECT * FROM produktb WHERE rekomendasi = 'Y' LIMIT 4,4";
				                        $rproduk = mysqli_query($mysqli, $qproduk);
				                        while($dproduk = mysqli_fetch_assoc($rproduk)){
				                        	?>
											<div class="col-sm-3">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="gambar/<?php echo $dproduk['foto'] ?>" style="position: relative; height: 183px"alt="" />
															<h2><strike>Rp.<?php echo number_format($dproduk['hargaasal'],2)  ?><br></strike>Rp.<?php echo number_format($dproduk['hargadiskon'],2) ?></h2>
															<p>
																<?php
																$kalimat = strtok(nl2br($dproduk['namaproduk'])," ");
								                                for($i=1; $i<=2; $i++) {
									                                echo $kalimat;
									                                echo " ";
									                                $kalimat = strtok(" ");
								                                }
								                                ?>
								                            </p>
															<a href="mainapp.php?unit=detailproduk_unit&produkid=<?php echo $dproduk['produkid'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Preview</a>
														</div>
														
													</div>
												</div>
											</div>
				                        	<?php
				                        }
				                    ?>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->