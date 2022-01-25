<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login Admin</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <?php
   
    include "koneksi.php";
    ?>
      <div class="container">
        <main class="form-signin">
        <form action="proses_login.php" method="POST">
          <br>
          <br>
          <br>
          <br><br>
          <img class="mb-4" src="foto/dynamiteee ini-01.png" alt="" width="300" >
            
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
            <input type="username" class="form-control" id="floatingInput" 
            name="username" placeholder="Insert Username" required>
            <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" 
            name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            </div>
            <a href="tambah_petugas.php">Ingin daftar diri sebagai admin/petugas? Klik Disini</a><br><br>
            <a href="tampil_petugas.php">Ingin melihat daftar admin/petugas? Klik Disini</a><br><br>
            <button class="w-100 btn btn-lg btn-danger" type="submit">Sign in</button>
            <p class="mt-5 text-muted">DYNAMITE SHOP</p>
            <p class="mb-3 text-muted">&copy; 2021</p>
        </form>
        </main>
        </div>
  </body>
</html>