<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toko Berkah Elektronik - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  <style>
    body {
      background-color: #fff;
      font-family: Arial, sans-serif;
    }

    /* Navbar */
    .navbar-brand {
      font-weight: 800;
      color: #2948ff !important;
      text-transform: uppercase;
      line-height: 1.1;
    }

    /* Container utama */
    .login-section {
      display: flex;
      justify-content: center;
      align-items: flex-start; /* buat posisi lebih ke atas */
      min-height: 75vh; /* lebih proporsional */
      gap: 80px;
      flex-wrap: wrap;
      padding-top: 60px; /* jarak dari atas */
    }

    /* Teks kiri */
    .login-text {
      flex: 1;
      text-align: left;
      font-size: 2rem;
      font-weight: 700;
      max-width: 400px;
      color: #000;
      transform: translateY(-20px); /* dinaikkan sedikit */
    }

    /* Form kanan */
    .login-form {
      flex: 1;
      max-width: 420px;
      transform: translateY(-20px); /* dinaikkan juga */
    }

    .form-label {
      font-size: 14px;
      color: #333;
    }

    .form-text {
      color: #6c757d;
      font-size: 12px;
      margin-top: 2px;
    }

    input::placeholder {
      color: #b0b0b0;
      font-size: 14px;
    }

    .btn-login {
      background-color: #2948ff;
      color: #fff;
      font-weight: 600;
      border-radius: 50px;
      height: 48px;
    }

    .btn-login:hover {
      background-color: #1934d4;
    }

    .btn-register {
      border-radius: 50px;
      border: 1.5px solid #000;
      color: #000;
      font-weight: 600;
      height: 48px;
      background: #fff;
    }

    .btn-register:hover {
      background-color: #f8f8f8;
    }

    /* Responsif */
    @media (max-width: 992px) {
      .login-section {
        flex-direction: column;
        text-align: center;
        gap: 40px;
        padding-top: 40px;
      }

      .login-text {
        text-align: center;
        font-size: 1.8rem;
        transform: none;
      }

      .login-form {
        width: 100%;
        max-width: 360px;
        transform: none;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <nav class="navbar navbar-light bg-white border-bottom shadow-sm px-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        TOKO BERKAH<br>ELEKTRONIK
      </a>
      <div class="d-flex align-items-center">
        <span class="me-3 fw-bold">Kategori</span>
        <input type="text" class="form-control form-control-sm me-3" style="width: 250px;" placeholder="Cari Elektronik">
        <i class="bi bi-cart3 me-3"></i>
        <i class="bi bi-person"></i>
      </div>
    </div>
  </nav>

  <!-- Login Section -->
  <section class="login-section container mt-5 mb-5">
    <div class="login-text">
      <p>Silahkan masuk<br>ke akun anda</p>
    </div>

    <div class="login-form">
      <form method="POST" action="#">
        <div class="mb-3">
          <label class="form-label">Alamat email atau nomor handphone yang terverifikasi <span class="text-danger">*</span></label>
          <input type="text" class="form-control" placeholder="contoh@email.com atau 08123456789" required>
          <div class="form-text">Masukkan email atau no handphone</div>
        </div>

        <div class="mb-3">
          <label class="form-label">Kata Sandi <span class="text-danger">*</span></label>
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Kata sandi" required>
            <span class="input-group-text bg-white border-start-0"><i class="bi bi-eye"></i></span>
          </div>
          <div class="form-text"><a href="#" class="text-decoration-none text-secondary">Lupa kata sandi?</a></div>
        </div>

        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-login">Masuk</button>
        </div>

        <div class="d-grid">
          <button type="button" class="btn btn-register">Daftar sekarang?</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</body>
</html>
