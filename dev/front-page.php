<?php get_header();

$detect = new Mobile_Detect;
?>


<section class="l-content-container u-fixed">
  <div class="l-content-container__block l-content-container__block--intro">
    <header class="c-page-header">
      <h2 class="c-page-header__subheading">Extend your care from</h2>
      <h1>Hospital<br> <span class="u-blue-text">to</span> Home</h1>
    </header>

    <div class="c-page-intro ">
      <p class="u-blue-text">Introducing SAMiConnect - the  AI-assisted patient engagement platform that will transform and simplify how you care for your patients with congestive heart failure.</p>

      <p>SAMiConnect’s clinician-driven algorithm will increase patient engagement in their care plan and increase the operational efficiency of your team.</p>

    </div>
  </div>

  <div class="l-content-container__block l-content-container__block--no-padding u-hide@med">

    <nav class="c-sub-section-nav c-sub-section-nav--mobile js-sub-menu">
      <li class="c-sub-section-nav__btn js-toggle-section-btn is-active" data-section="one"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="two"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="three"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="four"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="five"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="six"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="seven"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="eight"></li>
    </nav>

    <div class="l-section--newsroom u-gradient--orange is-active js-toggle-section u-img-fill-area" data-section="one" style="background-image: url(<?php echo get_template_directory_uri(); ?>/i/video-placeholder.jpg);" >
      <img src="<?php echo get_template_directory_uri(); ?>/i/video-placeholder.jpg" class="hide-me">


    </div>

    <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="two">

      <div class="c-metric-graphic">
        <div class="c-metric-graphic__header">
          <img src="<?php echo get_template_directory_uri(); ?>/i/home/icon--patient.png">
        </div>
        <div class="c-metric-graphic__main js-count-up--here">
          <div class="c-metric-graphic__number c-metric-graphic__number--placeholder">
            21,000
          </div>
          <div class="c-metric-graphic__number js-count-up js-count-up--2 " data-size="small" data-number="21000">

          </div>
        </div>
        <div class="c-metric-graphic__footer">
          Total Patient Interaction
        </div>
      </div>

    </div>

    <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="three">
      <div class="c-metric-graphic">
        <div class="c-metric-graphic__header">
          <img src="<?php echo get_template_directory_uri(); ?>/i/home/icon--vitals.png">
        </div>
        <div class="c-metric-graphic__main">
          <div class="c-metric-graphic__number c-metric-graphic__number--placeholder">
            30,000
          </div>
          <div class="c-metric-graphic__number js-count-up js-count-up--3" data-size="small" data-number="30000">

          </div>
        </div>
        <div class="c-metric-graphic__footer">
          Total Vials Collected
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="four">
      <div class="c-metric-graphic">
        <div class="c-metric-graphic__main">
          <div class="c-circle-fill">
            <div data-animate-css-delay="1.2s" data-animate-css="fadeIn" class="c-circle-fill__number js-circle-fill__number js-circle-fill__number--4" data-size="small">95%</div>
            <img class="c-circle-fill__placeholder" src="<?php echo get_template_directory_uri(); ?>/i/home/circle-90.svg">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 440.6 440.6" style="" xml:space="preserve" data-animate-css-delay="1s" data-animate-css="start"  class="c-circle-fill__graphic js-circle-fill__graphic js-circle-fill__graphic--4" data-size="small">
<g id="thin_line">
	<path class="c-circle-fill__one qZnIchih_0" d="M20.5,220.3A199.8,199.8 0,1,1 420.1,220.3A199.8,199.8 0,1,1 20.5,220.3"></path>
</g>
<g id="thick_line">
	<path class="c-circle-fill__two qZnIchih_1" d="M298.1,36.2c71.7,30.3,122,101.4,122,184.1c0,110.4-89.5,199.8-199.8,199.8S20.5,330.6,20.5,220.3
		S109.9,20.5,220.3,20.5"></path>
