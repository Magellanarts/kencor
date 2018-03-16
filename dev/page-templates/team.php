<?php /**
 * Template Name: Our Team
 */
 get_header();

?>

<section class="l-content-container">
  <div class="l-content-container__block l-content-container__block--intro">
    <header class="c-page-header">
      <h1>Our <span class="u-blue-text">Team</span></h1>
    </header>

    <div class="c-page-intro">
      <p>At Kencor, we understand that the ability to deliver superior care really begins and ends in the patients' home. We're technologists and cardiologists that have come together to develop SAMi using the most progressive machine learning technology to extend your reach from the hospital to the home.</p>
    </div>
  </div>

  <div class="l-content-container__block l-content-container__block--no-padding">
    <div class="l-section--leadership u-gradient--6">
      <h4>Leadership</h4>

      <div class="o-team-list">
        <div class="o-team-list__member">
          <a href="https://www.linkedin.com/in/cbenara/" target="_blank" class="c-team-member">
            <div class="c-team-member__image-container">
              <img class="c-team-member__image u-circle" src="<?php echo get_template_directory_uri(); ?>/i/people/narayan.png">
            </div>


            <div class="c-team-member__name">Ramani Narayan</div>
            <div class="c-team-member__title">Co-founder + CEO</div>
          </a>
        </div>

        <div class="o-team-list__member">
          <a href="https://www.linkedin.com/in/muthu-krishnan-34968012" target="_blank" class="c-team-member">
            <div class="c-team-member__image-container">
            <img class="c-team-member__image u-circle" src="<?php echo get_template_directory_uri(); ?>/i/people/krishnan.png">
            </div>

            <div class="c-team-member__name">Muthu Krishnan</div>
            <div class="c-team-member__title">Co-founder + COO</div>
          </a>
        </div>

        <div class="o-team-list__member">
          <a href="https://www.linkedin.com/in/richard-chang-md-facc-fscai-9741066/" target="_blank" class="c-team-member">
            <div class="c-team-member__image-container">
            <img class="c-team-member__image u-circle" src="<?php echo get_template_directory_uri(); ?>/i/people/chang.png">
            </div>

            <div class="c-team-member__name">Richard Chang, M.D.</div>
            <div class="c-team-member__title">Co-Founder + CMIO</div>
          </a>
        </div>

        <div class="o-team-list__member">
          <a href="https://www.linkedin.com/in/chuckrouthier" target="_blank" class="c-team-member">
            <div class="c-team-member__image-container">
            <img class="c-team-member__image u-circle" src="<?php echo get_template_directory_uri(); ?>/i/people/routhier.png">
            </div>

            <div class="c-team-member__name">Chuck Routhier</div>
            <div class="c-team-member__title">Creative Director</div>
          </a>
        </div>

        <div class="o-team-list__member">
          <a href="https://www.linkedin.com/in/christopher-im-3a8124" target="_blank" class="c-team-member">
            <div class="c-team-member__image-container">
            <img class="c-team-member__image u-circle" src="<?php echo get_template_directory_uri(); ?>/i/people/im.png">
            </div>

            <div class="c-team-member__name">Chris Im</div>
            <div class="c-team-member__title">Corporate Controller</div>
          </a>
        </div>

        <div class="o-team-list__member">
          <a href="https://www.linkedin.com/in/rkhurana/" target="_blank" class="c-team-member">
            <div class="c-team-member__image-container">
            <img class="c-team-member__image u-circle" src="<?php echo get_template_directory_uri(); ?>/i/people/khurana.png">
            </div>

            <div class="c-team-member__name">Rajeev Khurana</div>
            <div class="c-team-member__title">VP of Engineering</div>
          </a>
        </div>
      </div>
    </div>

    <div class="l-section--advisors u-gradient--7">
      <h4>Advisors</h4>

      <div class="o-team-list o-team-list--end">
        <a href="#" target="_blank" class="o-team-list__member">
          <div class="c-team-member">
            <div class="c-team-member__image-container">
            <img class="c-team-member__image u-circle" src="<?php echo get_template_directory_uri(); ?>/i/people/mody.png">
            </div>

            <div class="c-team-member__name">Freny Vaghaiwalla Mody, M.D.
            </div>
            <div class="c-team-member__title">Professor of Medicine, David Geffen School of Medicine at UCLA</div>
          </div>
        </a>

        <div class="o-team-list__member">
          <a href="https://www.linkedin.com/in/nwhitemd/" target="_blank" class="c-team-member">
            <div class="c-team-member__image-container">
            <img class="c-team-member__image u-circle" src="<?php echo get_template_directory_uri(); ?>/i/people/white.png">
            </div>

            <div class="c-team-member__name">Neal White, MD</div>
            <div class="c-team-member__title">Interventional Cardiologist, Medical Director Heart Failure Program</div>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>