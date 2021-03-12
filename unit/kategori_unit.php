
<div class="col-sm-3">

        <div class="left-sidebar">
                <h2>Semua Judul</h2>
                <div class="panel-group category-products" id="accordian">
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?php
                                    $qblog =" SELECT * FROM t_informasi   ORDER BY judul ASC";
                                    $rblog = mysqli_query($mysqli, $qblog);
                                    while($dblog = mysqli_fetch_assoc($rblog)){
                                    ?>
                                    <li class="panel-title"><a href="mainapp.php?unit=detailblog_unit&kd_info=<?php echo $dblog['kd_info'] ?>"><?php echo $dblog['judul'] ?></a></li>
                <br>
				<?php
                }
                ?>    
                                       
                                </div>
                        </div>
                </div>



        </div>
</div>

	