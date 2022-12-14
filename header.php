<?php
/**
 * The Header for your theme.
 *
 * Displays all of the <head> section and everything up until <div id="main">
 *
 * @package WordPress
 * @subpackage Boss
 * @since Boss 1.0.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="msapplication-tap-highlight" content="no"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-MJXXQBX');</script>

<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->

<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1298779233549568');
fbq('track', 'Lead');
</script>

<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1298779233549568&ev=Lead&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->
		<!-- BuddyPress and bbPress Stylesheets are called in wp_head, if plugins are activated -->
		<?php wp_head(); ?>
        <script>
var url = document.location.href;
jQuery(document).ready(function() {
//copy profile name to account name during registration
if (url.indexOf("register/") >= 0) {
    jQuery('label[for=field_1],#field_1').css('display','none');
    jQuery('#signup_username').blur(function(){
        jQuery("#field_1").val(jQuery("#signup_username").val());
    });
}
});
</script>
	</head>

	<?php
	global $rtl;
	$logo	 = ( boss_get_option( 'logo_switch' ) && boss_get_option( 'boss_logo', 'id' ) ) ? '1' : '0';
	$inputs	 = ( boss_get_option( 'boss_inputs' ) ) ? '1' : '0';
	$boxed	 = boss_get_option( 'boss_layout_style' );

    $header_style = boss_get_option('boss_header');
//    $boxed	 = 'fluid';
	?>

	<body <?php body_class(); ?> data-logo="<?php echo $logo; ?>" data-inputs="<?php echo $inputs; ?>" data-rtl="<?php echo ($rtl) ? 'true' : 'false'; ?>" data-header="<?php echo $header_style; ?>">
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJXXQBX"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
		<?php do_action( 'buddyboss_before_header' ); ?>

		<div id="scroll-to"></div>

		<header id="masthead" class="site-header" data-infinite="<?php echo ( boss_get_option( 'boss_activity_infinite' ) ) ? 'on' : 'off'; ?>">

			<div class="header-wrap">
				<div class="header-outher">
					<div class="header-inner">
						<?php get_template_part( 'template-parts/header-fluid-layout-column' ); ?>
						<?php if( '1' == $header_style ){ ?>
						<?php get_template_part( 'template-parts/header-middle-column' ); ?>
						<?php } ?>
						<?php get_template_part( 'template-parts/header-profile' ); ?>
					</div><!-- .header-inner -->
				</div><!-- .header-wrap -->
			</div><!-- .header-outher -->

			<div id="mastlogo">
				<?php get_template_part( 'template-parts/header-logo' ); ?>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div><!-- .mastlogo -->

		</header><!-- #masthead -->

		<?php do_action( 'buddyboss_after_header' ); ?>

		<?php get_template_part( 'template-parts/header-mobile' ); ?>

		<!-- #panels closed in footer-->
		<div id="panels" class="<?php echo (boss_get_option( 'boss_adminbar' )) ? 'with-adminbar' : ''; ?>">

			<!-- Left Panel -->
			<?php get_template_part( 'template-parts/left-panel' ); ?>
			<!-- Left Mobile Menu -->
			<?php get_template_part( 'template-parts/left-mobile-menu' ); ?>

			<div id="right-panel">
				<div id="right-panel-inner">
					<div id="main-wrap"> <!-- Wrap for Mobile content -->
						<div id="inner-wrap"> <!-- Inner Wrap for Mobile content -->

							<?php do_action( 'buddyboss_inside_wrapper' ); ?>

							<div id="page" class="hfeed site">
								<div id="main" class="wrapper">
