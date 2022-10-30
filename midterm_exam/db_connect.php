<?php
$condb = new mysqli('db403=mysqli','root','P@sswOrd','nothwind');
if($conn->connect_errno){
    die($conn->connect_error);
}
?>