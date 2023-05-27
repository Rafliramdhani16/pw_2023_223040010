<?php 
session_start();
session_destroy();
// header untuk memindahkan halaman 
header("location: login.php");
?>