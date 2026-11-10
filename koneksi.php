<?php
$koneksi=mysqli_connect('localhost','root','','kasiir_apk');

if(mysqli_connect_error()){

echo 'koneksi databases gagal:'.mysqli_connect_error();
}

?>