</g></svg>

          </div>


        </div>
        <div class="c-metric-graphic__footer">
          Patient Engagement with SAMi
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="five">
      <div class="c-metric-graphic">
        <div class="c-metric-graphic__main">

          <div class="c-clock">
            <img src="<?php echo get_template_directory_uri(); ?>/i/home/clock-bg.png">
            <div class="c-clock__dot"></div>

            <div class="c-clock__hour-hand-container js-clock__hour-hand-container" data-animate-css-delay="1s" data-animate-css="rotate-me" data-size="small">
              <img class="c-clock__hour-hand" src="<?php echo get_template_directory_uri(); ?>/i/home/clock__hour-hand.svg">
            </div>
            <div class="c-clock__minute-hand-container js-clock__minute-hand-container" data-animate-css-delay="1s" data-animate-css="rotate-me" data-size="small">
              <img class="c-clock__minute-hand" src="<?php echo get_template_directory_uri(); ?>/i/home/clock__minute-hand.svg">
            </div>
          </div>
        </div>
        <div class="c-metric-graphic__footer">
          On average, patients spend up to 60 mins a day with SAMI
        </div>
      </div>
    </div>


    <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="six">
      <div class="c-metric-graphic">
        <div class="c-metric-graphic__main">
          <div class="c-circle-fill">
            <div data-animate-css-delay="1.2s" data-animate-css="fadeIn" class="c-circle-fill__number js-circle-fill__number js-circle-fill__number--6" data-size="small">90%</div>
            <img class="c-circle-fill__placeholder" src="<?php echo get_template_directory_uri(); ?>/i/home/circle-90.svg">


            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 440.6 440.6" style="" xml:space="preserve" data-animate-css-delay="1s" data-animate-css="start" class="c-circle-fill__graphic js-circle-fill__graphic js-circle-fill__graphic--6" data-size="small">
<g id="thin_line">
	<path class="c-circle-fill__one PacGpOtk_0" d="M20.5,220.3A199.8,199.8 0,1,1 420.1,220.3A199.8,199.8 0,1,1 20.5,220.3"></path>
</g>
<g id="thick_line">
	<path class="c-circle-fill__two PacGpOtk_1" d="M392.3,118.5c17.7,29.8,27.8,64.6,27.8,101.8c0,110.4-89.5,199.8-199.8,199.8S20.5,330.6,20.5,220.3
		S109.9,20.5,220.3,20.5"></path>
</g>
</svg>

          </div>


        </div>
        <div class="c-metric-graphic__footer">
          Patient Reported Outcomes (PRO)
          on SAMi
        </div>
      </div>
    </div>


    <div class="l-section--newsroom u-gradient--5 js-toggle-section" data-section="seven">
      <div class="o-speech-bubble-grouping">
        <div class="o-speech-bubble-container">
          <div class="o-speech-bubble-initials">LH</div>

          <div class="o-speech-bubble o-speech-bubble--left o-speech-bubble--light">
            <p>As I age, my health problems do not get
              better. In order to slow the decline, I know
              it is important to keep track of my vitals
              and to take my medications. What Kencor
              has developed is a wonderful tool for me
              to participate in my treatment and for me
              to help my doctor take good care of me.</p>
          </div>
        </div>

        <div class="o-speech-bubble-container">
          <div class="o-speech-bubble-initials">LH</div>
          <div class="o-speech-bubble o-speech-bubble--left o-speech-bubble--light">
            <p>I like the assurance that I am being monitored
              between doctor visits, and it makes me feel
              good that I am actively assisting in my care.</p>
            <div class="o-speech-bubble__attribution">
              LaReece Haynes, Patient of Dr. Neil Kumar
            </div>
          </div>
        </div>
      </div>


      <div class="o-speech-bubble-grouping">
        <div class="o-speech-bubble-container">
          <div class="o-speech-bubble o-speech-bubble--right o-speech-bubble--blue">
            <p>It helps our team to track the weight gain and blood pressure fluctuations so that we can intervene with diuretics or IVF and up or down titrations of blood pressure medications. This has potentially avoided ER / Urgent Care / Hospital Admits.</p>
          </div>

          <div class="o-speech-bubble-initials">Dr.</div>
        </div>

        <div class="o-speech-bubble-container">
          <div class="o-speech-bubble o-speech-bubble--right o-speech-bubble--blue">
            <p>I LOVE the interface design. I think of this as the Bang and Olufsen of patient engagement platform - clean, uncluttered, elegant and intuitive. The interface should not be a barrier between the physician and his patients and you are doing a great job here. This is a big selling point for me and I hope you continue to follow the same philosophy as the system evolves.</p>
            <div class="o-speech-bubble__attribution">
              Dr. Neil Kumar, M.D.<br>
              Specialist of Nephrology and Internal Medicine<br>
              CHI Mercy Health, Mercy Medical Center<br>
              Rosenburg, OH
            </div>
          </div>
          <div class="o-speech-bubble-initials">Dr.</div>
        </div>
      </div>
    </div>


    <div class="l-section--newsroom u-gradient--5 js-toggle-section" data-section="eight">
      <div class="o-speech-bubble-grouping js-demo-kickoff">
        <div class="o-speech-bubble-container">
          <div class="o-speech-bubble-initials o-speech-bubble-initials--orange">S</div>

          <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--left o-speech-bubble--white c-thinking-bubble js-thinking-bubble js-thinking-bubble--1 animated" data-size="small">
            <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
            <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
            <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
          </div>

          <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--left o-speech-bubble--white o-speech-bubble--hidden js-demo-bubble js-demo-bubble--1 animated" data-size="small">
            <p>Hi, I'm SAMi, your AI assisted care provider.<br>Let's get started!</p>
          </div>
        </div>

        <div class="o-speech-bubble-container">
          <div class="o-speech-bubble-initials  o-speech-bubble-initials--orange o-speech-bubble-initials--hidden animated js-speech-bubble-initials--1" data-size="small">S</div>

          <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--hidden o-speech-bubble--left o-speech-bubble--white c-thinking-bubble js-thinking-bubble js-thinking-bubble--2 animated" data-size="small">
            <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
            <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
            <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
          </div>

          <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--left o-speech-bubble--white o-speech-bubble--hidden js-demo-bubble--2 animated" data-size="small">
            <p>Would you like a demo?</p>
          </div>
        </div>

      </div>


      <div class="o-speech-bubble-grouping">
        <div class="o-speech-bubble-container">

          <a href="mailto:Support@kencorhealth.com" class="o-speech-bubble o-speech-bubble--small o-speech-bubble--btn o-speech-bubble--right o-speech-bubble--blue o-speech-bubble--hidden js-response-bubble animated" data-size="small">
            <p>Yes, please</p>
          </a>

          <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--btn o-speech-bubble--right js-response-bubble o-speech-bubble--blue o-speech-bubble--hidden animated js-response-bubble--no" data-size="small">
            <p>Not now</p>
          </div>
        </div>


      </div>


      <div class="o-speech-bubble-grouping">
        <div class="o-speech-bubble-container">
          <div class="o-speech-bubble-initials o-speech-bubble-initials--orange o-speech-bubble-initials--hidden animated js-speech-bubble-initials--2" data-size="small">S</div>

          <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--hidden o-speech-bubble--left o-speech-bubble--white c-thinking-bubble js-thinking-bubble js-thinking-bubble--3 animated" data-size="small">
            <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
            <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
            <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
          </div>

          <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--left o-speech-bubble--white  o-speech-bubble--hidden js-demo-bubble--3 animated" data-size="small">
            <p>Ok. If you change your mind, you can visit the <a href="<?php echo site_url('contact'); ?>">Contact</a> page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<nav class="c-sub-section-nav js-sub-menu">
  <li class="c-sub-section-nav__btn js-toggle-section-btn is-active" data-section="one"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="two"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="three"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="four"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="five"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="six"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="seven"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="eight"></li>
