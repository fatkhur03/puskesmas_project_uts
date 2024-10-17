<!-- cek pesan notifikasi -->
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Spike Free</title>
  <link rel="shortcut icon" type="image/png" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/spike-bootstrap-free/src/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="https://demos.wrappixel.com/free-admin-templates/bootstrap/spike-bootstrap-free/src/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper p-0" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="card auth-card mb-0 mx-3">
          <div class="card-body">
            <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
              <img src="" width="180" alt="">
              <h3><b>Form Sign In Admin</b></h3>
            </a>
            <form method="post" action="cek_login.php">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username : admin">
              </div>
              <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukan Password : 123">
              </div>
              <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                  <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label text-dark" for="flexCheckChecked">
                    Remeber this Device
                  </label>
                </div>
                <a class="text-primary fw-bold" href="#">Forgot Password ?</a>
              </div>
              <button type="submit" class="btn btn-primary w-100 fs-4 mb-4">Sign In</button>
              <!-- <div class="d-flex align-items-center justify-content-center">
                <p class="fs-4 mb-0 fw-bold">New to Spike?</p>
                <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
              </div> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/spike-bootstrap-free/src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/spike-bootstrap-free/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>