<!DOCTYPE html>
<html>
    <h1>Login Petugas</h1>
        <form action="proses_petugas.php"method="post">
            <fieldset>
                <label for="nama">nama:</label>
                <input type="text" name="nama">
            </fieldset>
            <fieldset>
                <label for="alamat">alamat</label>
                <input type="text" name="alamat">
            </fieldset>
            <fieldset>
                <label for="nomor_telepon">nomor telepon</label>
                <input type="text" name="nomor_telepon">
            </fieldset>
            <fieldset>
             <button type="submit">Login</button></fieldset>
              <?php
        $error='';
        if(isset($_GET['error'])){
         $error=$_GET['error'];
        }
        $pesan='';
        if($error=='login'){
            $pesan='username dan password anda salah';
        }elseif($error=='insalid'){
            $pesan='username dan password harus diisi';
        }
        if($pesan!=''){
            echo $pesan;
        }
           ?>
        </form>
    </body>
</html>

