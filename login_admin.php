<!DOCTYPE html>
<html>
    <h1>Login Administrator</h1>
        <form action="proses_admin.php"method="POST">
            <fieldset>
                <label for="nama">nama:</label>
                <input type="text" name="nama">
            </fieldset>
            <fieldset>
                <label for="username">username:</label>
                <input type="text" name="username">
            </fieldset>
            <fieldset>
                 <label for="password">password:</label>
                <input type="text" name="password">
             </fieldset>
             <button type="submit">Login</button>
             </fieldset
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
    