</nav>
<?php if ( !$detect->isMobile() ): ?>
<div id="fullpage" class="u-show@med" >
  <div class="section">
    <section class="l-content-container">
      <div class="l-content-container__block">

      </div>

      <div class="l-content-container__block l-content-container__block--no-padding">
        <div class="l-section--newsroom u-gradient--orange is-active js-toggle-section u-img-fill-area" style="background-image: url(<?php echo get_template_directory_uri(); ?>/i/video-placeholder.jpg);" data-section="one">
          <!-- div class="o-full-section-video">
            <video class="o-full-section-video js-video-player" data-index="1" data-size="big" autoplay loop>
              <source src="<?php echo get_template_directory_uri(); ?>/i/Kencor_video_pink_a.mp4" type="video/mp4">
            </video>
          </div -->


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
        <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="two">
          <div class="c-metric-graphic">
              <div class="c-metric-graphic__header">
                <img src="<?php echo get_template_directory_uri(); ?>/i/home/icon--patient.png">
              </div>
              <div class="c-metric-graphic__main">
                <div class="c-metric-graphic__number c-metric-graphic__number--placeholder">
                  21,000
                </div>
                <div class="c-metric-graphic__number js-count-up js-count-up--2" data-size="big" data-number="21000">

                </div>
              </div>
            <div class="c-metric-graphic__footer">
              Total Patient Interaction
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
        <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="three">
          <div class="c-metric-graphic">
            <div class="c-metric-graphic__header">
              <img src="<?php echo get_template_directory_uri(); ?>/i/home/icon--vitals.png">
            </div>
            <div class="c-metric-graphic__main">
              <div class="c-metric-graphic__number c-metric-graphic__number--placeholder">
                30,000
              </div>
              <div class="c-metric-graphic__number js-count-up js-count-up--3" data-size="big" data-number="30000">

              </div>
            </div>
            <div class="c-metric-graphic__footer">
              Total Vials Collected
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
        <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="four">
          <div class="c-metric-graphic">
            <div class="c-metric-graphic__main">
              <div class="c-circle-fill">
                <div class="c-circle-fill__number js-circle-fill__number js-circle-fill__number--4 animated hide-me" data-size="big">95%</div>
                <img class="c-circle-fill__placeholder" src="<?php echo get_template_directory_uri(); ?>/i/home/circle-90.svg">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 440.6 440.6" style="" xml:space="preserve" class="c-circle-fill__graphic js-circle-fill__graphic js-circle-fill__graphic--4" data-size="big">
