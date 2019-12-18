<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-narrow">
        <nav class="list-group">
          <a class="list-group-item active" href="<?= site_url('account') ?>">Account <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item" href="<?= site_url('account/profile') ?>">Profile <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item" href="<?= site_url('account/password') ?>">Password <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item" href="<?= site_url('account/security') ?>">Security <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
        </nav>
      </div>
      <div class="col-md-9 col-sm-8 col-narrow">
        <div class="list-group">
          <div class="list-group-item">
            <h3>Account</h3>
            <span class="text-muted">Change your basic account preferences.</span>
          </div>  <!-- /.list-group-item -->
          <div class="list-group-item">
            <form class="form-horizontal margin-top-20" action="" method="post">
              <div class="form-group">
                <label for="fullname" class="col-sm-3 control-label">Full name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control input-sm" name="fullname" id="fullname" placeholder="Your full name" value="Fathy AR" aria-describedby="helpuserfullname">
                  <span id="helpuserfullname" class="help-block small">This is your full name that will be shown in your profile page. It will help your friends find you.</span>
                </div>
              </div>
              <div class="form-group">
                <label for="username" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control input-sm" name="username" id="username" placeholder="Choose an username" value="fathy_ar" aria-describedby="helpusername">
                  <span id="helpusername" class="help-block small">A username is your nickname that will be shown in the url of your profile page. It looks like <code>http://rlzt.tk/@username</code>. Username must only contain letters, numbers, and/or underscores.</span>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control input-sm" name="email" id="email" placeholder="you@example.com" value="fathy@rlzt.tk" aria-describedby="helpemail">
                  <span id="helpemail" class="help-block small">This email is used for account verification and password change request. Then, provide an active email please.</span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit"  name="submit_update_user_name" class="btn btn-default waves-effect">Save changes</button>
                </div>
              </div>
            </form>
          </div> <!-- /.list-group-item -->
        </div> <!-- /.list-group -->
      </div> <!-- /.col-*-* -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->

</main>
