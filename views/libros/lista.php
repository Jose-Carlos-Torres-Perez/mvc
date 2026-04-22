<!-- VIEW: libros/lista.php -->
<!-- Variables disponibles: $titulo, $libros, $generos, $generoActivo -->
<!-- REGLA DE ORO: Solo HTML + variables. Cero SQL, cero lógica de negocio. -->

<!-- TODO 28: Muestra el título y el conteo total de libros -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold mb-0"><?= e($titulo) ?></h1>
    <!-- TODO 28: muestra count($libros) y el texto "libro/s" -->
    ???
</div>

<!-- TODO 29: Botones de filtro por género.
     - Un botón "Todos" que apunte a ?c=libro&a=index
       (activo con btn-dark si $generoActivo está vacío)
     - Un botón por cada género en $generos, apuntando a ?c=libro&a=genero&g={género}
       (activo con btn-success si $generoActivo === $genero)
     Pista: usa urlencode($g) en el href -->
<div class="mb-4 d-flex gap-2 flex-wrap">
    <!-- TODO 29: tus botones de filtro aquí -->
</div>

<!-- TODO 30: Si $libros está vacío, muestra un mensaje de alerta.
     Si no está vacío, muestra una cuadrícula (row g-4) con tarjetas.
     Cada tarjeta debe mostrar:
       - El color del libro ($libro['color']) en el borde superior
       - Un ícono representativo (ej: fas fa-book)
       - El género como badge
       - El título y el autor
       - El año de publicación
       - El precio formateado con Libro::formatearPrecio()
       - Un botón "Ver detalle" que apunte a ?c=libro&a=show&id={id}
     Usa e() en TODOS los valores que muestres. -->
<?php if (empty($libros)): ?>
    <div class="alert alert-warning">No hay libros en este género.</div>
<?php else: ?>
<div class="row g-4">
    <?php foreach ($libros as $libro): ?>
    <div class="col-sm-6 col-lg-4">
        <!-- TODO 30: tu tarjeta aquí -->
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
