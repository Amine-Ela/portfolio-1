<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
$subheading=mysqli_real_escape_string($db,$_POST['psubtitle']);
$query="UPDATE aboutus_setup SET ";
$query.="subheading='$subheading' WHERE 1 ";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editabout=true&msg=updated");
}    

}    
    

