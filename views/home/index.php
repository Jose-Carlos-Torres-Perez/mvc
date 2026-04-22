<!-- VIEW: home/index.php -->
<!-- TODO 26: Crea la página de bienvenida de LibroStore.
     Debe incluir:
       - Un título principal usando $titulo (escapado con e())
       - Una descripción breve de la tienda
       - Un botón o enlace que lleve al catálogo: ?c=libro&a=index
       - Un bloque de código (estilo terminal) que muestre el flujo
         MVC de esta petición, como en la demo:
           Navegador → index.php?c=home&a=index
           Router    → HomeController::index()
           Controller→ View::render('home/index', [...])
           View      → HTML al navegador ✓
-->

<h1><?= e($titulo) ?></h1>

<!-- TODO 26: el resto de tu contenido aquí -->
