<!-- VIEW: libros/lista.php -->
<!-- Variables disponibles: $titulo, $libros, $generos, $generoActivo -->
<!-- REGLA DE ORO: Solo HTML + variables. Cero SQL, cero lógica de negocio. -->

<!-- TODO 28: Muestra el título y el conteo total de libros -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold mb-0"><?= e($titulo) ?></h1>
    <!-- TODO 28: muestra count($libros) y el texto "libro/s" -->
    <?=  count($libros) . "  libro/s"?>
</div>

<!-- TODO 29: Botones de filtro por género.
     - Un botón "Todos" que apunte a ?c=libro&a=index
       (activo con btn-dark si $generoActivo está vacío)
     - Un botón por cada género en $generos, apuntando a ?c=libro&a=genero&g={género}
       (activo con btn-success si $generoActivo === $genero)
     Pista: usa urlencode($g) en el href -->
<div class="mb-4 d-flex gap-2 flex-wrap">
    <!-- Botón Todos -->
    <a href="?c=libro&a=index" class="btn <?= empty($generoActivo) ? 'btn-dark' : 'btn-outline-dark' ?>">
        Todos
    </a>

    <!-- Botones por género -->
    <?php foreach ($generos as $g): ?>
        <a href="?c=libro&a=genero&g=<?= urlencode($g) ?>"
           class="btn <?= $generoActivo === $g ? 'btn-success' : 'btn-outline-success' ?>">
            <?= e($g) ?>
        </a>
    <?php endforeach; ?>
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
        
    <!-- Borde superior con color -->
    <div style="height: 5px; background-color: <?= e($libro['color']) ?>"></div>

    <div class="card-body">
        <!-- Icono -->
        <div class="mb-2 text-center">
            <i class="fas fa-book fa-2x"></i>
        </div>

        <!-- Género -->
        <span class="badge bg-secondary mb-2"><?= e($libro['genero']) ?></span>

        <!-- Título -->
        <h5 class="card-title"><?= e($libro['titulo']) ?></h5>

        <!-- Autor -->
        <p class="card-text mb-1"><strong>Autor:</strong> <?= e($libro['autor']) ?></p>

        <!-- Año -->
        <p class="card-text mb-1"><strong>Año:</strong> <?= e($libro['anio']) ?></p>

        <!-- Precio -->
        <p class="card-text fw-bold">
            <?= e(Libro::formatearPrecio($libro['precio'])) ?>
        </p>
    </div>

    <div class="card-footer text-center">
        <a href="?c=libro&a=show&id=<?= e($libro['id']) ?>" class="btn btn-primary">
            Ver detalle
        </a>
    </div>
</div>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
