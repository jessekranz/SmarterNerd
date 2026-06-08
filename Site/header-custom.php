<?php
/**
 * Custom Header Template for SmarterNerd
 *
 * Used for custom full-width pages with neonspec design
 * Includes progress bar and navigation
 *
 * @package Kadence_Child_SmarterNerd
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>

    <!-- Google Fonts for Neonspec Design -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Custom Neonspec Styles -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/neonspec-styles.css">
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Progress Bar -->
    <div class="progress"></div>

    <!-- Navigation Header -->
    <header>
        <nav>
            <a class="brand" href="<?php echo home_url( '/' ); ?>">
                <span class="glyph"></span>SmarterNerd<sup>™</sup>
            </a>

            <!-- Primary Navigation Menu -->
            <div class="nlinks">
                <a href="<?php echo home_url( '/' ); ?>">Home</a>
                <a href="<?php echo home_url( '/services/' ); ?>">Services</a>
                <a href="<?php echo home_url( '/work/' ); ?>">Work</a>
                <a href="<?php echo home_url( '/about/' ); ?>">About</a>
                <a href="<?php echo home_url( '/pricing/' ); ?>">Pricing</a>
            </div>

            <!-- CTA Button -->
            <a class="ncta" href="<?php echo home_url( '/contact/' ); ?>">Get Started →</a>
        </nav>
    </header>
