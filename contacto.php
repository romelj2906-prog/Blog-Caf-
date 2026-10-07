<?php require 'includes/templates/header.php'; ?>

<!-- Estilos específicos de la plantilla Colorlib adaptados a BlogCafé -->
<style>
    .contacto-colorlib {
        position: relative;
        padding: 5rem 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('img/bg_1.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #ffffff;
        border-radius: 1rem;
        margin-top: 2rem;
        margin-bottom: 3rem;
    }

    .contacto-wrapper {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3rem;
        padding: 0 2rem;
    }

    @media (min-width: 768px) {
        .contacto-wrapper {
            grid-template-columns: 1fr 1.2fr;
            align-items: center;
            padding: 0 4rem;
        }
    }

    .contacto-info h3 {
        color: #ffffff;
        font-size: 2.8rem;
        margin-bottom: 1.5rem;
        text-align: left;
    }

    .contacto-info p {
        color: #e1e1e1;
        font-size: 1.6rem;
        line-height: 1.6;
        margin-bottom: 3rem;
    }

    .contacto-item {
        display: flex;
        align-items: flex-start;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .contacto-item .icon {
        font-size: 2rem;
        color: #e08738; /* Color acento de café */
    }

    .contacto-item-texto span {
        display: block;
        font-size: 1.2rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #a8a8a8;
        font-weight: bold;
    }

    .contacto-item-texto p {
        margin: 0;
        color: #ffffff;
        font-size: 1.5rem;
    }

    /* Tarjeta Blanca del Formulario */
    .form-card {
        background-color: #ffffff;
        padding: 3.5rem 3rem;
        border-radius: 8px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        color: #333333;
    }

    .form-card h4 {
        margin-top: 0;
        margin-bottom: 2rem;
        font-size: 2.4rem;
        color: #333333;
    }

    .form-group {
        margin-bottom: 2rem;
    }

    .form-group label {
        display: block;
        font-size: 1.4rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #666666;
    }

    .form-control {
        width: 100%;
        padding: 1.2rem;
        border: 1px solid #e1e1e1;
        border-radius: 4px;
        font-size: 1.5rem;
        font-family: inherit;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: #784d3c;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }

    .btn-submit {
        background-color: #784d3c;
        color: #ffffff;
        border: none;
        padding: 1.4rem 3rem;
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    .btn-submit:hover {
        background-color: #5d3b2e;
    }
</style>

<div class="contenedor">
    <section class="contacto-colorlib" data-aos="fade-up">
        <div class="contacto-wrapper">
            
            <!-- Lado Izquierdo: Información de Contacto -->
            <div class="contacto-info">
                <h3>Contáctanos</h3>
                <p>¿Tienes alguna consulta sobre nuestras recetas, técnicas de preparación o quieres inscribirte en nuestros cursos profesionales de café?</p>

                <div class="contacto-item">
                    <div class="icon">📍</div>
                    <div class="contacto-item-texto">
                        <span>Dirección:</span>
                        <p>Ciudad de Panamá, Panamá</p>
                    </div>
                </div>

                <div class="contacto-item">
                    <div class="icon">📞</div>
                    <div class="contacto-item-texto">
                        <span>Teléfono:</span>
                        <p>+507 6000-0000</p>
                    </div>
                </div>

                <div class="contacto-item">
                    <div class="icon">✉️</div>
                    <div class="contacto-item-texto">
                        <span>Email:</span>
                        <p>contacto@blogdecafe.com</p>
                    </div>
                </div>

                <div class="contacto-item">
                    <div class="icon">🌐</div>
                    <div class="contacto-item-texto">
                        <span>Sitio Web:</span>
                        <p>blogdecafe.com</p>
                    </div>
                </div>
            </div>

            <!-- Lado Derecho: Tarjeta del Formulario Colorlib -->
            <div class="form-card">
                <h4>Ponte en contacto</h4>
                <form id="contacto-form">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" class="form-control" placeholder="Tu Nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" class="form-control" placeholder="tu@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <input type="text" id="asunto" class="form-control" placeholder="Asunto del mensaje" required>
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" class="form-control" placeholder="Escribe tu mensaje aquí..." required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Enviar Mensaje</button>
                </form>
            </div>

        </div>
    </section>
</div>

<!-- Script Interactivo con SweetAlert2 -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formulario = document.getElementById('contacto-form');
        
        if (formulario) {
            formulario.addEventListener('submit', function(e) {
                e.preventDefault();

                const nombre = document.getElementById('nombre').value;

                Swal.fire({
                    title: '¡Mensaje Enviado!',
                    text: `Gracias ${nombre}, hemos recibido tu consulta. Nos pondremos en contacto contigo lo antes posible.`,
                    icon: 'success',
                    confirmButtonText: 'Genial ☕',
                    confirmButtonColor: '#784d3c',
                    background: '#ffffff'
                }).then(() => {
                    formulario.reset();
                });
            });
        }
    });
</script>

<?php require 'includes/templates/footer.php'; ?>