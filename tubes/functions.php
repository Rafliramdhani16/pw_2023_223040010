





























































































































































<?php 
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'tubes');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

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
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;
      $_SESSION['id']= $user['id'];
      // pembagian role
      if(
        $user['id_role']== 1){
          $_SESSION['role']= 'admin';
        }else{
          $_SESSION['role']= 'user';
        }
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
  $email = htmlspecialchars(strtolower($data['email']));
  $password1= mysqli_real_escape_string($conn, $data['password1']);
  $password2= mysqli_real_escape_string($conn, $data['password2']);
  $gambar = ($data['gambar']) ;
  $role = ($data['id_role']);


  // jika password atau apapun kosong
  if(empty($username) || empty($password1) || empty($password2) || empty($email)){
    echo "<script>
    alert('Tolong isi semuanya');
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
            (NULL, '$gambar', '$username', '$email', '$password_baru', '$role'  )
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function tambah($data)
{
  $conn = koneksi();

  
  $judul = htmlspecialchars($data['judul']);
  $kategori = htmlspecialchars($data['kategori']);
  $waktu = htmlspecialchars($data['waktu']);
  $isi = htmlspecialchars($data['isi']);
  
// upload gambar
$gambar = upload();
if(!$gambar){
  return false;
}
  $query = "INSERT INTO
              detail
            VALUES
            (NULL, '$gambar', '$judul',  '$waktu', '$isi', '$kategori');
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function upload(){
  $namaFile = $_FILES['gambar']['name'];
  $ukuranfile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar'] ['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];
  // cek apakah gambar tidak di upload
  if($error === 4){
    echo "<script>
    alert('pilih gambar terlebih dahulu!');
    </script>";
    return false;
  }
  // memastikan yang di upload hanya gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  // kiri true kanan false
  if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
    echo "<script>
    alert('yang anda upload bukan gambar');
    </script>";
    return false;
  }
  // cek jika ukuran terlalu besar
    if($ukuranfile > 2000000 ){
      echo "<script>
      alert('ukuran gambar terlalu besar');
      </script>";
      return false;
    }
    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .=$ekstensiGambar;

// .= adalah ditempel dan dirangkai dengan .

    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);
    return $namaFile;

}


function delete($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM detail WHERE id= $id") or die (mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword) {
  $conn = koneksi();
  $query = "SELECT * FROM detail NATURAL JOIN kategori
            WHERE judul LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%' OR
            waktu LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
  }
  return $rows;
}
function edit($data)
{
  $conn = koneksi();
  
  $id = $data['id'];
  
  // cek apakah user pilih gambar baru atau tidak

  $judul = htmlspecialchars($data['judul']);
  $kategori = ($data['kategori']);
  $waktu = htmlspecialchars($data['waktu']);
  $isi = htmlspecialchars($data['isi']);
  $gambarLama = ($data['gambarLama']);
  
  
  if($_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama;
  }else{
    $gambar = upload();
  }

  $query = "UPDATE detail SET
            gambar = '$gambar',
            judul = '$judul',
            waktu = '$waktu',
            isi = '$isi',
            id_kategori = '$kategori'
            WHERE id =$id";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function ubah($data)
{
  $conn = koneksi();
  
  $id = $data['id'];
  
  // cek apakah user pilih gambar baru atau tidak

  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $gambarLama = ($data['gambarLama']);
  if (
    $_FILES['gambar']['error'] === 4
) {
    $gambar = $gambarLama;
} else {
    $gambar = upload();
}

  $query = "UPDATE user SET
            gambar = '$gambar',
            username = '$username',
            email = '$email',
            WHERE id =$id";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function edit_user($data)
{
  $conn = koneksi();
  
  $id = $data['id'];
  
  // cek apakah user pilih gambar baru atau tidak

  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);
  
  
  $gambarLama = ($data['gambarLama']);
  if($_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama;
  }else{
    $gambar = upload();
  }

  $query = "UPDATE user SET
            gambar = '$gambar',
            username = '$username',
            email = '$email',
            password = '$password'
            WHERE id =$id";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function delete_user($id){
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM user WHERE id= $id") or die (mysqli_error($conn));
  return mysqli_affected_rows($conn);

}


?>
