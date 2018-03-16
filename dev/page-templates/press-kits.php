<?php /**
 * Template Name: Press Kits
 */
 get_header();

 $detect = new Mobile_Detect;

?>

<section class="l-content-container u-fixed">
  <div class="l-content-container__block l-content-container__block--intro">
    <header class="c-page-header">
      <h1>Press <span class="u-blue-text">Kit</span></h1>
    </header>

    <div class="c-page-intro">
      <p>Thanks for your interest in Kencor. We invite you to check out the latest news and information here.</p>
    </div>

    <div class="u-body-copy">
      <ol class="c-page-nav js-page-nav">
        <li class="c-page-nav__link is-active js-toggle-section-btn" data-section="newsroom">Newsroom</li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="brand-assets">Brand Assets</li>
      </ol>
    </div>
  </div>

  <div class="l-content-container__block l-content-container__block--no-padding u-hide@med">

    <nav class="c-sub-section-nav c-sub-section-nav--mobile js-sub-menu">
      <li class="c-sub-section-nav__btn js-toggle-section-btn is-active" data-section="newsroom"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="brand-assets"></li>
    </nav>

    <div >
      <div class="l-section--newsroom u-gradient--2 is-active js-toggle-section  " data-section="newsroom">
        <div class=" u-white-text">
          <h4>Newsroom</h4>


          <div class="c-news-list u-body-copy">
            <div class="c-news-story">
              <h5 class="c-news-story__title">- 6 Million / Number of Americans suffering from CHF<br>
                - $273 Billion / Direct costs spent annually on CHF care, hospitalizations, outpatient care, medications and devices<br>
                - 24% / CHF patients are admitted to hospital within 30 days</h5>

              <a href="https://www.brookings.edu/research/treating-congestive-heart-failure-and-the-role-of-payment-reform/" class="c-news-story__link" target="_blank">more</a>
            </div>

            <div class="c-news-story">
              <h5 class="c-news-story__title">Effectiveness of Remote Patient Monitoring after Discharge of Hospitalized Patients with Heart Failure</h5>

              <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4827701/" class="c-news-story__link" target="_blank">more</a>
            </div>

            <div class="c-news-story">
              <h5 class="c-news-story__title">Chronic Heart Failure Follow-up Management Based on Agent Technology</h5>

              <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4659889/" class="c-news-story__link" target="_blank">more</a>
            </div>

            <div class="c-news-story">
              <h5 class="c-news-story__title">Payment and delivery Reform Case Study: Congestive Heart Failure (CHF)</h5>

              <a href="http://healthaffairs.org/blog/2014/04/15/payment-and-delivery-reform-case-study-congestive-heart-failure/" class="c-news-story__link" target="_blank">more</a>
            </div>


            <div class="c-news-story">
              <h5 class="c-news-story__title">Notice of proposed rulemaking for bundled payment models for high-quality, coordinated cardiac</h5>

              <a href="https://www.cms.gov/newsroom/mediareleasedatabase/fact-sheets/2016-fact-sheets-items/2016-07-25.html" class="c-news-story__link" target="_blank">more</a>
            </div>


          </div>
        </div>
      </div>
      <div class="l-section--newsroom u-gradient--orange  js-toggle-section " data-section="brand-assets">
        <div class=" u-white-text">


          <a href="<?php echo get_template_directory_uri(); ?>/Kencor_Assets.zip" class="c-brand-asset">
            <img width="161" src="<?php echo get_template_directory_uri(); ?>/i/ba.jpg">
          </a>

          <div>
            <h4 class="u-heading--minor">Download our Brand Assets</h4>
            <h2>Here’s our Kencor brand assets that can be downloaded for use in media. Our team is available for interviews or media inquiries.</h2>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

<nav class="c-sub-section-nav js-sub-menu">
  <li class="c-sub-section-nav__btn js-toggle-section-btn is-active" data-section="newsroom"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="brand-assets"></li>
</nav>


<?php if ( !$detect->isMobile() ): ?>
<div id="fullpage" class="u-show@med" >
    <div class="section">
      <section class="l-content-container">
        <div class="l-content-container__block">

        </div>

        <div class="l-content-container__block l-content-container__block--no-padding">
            <div class="l-section--newsroom u-gradient--2 is-active js-toggle-section  " data-section="newsroom">
              <div class=" u-white-text">
                <h4>Newsroom</h4>


                <div class="c-news-list u-body-copy">
                  <div class="c-news-story">
                    <h5 class="c-news-story__title">- 6 Million / Number of Americans suffering from CHF<br>
                      - $273 Billion / Direct costs spent annually on CHF care, hospitalizations, outpatient care, medications and devices<br>
                      - 24% / CHF patients are admitted to hospital within 30 days</h5>

                    <a href="https://www.brookings.edu/research/treating-congestive-heart-failure-and-the-role-of-payment-reform/" class="c-news-story__link" target="_blank">more</a>
                  </div>

                  <div class="c-news-story">
                    <h5 class="c-news-story__title">Effectiveness of Remote Patient Monitoring after Discharge of Hospitalized Patients with Heart Failure</h5>

                    <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4827701/" class="c-news-story__link" target="_blank">more</a>
                  </div>

                  <div class="c-news-story">
                    <h5 class="c-news-story__title">Chronic Heart Failure Follow-up Management Based on Agent Technology</h5>

                    <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4659889/" class="c-news-story__link" target="_blank">more</a>
                  </div>

                  <div class="c-news-story">
                    <h5 class="c-news-story__title">Payment and delivery Reform Case Study: Congestive Heart Failure (CHF)</h5>

                    <a href="http://healthaffairs.org/blog/2014/04/15/payment-and-delivery-reform-case-study-congestive-heart-failure/" class="c-news-story__link" target="_blank">more</a>
                  </div>


                  <div class="c-news-story">
                    <h5 class="c-news-story__title">Notice of proposed rulemaking for bundled payment models for high-quality, coordinated cardiac</h5>

                    <a href="https://www.cms.gov/newsroom/mediareleasedatabase/fact-sheets/2016-fact-sheets-items/2016-07-25.html" class="c-news-story__link" target="_blank">more</a>
                  </div>

                </div>
              </div>

              <div class="c-scroll-next-btn-container u-text-align-center">
                <div class="c-scroll-next-btn js-scroll-next-btn"><i class="fa fa-chevron-down"></i></div>
              </div>

            </div>
        </div>
      </section>
    </div>

    <div class="section">
      <section class="l-content-container">
        <div class="l-content-container__block">

        </div>
        <div class="l-content-container__block l-content-container__block--no-padding">
            <div class="l-section--newsroom u-gradient--orange js-toggle-section " data-section="">
              <div class=" u-white-text">

                <a href="<?php echo get_template_directory_uri(); ?>/Kencor_Assets.zip" class="c-brand-asset">
                  <img width="161" src="<?php echo get_template_directory_uri(); ?>/i/ba.jpg">
                </a>

                <div>
                  <h4 class="u-heading--minor">Download our Brand Assets</h4>
                  <h2>Here’s our Kencor brand assets that can be downloaded for use in media. Our team is available for interviews or media inquiries.</h2>
                </div>

              </div>

            </div>
        </div>
      </section>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>