<?php

session_start();

include '../konfig.php';

?>

<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    
</head>

<body>

    <form class="box" action="" method="POST">
        <div class="login-box">
            <h1>Admin Panel</h1>
            <div class="textbox">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Username" required name="user" value="">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required name="pass" value="">
            </div>

            <input type="submit" name="masuk" class="btn" value="Masuk">

        </div>
    </form>
    
</body>

</html>

<?php

if(isset($_POST['masuk'])) 
{
    $ambil = mysqli_query($koneksi, "SELECT * FROM adm WHERE user = '$_POST[user]' AND pass = '$_POST[pass]' ");
    $yangcocok = $ambil->num_rows;
    if($yangcocok==1)
    {
        $_SESSION['admin']=$ambil->fetch_assoc();
        echo "<div class='alert alert-info'>Login sukses</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
    else
    {
        echo "<div class='alert alert-danger'>Login gagal</div>";
        echo "<meta http-equiv='refresh' content='1;url=masuk.php'>";
    }
}


?>
