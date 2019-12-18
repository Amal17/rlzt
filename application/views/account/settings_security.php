<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-narrow">
        <nav class="list-group">
          <a class="list-group-item" href="<?= site_url('account') ?>">Account <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item" href="<?= site_url('account/profile') ?>">Profile <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item" href="<?= site_url('account/password') ?>">Password <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item active" href="<?= site_url('account/security') ?>">Security <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
        </nav>
      </div>
      <div class="col-md-9 col-sm-8 col-narrow">
        <div class="list-group">
          <div class="list-group-item">
            <h3 role="heading">Security</h3>
            <span class="text-muted">Review your account security. If there's any strange thing, change your password.</span>
          </div> <!-- /.list-group-item -->
          <div class="list-group-item">
            <span><i class="fa fa-user-plus fa-fw"></i>&nbsp;Registered at : .</span>
          </div> <!-- /.list-group-item -->
          <div class="list-group-item">
            <i class="fa fa-refresh fa-fw"></i>&nbsp;Last updated at :
          </div> <!-- /.list-group-item -->
          <div class="list-group-item">
            <i class="fa fa-sign-in fa-fw"></i>&nbsp;Last log in :
          </div> <!-- /.list-group-item -->
          <div class="list-group-item">
            <i class="fa fa-sign-out fa-fw"></i>&nbsp;Last log out :
          </div> <!-- /.list-group-item -->
        </div> <!-- /.list-group -->
      </div> <!-- /.col-*-* -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->

</main>
