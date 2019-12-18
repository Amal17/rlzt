<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- back to top button -->
<button class="back-to-top waves-effect" type="button" aria-hidden="true"></button>
<!-- loading bar -->
<div class="loadingBar"></div>

<script>
  $(document).ready(function() {
    // Waves effect
    Waves.init();
    // Waves.attach('.quotes-post-content', 'waves-block');
    Waves.attach('.btn-edit', 'waves-circle');
    Waves.attach('.btn-delete', 'waves-circle');
    Waves.attach('.btn-share', 'waves-circle');
    Waves.attach('.btn-more', ['waves-circle', 'waves-floats']);
    Waves.attach('.btn-star', ['waves-circle', 'waves-floats']);
    Waves.attach('.goal-content', 'waves-block');
    Waves.attach('.btn-edit-profile');
    // Waves.attach('.nav-tabs>li>a', 'waves-block');
    // Waves.attach('.navbar-nav>ul>li>a', 'waves-block');
    Waves.attach('.dropdown-menu>li>a', 'waves-block');
    Waves.attach('#submit_post','waves-block');
    Waves.attach('a.list-group-item', 'waves-block');

    // Back to top
    var amountScrolled = 200;
    var amountScrolledNav = 25;
    $(window).scroll(function() {
      if ( $(window).scrollTop() > amountScrolled ) {
        // $('button.back-to-top').fadeIn('slow');
        $('button.back-to-top').addClass('show');
      } else {
        // $('button.back-to-top').fadeOut('slow');
        $('button.back-to-top').removeClass('show');
      }
      if ( $(window).scrollTop() > amountScrolledNav ) {
        $('.navbar-fixed-top').addClass('shadow');
      } else {
        $('.navbar-fixed-top').removeClass('shadow');
      }
    });
    $('button.back-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 800);
      return false;
    });

    // Tooltip & Popover
    $('[data-toggle="tooltip"]').tooltip({ animation: true });
    $('[data-toggle="popover"]').popover({
      animation: true,
      html: false
    });
    // Tabs
    $('#profileTabs a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });
    // Toggle Burger Animation
    $('.navbar-toggle').on('click', function() {
      $('.navbar-toggle').toggleClass('animate-burger');
    });

    // Toggle Sidenav
    $(".btn-open-sidenav").click(function(){
        $(".panel-sidenav").addClass("open");
    });
    $(".btn-close-sidenav").click(function(){
        $(".panel-sidenav").removeClass("open");
    });

    // Autosize Textarea
    autosize($('textarea.unresized-x'));
  });
</script>
</body>
</html>
