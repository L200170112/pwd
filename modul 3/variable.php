<html>
<head>
    <title>variable</title>
</head>
<body>
    <H1>Buku Tamu</h1>
    <form method='post'action='variable.php'>
    <p>Nama :<input type='text'name='nama' size='20'></p>
    <p>Email :<input type='text'name='email'size='30'></p>
    <p>Komentar :<textarea name='komentar'cols='30'rows='3'></textarea></p>
    <p><input type='submit' value='kirim'name='submit'></p>
    </form>
    <?php error_reporting(E_ALL^E_NOTICE);
    $nama = $_post['nama'];
    $email = $_post['email'];
    $komentar = $_post['komentar'];
    $submit = $_post['submit'];
    if($submit){
        echo"</br>nama : $nama";
        echo"</br>email : $email";
        echo"</br>Komentar : $komentar";
    }
    ?>
</body>
</html>