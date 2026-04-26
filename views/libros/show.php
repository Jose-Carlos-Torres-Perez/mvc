<!-- VIEW: libros/show.php -->
<!-- Variable disponible: $libro (array con todos los datos del libro) -->
<!-- REGLA DE ORO: Solo HTML + la variable $libro. Cero SQL. -->

<!-- TODO 31: Botón "← Volver al catálogo" que apunte a ?c=libro&a=index -->
<a href="?c=libro&a=index"><button>Volver al catalogo</button></a>

<div class="row g-4">
    <!-- TODO 32: Columna izquierda — portada visual.
         Crea un div con fondo usando $libro['color'] (con opacidad baja).
         Muestra un ícono grande fa-book con el color del libro. -->
    <div class="col-md-4">
        <div class="h-100 d-flex justify-content-center align-items-center rounded"
         style="background-color: <?= e($libro['color']) ?>20;">
         
        <i class="fa-solid fa-book fa-5x"
           style="color: <?= e($libro['color']) ?>;">
        </i>
        
    </div>
    </div>

    <!-- TODO 33: Columna derecha — información completa.
         Muestra (todo escapado con e()):
           - El género como badge con el color del libro
           - El título como h1
           - El autor con un ícono de usuario
           - El año con un ícono de calendario
           - La descripción completa
           - El precio formateado con Libro::formatearPrecio()
         Usa e() en TODOS los valores. -->
    <div class="col-md-8">
          <!-- Género como badge -->
    <span class="badge mb-2"
          style="background-color: <?= e($libro['color']) ?>;">
        <?= e($libro['genero']) ?>
    </span>

    <!-- Título -->
    <h1 class="fw-bold"><?= e($libro['titulo']) ?></h1>

    <!-- Autor -->
    <p class="mb-1 text-muted">
        <i class="fa-solid fa-user"></i>
        <?= e($libro['autor']) ?>
    </p>

    <!-- Año -->
    <p class="mb-3 text-muted">
        <i class="fa-solid fa-calendar"></i>
        <?= e($libro['anio']) ?>
    </p>

    <!-- Descripción -->
    <p><?= e($libro['descripcion']) ?></p>

    <!-- Precio -->
    <h4 class="mt-3 text-success">
        <?= e(Libro::formatearPrecio($libro['precio'])) ?>
    </h4>
    </div>
</div>

<hr class="mt-5">

<!-- TODO 34: Caja educativa del flujo MVC (como en la demo).
     Muestra en una caja oscura con fuente monoespaciada el flujo
     de esta petición específica, con el id real del libro:
       1. Navegador: GET index.php?c=libro&a=show&id={id}
       2. Router: instancia LibroController, llama show()
       3. Controller: $id = {id}; $libro = Libro::buscar({id});
       4. Model: busca en array, retorna "{titulo}"
       5. View: View::render('libros/show', $datos) → este HTML ✓ -->
<div class="bg-dark text-white rounded-4 p-4 mt-4" style="font-family:monospace;font-size:.83rem">
    <!-- TODO 34: tu flujo aquí -->
      <p class="mb-1">1. Navegador: GET index.php?c=libro&a=show&id=<?= e($libro['id']) ?></p>

    <p class="mb-1">2. Router: instancia LibroController, llama show()</p>

    <p class="mb-1">
        3. Controller: $id = <?= e($libro['id']) ?>;
        $libro = Libro::buscar(<?= e($libro['id']) ?>);
    </p>

    <p class="mb-1">
        4. Model: busca en array, retorna "<?= e($libro['titulo']) ?>"
    </p>

    <p class="mb-0">
        5. View: View::render('libros/show', $datos) → este HTML ✓
    </p>
</div>
