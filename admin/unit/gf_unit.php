<?php

if (!isset($_SESSION['username']))
{
   header("location:dashboard.php");
}
require_once '../lib/koneksi.php';
$act = $_GET['act'];
switch($act){
    
         case "update":
        $qupdate = "SELECT * FROM  usertb WHERE username = '".$_SESSION['username']."'";
        $rupdate = mysqli_query($mysqli, $qupdate);
        $dupdate = mysqli_fetch_assoc($rupdate);
            ?>
<?php
include("../admin/leftbar.php");
?>


      <div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
              <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Dashboard</a>
              </li>
              <li>user</li>
              <li>Edit user Baru</li>
            </ul><!-- /.breadcrumb -->
          </div>

          <div class="page-content">
            <div class="page-header"><h1>Edit user Baru</h1></div>
            <div class="row">
              <div class="col-xs-12">
                                                            
<form method="post" action="?unit=gf_unit&act=updateact" enctype="multipart/form-data" >
                  
                  <div class="form-group">
                      <label for="userid">User ID</label><br>
                    <input type="text" name="userid" id="userid" required  value="<?php echo $dupdate['userid'] ?>" readonly="readonly"/>
                    <br><br>
                    
                      <label for="username">Username</label><br>
                    <input type="text" name="username" id="nama" required="required" autofocus="autofocus" value="<?php echo $dupdate['username']; ?>"  />
                    <br><br>
                      
                                                            
                   <label for="password">Password</label><br>
                      <input  type="text" name="password" id="password" required="required" value="<?php echo $dupdate['password']; ?>" />
                    <br><br>
                    
                     <label for="namalengkap">Nama Lengkap</label><br>
                      <input  type="text" name="namalengkap" id="namalengkap" required="required" value="<?php echo $dupdate['namalengkap']; ?>" />
                    <br><br>
                    
                    <label for="email">Email</label><br>
                      <input  type="email" name="email" id="email" required="required" value="<?php echo $dupdate['email']; ?>" />
                    <br><br>
               
                                                            
                 
                    
                  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                  <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                   </div>                                                        
                 </form>
             

                   
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
                
      </div><!-- /.main-content -->
    <?php
            include("../admin/footer.php");
            ?>
  </body>
</html>
    
       <?php
        break;
    
            case "updateact":
         $userid = $_POST['userid'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        //echo $password . '<br />';
        $namalengkap = $_POST['namalengkap'];
        $email = $_POST['email'];
        
        $qupdate = "";
        if($password == "") {
            $qupdate = "
              UPDATE usertb SET
                username = '$username',
                namalengkap = '$namalengkap', 
                email = '$email'        
              WHERE
                userid = '$userid'
            ";            
        }
        else {
            $password = md5($password);
            $qupdate = "
              UPDATE usertb SET
                username = '$username',
                password = '$password',    
                namalengkap = '$namalengkap', 
                email = '$email'       
              WHERE
                userid = '$userid'
            ";                        
        }

        $rupdate = mysqli_query($mysqli,$qupdate);
        //echo $qupdate . '<br />';
        header("location:?unit=gf_unit&act=updateact");      
        break;  
    

}