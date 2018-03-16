<?php
 get_header();

?>

<section class="l-content-container u-fixed">
  <div class="l-content-container__block l-content-container__block--intro">
    <header class="c-page-header">
      <h1>How<br> <span class="u-blue-text">it</span> works</h1>
    </header>

    <div class="u-body-copy">
      <ol class="c-page-nav c-page-nav--with-numbers">
        <li class="c-page-nav__link js-toggle-section-btn" data-section="intro"></li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="treatment-plan">Develop the treatment plan</li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="sami-goes-home">SAMi goes home</li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="sami-on-task">SAMi keeps your patient on task</li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="sami-connected">SAMi keeps loved ones connected</li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="sami-critical-information">SAMi analyzes critical information</li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="sami-tracks-patient">SAMi tracks your patient</li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="sami-high-risk-patients">SAMi screens high risk patients</li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="sami-empowers-team">SAMi empowers your team</li>
        <!-- li class="c-page-nav__link c-page-nav__link--separator js-toggle-section-btn" data-section="sami-efficiencies">SAMi creates efficiencies for your team </li -->
        <li class="c-page-nav__link c-page-nav__link--separator js-toggle-section-btn" data-section="meet-sami">Meet SAMi, your very own virtual care companion</li>
        <li class="c-page-nav__link js-toggle-section-btn" data-section="sami-integrations">SAMi Integrations</li>
      </ol>
    </div>
  </div>

  <div class="l-content-container__block l-content-container__block--no-padding u-hide@med">

    <nav class="c-sub-section-nav c-sub-section-nav--mobile js-sub-menu">
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="intro"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="treatment-plan"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-goes-home"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-on-task"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-connected"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-critical-information"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-tracks-patient"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-high-risk-patients"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-empowers-team"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-efficiencies"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="meet-sami"></li>
      <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-integrations"></li>
    </nav>

    <div class="l-section--newsroom u-gradient--orange is-active js-toggle-section" data-section="intro">
      <div class=" u-white-text">
        <h4>Let SAMi work for you</h4>

        <div class="u-med-text">
          <p>SAMiConnect integrates with the latest AI technology to keep your patients engaged in their treatment plan while keeping your team connected to how they are doing.  SAMi takes on the heavy lifting of gathering, interpreting, and reporting critical patient data collected from all connected devices. SAMi then processes and presents the data in a simple dashboard so your care team can take action.</p>
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="treatment-plan">
      <div class=" u-white-text">

        <img class="c-hiw-step-graphic" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step1.png" >


        <div class="u-med-text">
          <h4 class="u-heading--minor">Develop the treatment plan</h4>
          <p>It starts with a plan. Your clinical team will create the treatment plan for the patient to follow when they go home using SAMi. </p>
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--8 js-toggle-section" data-section="sami-goes-home">
      <div class=" u-white-text">

        <img class="c-hiw-step-graphic" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step2_FPO.png" >


        <div class="u-med-text">
          <h4 class="u-heading--minor">SAMi goes home</h4>
          <p>Your patient will go home with SAMi and all of the devices needed for your team to virtually monitor their vitals and make changes as needed. This includes a connected scale, blood pressure monitor, and pulse oximeter.</p>
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--9 js-toggle-section" data-section="sami-on-task">
      <div class=" u-white-text">

        <video class="c-hiw-step-graphic c-hiw-step-graphic--shadow js-video-player" data-index="4" data-size="small" >
          <source src="<?php echo get_template_directory_uri(); ?>/i/hiw/Kencor_HowItWorks_step3.mp4" type="video/mp4">
        </video>


        <div class="u-med-text">
          <h4 class="u-heading--minor">SAMi keeps your patient on task</h4>
          <p>Throughout the day, SAMi prompts the patient to take their medications, vitals and reminds them of doctor appointments.</p>
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--10 js-toggle-section" data-section="sami-connected">
      <div class=" u-white-text">

        <!--img class="c-hiw-step-graphic" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step4_FPO.png" -->

        <div class="c-hiw-step-graphic c-phone-animation-container js-phone-animation" data-size="small">
          <img class="c-phone-animation-container__placeholder" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step4_FPO.png" >
          <img class="c-phone-animation__phone js-animation__phone animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_phone.svg">
          <img class="c-phone-animation__people js-animation__people animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_people.svg">

          <div class="c-phone-dotted-lines">
            <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
            <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
            <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
            <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
            <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
            <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
          </div>

        </div>

        <div class="u-med-text">
          <h4 class="u-heading--minor">SAMi keeps loved ones connected</h4>
          <p>SAMi enables family and loved ones to be an active part of the patient care team. When your patient misses an activity, loved ones receive a notification for help.</p>
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--11 js-toggle-section" data-section="sami-critical-information">
      <div class=" u-white-text">

        <div class="c-hiw-step-graphic c-graph-animation js-graph-animation" data-size="small">


          <!-- background -->
          <img src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_nonmoving.svg">

          <!-- dark line -->
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1560 122" style="" xml:space="preserve" class="c-graph-animation__dark-line js-graph-animation__dark-line ">
<style type="text/css">
	.line-dark{fill:none;stroke:#336196;stroke-width:6;stroke-miterlimit:10;}
</style>
<g id="Layer_18">
</g>
<g id="Non-moving">
	<path class="line-dark tixogIUU_0" d="M19.4,95.1L254.4,93.5L518.1,1.5L767.8,113.2L1005,67.3L1005.7,67.4L1276.8,110L1540.6,108.7"></path>
</g>
<style>.tixogIUU_0{stroke-dasharray:1569 1571;stroke-dashoffset:1570;}.start .tixogIUU_0{animation:tixogIUU_draw 4000ms linear 0ms forwards;}@keyframes tixogIUU_draw{100%{stroke-dashoffset:0;}}@keyframes tixogIUU_fade{0%{stroke-opacity:1;}94.44444444444444%{stroke-opacity:1;}100%{stroke-opacity:0;}}</style></svg>

          <!-- dark line number -->
          <img class="c-graph-animation__dark-line__number js-graph-animation__dark-line__number animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_numbercircle1.svg">

          <!-- dark line dots -->
          <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--1 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle1.svg">

          <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--2 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle2.svg">

          <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--3 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle1.svg">

          <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--4 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle3.svg">

          <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--5 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle1.svg">

          <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--6 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle1.svg">



          <!-- light line -->
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1522.9 26.7" style="" xml:space="preserve" class="c-graph-animation__light-line js-graph-animation__light-line">
<style type="text/css">
	.light-line{fill:none;stroke:#6AAADD;stroke-width:6;stroke-miterlimit:10;}
</style>
<g id="Layer_18">
</g>
<g id="Non-moving">
	<path class="light-line BhaMyAcU_0" d="M0,7.2L244.3,4.8L496.5,2.5L496.6,2.5L748.8,24.2L993.5,22.4L1262.6,19.7L1522.8,16.7"></path>
</g>
<style>.BhaMyAcU_0{stroke-dasharray:1524 1526;stroke-dashoffset:1525;}.start .BhaMyAcU_0{animation:BhaMyAcU_draw 4000ms linear 0ms forwards;}@keyframes BhaMyAcU_draw{100%{stroke-dashoffset:0;}}@keyframes BhaMyAcU_fade{0%{stroke-opacity:1;}94.44444444444444%{stroke-opacity:1;}100%{stroke-opacity:0;}}</style></svg>

          <!-- light line number -->
          <img class="c-graph-animation__light-line__number js-graph-animation__light-line__number animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_numbercircle2.svg">

          <!-- light line dots -->
          <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--1 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle4.svg">

          <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--2 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle2.svg">

          <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--3 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle4.svg">

          <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--4 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle3.svg">

          <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--5 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle4.svg">

          <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--6 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle4.svg">


        </div>


        <div class="u-med-text">
          <h4 class="u-heading--minor">SAMi analyzes critical information</h4>
          <p>SAMi brings it all together. SAMi’s clinician driven ai is uniquely designed to automatically collect and analyze real-time vitals and health data through the patient’s connected devices.</p>
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--12 js-toggle-section" data-section="sami-tracks-patient">
      <div class=" u-white-text">

        <img class="c-hiw-step-graphic" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step6.png" >


        <div class="u-med-text">
          <h4 class="u-heading--minor">SAMi tracks your patient</h4>
          <p>SAMi makes visibility to real-time vitals possible. Using advanced machine learning principles, patient data is collected, analyzed and presented in a simple dashboard so your team knows at a glance when they need to take action.</p>
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--13 js-toggle-section" data-section="sami-high-risk-patients">
      <div class=" u-white-text">

        <video class="c-hiw-step-graphic c-hiw-step-graphic--shadow js-video-player" data-index="8" data-size="small" >
          <source src="<?php echo get_template_directory_uri(); ?>/i/hiw/Kencor_HowItWorks_step7.mp4" type="video/mp4">
        </video>


        <div class="u-med-text">
          <h4 class="u-heading--minor">SAMi screens high risk patients</h4>
          <p>Your clinical team can have SAMi ask your patient additional risk screening questions.  This helps your team make treatment adjustments as needed and eliminate unnecessary follow ups.</p>
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--4 js-toggle-section" data-section="sami-empowers-team">
      <div class=" u-white-text">
        <video class="c-hiw-step-graphic c-hiw-step-graphic--shadow js-video-player" data-index="9" data-size="small" >
          <source src="<?php echo get_template_directory_uri(); ?>/i/hiw/Kencor_HowItWorks_step8.mp4" type="video/mp4">
        </video>


        <div class="u-med-text">
          <h4 class="u-heading--minor">SAMi empowers your team</h4>
          <p>SAMi’s custom algorithm is designed to analyze and prioritize the patient data collected for your team. With the right information at the right time, your clinical team can determine if changes need to be made to the treatment plan to keep the patient on track. </p>
        </div>
      </div>
    </div>

    <!-- div class="l-section--newsroom u-gradient--3 js-toggle-section" data-section="sami-efficiencies">
      <div class=" u-white-text">

        <div class="u-med-text">
          <h4 class="u-heading--minor">SAMi creates efficiencies for your team</h4>
          <p>SAMi creates an ecosystem that connects your team to the most essential information sources they need to make decisions. SAMi does this by seamlessly integrating with the patients’ connected devices, health team inputs and electronic health records. This streamlines operations and helps your team work faster.</p>
        </div>
      </div>
    </div -->

    <div class="l-section--newsroom u-gradient--14 js-toggle-section" data-section="meet-sami">
      <div class=" u-white-text">

        <div class="u-med-text">
          <h4 class="u-heading--minor">Meet SAMi, your very own virtual care companion</h4>
          <p>SAMi makes the transition back to home easier for your patient. Following the treatment plan set by your care team, SAMi will learn and evolve as information is gathered over time.  Each day SAMi will prompt the patient to answer simple questions and follow her friendly reminders.  SAMi’s ai monitors your patient’s progress and relays their health information directly to your care team. With SAMi, it’s like your care team is right there at home with the patient.</p>
        </div>
      </div>
    </div>

    <div class="l-section--newsroom u-gradient--15 js-toggle-section" data-section="sami-integrations">
      <div class=" u-white-text">

        <div class="c-hiw-step-graphic c-integrations-animation">
          <img class="c-integrations-animation__placeholder" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step11_FPO.png" >


          <!-- Labels -->
          <div class="c-integrations-animation__label c-integrations-animation__label--1 js-integrations-animation__label animated" data-size="small">Patient<br>Inputs</div>

          <div class="c-integrations-animation__label c-integrations-animation__label--2 js-integrations-animation__label animated" data-size="small">Connected<br>Devices</div>

          <div class="c-integrations-animation__label c-integrations-animation__label--3 js-integrations-animation__label animated" data-size="small">Electronic<br>Health<br>Records</div>

          <div class="c-integrations-animation__label c-integrations-animation__label--4 js-integrations-animation__label animated" data-size="small">Health<br>Team Inputs</div>



          <!-- Center -->
          <img class="c-integrations-animation__center" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_SAMi.svg">


          <!-- Patient Inputs -->
          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--1 js-integrations-animation__dot animated--patient--1">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
            <span class="c-integrations-animation__dot__label">Google<br>Home</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--2 js-integrations-animation__dot animated--patient--2">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
            <span class="c-integrations-animation__dot__label">Amazon<br>Alexa</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--3 js-integrations-animation__dot animated--patient--3">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
            <span class="c-integrations-animation__dot__label">Android<br>Phone</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--4 js-integrations-animation__dot animated--patient--4">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
            <span class="c-integrations-animation__dot__label">iOS<br>Phone</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--5 js-integrations-animation__dot animated--patient--5">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
            <span class="c-integrations-animation__dot__label">iPad</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--6 js-integrations-animation__dot animated--patient--6">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
            <span class="c-integrations-animation__dot__label">Computer</span>
          </div>

          <!-- Connected Devices -->
          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--connected c-integrations-animation__dot--connected--1 js-integrations-animation__dot animated--connected--1">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientDevices.svg">
            <span class="c-integrations-animation__dot__label">Pulse<br>Oximeters</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--connected c-integrations-animation__dot--connected--2 js-integrations-animation__dot animated--connected--2">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientDevices.svg">
            <span class="c-integrations-animation__dot__label">Scales</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--connected c-integrations-animation__dot--connected--3 js-integrations-animation__dot animated--connected--3">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientDevices.svg">
            <span class="c-integrations-animation__dot__label">Blood<br>Pressure</span>
          </div>

          <!-- Electronic Health Records -->
          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--ehr c-integrations-animation__dot--ehr--1 js-integrations-animation__dot animated--ehr--1">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_ElectronicHealth.svg">
            <span class="c-integrations-animation__dot__label">Open<br>APIs</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--ehr c-integrations-animation__dot--ehr--2 js-integrations-animation__dot animated--ehr--2">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_ElectronicHealth.svg">
            <span class="c-integrations-animation__dot__label">Epic</span>
          </div>

          <!-- Health Team Inputs -->
          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--1 js-integrations-animation__dot animated--hti--1">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
            <span class="c-integrations-animation__dot__label">EHR</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--2 js-integrations-animation__dot animated--hti--2">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
            <span class="c-integrations-animation__dot__label">Computer</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--3 js-integrations-animation__dot animated--hti--3">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
            <span class="c-integrations-animation__dot__label">Android<br>Phone</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--4 js-integrations-animation__dot animated--hti--4">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
            <span class="c-integrations-animation__dot__label">iOS<br>Phone</span>
          </div>

          <div data-size="small" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--5 js-integrations-animation__dot animated--hti--5">
            <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
            <span class="c-integrations-animation__dot__label">iPad</span>
          </div>

          <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--1 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--2 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--3 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--4 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--5 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--6 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--7 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--8 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--9 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--10 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--11 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--12 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--13 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--14 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--15 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1.5,0L1.5,345.3"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--16 js-integrations-animation__line" data-size="small">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>




        </div>

        <div class="u-med-text">
          <h4 class="u-heading--minor">SAMi creates efficiencies for your team</h4>
          <p>SAMi creates an ecosystem that connects your team to the most essential information sources they need to make decisions. SAMi does this by seamlessly integrating with the patients’ connected devices, health team inputs and electronic health records. This streamlines operations and helps your team work faster.</p>
        </div>
      </div>
    </div>

  </div>
</section>


<nav class="c-sub-section-nav js-sub-menu">
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="intro"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="treatment-plan"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-goes-home"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-on-task"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-connected"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-critical-information"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-tracks-patient"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-high-risk-patients"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-empowers-team"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-efficiencies"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="meet-sami"></li>
  <li class="c-sub-section-nav__btn js-toggle-section-btn" data-section="sami-integrations"></li>
</nav>


<div id="fullpage" class="u-show@med" >
  <div class="section">
    <section class="l-content-container">
      <div class="l-content-container__block">

      </div>

      <div class="l-content-container__block l-content-container__block--no-padding">
        <div class="l-section--newsroom u-gradient--orange is-active js-toggle-section" data-section="intro">


          <div class=" u-white-text">

            <div class="c-hiw-intro-graphic">
              <img class="c-hiw-intro-graphic__placeholder" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/intro/hiw-intro-placeholder.jpg">
              <div class="c-hiw-intro-graphic__circle js-hiw-intro-graphic__circle"></div>

              <div class="c-hiw-intro-graphic__step c-hiw-intro-graphic__step--1 js-hiw-intro-graphic__step animated">
                <img src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/intro/Intro_SAMi_icon.svg" class="c-hiw-intro-graphic__step__icon">
                <div class="c-hiw-intro-graphic__step__label">Conversational Bot</div>
              </div>


              <div class="c-hiw-intro-graphic__step c-hiw-intro-graphic__step--2 js-hiw-intro-graphic__step animated">
                <img src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/intro/Intro_IVR_icon.svg" class="c-hiw-intro-graphic__step__icon">
                <div class="c-hiw-intro-graphic__step__label">Phone / IVR</div>
              </div>

              <div class="c-hiw-intro-graphic__step c-hiw-intro-graphic__step--3 js-hiw-intro-graphic__step animated">
                <img src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/intro/Intro_Alexa_icon.svg" class="c-hiw-intro-graphic__step__icon">
                <div class="c-hiw-intro-graphic__step__label">Voice AI<br>Alexa, Google Home</div>
              </div>

              <div class="c-hiw-intro-graphic__step c-hiw-intro-graphic__step--4 js-hiw-intro-graphic__step animated">
                <img src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/intro/Intro_Computer_icon.svg" class="c-hiw-intro-graphic__step__icon">
                <div class="c-hiw-intro-graphic__step__label">Traditional<br> patient portals</div>
              </div>

            </div>

            <h4>Let SAMi work for you</h4>

            <div class="u-med-text">
              <p>SAMiConnect integrates with the latest AI technology to keep your patients engaged in their treatment plan while keeping your team connected to how they are doing.  SAMi takes on the heavy lifting of gathering, interpreting, and reporting critical patient data collected from all connected devices. SAMi then processes and presents the data in a simple dashboard so your care team can take action.</p>
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
        <div class="l-section--newsroom u-gradient--2 js-toggle-section" data-section="treatment-plan">
          <div class=" u-white-text">

            <img class="c-hiw-step-graphic" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step1.png" >


            <div class="u-med-text">
              <h4 class="u-heading--minor">Develop the treatment plan</h4>
              <p>It starts with a plan. Your clinical team will create the treatment plan for the patient to follow when they go home using SAMi. </p>
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
        <div class="l-section--newsroom u-gradient--8 js-toggle-section" data-section="sami-goes-home">
          <div class=" u-white-text">

            <img class="c-hiw-step-graphic" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step2_FPO.png" >


            <div class="u-med-text">
              <h4 class="u-heading--minor">SAMi goes home</h4>
              <p>Your patient will go home with SAMi and all of the devices needed for your team to virtually monitor their vitals and make changes as needed. This includes a connected scale, blood pressure monitor, and pulse oximeter.</p>
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
        <div class="l-section--newsroom u-gradient--9 js-toggle-section" data-section="sami-on-task">
          <div class=" u-white-text">

            <video class="c-hiw-step-graphic c-hiw-step-graphic--shadow js-video-player" data-index="4" data-size="big" >
              <source src="<?php echo get_template_directory_uri(); ?>/i/hiw/Kencor_HowItWorks_step3.mp4" type="video/mp4">
            </video>


            <div class="u-med-text">
              <h4 class="u-heading--minor">SAMi keeps your patient on task</h4>
              <p>Throughout the day, SAMi prompts the patient to take their medications, vitals and reminds them of doctor appointments.</p>
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
        <div class="l-section--newsroom u-gradient--10 js-toggle-section" data-section="sami-connected">
          <div class=" u-white-text">
            <div class="c-hiw-step-graphic c-phone-animation-container js-phone-animation" data-size="big">
              <img class="c-phone-animation-container__placeholder" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step4_FPO.png" >
              <img class="c-phone-animation__phone js-animation__phone animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_phone.svg">
              <img class="c-phone-animation__people js-animation__people animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_people.svg">

              <div class="c-phone-dotted-lines">
                <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
                <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
                <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
                <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
                <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
                <img class="c-phone-dotted-line js-phone-dotted-line animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg">
              </div>

            </div>


            <div class="u-med-text">
              <h4 class="u-heading--minor">SAMi keeps loved ones connected</h4>
              <p>SAMi enables family and loved ones to be an active part of the patient care team. When your patient misses an activity, loved ones receive a notification for help.</p>
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
        <div class="l-section--newsroom u-gradient--11 js-toggle-section" data-section="sami-critical-information">
          <div class=" u-white-text">

            <div class="c-hiw-step-graphic c-graph-animation js-graph-animation" data-size="big">


              <!-- background -->
              <img src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_nonmoving.svg">

              <!-- dark line -->
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1560 122" style="" xml:space="preserve" class="c-graph-animation__dark-line js-graph-animation__dark-line ">
<style type="text/css">
	.line-dark{fill:none;stroke:#336196;stroke-width:6;stroke-miterlimit:10;}
</style>
<g id="Layer_18">
</g>
<g id="Non-moving">
	<path class="line-dark tixogIUU_0" d="M19.4,95.1L254.4,93.5L518.1,1.5L767.8,113.2L1005,67.3L1005.7,67.4L1276.8,110L1540.6,108.7"></path>
</g>
<style>.tixogIUU_0{stroke-dasharray:1569 1571;stroke-dashoffset:1570;}.start .tixogIUU_0{animation:tixogIUU_draw 3000ms linear 0ms forwards;}@keyframes tixogIUU_draw{100%{stroke-dashoffset:0;}}@keyframes tixogIUU_fade{0%{stroke-opacity:1;}94.44444444444444%{stroke-opacity:1;}100%{stroke-opacity:0;}}</style></svg>

              <!-- dark line number -->
              <img class="c-graph-animation__dark-line__number js-graph-animation__dark-line__number animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_numbercircle1.svg">

              <!-- dark line dots -->
              <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--1 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle1.svg">

              <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--2 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle2.svg">

              <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--3 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle1.svg">

              <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--4 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle3.svg">

              <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--5 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle1.svg">

              <img class="c-graph-animation__dark-line__dot c-graph-animation__dark-line__dot--6 js-graph-animation__dark-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle1.svg">



              <!-- light line -->
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1522.9 26.7" style="" xml:space="preserve" class="c-graph-animation__light-line js-graph-animation__light-line">
<style type="text/css">
	.light-line{fill:none;stroke:#6AAADD;stroke-width:6;stroke-miterlimit:10;}
</style>
<g id="Layer_18">
</g>
<g id="Non-moving">
	<path class="light-line BhaMyAcU_0" d="M0,7.2L244.3,4.8L496.5,2.5L496.6,2.5L748.8,24.2L993.5,22.4L1262.6,19.7L1522.8,16.7"></path>
</g>
<style>.BhaMyAcU_0{stroke-dasharray:1524 1526;stroke-dashoffset:1525;}.start .BhaMyAcU_0{animation:BhaMyAcU_draw 3000ms linear 0ms forwards;}@keyframes BhaMyAcU_draw{100%{stroke-dashoffset:0;}}@keyframes BhaMyAcU_fade{0%{stroke-opacity:1;}94.44444444444444%{stroke-opacity:1;}100%{stroke-opacity:0;}}</style></svg>

              <!-- light line number -->
              <img class="c-graph-animation__light-line__number js-graph-animation__light-line__number animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_numbercircle2.svg">

              <!-- light line dots -->
              <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--1 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle4.svg">

              <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--2 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle2.svg">

              <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--3 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle4.svg">

              <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--4 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle3.svg">

              <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--5 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle4.svg">

              <img class="c-graph-animation__light-line__dot c-graph-animation__light-line__dot--6 js-graph-animation__light-line__dot animated" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step5/Kencor_HowItWorks_Step5_smcircle4.svg">


            </div>






            <div class="u-med-text">
              <h4 class="u-heading--minor">SAMi analyzes critical information</h4>
              <p>SAMi brings it all together. SAMi’s clinician driven ai is uniquely designed to automatically collect and analyze real-time vitals and health data through the patient’s connected devices.</p>
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
        <div class="l-section--newsroom u-gradient--12 js-toggle-section" data-section="sami-tracks-patient">
          <div class=" u-white-text">

            <img class="c-hiw-step-graphic" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step6.png" >


            <div class="u-med-text">
              <h4 class="u-heading--minor">SAMi tracks your patient</h4>
              <p>SAMi makes visibility to real-time vitals possible. Using advanced machine learning principles, patient data is collected, analyzed and presented in a simple dashboard so your team knows at a glance when they need to take action.</p>
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
        <div class="l-section--newsroom u-gradient--13 js-toggle-section" data-section="sami-high-risk-patients">
          <div class=" u-white-text">


            <video class="c-hiw-step-graphic c-hiw-step-graphic--shadow js-video-player" data-index="8" data-size="big" >
              <source src="<?php echo get_template_directory_uri(); ?>/i/hiw/Kencor_HowItWorks_step7.mp4" type="video/mp4">
            </video>


            <div class="u-med-text">
              <h4 class="u-heading--minor">SAMi screens high risk patients</h4>
              <p>Your clinical team can have SAMi ask your patient additional risk screening questions.  This helps your team make treatment adjustments as needed and eliminate unnecessary follow ups.</p>
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
        <div class="l-section--newsroom u-gradient--4 js-toggle-section" data-section="sami-empowers-team">
          <div class=" u-white-text">

            <video class="c-hiw-step-graphic c-hiw-step-graphic--shadow js-video-player" data-index="9" data-size="big">
              <source src="<?php echo get_template_directory_uri(); ?>/i/hiw/Kencor_HowItWorks_step8.mp4" type="video/mp4">
            </video>


            <div class="u-med-text">
              <h4 class="u-heading--minor">SAMi empowers your team</h4>
              <p>SAMi’s custom algorithm is designed to analyze and prioritize the patient data collected for your team. With the right information at the right time, your clinical team can determine if changes need to be made to the treatment plan to keep the patient on track. </p>
            </div>
          </div>
          <div class="c-scroll-next-btn-container u-text-align-center">
            <div class="c-scroll-next-btn js-scroll-next-btn"><i class="fa fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </section>
  </div>



  <!-- div class="section">
    <section class="l-content-container">
      <div class="l-content-container__block">

      </div>

      <div class="l-content-container__block l-content-container__block--no-padding">
        <div class="l-section--newsroom u-gradient--3 js-toggle-section" data-section="sami-efficiencies">
          <div class=" u-white-text">

            <div class="u-med-text">
              <h4 class="u-heading--minor">SAMi creates efficiencies for your team</h4>
              <p>SAMi’s ai is working hard so your team can work faster. SAMi creates the ecosystem that connects your team to the most essential information sources they need to track the patient and make decisions. SAMi does this by seamlessly integrating with the patients’ connected devices, health team inputs and electronic health records. This streamlines operations so that all stakeholders have instant access to the most vital information when they need it.</p>
            </div>
          </div>
          <div class="c-scroll-next-btn-container u-text-align-center">
            <div class="c-scroll-next-btn js-scroll-next-btn"><i class="fa fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </section>
  </div -->



  <div class="section">
    <section class="l-content-container">
      <div class="l-content-container__block">

      </div>

      <div class="l-content-container__block l-content-container__block--no-padding">
        <div class="l-section--newsroom u-gradient--14 js-toggle-section" data-section="meet-sami">
          <div class=" u-white-text">

            <div class="u-med-text">
              <h4 class="u-heading--minor">Meet SAMi, your very own virtual care companion</h4>
              <p>SSAMi makes the transition back to home easier for your patient. Following the treatment plan set by your care team, SAMi will learn and evolve as information is gathered over time.  Each day SAMi will prompt the patient to answer simple questions and follow her friendly reminders.  SAMi’s ai monitors your patient’s progress and relays their health information directly to your care team. With SAMi, it’s like your care team is right there at home with the patient.</p>
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
        <div class="l-section--newsroom u-gradient--15 js-toggle-section" data-section="sami-integrations">
          <div class=" u-white-text">

            <div class="c-hiw-step-graphic c-integrations-animation">
              <img class="c-integrations-animation__placeholder" src="<?php echo get_template_directory_uri(); ?>/i/hiw/Step11_FPO.png" >


              <!-- Labels -->
              <div class="c-integrations-animation__label c-integrations-animation__label--1 js-integrations-animation__label animated" data-size="big">Patient<br>Inputs</div>

              <div class="c-integrations-animation__label c-integrations-animation__label--2 js-integrations-animation__label animated" data-size="big">Connected<br>Devices</div>

              <div class="c-integrations-animation__label c-integrations-animation__label--3 js-integrations-animation__label animated" data-size="big">Electronic<br>Health<br>Records</div>

              <div class="c-integrations-animation__label c-integrations-animation__label--4 js-integrations-animation__label animated" data-size="big">Health<br>Team Inputs</div>



              <!-- Center -->
              <img class="c-integrations-animation__center" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_SAMi.svg">


              <!-- Patient Inputs -->
              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--1 js-integrations-animation__dot animated--patient--1">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
                <span class="c-integrations-animation__dot__label">Google<br>Home</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--2 js-integrations-animation__dot animated--patient--2">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
                <span class="c-integrations-animation__dot__label">Amazon<br>Alexa</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--3 js-integrations-animation__dot animated--patient--3">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
                <span class="c-integrations-animation__dot__label">Android<br>Phone</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--4 js-integrations-animation__dot animated--patient--4">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
                <span class="c-integrations-animation__dot__label">iOS<br>Phone</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--5 js-integrations-animation__dot animated--patient--5">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
                <span class="c-integrations-animation__dot__label">iPad</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--patient c-integrations-animation__dot--patient--6 js-integrations-animation__dot animated--patient--6">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientInputs.svg">
                <span class="c-integrations-animation__dot__label">Computer</span>
              </div>

              <!-- Connected Devices -->
              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--connected c-integrations-animation__dot--connected--1 js-integrations-animation__dot animated--connected--1">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientDevices.svg">
                <span class="c-integrations-animation__dot__label">Pulse<br>Oximeters</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--connected c-integrations-animation__dot--connected--2 js-integrations-animation__dot animated--connected--2">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientDevices.svg">
                <span class="c-integrations-animation__dot__label">Scales</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--connected c-integrations-animation__dot--connected--3 js-integrations-animation__dot animated--connected--3">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_PatientDevices.svg">
                <span class="c-integrations-animation__dot__label">Blood<br>Pressure</span>
              </div>

              <!-- Electronic Health Records -->
              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--ehr c-integrations-animation__dot--ehr--1 js-integrations-animation__dot animated--ehr--1">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_ElectronicHealth.svg">
                <span class="c-integrations-animation__dot__label">Open<br>APIs</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--ehr c-integrations-animation__dot--ehr--2 js-integrations-animation__dot animated--ehr--2">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_ElectronicHealth.svg">
                <span class="c-integrations-animation__dot__label">Epic</span>
              </div>

              <!-- Health Team Inputs -->
              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--1 js-integrations-animation__dot animated--hti--1">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
                <span class="c-integrations-animation__dot__label">EHR</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--2 js-integrations-animation__dot animated--hti--2">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
                <span class="c-integrations-animation__dot__label">Computer</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--3 js-integrations-animation__dot animated--hti--3">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
                <span class="c-integrations-animation__dot__label">Android<br>Phone</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--4 js-integrations-animation__dot animated--hti--4">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
                <span class="c-integrations-animation__dot__label">iOS<br>Phone</span>
              </div>

              <div data-size="big" class="c-integrations-animation__dot js-integrations-animation__dot animated c-integrations-animation__dot--hti c-integrations-animation__dot--hti--5 js-integrations-animation__dot animated--hti--5">
                <img class="c-integrations-animation__dot__point" src="<?php echo get_template_directory_uri(); ?>/i/hiw/animations/step11/Step11_HealthTeamInputs.svg">
                <span class="c-integrations-animation__dot__label">iPad</span>
              </div>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--1 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--2 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--3 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--4 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--5 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--6 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--7 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--8 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--9 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--10 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--11 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--12 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--13 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--14 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--15 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1.5,0L1.5,345.3"></path>
	</g>
</g>
</svg>

              <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2.5 345.3" style="" xml:space="preserve" class="c-integrations-animation__line c-integrations-animation__line--16 js-integrations-animation__line" data-size="big">
<title>Step11_line</title>
<g id="Layer_2">
	<g id="Layer_1-2">
		<path class="c-integrations-animation__line__svg mRcdJPSR_0" d="M1,345.3L1,0"></path>
	</g>
</g>
</svg>




            </div>

            <div class="u-med-text">
              <h4 class="u-heading--minor">SAMi creates efficiencies for your team</h4>
              <p>SAMi creates an ecosystem that connects your team to the most essential information sources they need to make decisions. SAMi does this by seamlessly integrating with the patients’ connected devices, health team inputs and electronic health records. This streamlines operations and helps your team work faster.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>


</div>


<?php get_footer(); ?>