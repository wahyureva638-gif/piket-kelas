<?php
include("koneksi.php");
if(isset($_POST['username'])&&isset($_POST['password'])){
   $username=$_POST['username'];
   $password=$_POST['password'];

   $sql="select*from user where username='$username'AND password='$password'";
   $query=mysqli_query(mysql:$koneksi,query:$sql);

   $jumlah=mysqli_num_rows(result:$query);
   if($jumlah>0){
      header(header:'location:dashboardadmin.php');
   }else{
      header(header:'location:login_admin.php?error=login');
   }
}else{
   echo'username dan password harus diisi';
}
?>