<?php get_header() ?>

<?php get_template_part('./partials/content', 'headline') ?>

  <div class="row service">
    <div class="col--md-4 center--text">
      <h2 class="no-margin--top">Second Opinion</h2>
      <i class="fa fa-stethoscope icon--medium"></i>
      <p>Get second opinions from a medical expert in your field.</p>
    </div>
    <div class="col--md-8">
      <a href="https://welby.ambrahealth.com/share/stdreview">
        <div class="btn btn--service btn--green"><i class="fa fa-fighter-jet"></i> Expedited</div>
      </a>
      <a href="https://welby.ambrahealth.com/share/24hrs">
        <div class="btn btn--service btn--yellow"><i class="fa fa-envelope"></i> Standard</div>
      </a>
      <a href="https://welby.ambrahealth.com/share/welbylanguage">
        <div class="btn btn--service btn--blue"><i class="fa fa-globe"></i> Language Services</div>
      </a>
    </div>
  </div>

  <div class="row service">
    <div class="col--md-4 center--text">
      <h2 class="no-margin--top">Video Consult</h2>
      <i class="fa fa-video-camera icon--medium"></i>
      <p>Want to speak to a medical professional in-person? Here you can have a live video consultation with an expert or a team of experts to address your concerns.</p>
    </div>
    <div class="col--md-8">
      <div class="btn btn--service btn--green"><i class="fa fa-users"></i> One-on-one</div>
      <div class="btn btn--service btn--blue"><i class="fa fa-user"></i> Team</div>
    </div>
  </div>

  <div class="row service center--text">
    <div class="col--md-4">
      <h2 class="no-margin--top">Legal Case Review</h2>
      <i class="fa fa-gavel icon--medium"></i>
      <p>If you would like our help in a legal case or you need a medical expert testimony please contact us directly.</p>
    </div>
    <div class="col--md-8">
      <a href="<?php echo site_url('contact') ?>">
        <div class="btn btn--service btn--yellow">
          Please contact us directly to let us know how we can help.
        </div>
      </a>
    </div>
  </div>


<?php get_footer() ?>
