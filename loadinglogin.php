<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: daftar.html");
    die();
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from user where username='$username' and password='$password'";
$hasil=mysqli_query($db, "$query");

$kode = mysqli_fetch_array($hasil);
$cek=mysqli_num_rows($hasil);

if ($cek==1){
$_SESSION['username']=$kode['username'];
$_SESSION['password']=$kode['password'];

    if ($kode) {
        header("Location: user.php");
    }    
} else { 
	?>
		<script>
		alert('Username atau Password Salah !!');
		document.location.href = 'index.php';
		</script>
	<?php 
}

?>

