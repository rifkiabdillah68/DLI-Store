<nav class="navbar navbar-expand-lg navbar-light">
        <a href="#">
          <img style="margin-right: 0.75rem"
            src="dli-store.png" alt="" height="35px"/>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png"
                    alt="" />
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
                    <a class="nav-link" href="<?= base_url() ?>home">Produk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>#mitra">Mitra</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
			  <?php if (!$this->session->userdata('is_login')) : ?>
				<a href="<?= base_url('login') ?>" class="btn btn-default btn-no-fill" >Masuk</a>
				<a href="<?= base_url('register') ?>"class="btn btn-fill text-white" >Buat Akun</a>
			<?php else : ?>
				<span>Hi, <?= $this->session->userdata("name") ?></span> |
				<a href="<?= base_url('profile') ?>" class="btn btn-blue" >Profil</a>
				<a href="<?= base_url('logout') ?>" class="btn btn-danger" >Keluar</a>
			<?php endif ?>
			<a href="<?= base_url('cart') ?>" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart(<?= getCart() ?>)</a>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url("")?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>#keunggulan">Keunggulan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>#startup">Start Up DLI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>home">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>#mitra">Mitra</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang</a>
            </li>
          </ul>
          <div class="gap-3">
		  
		  <?php if (!$this->session->userdata('is_login')) : ?>
            <a href="<?= base_url('login') ?>" class="btn btn-default btn-no-fill" >Masuk</a>
            <a href="<?= base_url('register') ?>"class="btn btn-fill text-white" >Buat Akun</a>
			<?php else : ?>
				<span>Hi, <?= $this->session->userdata("name") ?></span> |
				<a href="<?= base_url('profile') ?>" class="btn btn-blue" >Profil</a>
				<a href="<?= base_url('logout') ?>" class="btn btn-danger" >Keluar</a>
			<?php endif ?>
			<a href="<?= base_url('cart') ?>" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart(<?= getCart() ?>)</a>
          </div>
        </div>
      </nav>