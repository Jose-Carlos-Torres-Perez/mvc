<!-- VIEW: libros/show.php -->
<!-- Variable disponible: $libro (array con todos los datos del libro) -->
<!-- REGLA DE ORO: Solo HTML + la variable $libro. Cero SQL. -->

<!-- TODO 31: Botón "← Volver al catálogo" que apunte a ?c=libro&a=index -->
???

<div class="row g-4">
    <!-- TODO 32: Columna izquierda — portada visual.
         Crea un div con fondo usando $libro['color'] (con opacidad baja).
         Muestra un ícono grande fa-book con el color del libro. -->
    <div class="col-md-4">
        ???
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
        ???
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
</div>
