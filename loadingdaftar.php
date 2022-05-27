<?php
include 'koneksi.php';
$username=$_POST['username'];
$nohp=$_POST['nohp'];
$email=$_POST['email'];
$password=$_POST['password'];

$query=("INSERT INTO user (username,nohp,email,password) VALUES ('$username','$nohp','$email','$password')");
$hasil=mysqli_query($db, $query);

?>
<script>
		alert('Pendaftaran Berhasil ^^');
		document.location.href = 'index.php';
		</script>