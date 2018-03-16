<?php
if(is_page('how-it-works') || is_page('press-kits') || is_page('press-kit') || is_front_page() || is_page('home') || is_page('policies-terms')):
    $overflowClass = 'u-no-overflow';
endif;

$detect = new Mobile_Detect;
?>

<!doctype html>
<html class="<?php echo $overflowClass; ?>">
<head>
    <title>Kencor Health</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <?php wp_head(); ?>
</head>
<body <?php body_class($overflowClass); ?>  <?php if ( !$detect->isMobile() ): ?>data-animation="parallax" data-hijacking="on" <?php endif; ?>>
<nav class="c-navigation c-navigation--main js-navigation--main">
    <li><a <?php if(is_page('home')): ?> class="is-current" <?php endif; ?> href="<?php echo site_url(); ?>">Home</a></li>
    <li><a <?php if(is_page('how-sami-works') || is_page('how-it-works')): ?> class="is-current" <?php endif; ?> href="<?php echo site_url('how-it-works'); ?>">How it Works</a></li>
    <li><a <?php if(is_page('our-team')): ?> class="is-current" <?php endif; ?> href="<?php echo site_url('our-team'); ?>">Our Team</a></li>
    <li><a <?php if(is_page('press-kit')): ?> class="is-current" <?php endif; ?> href="<?php echo site_url('press-kit'); ?>">Press Kit</a></li>
    <li><a <?php if(is_page('contact')): ?> class="is-current" <?php endif; ?> href="<?php echo site_url('contact'); ?>">Contact</a></li>
    <li><a <?php if(is_page('policies-terms')): ?> class="is-current" <?php endif; ?> href="<?php echo site_url('policies-terms'); ?>">Policies & Terms</a></li>
</nav>
<div class="c-site-navigation-toggle js-site-navigation-toggle">
    <div class="c-site-navigation-toggle__inner"></div>
</div>
<header class="c-site-header js-site-header headroom">
    <a href="<?php echo site_url(); ?>/" class="c-site-logo"><img src="<?php echo get_template_directory_uri(); ?>/i/kencor-logo.png" alt="Kencor Health"></a>

</header>
<div class="l-site-wrapper js-site-wrapper">