<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DLI Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/libs/font-awesome/css/all.min.css">
</head>

<body>
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .header-2-2 .modal-item.modal {
        top: 2rem;
      }

      .header-2-2 .navbar,
      .header-2-2 .hero {
        padding: 3rem 2rem;
      }

      .header-2-2 .navbar-light .navbar-nav .nav-link {
        font: 300 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-nav .nav-link:hover {
        font: 600 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-nav .active>.nav-link,
      .header-2-2 .navbar-light .navbar-nav .nav-link.active,
      .header-2-2 .navbar-light .navbar-nav .nav-link.show,
      .header-2-2 .navbar-light .navbar-nav .show>.nav-link {
        font-weight: 600;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .header-2-2 .btn:focus,
      .header-2-2 .btn:active {
        outline: none !important;
      }

      .header-2-2 .btn-fill {
        font: 600 18px / normal Poppins, sans-serif;
        background-color: #27c499;
        border-radius: 12px;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-2 .btn-fill:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-2 .btn-no-fill {
        font: 300 18px/1.75rem Poppins, sans-serif;
        color: #1d1e3c;
        padding: 12px 32px;
        transition: 0.3s;
        font-size: 1.3rem;
        font-weight: bolder;
      }

      .header-2-2 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
        transition: 0.3s;
      }

      .header-2-2 .responsive li a {
        padding: 1rem;
        transition: 0.3s;
      }

      .header-2-2 .text-caption {
        font: 600 0.875rem/1.625 Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #27c499;
      }

      .header-2-2 .left-column {
        margin-bottom: 2.75rem;
        width: 100%;
      }

      .header-2-2 .right-column {
        width: 100%;
      }

      .header-2-2 .title-text-big {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #272e35;
      }

      .header-2-2 .btn-try {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: #27c499;
        transition: 0.3s;
      }

      .header-2-2 .btn-try:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-2 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        border: 1px solid #555b61;
        color: #555b61;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: transparent;
        transition: 0.3s;
      }

      .header-2-2 .btn-outline:hover {
        border: 1px solid #27c499;
        color: #27c499;
        transition: 0.3s;
      }

      .header-2-2 .btn-outline:hover div path {
        fill: #27c499;
        transition: 0.3s;
      }

      @media (min-width: 576px) {
        .header-2-2 .modal-item .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }

        .header-2-2 .navbar {
          padding: 3rem 2rem;
        }

        .header-2-2 .hero {
          padding: 3rem 2rem 5rem;

        }

        .header-2-2 .title-text-big {
          font-size: 3rem;
          line-height: 1.2;
        }
      }

      @media (min-width: 768px) {
        .header-2-2 .navbar {
          padding: 3rem 4rem;
        }

        .header-2-2 .hero {
          padding: 3rem 4rem 5rem;

        }

        .header-2-2 .left-column {
          margin-bottom: 3rem;
        }
      }

      @media (min-width: 992px) {
        .header-2-2 .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 0.7rem;
          padding-left: 0.7rem;
        }

        .header-2-2 .navbar {
          padding: 2rem 0 3rem;
        }

        .header-2-2 .hero {
          padding: 3rem 6rem 5rem;

        }

        .header-2-2 .left-column {
          width: 50%;
          margin-bottom: 0;
        }

        .header-2-2 .right-column {
          width: 50%;
        }

        .header-2-2 .title-text-big {
          font-size: 3.75rem;
          line-height: 1.2;
        }
      }
    </style>
    <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#">
          <img style="margin-right: 0.75rem" src="dli-store.png" alt="" height="35px" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>=#keunggulan">Keunggulan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>#startup">StartUp DLI</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>#produk">Produk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>#mitra">Mitra</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>#tentang">Tentang</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                <?php if (!$this->session->userdata('is_login')) : ?>
                  <a href="<?= base_url('login') ?>" class="btn btn-default btn-no-fill">Masuk</a>
                  <a href="<?= base_url('register') ?>" class="btn btn-fill text-white">Buat Akun</a>
                <?php else : ?>
                  <span>Hi, <?= $this->session->userdata("name") ?></span> |
                  <a href="<?= base_url('profile') ?>" class="btn btn-blue">Profil</a>
                  <a href="<?= base_url('logout') ?>" class="btn btn-danger">Keluar</a>
                <?php endif ?>
                <a href="<?= base_url('cart') ?>" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart(<?= getCart() ?>)</a>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url("") ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>#keunggulan">Keunggulan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>#startup">Start Up DLI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>#produk">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>#mitra">Mitra</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>#tentang">Tentang</a>
            </li>
          </ul>
          <div class="gap-3">
            <?php if (!$this->session->userdata('is_login')) : ?>
              <a href="<?= base_url('login') ?>" class="btn btn-default btn-no-fill">Masuk</a>
              <a href="<?= base_url('register') ?>" class="btn btn-fill text-white">Buat Akun</a>
            <?php else : ?>
              <span>Hi, <?= $this->session->userdata("name") ?></span> |
              <a href="<?= base_url('profile') ?>" class="btn btn-blue">Profil</a>
              <a href="<?= base_url('logout') ?>" class="btn btn-danger">Keluar</a>
            <?php endif ?>
            <a href="<?= base_url('cart') ?>" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart(<?= getCart() ?>)</a>
          </div>
        </div>
      </nav>

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <p class="text-caption">Produk Digital</p>
            <h1 class="title-text-big">
              Platform Terbaik<br class="d-lg-block d-none" />
              Penyedia Produk Digital
            </h1>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <button class="btn d-inline-flex mb-md-0 btn-try text-white">
                <!-- Lihat Produk -->
                <a href="<?= base_url() ?>home">
                  Lihat Produk
                </a>
              </button>
              <button class="btn btn-outline">
                <div class="d-flex align-items-center">
                  <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z" fill="#555B61" />
                  </svg>
                  Lihat video
                </div>
              </button>
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =============================================================================================================================================== -->

  <section class="choose">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");

      * {
        font-family: Poppins, sans-serif !important;
      }

      body .choose {
        background-color: #F9FCFC;
      }

      body .choose h1 {
        color: #232323;
        font-weight: 700 !important;
      }

      body .choose p {
        color: #879FB0;
      }

      @media screen and (min-width: 768px) {
        body .choose h1 {
          font-size: 40px !important;
        }
      }

      body .cl-blue {
        color: #27c499 !important;
      }
    </style>
    <div class="container pb-4 px-4">
      <div class="row text-center d-block pt-5 pb-md-4">
        <h1 class="my-3" id="keunggulan">
          Keunggulan DLIStore
        </h1>
        <p>
          Kami berkomitmen membantu kostumer menemukan produk yang diinginkan
        </p>
      </div>
      <div class="row py-5">
        <div class="col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/taxes.svg" alt="taxes" class="img-fluid">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/taxes-color.svg" alt="taxes" class="img-fluid" style="display: none;">
          <p class="font-weight-bold mt-4 mb-1 cl-blue">
            Harga Terjangkau
          </p>
          <p class="mb-0">
            Harga dari produk yang dijual sangat terjangkau bagi kostumer terutama kalangan muda.
          </p>
        </div>
        <div class="col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user.svg" alt="user" class="img-fluid">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user-color.svg" alt="user" class="img-fluid" style="display: none;">
          <p class="font-weight-bold mt-4 mb-1 cl-blue">
            Produk Terjamin
          </p>
          <p class="mb-0">
            Produk sudah terjamin karena sudah melalui tahap testing terlebih dahulu.
          </p>
        </div>
        <div class="col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/discount.svg" alt="discount" class="img-fluid">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/discount-color.svg" alt="user" class="img-fluid" style="display: none;">
          <p class="font-weight-bold mt-4 mb-1 cl-blue">
            Pembayaran Aman
          </p>
          <p class="mb-0">
            Pembayaran yang dilakukan dijamin aman dan terhindar dari tindak penipuan dari pihak ketiga.
          </p>
        </div>
        <div class="col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar.svg" alt="calendar" class="img-fluid">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar-color.svg" alt="user" class="img-fluid" style="display: none;">
          <p class="font-weight-bold mt-4 mb-1 cl-blue">
            Akses Mudah
          </p>
          <p class="mb-0">
            Tahapan dalam melakukan pemesanan mudah dilakukan bagi kostumer.
          </p>
        </div>
      </div>
    </div>

    <script>
      function coloringgoals(x) {
        x.classList.add('bg-white');
        x.classList.add('rounded-24');
        x.childNodes[1].style.display = "none";
        x.childNodes[3].style.display = "block";
      }

      function normalgoals(x) {
        x.classList.remove('bg-white');
        x.classList.remove('rounded-24');
        x.childNodes[1].style.display = "block";
        x.childNodes[3].style.display = "none";
      }
    </script>
  </section>

  <!-- =============================================================================================================================================== -->

  <section class="h1-00 w-100 bg-white" style="box-sizing: border-box">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-2 .btn:focus,
      .content-3-2 .btn:active {
        outline: none !important;
      }

      .content-3-2 {
        padding: 5rem 2rem;
      }

      .content-3-2 .img-hero {
        width: 100%;
        margin-bottom: 3rem;
        border-radius: 50%;
      }

      .content-3-2 .right-column {
        width: 100%;
      }

      .content-3-2 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 2.5rem;
        letter-spacing: -0.025em;
        color: #121212;
      }

      .content-3-2 .title-caption {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 1.25rem;
        color: #121212;
      }

      .content-3-2 .circle {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        height: 3rem;
        width: 3rem;
        margin-bottom: 1.25rem;
        border-radius: 9999px;
        background-color: #27c499;
      }

      .content-3-2 .text-caption {
        font: 400 1rem/1.75rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #565656;
      }

      .content-3-2 .btn-learn {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 2.5rem;
        background-color: #27c499;
        transition: 0.3s;
        letter-spacing: 0.025em;
        border-radius: 0.75rem;
      }

      .content-3-2 .btn:hover {
        background-color: #45dbb2;
        transition: 0.3s;
      }

      @media (min-width: 768px) {
        .content-3-2 .title-text {
          font: 600 2.25rem/2.5rem Poppins, sans-serif;
        }
      }

      @media (min-width: 992px) {
        .content-3-2 .img-hero {
          width: 50%;
          margin-bottom: 0;
          border-radius: 100%;
        }

        .content-3-2 .right-column {
          width: 50%;
        }

        .content-3-2 .circle {
          margin-right: 1.25rem;
          margin-bottom: 0;
        }
      }



      .content-3-7 .btn:focus,
      .content-3-7 .btn:active {
        outline: none !important;
      }

      .content-3-7 {
        padding: 5rem 2rem 7rem;
      }

      .content-3-7 .title-text {
        font: 200 1rem/1rem Poppins, sans-serif;
        letter-spacing: 0.05em;
        margin-bottom: 0.75rem;
        color: #2e3a53;
      }

      .content-3-7 .caption-text {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #8e8fad;
        margin-bottom: 0;
      }

      .content-3-7 .card-item {
        transition: 0.4s;
        top: 0px;
        left: 0px;
        padding: 1rem 0;
      }

      .content-3-7 .card-item:hover {
        top: -3px;
        left: -3px;
        transition: 0.4s;
      }

      .content-3-7 .card-item-outline {
        border: 1px solid #e5ebf9;
        padding: 2rem 2.75rem;
        border-radius: 1rem;
      }

      @media (min-width: 576px) {
        .content-3-7 .title-text {
          font: 200 1rem/1rem Poppins, sans-serif;
        }

        .content-3-7 .card-item {
          padding: 0, 5rem;
        }
      }

      @media (min-width: 768px) {
        .content-3-7 {
          padding-left: 0.5rem;
          padding-right: 0.5rem;
        }
      }

      @media (min-width: 992px) {
        .content-3-7 .caption-text {
          width: 30%;
        }

        .content-3-7 .card-item {
          width: 30%;
        }
      }

      @media (min-width: 1200px) {
        .content-3-7 {
          padding-left: 0rem;
          padding-right: 0rem;
        }
      }
    </style>
    <div class="content-3-2 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
      <center>
        <h2 class="title-text" id="startup">Startup DLI</h2>
      </center>
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex">


          <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">


            <div class="d-flex flex-wrap">
              <div class="mx-auto card-item position-relative">
                <a href="http://dli.um.ac.id/product/umoocs.html">
                  <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                    <h5 class="price-title">Smart MOOCS</h5>
                    <h2 class="price-value d-flex align-items-center">
                      <img id="hero" class="img-fluid" src="assets/startup/moocs.png" alt="" />
                    </h2>
                  </div>
                </a>
              </div>

              <div class="mx-auto card-item position-relative">
                <a href="http://dli.um.ac.id/product/idbookstore.html">
                  <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                    <br>
                    <h5 class="price-title">Idbookstore</h5>
                    <h2 class="price-value d-flex align-items-center">
                      <img id="hero" class="img-fluid" src="assets/startup/idbookstore.png" alt="" />
                    </h2>
                  </div>
                </a>
              </div>

              <div class="mx-auto card-item position-relative">
                <a href="http://dli.um.ac.id/product/koolinera.html">
                  <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                    <br>
                    <h5 class="price-title">Koolinera</h5>
                    <h2 class="price-value d-flex align-items-center">
                      <img id="hero" class="img-fluid" src="assets/startup/koolinera.png" alt="" />
                    </h2>
                  </div>
                </a>
              </div>

              <div class="mx-auto card-item position-relative">
                <a href="http://dli.um.ac.id/product/craftivity.html">
                  <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                    <br>
                    <h5 class="price-title">Craftivity</h5>
                    <h2 class="price-value d-flex align-items-center">
                      <img id="hero" class="img-fluid" src="assets/startup/craftivity.png" alt="" />
                    </h2>
                  </div>
                </a>
              </div>

              <div class="mx-auto card-item position-relative">
                <a href="http://dli.um.ac.id/product/vistalks.html">
                  <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                    <br>
                    <h5 class="price-title">Vistalks</h5>
                    <h2 class="price-value d-flex align-items-center">
                      <img id="hero" class="img-fluid" src="assets/startup/vistalks.png" alt="" />
                    </h2>
                  </div>
                </a>
              </div>

              <div class="mx-auto card-item position-relative">
                <a href="http://dli.um.ac.id/product/muse_akademi.html">
                  <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                    <h5 class="price-title">Muse Akademi</h5>
                    <h2 class="price-value d-flex align-items-center">
                      <img id="hero" class="img-fluid" src="assets/startup/muse.png" alt="" />
                    </h2>
                  </div>
                </a>
              </div>

              <div class="mx-auto card-item position-relative">
                <a href="http://dli.um.ac.id/product/labird.html">
                  <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                    <br>
                    <h5 class="price-title">La Bird</h5>
                    <h2 class="price-value d-flex align-items-center">
                      <img id="hero" class="img-fluid" src="assets/startup/labird.png" alt="" />
                    </h2>
                  </div>
                </a>
              </div>

              <div class="mx-auto card-item position-relative">
                <a href="http://dli.um.ac.id/product/medisain.html">
                  <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                    <br>
                    <h5 class="price-title">Medisain</h5>
                    <h2 class="price-value d-flex align-items-center">
                      <img id="hero" class="img-fluid" src="assets/startup/medisain.png" alt="" />
                    </h2>
                  </div>
                </a>
              </div>

              <div class="mx-auto card-item position-relative">
                <a href="http://dli.um.ac.id/product/sensitif.html">
                  <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                    <br>
                    <h5 class="price-title">Sensitif</h5>
                    <h2 class="price-value d-flex align-items-center">
                      <img id="hero" class="img-fluid" src="assets/startup/sensitif.png" alt="" />
                    </h2>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
          <ul style="padding: 0; margin: 0">
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  1
                </span>
                Berbagai Startup DLI
              </h4>
              <p class="text-caption">
                DLI menyediakan berbagai startup<br class="d-sm-inline d-none" />
                untuk memenuhi kebutuhan kostumer.
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  2
                </span>
                Akses yang cukup mudah
              </h4>
              <p class="text-caption">
                Anda dapat memilih berbagai produk dengan mudah<br class="d-sm-inline d-none" />
                Ke berbagai startup di DLI dan memilih produk yang tersedia.
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 4rem">
              <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  3
                </span>
                Berbagai macam pilihan
              </h4>
              <p class="text-caption">
                Anda dapat memilih startup yang tersedia sesuai<br class="d-sm-inline d-none" />
                dengan apa yang anda inginkan pada saat itu.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>


  </section>

  <!-- =============================================================================================================================================== -->

  <!-- START: PRODUCTS -->
  <section class="products">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

      * {
        font-family: 'Poppins', 'Inter', sans-serif !important;
      }

      body .right-circle img {
        z-index: 0;
        margin-top: -250px;
        position: absolute;
      }

      body .porto {
        background-color: #555555;
        padding: 50px 30px;
      }

      @media only screen and (min-width: 768px) {
        body .porto {
          padding-top: 140px;
          padding-bottom: 100px;
        }
      }

      body .porto .headline {
        font-size: 40px;
        font-weight: 600;
        color: #EEEEEE;
        z-index: 1;
      }

      body .porto .link {
        font-size: 24px;
        font-weight: 600;
        color: #EEEEEE;
        z-index: 1;
      }

      body .porto .sub-headline {
        padding-top: 28px;
        font-size: 16px;
        font-weight: 400;
        color: #d8d8d8;
        z-index: 1;
      }

      @media only screen and (min-width: 768px) {
        body .porto .sub-headline {
          font-size: 24px;
        }
      }

      body .porto .porto-img {
        margin-top: 45px;
      }

      body .porto .porto-img div {
        z-index: 1;
      }

      @media only screen and (min-width: 768px) {
        body .porto .porto-img {
          margin-top: 96px;
        }
      }

      body .porto .porto-img-full {
        z-index: 1;
      }

      @media only screen and (max-width: 768px) {
        body .porto .porto-img-full {
          width: 100px !important;
        }
      }

      body .porto .porto-img-half {
        z-index: 1;
      }

      @media only screen and (max-width: 768px) {
        body .porto .porto-img-half {
          height: 70px !important;
        }
      }

      body .cl-light {
        color: #EEEEEE;
      }

      body .cl-light-grey-2 {
        color: #90BCB7;
      }

      body .font-lora {
        font-family: Poppins, sans-serif !important;
      }
    </style>
    <section class="right-circle">
      <div class="d-flex justify-content-end">
        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/Right-Circle.png" alt="circle" />
      </div>
    </section>

    <section class="porto">
      <div class="row d-flex align-items-center">
        <div class="col-md-10">
          <h4 class="headline" id="produk">
            Berbagai Pilihan Produk Digital Kami
          </h4>
        </div>
        <div class="col-md-2 text-md-right">
          <a href="<?= base_url() ?>home" class="link h-100 d-inline-block text-decoration-none">
            Lebih Banyak >
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="sub-headline">
            Platform kami menyediakan berbagai produk digital. <br>
            Dibawah ini merupakan sebagian produk digital dari kami.
          </p>
        </div>
      </div>
      <div class="row porto-img">
        <div class="col-4">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-1.png" class="img-fluid" />
        </div>
        <div class="col-4 d-flex align-items-end flex-column">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-2.png" class="img-fluid">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-3.png" class="img-fluid mt-auto" />
        </div>
        <div class="col-4">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-4.png" class="img-fluid" />
        </div>
      </div>
    </section>
  </section>
  <!-- END: PRODUCTS -->
  <section class="testimoni">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- =============================================================================================================================================== -->

    <style>
      body .testimoni {
        background: radial-gradient(100% 100% at 50% 0%, #F9FAFE 0%, #FAFAFD 100%);
        padding-top: 90px;
        padding-bottom: 90px;
      }

      body .testimoni .brand img {
        width: 200px !important;
      }
    </style>
    <div class="container" id="mitra">
      <div class="row brand">
        <div class="col-md-3 col-6 text-center my-md-auto">
          <img src="assets/logo/logo-puipt1.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-6 text-center my-md-auto">
          <img src="assets/logo/LogoUM2.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
          <img src="assets/logo/dli-logo1.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
          <img src="assets/logo/dli-eduventure1.png" alt="" class="img-fluid">
        </div>
      </div>
      <hr>
    </div>
  </section>

  <!-- =============================================================================================================================================== -->

  <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .footer-2-2 .list-space {
        margin-bottom: 1.25rem;
      }

      .footer-2-2 .footer-text-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #000000;
        margin-bottom: 1.5rem;
      }

      .footer-2-2 .list-menu {
        color: #c7c7c7;
        text-decoration: none !important;
      }

      .footer-2-2 .list-menu:hover {
        color: #555252;
      }

      .footer-2-2 hr.hr {
        margin: 0;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
      }

      .footer-2-2 .border-color {
        color: #c7c7c7;
      }

      .footer-2-2 .footer-link {
        color: #c7c7c7;
      }

      .footer-2-2 .footer-link:hover {
        color: #555252;
      }

      .footer-2-2 .social-media-c:hover circle,
      .footer-2-2 .social-media-p:hover path {
        fill: #555252;
      }

      .footer-2-2 .footer-info-space {
        padding-top: 3rem;
      }

      .footer-2-2 .list-footer {
        padding: 5rem 1rem 3rem 1rem;
      }

      .footer-2-2 .info-footer {
        padding: 0 1rem 3rem;
      }

      @media (min-width: 576px) {
        .footer-2-2 .list-footer {
          padding: 5rem 2rem 3rem 2rem;
        }

        .footer-2-2 .info-footer {
          padding: 0 2rem 3rem;
        }
      }

      @media (min-width: 768px) {
        .footer-2-2 .list-footer {
          padding: 5rem 4rem 6rem 4rem;
        }

        .footer-2-2 .info-footer {
          padding: 0 4rem 3rem;
        }
      }

      @media (min-width: 992px) {
        .footer-2-2 .list-footer {
          padding: 5rem 6rem 6rem 6rem;
        }

        .footer-2-2 .info-footer {
          padding: 0 6rem 3rem;
        }
      }
    </style>

    <div class="footer-2-2 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif" id="tentang">
      <div class="list-footer">
        <div class="row gap-md-0 gap-3">
          <div class="col-lg-3 col-md-6">
            <div class="">
              <div class="list-space">
                <img src="assets/logo/dli-store.png" height="35px" alt="" />
              </div>
              <nav class="list-unstyled">
                <li class="list-space">
                  <a href="<?= base_url() ?>" class="list-menu">Home</a>
                </li>
                <li class="list-space">
                  <a href="<?= base_url() ?>#keunggulan" class="list-menu">Keunggulan</a>
                </li>
                <li class="list-space">
                  <a href="<?= base_url() ?>#startup" class="list-menu">StartUp DLI</a>
                </li>
                <li class="list-space">
                  <a href="<?= base_url() ?>#produk" class="list-menu">Produk</a>
                </li>
                <li class="list-space">
                  <a href="<?= base_url() ?>#mitra" class="list-menu">Mitra</a>
                </li>
                <li class="list-space">
                  <a href="<?= base_url() ?>#tentang" class="list-menu">Tentang</a>
                </li>
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="footer-text-title">Product</h2>
            <nav class="list-unstyled">
              <li class="list-space">
                <a href="" class="list-menu">Real Time Analytic</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Easy to Operate</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Full Secured</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Analytic Tool</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Story</a>
              </li>
            </nav>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="footer-text-title">Company</h2>
            <nav class="list-unstyled">
              <li class="list-space">
                <a href="" class="list-menu">Contact Us</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Blog</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Culture</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Security</a>
              </li>
            </nav>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="footer-text-title">Support</h2>
            <nav class="list-unstyled">
              <li class="list-space">
                <a href="" class="list-menu">Getting Started</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Help Center</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Server Status</a>
              </li>
            </nav>
          </div>
        </div>
      </div>

      <div class="border-color info-footer">
        <div class="">
          <hr class="hr" />
        </div>
        <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
          <div class="d-flex title-font font-medium align-items-center gap-4">
            <a href="">
              <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                <g clip-path="url(#clip0)">
                  <path d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z" fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <a href="">
              <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                <g clip-path="url(#clip0)">
                  <path d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z" fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <a href="">
              <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z" fill="#C7C7C7" />
                <path d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z" fill="#C7C7C7" />
                <path d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z" fill="#C7C7C7" />
              </svg>
            </a>
            <a href="">
              <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                <g clip-path="url(#clip0)">
                  <path d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727V20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147V21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194V15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133V9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533V9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733V14.5733Z" fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
          <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
            <a href="" class="footer-link" style="text-decoration: none">Terms of Service</a>
            <span>|</span>
            <a href="" class="footer-link" style="text-decoration: none">Privacy Policy</a>
            <span>|</span>
            <a href="" class="footer-link" style="text-decoration: none">Licenses</a>
          </nav>
          <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
            <p style="margin: 0">Copyright © 2021 DLIStore</p>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>