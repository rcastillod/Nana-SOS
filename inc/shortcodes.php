<?php

/* -------------------------------------------------------------------------- */
/*                   Shortcode hero slide                                     */
/* -------------------------------------------------------------------------- */
add_shortcode('heroslider', 'nanasos_heroslider_sht');

function nanasos_heroslider_sht()
{
    ob_start();

    if (have_rows('hero_slider', 'option')) { ?>
        <!-- Hero SLider -->
        <div id="heroSlider" class="swiper hero-wrapper md:h-full">
            <div class="swiper-wrapper">
                <?php
                while (have_rows('hero_slider', 'option')) : the_row();
                    // Data Slider
                    $image = get_sub_field('imagen', 'option');
                    $bgImage = get_sub_field('imagen_fondo', 'option');
                    $title   = get_sub_field('titulo', 'option');
                    $content = get_sub_field('contenido', 'option');
                    $link     = get_sub_field('link', 'option');
                    $link2     = get_sub_field('link_2', 'option');
                    $color     = get_sub_field('paleta_color', 'option');
                ?>
                    <div class="swiper-slide hero-slide md:grid grid-cols-12 items-center px-10 lg:p-0">
                        <div class="hero-slide__content col-span-full md:col-start-1 md:col-end-7 lg:col-start-2 lg:col-end-7 xl:col-start-3 xl:col-end-7 row-span-full lg:pr-5 2xl:py-24 2xl:pl-16 2xl:pr-11 z-10">
                            <h2 class="hero-slide__title"><?php echo $title; ?></h2>
                            <div class="hero-slide__excerpt md:pr-28"><?php echo $content; ?></div>
                            <div class="hero-slide__links flex md:gap-5 mt-10">
                                <?php
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url); ?>" class="elementor-button hero-slide__link bg-primary hover:bg-text" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                                <?php
                                if ($link2) :
                                    $link_url2 = $link2['url'];
                                    $link_title2 = $link2['title'];
                                    $link_target2 = $link2['target'] ? $link2['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url2); ?>" class="elementor-button hero-slide__link bg-transparent group flex items-center gap-2" target="<?php echo esc_attr($link_target2); ?>">
                                        <span class="text-primary group-hover:text-font transition duration-300 ease-in-out"><?php echo esc_html($link_title2); ?></span>
                                        <span class="text-primary group-hover:text-font transition duration-300 ease-in-out">
                                            <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="hero-slide__image col-span-full col-start-1 col-end-12 md:col-start-7 md:col-end-13 lg:col-start-7 lg:col-end-12 xl:col-start-7 xl:col-end-11 row-span-full">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                        <div class="hero-slide__image-bg absolute hidden md:block md:-top-80 md:-right-52 xl:-top-48 xl:right-0 transform rotate-[30deg] -z-10"><img src="<?php echo $bgImage; ?>" alt=""></div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="hero-slide__arrow hidden md:flex">
                <div class="swiper-button swiper-prev-button">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
                <div class="swiper-button swiper-next-button">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>
            <div class="hero-slide__pagination hidden md:block swiper-pagination hero-pagination"></div>
        </div>


<?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
