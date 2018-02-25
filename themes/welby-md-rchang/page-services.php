<?php get_header() ?>


  <div class="row service">
    <div class="col--md-4 center--text">
      <h2 class="no-margin--top">Radiology Second Opinion</h2>
      <i class="fa fa-stethoscope icon--medium"></i>
      <p class="service__generic-text">Get second opinions from a radiology expert.</p>
    </div>
    <div class="col--md-8">
      <a id="btn-rad-exp" href="#service-frame" data-link="https://welby.ambrahealth.com/share/stdreview">
        <div class="btn btn--service btn--green">
          <i class="fa fa-fighter-jet"></i> Expedited
        </div>
      </a>
      <a id="btn-rad-std" href="#service-frame" data-link="https://welby.ambrahealth.com/share/24hrs">
        <div class="btn btn--service btn--blue">
          <i class="fa fa-envelope"></i> Standard
        </div>
      </a>
      <!-- <a href="https://welby.ambrahealth.com/share/welbylanguage">
        <div class="btn btn--service btn--blue"><i class="fa fa-globe"></i> Language Services</div>
      </a> -->
    </div>
  </div>
  <div class="row service">
    <div class="col--md-4 center--text">
      <h2 class="no-margin--top">Sports Medicine Second Opinion</h2>
      <i class="fa fa-soccer-ball-o icon--medium"></i>
      <p class="service__generic-text">Get advice from an experienced orthopedic surgeon.</p>
    </div>
    <div class="col--md-8">
      <a id="btn-orth-exp" href="#service-frame" data-link="https://welby.ambrahealth.com/share/stdreview">
        <div class="btn btn--service btn--green">
          <i class="fa fa-fighter-jet"></i> Expedited
        </div>
      </a>
      <a id="btn-orth-std" href="#service-frame" data-link="https://welby.ambrahealth.com/share/24hrs">
        <div class="btn btn--service btn--blue">
          <i class="fa fa-envelope"></i> Standard
        </div>
      </a>
    </div>
  </div>

<!--
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
  -->
  </div>

  <div>
    <iframe id="service-frame" class="service__iframe"></iframe>
  </div>


<?php get_footer() ?>
