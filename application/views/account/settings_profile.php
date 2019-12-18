<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-narrow">
        <nav class="list-group">
          <a class="list-group-item" href="<?= site_url('account') ?>">Account <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item active" href="<?= site_url('account/profile') ?>">Profile <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item" href="<?= site_url('account/password') ?>">Password <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
          <a class="list-group-item" href="<?= site_url('account/security') ?>">Security <i class="fa fa-angle-right fa-lg pull-right" aria-hidden="true"></i></a>
        </nav>
      </div>
      <div class="col-md-9 col-sm-8 col-narrow">
        <div class="list-group">
          <div class="list-group-item">
            <h3 role="heading">Profile <small><a href="<?= site_url('@fathy.ar') ?>">View profile</a></small></h3>
            <span class="text-muted">Edit your profile.</span>
          </div> <!-- /.list-group-item -->
          <div class="list-group-item">
            <form class="form-horizontal margin-top-20" action="" method="post">
              <div class="form-group">
                <label for="bio" class="col-sm-3 control-label">Bio</label>
                <div class="col-sm-9">
                  <textarea class="form-control input-sm unresized-x" spellcheck="false" name="bio" placeholder="Little story about you">Just a person who is trying to be better 😎</textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="url" class="col-sm-3 control-label">Website</label>
                <div class="col-sm-9">
                  <input type="url" class="form-control input-sm" name="url" placeholder="your website url" value="https://orangtanah.dev" >
                </div>
              </div>
              <div class="form-group">
                <label for="gender" class="col-sm-3 control-label">Gender</label>
                <div class="col-sm-9">
                  <label class="radio-inline"><input type="radio" name="gender" value="male" checked >Male</label>
                  <label class="radio-inline"><input type="radio" name="gender" value="female"  >Female</label>
                  <label class="radio-inline"><input type="radio" name="gender" value="unspecified"  >Unspecified</label>
                </div>
              </div>
              <div class="form-group">
                <label for="country" class="col-sm-3 control-label">City/Town</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control input-sm" name="city" placeholder="your city/town" value="Gold Water" >
                </div>
              </div>
              <div class="form-group">
                <label for="country" class="col-sm-3 control-label">Country</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control input-sm" name="country" placeholder="your country" value="INA" >
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" name="submit" class="btn btn-default waves-effect">Save changes</button>
                </div>
              </div>
            </form>
          </div> <!-- /.list-group-item -->
          <div class="list-group-item">
            <form class="form-horizontal margin-top-20" id="avatarform" method="post" enctype="multipart/form-data">
              <div class="form-group margin-bottom-0">
                <label for="avatarimg" class="col-xs-12 col-md-3 control-label control-label-img-setting margin-bottom-10">Profile image</label>
                <div class="col-xs-img-setting col-md-2 text-centers margin-bottom-10">
                  <img id="avatarpreviewimg" src="http://192.168.100.4/iquotes/d4a857bf60ce1dd77023334114b876e5/fathy.ar/39833374.jpg" alt="Fathi Abdurroofi" width="110" class="img-responsive img-rounded">
                  <button type="button" name="avatarchange" data-toggle="tooltip" title="Change your avatar" id="avatarchange" class="btn-change-avatar waves-effect waves-button"><i class="fa fa-camera fa-2x"></i><span class="sr-only">Change image</span></button>
                </div>
                <div class="col-xs-btn-img-setting col-md-7">
                </div>
              </div>
            </form>
          </div> <!-- /.list-group-item -->
        </div> <!-- /.list-group -->
      </div> <!-- /.col-*-* -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->

</main>