<g id="thin_line">
	<path class="c-circle-fill__one qZnIchih_0" d="M20.5,220.3A199.8,199.8 0,1,1 420.1,220.3A199.8,199.8 0,1,1 20.5,220.3"></path>
</g>
<g id="thick_line">
	<path class="c-circle-fill__two qZnIchih_1" d="M298.1,36.2c71.7,30.3,122,101.4,122,184.1c0,110.4-89.5,199.8-199.8,199.8S20.5,330.6,20.5,220.3
		S109.9,20.5,220.3,20.5"></path>
</g></svg>

              </div>


            </div>
            <div class="c-metric-graphic__footer">
              Patient Engagement with SAMi
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
        <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="five">
          <div class="c-metric-graphic">
            <div class="c-metric-graphic__main">

              <div class="c-clock">
                <img src="<?php echo get_template_directory_uri(); ?>/i/home/clock-bg.png">
                <div class="c-clock__dot"></div>

                <div class="c-clock__hour-hand-container js-clock__hour-hand-container" data-size="big">
                  <img class="c-clock__hour-hand" src="<?php echo get_template_directory_uri(); ?>/i/home/clock__hour-hand.svg">
                </div>
                <div class="c-clock__minute-hand-container js-clock__minute-hand-container" data-size="big">
                  <img class="c-clock__minute-hand" src="<?php echo get_template_directory_uri(); ?>/i/home/clock__minute-hand.svg">
                </div>
              </div>
            </div>
            <div class="c-metric-graphic__footer">
              On average, patients spend up to 60 mins a day with SAMI
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
        <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="six">
          <div class="c-metric-graphic">
            <div class="c-metric-graphic__main">
              <div class="c-circle-fill">
                <div class="c-circle-fill__number js-circle-fill__number js-circle-fill__number--6 animated hide-me" data-size="big">90%</div>
                <img class="c-circle-fill__placeholder" src="<?php echo get_template_directory_uri(); ?>/i/home/circle-90.svg">


                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 440.6 440.6" style="" xml:space="preserve" class="c-circle-fill__graphic js-circle-fill__graphic js-circle-fill__graphic--6" data-size="big">
<g id="thin_line">
	<path class="c-circle-fill__one PacGpOtk_0" d="M20.5,220.3A199.8,199.8 0,1,1 420.1,220.3A199.8,199.8 0,1,1 20.5,220.3"></path>
</g>
<g id="thick_line">
	<path class="c-circle-fill__two PacGpOtk_1" d="M392.3,118.5c17.7,29.8,27.8,64.6,27.8,101.8c0,110.4-89.5,199.8-199.8,199.8S20.5,330.6,20.5,220.3
		S109.9,20.5,220.3,20.5"></path>
