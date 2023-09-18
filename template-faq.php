<?php /* Template name: FAQ */ ?>

<?php get_header(); the_post(); ?>

    <!--FAQ-->

    <main>

        <header class="header__classic">
            <div class="header__content">
                <h1>Preguntas y respuestas</h1>
                <p>si tienes alguna duda, aquí tienes la respuesta</p>
            </div>
        </header>

        <section class="section__FAQ">
            
            <div class="accordion-container">    
                <h2>Producto</h2>
                <div class="FAQ__accordion">
                    <div class="accordion">¿Cuántas canciones caben en un vinilo?</div>
                    <div class="panel">
                        <p>Realmente no es relevante el número de canciones, sino la duración de las canciones. En un vinilo de 12 pulgadas caben 18 minutos de música en cada lado, es decir, 36 minutos en total.</p>
                    </div>
                </div>
                <div class="FAQ__accordion">
                    <div class="accordion">¿A qué velocidad va a estar el vinilo?</div>
                    <div class="panel">
                        <p>Nosotros hacemos los vinilos a velocidad estándard, 33 1/3 RPM.</p>
                    </div>
                </div>
                <div class="FAQ__accordion">
                    <div class="accordion">¿Es posible devolver mi pedido?</div>
                    <div class="panel">
                        <p>Si el vinilo ha llegado roto, defectuoso o no es como esperabas puedes solicitar la devolución. Contáctanos a través de nuestro formulario de contacto con tu nombre y número de pedido y estaremos encantados de ayudarte.</p>
                    </div>
                </div>

                <h2>Envío</h2>
                <div class="FAQ__accordion">
                    <div class="accordion">¿En cuánto tiempo recibiré mi pedido?</div>
                    <div class="panel">
                        <p>El proceso de creación es de 2 semanas, el tiempo de envío es de 5 a 7 días laborables a España.</p>
                    </div>
                </div>
                <div class="FAQ__accordion">
                    <div class="accordion">¿Puedo recoger el pedido en lugar de utilizar el envío?</div>
                    <div class="panel">
                        <p>Si eres de Valencia puedes recoger tu vinilo en la Avenida Blasco Ibáñez, número 15.</p>
                    </div>
                </div>
                <div class="FAQ__accordion">
                    <div class="accordion">¿Hacéis envíos internacionales?</div>
                    <div class="panel">
                        <p>Por ahora solo hacemos envíos en España (incluídas las Islas Baleares).</p>
                    </div>
                </div>
                <div class="FAQ__accordion">
                    <div class="accordion">Mi pedido no ha llegado, ¿qué hago ahora?</div>
                    <div class="panel">
                        <p>¡No te preocupes! Contáctanos a través de nuestro formulario e indicanos tu nombre y el número de pedido. Nosotros nos encargamos de revisarlo y si es necesario te reenviaremos un vinilo nuevo.</p>
                    </div>
                </div>
            </div>
                
            

        </section>
    </main>

<?php get_footer(); ?>