<?php /**
 * Template Name: Contact
 */
 get_header();

?>

<section class="l-content-container">
  <div class="l-content-container__block l-content-container__block--intro">
    <header class="c-page-header">
      <h1>Contact <span class="u-blue-text">us</span></h1>
    </header>

    <div class="c-page-intro">
      <h4 class="u-heading--minor u-text--black">We’d like to hear from you</h4>
      <p>Find out more about what SAMi can do for your team and CHF patients. Our specialists are here to provide a demo and answer any of the questions you may have.</p>
    </div>

    <div class="u-body-copy u-blue-text">
      Kencor Health<br>
      440 North Wolfe Road<br>
      Sunnyvale, CA 94085
    </div>
  </div>

  <div class="l-content-container__block l-content-container__block--no-padding u-gradient--orange">
      <div class="l-section--contact">
        <h4 class="u-white-text">Request more info</h4>

        <div class="o-std-form-container">
          <form class="o-std-form js-std-form" name="contactForm">
            <input type="text" name="first-name" placeholder="First Name" required>
            <input type="text" name="last-name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="telephone" placeholder="(xxx) xxx-xxxx" required>
            <input type="text" name="organization" placeholder="Organization">

            <div class="o-std-form__footer u-text-align-center">
              <button type="submit" name="submit">Submit</button>
            </div>
          </form>

          <div class="o-std-form-confirmation js-std-form-confirmation u-body-copy u-white-text">
            <p>Thanks for contacting us. We'll be in touch soon.</p>
          </div>
        </div>

      </div>
      <div class="o-map js-map" id="map" data-address="440 North Wolfe Road Sunnyvale, CA 94085"></div>
  </div>
</section>

<?php get_footer(); ?>