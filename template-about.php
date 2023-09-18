<!-- AQUÍ ABOUT -->

<?php /* Template name: About */ ?>

<?php get_header(); the_post(); ?>

    <!--ABOUT-->

    <main>

        <header class="header__wave">

            <div class="header__content">
                <h1>Un poquito sobre nosotros</h1>
                <p><?php the_field ( 'page_intro', $id ); ?></p>
            </div>
    
            <!--Waves Container-->
            <div>
                <svg class="waves waves--upside-down" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="7" fill="" />
                </g>
                </svg>
            </div>
    
        </header>

        <?php the_content(); ?>

    </main>

<?php get_footer(); ?>