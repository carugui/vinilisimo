<!-- AQUÍ SINGLE DE BLOG -->

<?php get_header(); the_post(); ?>

    <main>

        <header class="header__classic">
            <div class="header__content">
                <h1><?php the_title(); ?></h1>
                <time class="blog__time" datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd.m.Y' ); ?></time>
            </div>
        </header>

        <section class="section__blog--single">

            <article class="article__blog--single">
                <?php the_post_thumbnail ( 'large' ); ?>

                <div class="article__blog--single__content">

                    <?php the_content(); ?>

                </div>
            </article>

        </section>

    </main>

<?php get_footer(); ?>