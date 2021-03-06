<body class="hold-transition login-page" style="background-image: url('<?= base_url() ?>/assets/img/abcd.jpg');">
  <div class="login-box">
    <div class="login-logo">
      <p>
        <h2><b>Form Login</b></h2>
        <h5>SMAN 7 Buru Selatan</h5>
      </p>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">


        <form action="" method="post">
          <?php if ($this->session->flashdata('flash')): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endif ?>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa fa-user-circle"></span>
              </div>
            </div>
          </div>
          <small class="form-text text-danger"><?= form_error('username') ?></small>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <small class="form-text text-danger"><?= form_error('password') ?></small>
          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
</body>