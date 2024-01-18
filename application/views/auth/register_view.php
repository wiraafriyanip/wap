<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bg.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Register Akun WAP</title>
  </head>
  <body>

    <div class="container" style="margin-top: 50px">
      <div class="row">
        <div class="col-md-5 offset-md-4">
          <div class="card">
            <div class="card-body">
              <label>REGISTER WAP</label>
              <hr>
                
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                  <label>email</label>
                  <input type="text" class="form-control" id="email" placeholder="Masukkan email">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                </div>
                
                <button class="btn btn-auth btn-block btn-success">REGISTER</button>
              <div class="text-center" style="margin-top: 15px">
            Sudah punya akun? <a href="<?php echo base_url() ?>index.php/login">Silahkan Login</a>
          </div>
            </div>
          </div>

          

        </div>
      </div>
    </div>
    <script src="<?= base_url('assets/bootstrap/js/jquery.js') ?>"></script>
		<script src="<?= base_url('assets/bootstrap/js/bootstrap.js') ?>" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

    <script>
      $(document).ready(function() {

        $(".btn-auth").click( function() {
        
          var nama_lengkap = $("#nama_lengkap").val();
          var username = $("#username").val();
          var email = $("#email").val();
          var password = $("#password").val();

          if (nama_lengkap.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Nama Lengkap Wajib Diisi !'
            });

          } else if(username.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Username Wajib Diisi !'
            });
          } else if(email.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'email Wajib Diisi !'
            });

          } else if(password.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Password Wajib Diisi !'
            });

          } else {

            //ajax
            $.ajax({

              url: "<?php echo base_url() ?>index.php/auth/simpan",
              type: "POST",
              data: {
                  "nama_lengkap": nama_lengkap,
                  "username": username,
                  "email": email,
                  "password": password
              },

              success:function(response){

                if (response == "success") {

                  Swal.fire({
                    type: 'success',
                    title: 'Register Berhasil!',
                    text: 'silahkan login!'
                  }) 
                  .then (function() {
                    window.location.href = "<?php echo base_url() ?>index.php/login";
                  });

                  $("#nama_lengkap").val('');
                  $("#username").val('');
                  $("#email").val('');
                  $("#password").val('');

                } else {

                  Swal.fire({
                    type: 'error',
                    title: 'Register Gagal!',
                    text: 'silahkan coba lagi!'
                  });

                }

                console.log(response);

              },

              error:function(response){
                  Swal.fire({
                    type: 'error',
                    title: 'Opps!',
                    text: 'server error!'
                  });
              }

            })

          }

        }); 

      });
    </script>

  </body>
</html>