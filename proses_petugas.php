<?php
include("koneksi.php");
if(isset($_POST['nama'])&&isset($_POST['alamat'])){
   $nama=$_POST['nama'];
   $alamat=$_POST['alamat'];

   $sql="select*from user where nama='nama'AND alamat='alamat'";
   $query=mysqli_query(mysql:$koneksi,query:$sql);

   $jumlah=mysqli_num_rows(result:$query);
   if($jumlah>0){
      header(header:'location:login_petugas.php?error=login');
   }
}else{
   echo'wajib diisi';
}
?>