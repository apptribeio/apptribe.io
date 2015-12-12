<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package AppTribe
 * @subpackage Tribe
 * @since Tribe 1.0
 */

get_header(); ?>
            <div id="content">
                <div class="row">
                    <div class="col-md-12"><img class="img-responsive" src="https://www.apptribe.io/wp-content/uploads/2015/12/developing-apps.jpg" /></div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div id="section">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mollis arcu eu ligula posuere, eu lobortis dolor dictum. Phasellus ut sapien odio. Ut blandit nisi vel libero lobortis varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            <p>Quisque placerat risus ut rutrum consectetur. Aenean in cursus sem. Phasellus et orci at erat condimentum suscipit eget in tellus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="sidebar">
                            <h2>The Tribe</h2>
                            <div class="member">
                                <h3>Ronald Guillen</h3>
                                <span class="meta">ronald@apptribe.io</span>
                                <span class="meta">You know nothing Jhoon Snow</span>
                            </div>
                            <div class="member">
                                <h3>Jhoon Saravia</h3>
                                <span class="meta">jhoon@aptribe.io</span>
                                <span class="meta">Not enough minerals</span>
                            </div>
                            <div class="member">
                                <h3>Kerry Perez</h3>
                                <span class="meta">kerry@apptribe.io</span>
                                <span class="meta">I broke the build</span>
                            </div>
                            <div class="member">
                                <h3>Hansy Schmith</h3>
                                <span class="meta">hansy@apptribe.io</span>
                                <span class="meta">Is this real life?</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>