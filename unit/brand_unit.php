<div class="col-sm-3">
<div class="left-sidebar">
    <div class="brands_products"><!--brands_products-->
        <h2>Brands</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                <?php
        
                $qmerek =" SELECT * FROM merektb   ORDER BY namamerek ASC";
                $rmerek = mysqli_query($mysqli, $qmerek);
                while($dmerek = mysqli_fetch_assoc($rmerek)){
                ?>
                <li><a href="mainapp.php?unit=brandpencarian_unit&merekid=<?php echo $dmerek['merekid'] ?>"> <span class="pull-right">(<?php echo $dmerek['counter'] ?>)</span><?php echo $dmerek['namamerek'] ?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
 </div>
<div><br><br></div>
</div>
