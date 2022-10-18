<?php

/* -------------------------------------------------------------------------- */
/*                   Shortcode hero slide                                     */
/* -------------------------------------------------------------------------- */
add_shortcode( 'heroslider', 'asimet_heroslider_sht');

function asimet_heroslider_sht() {
    ob_start();
    
    if ( have_rows('hero_slider', 'option') ) { ?>
        <!-- Hero SLider -->
        <div id="heroSlider" class="swiper hero-wrapper">
            <div class="swiper-wrapper">
                <?php
                    while( have_rows('hero_slider', 'option') ) : the_row();
                    // Data Slider
                    $bgImage = get_sub_field('imagen', 'option');
                    $title   = get_sub_field('titulo', 'option');
                    $content = get_sub_field('contenido', 'option');
                    $link     = get_sub_field('link', 'option');
                    $link2     = get_sub_field('link_2', 'option');
                    $link3     = get_sub_field('link_3', 'option');
                    $color     = get_sub_field('paleta_color', 'option');
                    ?>
                    <div class="swiper-slide hero-slide" style="background-image: url(<?php echo $bgImage; ?>)">
                        <div class="hero-slide__content">
                            <h2 class="hero-slide__title"><?php echo $title; ?></h2>
                            <p class="hero-slide__excerpt"><?php echo $content; ?></p>
                            <div class="hero-slide__links btn-gradient">
                                <?php
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" class="elementor-button hero-slide__link <?php echo $link2 ? 'hero-slide__link--transparent':''; ?> <?php echo $color == 'verde' ? 'hero-slide__link--green':''; ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                                <?php
                                if ( $link2 ) :
                                    $link_url2 = $link2['url'];
                                    $link_title2 = $link2['title'];
                                    $link_target2 = $link2['target'] ? $link2['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url( $link_url2 ); ?>" class="elementor-button hero-slide__link  <?php echo $color == 'verde' ? 'hero-slide__link--green':''; ?>" target="<?php echo esc_attr($link_target2); ?>"><?php echo esc_html( $link_title2 ); ?></a>
                                <?php endif; ?>
                                <?php
                                if ( $link3 ) :
                                    $link_url3 = $link3['url'];
                                    $link_title3 = $link3['title'];
                                    $link_target3 = $link3['target'] ? $link3['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url( $link_url3 ); ?>" class="elementor-button hero-slide__link <?php echo $color == 'verde' ? 'hero-slide__link--green':''; ?>" target="<?php echo esc_attr($link_target3); ?>"><?php echo esc_html( $link_title3 ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <a href="#asimet" class="scroll-down">
                <svg enable-background="new 0 0 26 26" id="Layer_1" version="1.1" viewBox="0 0 26 26"
                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g>
                        <polygon fill="#ffffff"
                            points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  " />
                        <polygon fill="#ffffff"
                            points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502  " />
                    </g>
                </svg>
            </a>
            <div class="swiper-pagination hero-pagination"></div>
        </div>


<?php
    $myvariable = ob_get_clean();
    return $myvariable;
    }
}

/* -------------------------------------------------------------------------- */
/*                   Shortcode music player                                     */
/* -------------------------------------------------------------------------- */
add_shortcode( 'musicplayer', 'radio7080_musicplayer_sht');

function radio7080_musicplayer_sht() {
    ob_start();
    $senal = get_field( 'senal', 'option' );

    if ( $senal ) { ?>
    
        <div id="player" class="player">
            <div class="disc">
                <div class="disc__poster">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/radio_poster.png" alt="Radio Poster">
                </div>
                <div class="disc__vinyl">
                    <img id="vinylDisc" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/radio_vinil.png" alt="Radio Vinyl">
                </div>
            </div>
            <div class="bar-player">
                <div class="wrapper">
                    <audio id="music" preload="all">
                        <source src="<?= $senal ?>">
                    </audio>
                    <div class="bar-player__top">
                        <div class="radio-logo"><p>Radio <span>7080</span></p></div>
                        <div class="radio-buttons">
                            <div id="play-btn">
                                <svg id="play-icon" width="20px" height="20px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M13.7501344,8.41212026 L38.1671892,21.1169293 C39.7594652,21.9454306 40.3786269,23.9078584 39.5501255,25.5001344 C39.2420737,26.0921715 38.7592263,26.5750189 38.1671892,26.8830707 L13.7501344,39.5878797 C12.1578584,40.4163811 10.1954306,39.7972194 9.36692926,38.2049434 C9.12586301,37.7416442 9,37.2270724 9,36.704809 L9,11.295191 C9,9.50026556 10.4550746,8.045191 12.25,8.045191 C12.6976544,8.045191 13.1396577,8.13766178 13.5485655,8.31589049 L13.7501344,8.41212026 Z" id="🎨-Color"></path>
                                </svg>
                                <svg id="pause-icon" style="display: none" width="20px" height="20px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M17.75,7 C19.5449254,7 21,8.45507456 21,10.25 L21,37.75 C21,39.5449254 19.5449254,41 17.75,41 L12.25,41 C10.4550746,41 9,39.5449254 9,37.75 L9,10.25 C9,8.45507456 10.4550746,7 12.25,7 L17.75,7 Z M35.75,7 C37.5449254,7 39,8.45507456 39,10.25 L39,37.75 C39,39.5449254 37.5449254,41 35.75,41 L30.25,41 C28.4550746,41 27,39.5449254 27,37.75 L27,10.25 C27,8.45507456 28.4550746,7 30.25,7 L35.75,7 Z" id="🎨-Color"></path>
                                </svg>
                            </div>
                            <div id="volume-btn" style="cursor: pointer">
                                <svg id="volume" width="20px" height="20px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.395 3.90244C15.1932 3.15384 16.5 3.71986 16.5 4.81425V23.1843C16.5 24.2785 15.1937 24.8446 14.3953 24.0964L9.45832 19.4703C9.134 19.1664 8.70619 18.9973 8.26174 18.9973H5.25C3.45507 18.9973 2 17.5422 2 15.7473V12.2553C2 10.4604 3.45508 9.00529 5.25 9.00529H8.26119C8.70587 9.00529 9.13388 8.836 9.45826 8.53182L14.395 3.90244Z" fill="#212121"/>
                                    <path d="M21.6436 5.18437C21.9546 4.91079 22.4285 4.94114 22.702 5.25215C24.7544 7.58537 26 10.6481 26 13.9999C26 17.3517 24.7544 20.4145 22.702 22.7477C22.4285 23.0587 21.9546 23.089 21.6436 22.8155C21.3325 22.5419 21.3022 22.068 21.5758 21.757C23.3966 19.687 24.5 16.9733 24.5 13.9999C24.5 11.0266 23.3966 8.31278 21.5758 6.24286C21.3022 5.93185 21.3325 5.45795 21.6436 5.18437Z" fill="#212121"/>
                                    <path d="M20.3528 8.3028C20.1042 7.9715 19.6341 7.90448 19.3028 8.1531C18.9715 8.40173 18.9044 8.87185 19.1531 9.20315C20.156 10.5397 20.75 12.1993 20.75 13.9999C20.75 15.8005 20.156 17.4602 19.1531 18.7967C18.9044 19.128 18.9715 19.5981 19.3028 19.8467C19.6341 20.0954 20.1042 20.0283 20.3528 19.697C21.544 18.1098 22.25 16.1362 22.25 13.9999C22.25 11.8636 21.544 9.89006 20.3528 8.3028Z" fill="#212121"/>
                                </svg>
                                <svg id="mute" style="display: none" width="20px" height="20px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 4.81425C16.5 3.71986 15.1932 3.15384 14.395 3.90244L9.45826 8.53182C9.13388 8.836 8.70587 9.00529 8.26119 9.00529H5.25C3.45508 9.00529 2 10.4604 2 12.2553V15.7473C2 17.5422 3.45507 18.9973 5.25 18.9973H8.26174C8.70619 18.9973 9.134 19.1664 9.45832 19.4703L14.3953 24.0964C15.1937 24.8446 16.5 24.2785 16.5 23.1843V4.81425Z" fill="#212121"/>
                                    <path d="M19.7824 10.7216C19.4905 10.4277 19.0157 10.4259 18.7217 10.7177C18.4277 11.0095 18.426 11.4844 18.7178 11.7784L20.9359 14.0128L18.7208 16.2186C18.4273 16.5108 18.4263 16.9857 18.7186 17.2792C19.0108 17.5727 19.4857 17.5737 19.7792 17.2814L21.9965 15.0735L24.2217 17.2823C24.5157 17.5741 24.9906 17.5723 25.2824 17.2784C25.5742 16.9844 25.5724 16.5095 25.2784 16.2177L23.0572 14.0128L25.2815 11.7792C25.5738 11.4857 25.5728 11.0109 25.2793 10.7186C24.9858 10.4263 24.5109 10.4273 24.2186 10.7208L21.9965 12.9521L19.7824 10.7216Z" fill="#212121"/>
                                </svg>

                            </div>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <!-- <div class="bar-player__bottom">
                        <div class="radio-name">Nombre de la señal</div>
                    </div> -->
                </div>
            </div>
        </div>
        
<?php
    $myvariable = ob_get_clean();
    return $myvariable;
    }
}

/* -------------------------------------------------------------------------- */
/*                               Shortcode Reloj                              */
/* -------------------------------------------------------------------------- */
add_shortcode( 'reloj', 'radio7080_reloj_sht');

function radio7080_reloj_sht() {
    ob_start();

    $hourMin = date('H:i');

    ?>
        <div id="clock" class="radio_clock"></div>
    <?php

    $myvariable = ob_get_clean();
    return $myvariable;
}

