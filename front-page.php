<!-- AQUÍ LA PÁGINA DE INDEX -->

<?php get_header(); the_post(); ?>

    <!--INICIO-->

    <main>

        <header class="header__landing">
            <div class="header__outter">
                <div class="header__content">
                    <h1>Personaliza el vinilo de tus sueños</h1>
                    <p>Recopila tu música favorita y lleva tu idea a realidad con nosotros, ya seas un amante de la música, coleccionista, o en busca del regalo perfecto.</p>
                    <a class="btn" href="<?php echo home_url( '/producto/vinilo/'); ?>">Haz tu vinilo</a>
                </div>
            </div>
        </header>

        <section class="section__articles">

            <?php the_content(); ?>

        </section>


        <section class="section__playlist-to-vinyl no-padding">

            <!--Waves Container-->
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="7" fill="" />
                </g>
                </svg>
            </div>

            <div class="section__playlist-to-vinyl__content bg-color-yellow-light regular-padding">
                <div class="section__playlist-to-vinyl__text">
                    <h2>Pasa tu  playlist favorita a vinilo</h2>
                    <p>Convierte tus canciones preferidas en un formato clásico y comparte tu música con otros de una manera única y especial.</p>
                    <a class="btn btn--secondary" href="<?php echo home_url( '/producto/vinilo/'); ?>">Haz tu vinilo</a>
                </div>
                <div class="img-vinilo">
                    <img class="rotate"src="<?php bloginfo ( 'template_url' ); ?>/images/vinilo-vinilisimo.png" alt="vinilo negro clásico">
                </div>
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

        </section>


        <section class="section__reviews">

            <h2>Esto es lo que los <span>clientes</span> dicen de nosotros</h2>

            <div class="section__reviews__content">

                <div class="reviews__wrapper">

                    <div class="reviews__card">
                        <p class="review review__1">“Súper fácil, el proceso es rápido y por fin tengo el regalo perfecto para mi padre, le ha encantado.”</p>
                        <a class="review__link review__link__1" href="">@paula.neerr</a>
                    </div>
                    <div class="reviews__card">
                        <p class="review review__2">“Este vinilo es la joya de mi colección. No solo se ve increíble, sino que se escucha genial.  ¡Es un artículo imprescindible para cualquier fanático de la música!”</p>
                        <a class="review__link review__link__2" href="">@lichipann</a>
                    </div>
                    <div class="reviews__card">
                        <p class="review review__3">“Me encanta mi vinilo. La calidad de sonido es excepcional, ¡lo recomiendo mucho!”</p>
                        <a class="review__link review__link__3" href="">@warholtimes</a>
                    </div>

                </div>

                <div class="indicators">
                    <button class="button--active"></button>
                    <button></button>
                    <button></button>
                </div>

            </div>

        </section>


        <section class="section__how-it-works no-padding">
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="7" fill="" />
                </g>
                </svg>
            </div>

            <div class="section__how-it-works__content regular-padding">
                <h2>¿Cómo funciona?</h2>
                <img src="<?php bloginfo ( 'template_url' ); ?>/images/vinilisimo-how-to-steps.png" alt="Vinilo flotando alrededor de nubes">

                <div class="how-it-works__steps">

                    <div class="how-it-works__steps__section">
                        <div class="how-it-works__steps__item">
                            <h3>1.</h3>
                            <p>Sube tu portada... una foto, un dibujo tuyo, ¡lo que quieras!</p>
                        </div>
                        <div class="how-it-works__steps__item">
                            <h3>2.</h3>
                            <p>Elige el color del vinilo. ¿Opaco o transparente?</p>
                        </div>
                    </div>

                    <div class="how-it-works__steps__section">
                        <div class="how-it-works__steps__item">
                            <h3>3.</h3>
                            <p>Personaliza la pegatina de la galleta, todo a tu gusto :)</p>
                        </div>
                        <div class="how-it-works__steps__item">
                            <h3>4.</h3>
                            <p>Dinos qué canciones quieres que tenga y... ¡listo!</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </main>


<?php get_footer(); ?>