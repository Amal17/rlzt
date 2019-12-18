<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <style>body{padding: 0}</style>
    <div class="jumbotron bg-white margin-bottom-0">
      <div class="container text-center">
        <a href="<?= site_url() ?>" class="logo"><img src="<?= site_url('assets/img/logo.v2.svg') ?>" class="img-responsive img-brand margin-auto" alt="RealizeIt" height="75" width="300" role="heading"></a>
        <p class="text-muted margin-top-30">Don't worry about writing and getting lost of paper.<br>Here we have a simple app for you to manage all of your goals.</p>
        <!--<p class="text-muted">So, don't waste your time and</p>
        <p class="text-muted"><a class="btn btn-default btn-lg waves-effect" href="<?= site_url('signup') ?>" role="button">Get started to realize your goals</a></p>
        <span class="text-muted small">Already have an account? <a href="<?= site_url('login') ?>" role="button">Sign in here</a>.</span> -->
        <p class="text-muted">
          <a class="btn btn-default btn-lg waves-effect" href="<?= site_url('goals') ?>">
            Your dashboard&nbsp;&nbsp;<img src="http://localhost/iquotes/d4a857bf60ce1dd77023334114b876e5/fathy.ar/39833374.jpg" alt="Fathy AR" height="35" width="35" class="img-circle">
          </a>
        </p>
      </div>
    </div>

    <div class="jumbotron bg-white margin-top-0 margin-bottom-0" style="background-color:#f8f8ff">
      <div class="container margin-top-10">
        <form id="newsletter" method="post" action="">
          <div class="row">
            <div class="col-md-4 col-md-offset-2 col-sm-6">
              <div class="form-group margin-bottom-10">
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email address…" required="" aria-required="true">
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <button type="submit" class="btn btn-default btn-block waves-effect margin-bottom-10" data-toggle="popover" data-trigger="hover" data-placement="top" title="Stay up to date with us" data-content="Get inspiring news and stories from us by subscribing to our email news letter. Don't worry, we hate spammers and we won't send spam emails to you.">
                Subscribe to Our Newsletter&nbsp;&nbsp;<i class="fa fa-envelope-o" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>


    <footer style="background-color:#EDF8F5">
      <div class="container padding-top-20 padding-bottom-20">
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <h4>RealizeIt</h4>
            <p class="small text-muted">Everyone has goals in their life. To reach goals everyone has to manage their activities well. Some people create a to do list to help them manage their activities. So, this app is inspired by them. With this app, we can help people to realize their goals.</p>
            <p class="small text-muted">Follow us on our social media platforms:</p>
            <p class="middot-nav">
              <span><a href="#"><i class="fa fa-facebook"></i></a></span>
              <span><a href="#"><i class="fa fa-twitter"></i></a></span>
              <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
              <span><a href="#"><i class="fa fa-youtube-play"></i></a></span>
              <span><a href="#"><i class="fa fa-instagram"></i></a></span>
              <span><a href="#"><i class="fa fa-github"></i></a></span>
            </p>
          </div>
          <div class="col-xs-4 col-md-2">
            <h4>Company</h4>
            <ul class="list-style-none small">
              <li><a href="#">About</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>
          <div class="col-xs-4 col-md-2">
            <h4>App</h4>
            <ul class="list-style-none small">
              <li><a href="../realizeit/help.php">Help</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Developer</a></li>
              <li><a href="#">Status</a></li>
            </ul>
          </div>
        </div>
        <div class="container-fluid">
          <p class="text-center">©&nbsp;2017&nbsp;<a href="<?= site_url() ?>">RealizeIt, Inc</a></p>
        </div>
      </div>
    </footer>
