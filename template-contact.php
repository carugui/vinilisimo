<!-- AQUÍ Contact -->

<?php /* Template name: Contact */ ?>

<?php get_header(); the_post(); ?>

    <!--CONTACTO-->

    <main>

        <header class="header__classic">
            <div class="header__content">
                <h1>¿Quieres hablarnos?</h1>
                <p>Envíanos tu duda y te responderemos lo antes posible, mientras tanto puedes consultar nuestro <a href="<?php echo home_url( '/faq/'); ?>">FAQ</a> :)</p>
            </div>
        </header>

        <section class="section__form">

            <?php the_content(); ?>

        </section>

    </main>

<?php get_footer(); ?>
