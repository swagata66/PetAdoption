<?php
$server = 'localhost:3307';
$username = 'root';
$password = '';
$dbName = 'client-info';

$conn = mysqli_connect($server,$username,$password,$dbName);
if($conn){
echo "connection suucessful";
} else{
    echo "error";
}
?>