<?php 
require ('navigasi.php');
require ('functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>
<div class="order-lg-last flex-shrink-0">
                      <a class="btn btn-success-light" href="login.php">Masuk </a>
                      <a class="btn btn-light" href="register.php">Daftar </a>
  
                      <div class="nav-item dropdown">
                          <a class="nav-link py-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="" alt="" class="icon-sm bg-gray rounded-circle me-2">
                              <span></span>
                          </a>
                          <ul class="dropdown-menu">
                              <li> <a class="dropdown-item" href="profil_admin.php">Profil</a> </li>
                              <li>
                                  <hr class="dropdown-divider">
                              </li>
                              <li> <a class="dropdown-item" target="_blank" href="#">Email</a> </li>
                              <li>
                                  <hr class="dropdown-divider">
                              </li>
                              <li> <a class="dropdown-item" href="logout.php">Keluar</a> </li>
                          </ul>
                      </div>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
          <a href="profil.php" class="btn center-icon">
            <div class="box-md-5">
              <div class="icon-container">
              <i class="fa-solid fa-user size-fa"></i>
                <h3 style="color: #87CEFA;" class="mt-2">Profile</h3>
              </div>
            </div>
          </a>
      </div>
      <div class="col-md-5">
          <a href="profil.php" class="btn center-icon">
            <div class="box-md-5">
              <div class="icon-container">
              <i class="fa-regular fa-address-card size-fa"></i>
                <h3 style="color: #87CEFA;" class="mt-2">Users</h3>
              </div>
            </div>
          </a>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-5">
          <a href="profil.php" class="btn center-icon">
            <div class="box-md-5">
              <div class="icon-container">
              <i class="fa-solid fa-pager"></i>
                <h3 style="color: #87CEFA;" class="mt-2">Page</h3>
              </div>
            </div>
          </a>
      </div>
      <div class="col-md-5">
          <a href="profil.php" class="btn center-icon">
            <div class="box-md-5">
              <div class="icon-container">
              <i class="fa-sharp fa-solid fa-newspaper size-fa"></i>
                <h3 style="color: #87CEFA;" class="mt-2">Page Details</h3>
              </div>
            </div>
          </a>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/0cdc72137f.js" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->

</body>

</html>
