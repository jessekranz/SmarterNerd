<?php
/**
 * SmarterNerd Child Theme — functions.php
 * Enqueues fonts, styles, and scripts. Never hardcodes hex values.
 */

defined( 'ABSPATH' ) || exit;

/* ─── 1. Enqueue Google Fonts + child theme CSS ─── */
add_action( 'wp_enqueue_scripts', function () {

	// Google Fonts — Fraunces (editorial serif), Outfit (clean sans), JetBrains Mono (labels)
	wp_enqueue_style(
		'sn-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,700;1,9..144,400;1,9..144,700&family=Outfit:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap',
		[],
		null
	);

	// Parent Kadence theme
	wp_enqueue_style(
		'kadence-style',
		get_template_directory_uri() . '/style.css',
		[],
		wp_get_theme( 'kadence' )->get( 'Version' )
	);

	// Child theme CSS
	wp_enqueue_style(
		'sn-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'kadence-style', 'sn-fonts' ],
		wp_get_theme()->get( 'Version' )
	);

	// Scroll progress + reveal + typewriter JS
	wp_enqueue_script(
		'sn-interactions',
		get_stylesheet_directory_uri() . '/js/interactions.js',
		[],
		wp_get_theme()->get( 'Version' ),
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);

	// Counter animation JS
	wp_enqueue_script(
		'sn-counters',
		get_stylesheet_directory_uri() . '/js/counters.js',
		[],
		wp_get_theme()->get( 'Version' ),
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);

}, 20 );

/* ─── 2. Preconnect for Google Fonts performance ─── */
add_action( 'wp_head', function () {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}, 1 );

/* ─── 3. Theme support ─── */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
} );

/* ─── 4. LocalBusiness schema in footer (every page) ─── */
add_action( 'wp_footer', function () {
	$schema = [
		'@context'        => 'https://schema.org',
		'@type'           => 'LocalBusiness',
		'name'            => 'SmarterNerd',
		'url'             => 'https://www.smarternerd.com',
		'logo'            => 'https://www.smarternerd.com/wp-content/uploads/smarternerd-logo.png',
		'image'           => 'https://www.smarternerd.com/wp-content/uploads/smarternerd-og.jpg',
		'description'     => 'AI-powered web design, SEO, and digital marketing for South Florida small businesses.',
		'telephone'       => '+1-954-000-0000',
		'email'           => 'Jesse@SmarterNerd.com',
		'priceRange'      => '$$',
		'currenciesAccepted' => 'USD',
		'paymentAccepted'    => 'Cash, Credit Card, Invoice',
		'address'         => [
			'@type'           => 'PostalAddress',
			'streetAddress'   => 'Fort Lauderdale',
			'addressLocality' => 'Fort Lauderdale',
			'addressRegion'   => 'FL',
			'postalCode'      => '33301',
			'addressCountry'  => 'US',
		],
		'geo'             => [
			'@type'     => 'GeoCoordinates',
			'latitude'  => 26.1224,
			'longitude' => -80.1373,
		],
		'areaServed'      => [
			[ '@type' => 'City', 'name' => 'Fort Lauderdale' ],
			[ '@type' => 'City', 'name' => 'Miami' ],
			[ '@type' => 'State', 'name' => 'Florida' ],
		],
		'sameAs'          => [
			'https://www.facebook.com/smarternerd',
			'https://www.linkedin.com/company/smarternerd',
		],
		'openingHoursSpecification' => [
			[
				'@type'     => 'OpeningHoursSpecification',
				'dayOfWeek' => [ 'Monday','Tuesday','Wednesday','Thursday','Friday' ],
				'opens'     => '09:00',
				'closes'    => '18:00',
			],
		],
	];

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>';
}, 99 );

/* ─── 5. SearchAction schema (homepage only) ─── */
add_action( 'wp_footer', function () {
	if ( ! is_front_page() ) return;

	$schema = [
		'@context' => 'https://schema.org',
		'@type'    => 'WebSite',
		'name'     => 'SmarterNerd',
		'url'      => 'https://www.smarternerd.com',
		'potentialAction' => [
			'@type'       => 'SearchAction',
			'target'      => [
				'@type'       => 'EntryPoint',
				'urlTemplate' => 'https://www.smarternerd.com/?s={search_term_string}',
			],
			'query-input' => 'required name=search_term_string',
		],
	];

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>';
}, 99 );

/* ─── 6. Remove Kadence defaults we override ─── */
add_action( 'wp_enqueue_scripts', function () {
	// Prevent Kadence from loading its own Google Fonts if we supply ours
	wp_dequeue_style( 'kadence-google-fonts' );
}, 99 );

/* ─── 7. Body class for JS dark mode detection ─── */
add_filter( 'body_class', function ( $classes ) {
	$classes[] = 'sn-coastal';
	return $classes;
} );
