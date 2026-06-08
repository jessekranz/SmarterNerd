<?php
/**
 * Custom Footer Template for SmarterNerd
 *
 * Used for custom full-width pages with neonspec design
 * Includes footer navigation and scripts
 *
 * @package Kadence_Child_SmarterNerd
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
    <!-- Footer -->
    <footer>
        <div class="fgrid">
            <!-- Brand Section -->
            <div class="fbrand">
                <a class="brand" href="<?php echo home_url( '/' ); ?>">
                    <span class="glyph"></span>SmarterNerd<sup>™</sup>
                </a>
                <p>AI, SEO & web design for South Florida business. Founder-led. Senior-only. Fort Lauderdale.</p>
            </div>

            <!-- Services Column -->
            <div class="fcol">
                <h4>Services</h4>
                <a href="<?php echo home_url( '/responsive-web-design/' ); ?>">Web Design</a>
                <a href="<?php echo home_url( '/search-engine-opimization/' ); ?>">SEO</a>
                <a href="<?php echo home_url( '/google-maps-listing/' ); ?>">Google Maps</a>
                <a href="<?php echo home_url( '/social-media/' ); ?>">Social Media</a>
            </div>

            <!-- Company Column -->
            <div class="fcol">
                <h4>Company</h4>
                <a href="<?php echo home_url( '/about/' ); ?>">About</a>
                <a href="<?php echo home_url( '/work/' ); ?>">Work</a>
                <a href="<?php echo home_url( '/pricing/' ); ?>">Pricing</a>
                <a href="<?php echo home_url( '/contact/' ); ?>">Contact</a>
            </div>

            <!-- Fort Lauderdale Column -->
            <div class="fcol">
                <h4>Fort Lauderdale</h4>
                <a href="mailto:Jesse@SmarterNerd.com">Jesse@SmarterNerd.com</a>
                <a href="#">South Florida + Remote</a>
                <a href="<?php echo home_url( '/contact/' ); ?>">Book a call →</a>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="fbot">
            <span>&copy; <?php echo date( 'Y' ); ?> SmarterNerd — Fort Lauderdale</span>
            <span>Built with AI precision · WordPress + Kadence</span>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Progress Bar on Scroll
        addEventListener('scroll', () => {
            const h = document.documentElement;
            const p = h.scrollTop / (h.scrollHeight - h.clientHeight);
            document.querySelector('.progress').style.width = (8 + p * 92) + '%';
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>
