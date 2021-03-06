<?php
    require_once('common.php');
    require_once('includes/header.inc.php');
?>

        <a href="#home" class="btn btn-up"></a>

        <!-- Home -->
        <section class="section section-home is-parallaxed" id="home">
            <div class="overlay-pattern"></div>
            <div class="title-home">
                <h1><?php echo $lang['HOME_WELCOME_1']; ?></h1>
                <h3><?php echo $lang['HOME_WELCOME_2']; ?></h3>
            </div>
            <div class="cookie">
                <p><?php echo $lang['COOKIE_TEXT']; ?></p>
            </div>
            <a href="#about">
                <span class="icon icon-scroll"></span>
            </a>
        </section>

        <!-- Punchline -->
        <section class="section-punchline is-hidden" id="punchline">
            <div class="row">
                <h2>I <strong>code</strong>, I <strong>design</strong> and</h2>
                <h1>I iz <span>dolan</span>.</h1>
            </div>
        </section>

        <!-- Early Access Portfolio -->
        <section class="section-early-access is-hidden" id="early-access">
            <section>
                <div class="row-small">
                    <h2><?php echo $lang['EARLY_ACCESS_TITLE']; ?></h2>
                    <h3><?php echo $lang['EARLY_ACCESS_SUBTITLE']; ?></h3>
                    <p><?php echo $lang['EARLY_ACCESS_DESC']; ?></p>
                </div>
            </section>
            <section>
                <div class="row-small">
                    <p><?php echo $lang['EARLY_ACCESS_DEV']; ?></p>
                    <h3><strong><?php echo $lang['EARLY_ACCESS_WHY']; ?></strong></h3>
                    <p><em><?php echo $lang['EARLY_ACCESS_ANSWER']; ?></em></p>
                    <hr>
                </div>
            </section>
            <a href="#" title="<?php echo $lang['EARLY_ACCESS_CLOSE_TITLE']; ?>" class="btn btn-steam"><?php echo $lang['EARLY_ACCESS_CLOSE']; ?></a>
            <div class="clear"></div>
        </section>

        <!-- About -->
        <section class="section section-about" id="about">
            <div class="row">
                <h2 class="title title-section title-about"><?php echo $lang['ABOUT_TITLE']; ?></h2>
                <h3 class="subtitle subtitle-about"><?php echo $lang['ABOUT_SUBTITLE']; ?></h3>
                <div class="content">
                    <p><big><?php echo $lang['ABOUT_HELLO']; ?></big></p>
                    <p><?php echo $lang['ABOUT_TEXT_1']; ?></p>
                    <p><?php echo $lang['ABOUT_TEXT_JOB']; ?></p>
                    <p><?php echo $lang['ABOUT_TEXT_2']; ?></p>
                    <p><strong><?php echo $lang['ABOUT_TEXT_3']; ?></strong></p>
                </div>
                <div class="content">
                    <img src="images/portrait.png" width=200 height=200 alt="<?php echo $lang['ABOUT_PORTRAIT_ALT']; ?>">
                </div>
                <div class="clear"></div>
                <a href="images/documents/<?php echo $lang['ABOUT_CV_FILE']; ?>" title="<?php echo $lang['ABOUT_CV_TITLE']; ?>" class="btn btn-primary btn-cv is-ninja" target="_blank"><span><?php echo $lang['ABOUT_CV']; ?></span></a>
            </div>
        </section>

        <!-- Works -->
        <section class="section section-works" id="works">
            <div class="row">
                <div class="title-container">
                    <h2 class="title title-section title-works"><?php echo $lang['WORKS_TITLE']; ?></h2>
                </div>
                <h3 class="subtitle subtitle-works"><?php echo $lang['WORKS_SUBTITLE']; ?></h3>
                <ul class="list list-filters-container">
                    <li class="list list-item list-filters active-filter" data-category="all"><?php echo $lang['WORKS_FILTERS_ALL']; ?></li>
                    <li class="list list-item list-filters" data-category="dev"><?php echo $lang['WORKS_FILTERS_CATEGORY_1']; ?></li>
                    <li class="list list-item list-filters" data-category="webdesign"><?php echo $lang['WORKS_FILTERS_CATEGORY_2']; ?></li>
                    <li class="list list-item list-filters" data-category="graphic"><?php echo $lang['WORKS_FILTERS_CATEGORY_3']; ?></li>
                    <li class="list list-item list-filters" data-category="audiovisual"><?php echo $lang['WORKS_FILTERS_CATEGORY_4']; ?></li>
                </ul>
                <ul class="list list-works-container clearfix">
                    <li class="list list-item list-works webdesign graphic">
                        <img src="images/works/portfolio-simon-trichereau.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_PORTFOLIO_SIMON_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_PORTFOLIO_SIMON_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="https://www.figma.com/file/r4z0bmmYHEX42Wm2sEcXW0/Ressources?node-id=0%3A1" title="<?php echo $lang['WORKS_PORTFOLIO_SIMON_LINK']; ?>" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works webdesign graphic">
                        <img src="images/works/busante.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_BUSANTE_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_BUSANTE_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="https://www.behance.net/gallery/95009993/Busant?" title="<?php echo $lang['WORKS_BUSANTE_LINK']; ?>" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev webdesign graphic">
                        <img src="images/works/voxoffice.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_VOXOFFICE_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_VOXOFFICE_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_VOXOFFICE_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="https://www.behance.net/gallery/33909780/VoxOffice" title="<?php echo $lang['WORKS_VOXOFFICE_LINK']; ?>" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works audiovisual">
                        <img src="images/works/visualizer.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_VISUALIZER_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_VISUALIZER_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="https://vimeo.com/404136016" class="strip" data-strip-caption="<?php echo $lang['WORKS_VISUALIZER_DESC']; ?>" title="<?php echo $lang['WORKS_LAUNCH_VIDEO']; ?>" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev">
                        <img src="images/works/aurea.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_AUREA_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_AUREA_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_AUREA_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item link-item">
                                    <a href="https://aurea.eu" title="<?php echo $lang['WORKS_AUREA_LINK']; ?>" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev">
                        <img src="images/works/jab.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_JAB_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_JAB_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_JAB_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item link-item">
                                    <a href="http://armele-loick.rc2c.fr/index.html" title="<?php echo $lang['WORKS_JAB_LINK']; ?>" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works graphic">
                        <img src="images/works/centauri.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_CENTAURI_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_CENTAURI_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="images/works/centauri_big.jpg" class="strip" data-strip-caption="<?php echo $lang['WORKS_CENTAURI_DESC']; ?>" title="<?php echo $lang['WORKS_SEE_MORE']; ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev graphic">
                        <img src="images/works/animation.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_NEWREBORN_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_NEWREBORN_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="images/works/animation_big.jpg" class="strip" data-strip-caption="<?php echo $lang['WORKS_NEWREBORN_DESC']; ?>" title="<?php echo $lang['WORKS_SEE_MORE']; ?>"></a>
                                </li>
                                <li class="list list-item link-item">
                                    <a href="http://pierre-prezelin.com/src/new-reborn" title="<?php echo $lang['WORKS_NEWREBORN_LINK']; ?>" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works graphic">
                        <img src="images/works/vetogeek.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_VETOGEEK_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_VETOGEEK_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="images/works/vetogeek_big.jpg" class="strip" data-strip-caption="<?php echo $lang['WORKS_VETOGEEK_DESC']; ?>" title="<?php echo $lang['WORKS_SEE_MORE']; ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev">
                        <img src="images/works/evad.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_EVAD_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_EVAD_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_EVAD_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item link-item">
                                    <a href="http://evad-ensemble.fr/" title="<?php echo $lang['WORKS_EVAD_LINK']; ?>" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works webdesign">
                        <img src="images/works/limbo.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_LIMBO_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_LIMBO_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="images/works/limbo_big.jpg" class="strip" data-strip-caption="<?php echo $lang['WORKS_LIMBO_DESC']; ?>" title="<?php echo $lang['WORKS_SEE_MORE']; ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works audiovisual">
                        <img src="images/works/spotted.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_SPOTTED_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_SPOTTED_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="https://vimeo.com/87037781" class="strip" data-strip-caption="<?php echo $lang['WORKS_SPOTTED_DESC']; ?>" title="<?php echo $lang['WORKS_LAUNCH_VIDEO']; ?>" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works graphic">
                        <img src="images/works/ibanez.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_IBANEZ_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_IBANEZ_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="images/works/ibanez_big.jpg" class="strip" data-strip-caption="<?php echo $lang['WORKS_IBANEZ_DESC']; ?>" title="<?php echo $lang['WORKS_SEE_MORE']; ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Skills -->
        <section class="section section-skills" id="skills">
            <div class="row">
                <div class="title-container">
                    <h2 class="title title-section title-skills"><?php echo $lang['SKILLS_TITLE']; ?></h2>
                </div>
                <h3 class="subtitle subtitle-skills"><?php echo $lang['SKILLS_SUBTITLE']; ?></h3>
                <ul class="list">
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_WEB']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_WEB_1']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_2']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_3']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_4']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_5']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_6']; ?></p>
                        </section>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_DESIGN']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_DESIGN_1']; ?></p>
                            <p><?php echo $lang['SKILLS_DESIGN_2']; ?></p>
                            <p><?php echo $lang['SKILLS_DESIGN_3']; ?></p>
                            <p><?php echo $lang['SKILLS_DESIGN_4']; ?></p>
                        </section>
                    </li>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_AUDIOVISUAL']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_AUDIOVISUAL_1']; ?></p>
                            <p><?php echo $lang['SKILLS_AUDIOVISUAL_2']; ?></p>
                            <p><?php echo $lang['SKILLS_AUDIOVISUAL_3']; ?></p>
                        </section>
                    </li>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_COM']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_COM_1']; ?></p>
                            <p><?php echo $lang['SKILLS_COM_2']; ?></p>
                            <p><?php echo $lang['SKILLS_COM_3']; ?></p>
                        </section>
                    </li>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_LANG']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_LANG_1']; ?></p>
                            <p><?php echo $lang['SKILLS_LANG_2']; ?></p>
                            <p><?php echo $lang['SKILLS_LANG_3']; ?></p>
                        </section>
                    </li>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_ENV']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_ENV_1']; ?></p>
                            <p><?php echo $lang['SKILLS_ENV_2']; ?></p>
                            <p><?php echo $lang['SKILLS_ENV_3']; ?></p>
                        </section>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Get in touch -->
        <section class="section section-contact" id="contact">
            <div class="overlay-pattern"></div>
            <div class="row">
                <div class="title-container">
                    <h2 class="title title-section title-contact"><?php echo $lang['CONTACT_TITLE']; ?></h2>
                </div>
                <h3 class="subtitle subtitle-contact"><?php echo $lang['CONTACT_SUBTITLE']; ?></h3>
                <ul class="list list-getInTouch">
                    <li class="list list-item list-item-contact contact-phone">
                        <a href="tel:0676738510" title="<?php echo $lang['PHONE_TITLE']; ?>" target="_blank">
                            <div class="contact-overlay">
                                <i class="fa fa-phone fa-2x"></i>
                            </div>
                            <i class="fa fa-mobile fa-4x"></i>
                            <p>+33(0)6 76 73 85 10</p>
                        </a>
                    </li>
                    <li class="list list-item list-item-contact contact-skype">
                        <a href="tel:0676738510" title="<?php echo $lang['SKYPE_TITLE']; ?>" target="_blank">
                            <div class="contact-overlay">
                                <i class="fa fa-phone fa-2x"></i>
                            </div>
                            <i class="fa fa-skype fa-4x"></i>
                            <p>pierre.prezelin01</p>
                        </a>
                    </li>
                    <li class="list list-item list-item-contact contact-mail">
                        <a href="mailto:pierre.prezelin01@gmail.com" title="<?php echo $lang['MAIL_TITLE']; ?>" target="_blank">
                            <div class="contact-overlay">
                                <i class="fa fa-paper-plane fa-2x"></i>
                            </div>
                            <i class="fa fa-envelope fa-3x"></i>
                            <p>pierre.prezelin01[at]gmail.com</p>
                        </a>
                    </li>
                    <li class="list list-item list-item-contact contact-social">
                        <ul class="list">
                            <li class="list-item list-item-social social-github">
                                <a href="https://github.com/OldsunFlush" title="<?php echo $lang['GITHUB_TITLE']; ?>" target="_blank">
                                    <i class="fa fa-github fa-2x"></i>
                                </a>
                            </li>
                            <li class="list-item list-item-social social-codepen">
                                <a href="https://codepen.io/OldsunFlush/" title="<?php echo $lang['CODEPEN_TITLE']; ?>" target="_blank">
                                    <i class="fa fa-codepen fa-2x"></i>
                                </a>
                            </li>
                            <li class="list-item list-item-social social-behance">
                                <a href="https://www.behance.net/PierrePrezelin" title="<?php echo $lang['BEHANCE_TITLE']; ?>" target="_blank">
                                    <i class="fa fa-behance fa-2x"></i>
                                </a>
                            </li>
                            <li class="list-item list-item-social social-linkedin">
                                <a href="https://www.linkedin.com/pub/pierre-pr%C3%A9zelin/85/902/612" title="<?php echo $lang['LINKEDIN_TITLE']; ?>" target="_blank">
                                    <i class="fa fa-linkedin fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Map -->
        <section class="section-map">
            <section>
                <div class="row">
                    <h2 class="title title-section title-map"><?php echo $lang['MAP_TITLE']; ?></h2>
                    <h3 class="subtitle subtitle-thanks"><?php echo $lang['MAP_SUBTITLE']; ?></h3>
                </div>
            </section>
            <div id="map"></div>
        </section>

<?php require_once('includes/footer.inc.php'); ?>