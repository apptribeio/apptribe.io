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
            <div id="content" class="homepage">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block block-about">
                            <h2>Who?</h2>
                            <p><strong>Hi, we’re Apptribe.</strong> We create mobile applications such as <a href="https://play.google.com/store/apps/details?id=pe.apptribe.limametro" target="_blank">LimaMetro</a>, <a href="https://play.google.com/store/apps/details?id=pe.applica.gasolima" target="_blank">Gasolima</a>, and <a href="https://play.google.com/store/apps/details?id=com.strobe.grillo" target="_blank">Cricket</a>. Meet our team or read our blog!</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="block block-apps">
                            <h2>Our Apps</h2>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="app">
                                        <img src="<?php bloginfo('template_url'); ?>/images/hero-limametro.png" Width="100%" />
                                        <h3>LimaMetro</h3>
                                        <p>¿Quieres saber qué estación tienes cerca? ¿No sabes cómo llegar? ¿Qué servicios tiene? No desesperes, LimaMetro al rescate. Con LimaMetro te podrás ubicar a ti y a las estaciones del Metropolitano de Lima rápidamente.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="app">
                                        <img src="<?php bloginfo('template_url'); ?>/images/hero-gasolima.png" width="100%" />
                                        <h3>GasoLima</h3>
                                        <p>GasoLima es la herramienta para cualquier conductor limeño. Encuentra grifos y estaciones de servicio cerca a ti. También te brinda información sobre los tipos de gasolina que puedes conseguir en cada uno.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="block block-members">
                            <h2>The Tribe</h2>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="member">
                                        <img src="https://www.gravatar.com/avatar/baad71601f251812e808f6422f859809" />
                                        <h3>Ronald Guillen</h3>
                                        <span class="meta">Overlord & Master Chief</span>
                                        <a href="mailto:ronald@apptribe.io" class="meta">ronald@apptribe.io</a>
                                        <span class="tagline"><em>"You know nothing, Jhoon Snow"</em></span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="member">
                                        <img src="https://www.gravatar.com/avatar/5635ba213391ff1947a6641615fe4354" />
                                        <h3>Jhoon Saravia</h3>
                                        <span class="meta">Hipster Samurai Cat</span>
                                        <a href="mailto:jhoon@aptribe.io" class="meta">jhoon@aptribe.io</a>
                                        <span class="tagline"><em>"Don’t panic. Everybody lies."</em></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="member">
                                        <img src="https://www.gravatar.com/avatar/d162dee6d5c7c5dcbdbbe5af0df87fe6" />
                                        <h3>Hansy Schmitt</h3>
                                        <span class="meta">Underpaid Android Minion</span>
                                        <a href="mailto:hansy@apptribe.io" class="meta">hansy@apptribe.io</a>
                                        <span class="tagline"><em>"Damn it, another buffer overflow."</em></span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="member">
                                        <img src="https://www.gravatar.com/avatar/f55dcd01726fa40a9638187c7ca66a44" />
                                        <h3>Kerry Perez</h3>
                                        <span class="meta">Code Hitchhiker</span>
                                        <a href="mailto:kerry@apptribe.io" class="meta">kerry@apptribe.io</a>
                                        <span class="tagline"><em>"I broke the build!"</em></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="block block-contact">
                            <h2>Get in Touch</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Apptribe S.A.C</h3>
                                    <ul class="address">
                                        <li>Jr. Colina 107</li>
                                        <li>Barranco, Lima - Peru</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="meta">
                                        <li><span>Phone</span>+1 (650) 691-8320</li>
                                        <li><span>Email</span><a href="mailto:info@apptribe.io">info@apptribe.io</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <span class="copy">&copy; 2015, Apptribe S.A.C All rights reserved.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
