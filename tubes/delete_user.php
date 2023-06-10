<?php 
require 'functions.php';
// jika tidak ada id url
if(!isset($_GET['id'])){
  header("Location: dashboard_user.php");
  exit;
}
// mengambil id dari functions dari url
$id = $_GET['id'];

    if (delete_user($id) > 0) {
      echo "<script>
              alert('data berhasil dihapus');
              document.location.href = 'dashboard_user.php';
           </script>";
    } else {
      echo "data gagal ditambahkan!";
    }
  


?>