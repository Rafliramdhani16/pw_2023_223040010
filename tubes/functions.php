<?php 
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'tubes');
}

function query($query)
{
    $conn = Koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username 
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user[0]['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: page.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}
function registrasi($data){
  $conn = koneksi();
  
  $username= htmlspecialchars(strtolower($data['username']));
  $password1= mysqli_real_escape_string($conn, $data['password1']);
  $password2= mysqli_real_escape_string($conn, $data['password2']);

  // jika password atau apapun kosong
  if(empty($username) || empty($password1) || empty($password2)){
    echo "<script>
    alert('username atau passsword tidak boleh kosong!');
    document.location.href = 'registrasi.php';
    </script>";
    return false;
  }


// jika username sudah ada
if(query("SELECT * FROM user WHERE username = '$username'")){
  echo "<script>
  alert('username atau passsword sudah ada');
  document.location.href = 'registrasi.php';
  </script>";
  return false;
  }
  // konfirmasi password tidak sesuai
  if ( $password1 !== $password2){
    echo "<script>
    alert('Password tidak sesuai');
    document.location.href = 'registrasi.php';
    </script>";
  }
   // jika password < 5 digit strlen untuk menghitung panjang string
   if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }
  // jika username & password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
              VALUES
            (null, '$username', '$password_baru')
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// data detail

?>
