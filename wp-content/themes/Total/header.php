<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Total WordPress Theme
 * @subpackage Templates
 * @version 4.5.4
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?><!DOCTYPE html>
<html <?php language_attributes(); ?><?php wpex_schema_markup( 'html' ); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="p:domain_verify" content="0439cec1f6c140e99b9ffd5d1a5b7836"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Muli:300,400,600,700,800|Raleway:400,600,700|Roboto+Slab:400,700" rel="stylesheet">	
	
	

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/jquery.convform.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/demo.css">
	
	
	<script type='text/javascript'>
window.__lo_site_id = 139569;

	(function() {
		var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
		wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
	  })();
	</script>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDQ92DG');</script>
<!-- End Google Tag Manager -->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDQ92DG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <script type="text/javascript">
_linkedin_partner_id = "402603";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=402603&fmt=gif" />
</noscript>


	<?php wpex_outer_wrap_before(); ?>

	<div id="outer-wrap" class="clr">

		<?php wpex_hook_wrap_before(); ?>

		<div id="wrap" class="clr">

			<?php wpex_hook_wrap_top(); ?>

			<?php wpex_hook_main_before(); ?>

			<main id="main" class="site-main clr"<?php wpex_schema_markup( 'main' ); ?><?php wpex_aria_landmark( 'main' ); ?>>

				<?php wpex_hook_main_top(); ?>