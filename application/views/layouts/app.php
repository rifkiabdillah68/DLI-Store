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
	<!-- Navbar -->
	<?php $this->load->view('layouts/_navbar') ?>
	<!-- End Navbar -->

	<!-- Content -->
	<?php $this->load->view($page) ?>
	<!-- End Content -->

	<script src="<?= base_url(); ?>/assets/libs/jquery/jquery-3.4.1.min.js"></script>
	<script src="<?= base_url(); ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/app.js"></script>
</body>

</html>
