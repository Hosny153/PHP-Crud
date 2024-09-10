<?php
$Conn = new mysqli('localhost','root','','Active');
if($Conn){
    echo "";
}else{
    die(mysqli_error($Conn));
}
?>