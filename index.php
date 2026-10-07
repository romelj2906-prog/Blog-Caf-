<?php require 'includes/templates/header.php'; ?>

<div class="contenedor contenido-principal">
    <main class="blog">
        <h3>Nuestro Blog</h3>
        
        <article class="entrada">
            <div class="entrada__imagen">
                <img src="img/blog1.jpg" alt="Imagen Blog">
            </div>
            <div class="entrada__contenido">
                <h4 class="no-margin">Tipos de Granos de Café</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <a href="entrada.php" class="boton boton--primario">Leer Entrada</a>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada__imagen">
                <img src="img/blog2.jpg" alt="Imagen Blog">
            </div>
            <div class="entrada__contenido">
                <h4 class="no-margin">Tres Deliciosas Recetas de Café</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <a href="entrada.php" class="boton boton--primario">Leer Entrada</a>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada__imagen">
                <img src="img/blog3.jpg" alt="Imagen Blog">
            </div>
            <div class="entrada__contenido">
                <h4 class="no-margin">Beneficios del Café</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <a href="entrada.php" class="boton boton--primario">Leer Entrada</a>
            </div>
        </article>
    </main>

    <aside class="sidebar">
        <h3>Nuestros Cursos y Talleres</h3>
        <ul class="cursos no-padding">
            <li class="widget-curso">
                <h4 class="no-margin">Técnica de Extracción de Café</h4>
                <p class="widget-curso__label">Precio: 
                    <span class="widget-curso__info">Gratis</span>
                </p>
                <p class="widget-curso__label">Cupo: 
                    <span class="widget-curso__info">20</span>
                </p>
                <a href="cursos.php" class="boton boton--secundario">Más Información</a>
            </li>

            <li class="widget-curso">
                <h4 class="no-margin">4 Recetas de Café para Principiantes</h4>
                <p class="widget-curso__label">Precio: 
                    <span class="widget-curso__info">Gratis</span>
                </p>
                <p class="widget-curso__label">Cupo: 
                    <span class="widget-curso__info">20</span>
                </p>
                <a href="cursos.php" class="boton boton--secundario">Más Información</a>
            </li>
        </ul>
    </aside>
</div>

<?php require 'includes/templates/footer.php'; ?>