<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-narrow">
        <nav class="list-group">
          <a class="list-group-item" href="<?= site_url('account') ?>">Account <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item" href="<?= site_url('account/profile') ?>">Profile <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item active" href="<?= site_url('account/password') ?>">Password <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item" href="<?= site_url('account/security') ?>">Security <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
        </nav>
      </div>
      <div class="col-md-9 col-sm-8 col-narrow">
        <div class="list-group">
          <div class="list-group-item">
            <h3 role="heading">Password</h3>
            <span class="text-muted">Change your password.</span>
          </div> <!-- /.list-group-item -->
          <div class="list-group-item">
            <form class="form-horizontal margin-top-20" action="" method="post">
              <div class="form-group">
                <label for="password_curr" class="col-sm-3 control-label">Current password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control input-sm" name="password_curr" placeholder="current password"/>
                </div>
              </div>
              <div class="form-group">
                <label for="password_new" class="col-sm-3 control-label">New password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control input-sm" name="password_new" placeholder="new password"/>
                </div>
              </div>
              <div class="form-group">
                <label for="password_ver" class="col-sm-3 control-label">Verify new password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control input-sm" name="password_ver" placeholder="confirm new password"/>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit"  name="submit_password_new" class="btn btn-default waves-effect">Save changes</button>
                </div>
              </div>
            </form>
          </div> <!-- /.list-group-item -->
        </div> <!-- /.list-group -->
      </div> <!-- /.col-*-* -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->

</main>
