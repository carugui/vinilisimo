<!-- AQUÍ LA PÁGINA DE BLOG -->

<?php get_header(); ?>

    <!--BLOG-->

    <main>

        <header class="header__classic">
            <div class="header__content">
                <h1>Blog</h1>
                <p>Encuentra las últimas noticias de música, el mundo del vinilo y descubre nuevos artistas, ¡no te quedes atrás!</p>
            </div>
        </header>

        <section class="section__blog">

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="article__blog--thumbnail">
                    <a class="blog__link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail ( 'large' ); ?></a>
                    <h2><a class="blog__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a class="btn btn--blog" href="<?php the_permalink(); ?>">Leer más</a>
                </article>

            <?php endwhile; wp_reset_postdata(); ?>

        </section>

    </main>

<?php get_footer(); ?>