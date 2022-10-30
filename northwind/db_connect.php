<?php
$conn = new mysqli('db403-myspl', 'root', 'P@sswOrd', 'northwind');
if ($conn->connect_errno) {
    die($conn->connect_error);
}
?>