</g>
</svg>

              </div>


            </div>
            <div class="c-metric-graphic__footer">
              Patient Reported Outcomes (PRO)
              on SAMi
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
        <div class="l-section--newsroom u-gradient--5 js-toggle-section" data-section="seven">

          <div class="o-speech-bubble-grouping">
            <div class="o-speech-bubble-container">
              <div class="o-speech-bubble-initials">LH</div>

              <div class="o-speech-bubble o-speech-bubble--left o-speech-bubble--light">
                <p>As I age, my health problems do not get
                  better. In order to slow the decline, I know
                  it is important to keep track of my vitals
                  and to take my medications. What Kencor
                  has developed is a wonderful tool for me
                  to participate in my treatment and for me
                  to help my doctor take good care of me.</p>
              </div>
            </div>

            <div class="o-speech-bubble-container">
              <div class="o-speech-bubble-initials">LH</div>
              <div class="o-speech-bubble o-speech-bubble--left o-speech-bubble--light">
                <p>I like the assurance that I am being monitored
                  between doctor visits, and it makes me feel
                  good that I am actively assisting in my care.</p>
                <div class="o-speech-bubble__attribution">
                  LaReece Haynes, Patient of Dr. Neil Kumar
                </div>
              </div>
            </div>
          </div>


          <div class="o-speech-bubble-grouping">
            <div class="o-speech-bubble-container">
              <div class="o-speech-bubble o-speech-bubble--right o-speech-bubble--blue">
                <p>It helps our team to track the weight gain and blood pressure fluctuations so that we can intervene with diuretics or IVF and up or down titrations of blood pressure medications. This has potentially avoided ER / Urgent Care / Hospital Admits.</p>
              </div>

              <div class="o-speech-bubble-initials">Dr.</div>
            </div>

            <div class="o-speech-bubble-container">
              <div class="o-speech-bubble o-speech-bubble--right o-speech-bubble--blue">
                <p>I LOVE the interface design. I think of this as the Bang and Olufsen of patient engagement platform - clean, uncluttered, elegant and intuitive. The interface should not be a barrier between the physician and his patients and you are doing a great job here. This is a big selling point for me and I hope you continue to follow the same philosophy as the system evolves.</p>
                <div class="o-speech-bubble__attribution">
                  Dr. Neil Kumar, M.D.<br>
                  Specialist of Nephrology and Internal Medicine<br>
                  CHI Mercy Health, Mercy Medical Center<br>
                  Rosenburg, OH
                </div>
              </div>
              <div class="o-speech-bubble-initials">Dr.</div>
            </div>
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
        <div class="l-section--newsroom u-gradient--5 js-toggle-section" data-section="eight">


          <div class="o-speech-bubble-grouping">
            <div class="o-speech-bubble-container o-speech-bubble-container--constrained">
              <div class="o-speech-bubble-initials o-speech-bubble-initials--orange">S</div>

              <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--left o-speech-bubble--white c-thinking-bubble js-thinking-bubble js-thinking-bubble--1 animated" data-size="big">
                <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
                <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
                <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
              </div>

              <div class="o-speech-bubble o-speech-bubble--demo o-speech-bubble--demo-1 o-speech-bubble--small o-speech-bubble--left o-speech-bubble--white o-speech-bubble--hidden js-demo-bubble js-demo-bubble--1 animated" data-size="big">
                <p>Hi, I'm SAMi, your AI assisted care provider.<br>Let's get started!</p>
              </div>
            </div>

            <div class="o-speech-bubble-container o-speech-bubble-container--constrained">
              <div class="o-speech-bubble-initials  o-speech-bubble-initials--orange o-speech-bubble-initials--hidden animated js-speech-bubble-initials--1" data-size="big">S</div>

              <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--hidden o-speech-bubble--left o-speech-bubble--white c-thinking-bubble js-thinking-bubble js-thinking-bubble--2 animated" data-size="big">
                <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
                <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
                <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
              </div>

              <div class="o-speech-bubble o-speech-bubble--demo o-speech-bubble--demo-2 o-speech-bubble--small o-speech-bubble--left o-speech-bubble--white o-speech-bubble--hidden js-demo-bubble--2 animated" data-size="big">
                <p>Would you like a demo?</p>
              </div>
            </div>

          </div>


          <div class="o-speech-bubble-grouping">
            <div class="o-speech-bubble-container o-speech-bubble-container--yes-no o-speech-bubble-container--constrained">

              <a href="mailto:Support@kencorhealth.com" class="o-speech-bubble o-speech-bubble--small o-speech-bubble--btn o-speech-bubble--right o-speech-bubble--blue o-speech-bubble--hidden js-response-bubble animated" data-size="big">
                <p>Yes, please</p>
              </a>

              <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--btn o-speech-bubble--right js-response-bubble o-speech-bubble--blue o-speech-bubble--hidden animated js-response-bubble--no" data-size="big">
                <p>Not now</p>
              </div>
            </div>


          </div>


          <div class="o-speech-bubble-grouping">
            <div class="o-speech-bubble-container o-speech-bubble-container--constrained">
              <div class="o-speech-bubble-initials o-speech-bubble-initials--orange o-speech-bubble-initials--hidden animated js-speech-bubble-initials--2" data-size="big">S</div>

              <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--hidden o-speech-bubble--left o-speech-bubble--white c-thinking-bubble js-thinking-bubble js-thinking-bubble--3 animated" data-size="big">
                <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
                <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
                <div class="c-thinking-bubble__dot js-thinking-bubble__dot animated"></div>
              </div>

              <div class="o-speech-bubble o-speech-bubble--small o-speech-bubble--left o-speech-bubble--white  o-speech-bubble--hidden js-demo-bubble--3 animated" data-size="big">
                <p>Ok. If you change your mind, you can visit the <a href="<?php echo site_url('contact'); ?>">Contact</a> page.</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
  </div>

</div>
<?php endif; ?>
<?php get_footer(); ?>