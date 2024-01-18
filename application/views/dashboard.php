<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Dashboard</title>
     <style>
        body {
            
            background-color: #DEFCFC; 
            /*color: #fff; 
            font-family: Arial, sans-serif; 
            text-align: center;
            padding: 50px;  */
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pengelolaan Gudang WAP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/wap/index.php/gudang">gudang</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        // Tampilkan notifikasi SweetAlert
        Swal.fire({
          title: 'Selamat Datang!',
          text: '<?php echo $this->session->userdata("nama_lengkap") ?>',
          //text: 'Terima kasih sudah mengunjungi situs kami.',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      });
    </script>

  
    <!-- <div class="container" style="margin-top: 50px">
      <div class="row">
        
          <div class="col-md-3">
            <ul class="list-group">
              <li class="list-group-item active">MAIN MENU</li>
              <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Dashboard</a>
              <a href="<?php echo base_url() ?>index.php/gudang" class="list-group-item" style="color: #212529;">gudang</a>
              <li class="list-group-item">Profile</li>
              <a href="<?php echo base_url() ?>index.php/dashboard/logout" class="list-group-item" style="color: #212529;">Logout</a>
            </ul>
          </div>

          <div class="col-md-9">
            <div class="card">
              <div class="card-body">
                <label>DASBOARD</label>
                <hr>

                Selamat Datang <?php echo $this->session->userdata("nama_lengkap") ?>

              </div>
            </div>
          </div>

      </div>
    </div> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>