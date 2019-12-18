<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $skeleton = '<div class="skeleton-wrapper"><div class="skeleton-wrapper-inner"><div class="skeleton-wrapper-body"><div class="skeleton-avatar"></div><div class="skeleton-author"></div><div class="skeleton-label"></div><div class="skeleton-content-1"></div><div class="skeleton-content-2"></div><div class="skeleton-content-3"></div></div></div></div>'; ?>
    <main>
      <div class="container">
        <?php echo $skeleton; ?>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <h2>Subscribe to Our Newsletter</h2>
            <form action="" id="subscribe-email" role="form" method="post">
              <dl class="form-group">
                <p class="small">Get inspiring news and stories from us by subscribing to our email news letter. Don't worry, we hate spammers and we won't send spam emails to you.</p>
                <dd>
                  <input class="form-control input-block" tabindex="1" name="email" type="email" placeholder="you@somewhere.com">
                </dd>
              </dl>
              <dl class="form-group">
              <button class="btn btn-default btn-block" tabindex="2" type="submit">
                <i class="fa fa-envelope-o"></i>&nbsp;Subscribe
              </button>
              </dl>
            </form>
          </div>
        </div>
      </div>
    </main>
