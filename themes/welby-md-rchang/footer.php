</article>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col--sm-4">
        <h3 class="footer__headline headline--small-margin">Connect</h3>
        <div class="icon__tray">
          <!-- <a href="#">
            <i class="icon--social fa fa-facebook icon icon--small"></i>
          </a> -->
          <a href="https://twitter.com/@andrew_welbymd">
            <i class="icon--social fa fa-twitter icon icon--small"></i>
          </a>
          <a href="https://www.instagram.com/welbymd/">
            <i class="icon--social fa fa-instagram icon icon--small"></i>
          </a>
        </div>
      </div>
      <div class="col--sm-4 row">
        <div class="col--xs-6">
          <h3 class="footer__headline headline--small-margin">Explore</h3>
          <div class="footer__navbar">
            <?php wp_nav_menu(array('theme_location' => 'footer_explore_nav')) ?>
          </div>
        </div>
        <div class="col--xs-6">
          <h3 class="footer__headline headline--small-margin">Learn</h3>
          <div class="footer__navbar">
            <?php wp_nav_menu(array('theme_location' => 'footer_learn_nav')) ?>
          </div>
        </div>
      </div>
      <div class="col--sm-4">
        <h3 class="footer__headline headline--small-margin">WelbyMD</h3>
        <p>
          492 E. Channel Rd, Santa Monica <br>
          CA 90402 <br>
          drewthierry@gmail.com <br>
          310-740-6544 <br>
          Monday – Saturday <br>
          8 AM – 5 PM
        </p>
      </div>
    </div>
    <p class="footer__copyright center--text no-margin--bottom">&copy; WelbyMD 2018</p>
  </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
