<?php
// ============================================================
// CONTROLLER — Libro
// ============================================================
// Acciones:
//   index  → ?c=libro&a=index            lista todos
//   show   → ?c=libro&a=show&id=2        detalle de uno
//   genero → ?c=libro&a=genero&g=Novela  filtrar por género
// ============================================================
// REGLA DE ORO: Solo coordina M y V. Cero HTML, cero SQL.
// ============================================================

require_once __DIR__ . '/../models/Libro.php';

class LibroController
{
    // TODO 18: Implementa index().
    //   1. Obtén todos los libros con Libro::todos()
    //   2. Obtén los géneros con Libro::generos()
    //   3. Llama a View::render('libros/lista', [...]) pasando:
    //      'titulo', 'libros' y 'generos'
    public function index(): void
    {
        // tu código aquí
    }

    // TODO 19: Implementa show().
    //   1. Lee el id de $_GET['id'] (usa ?? 0 y castea a int)
    //   2. Busca el libro con Libro::buscar($id)
    //   3. Si es null → redirige con header() a ?c=home&a=notFound y exit
    //   4. Si existe → View::render('libros/show', [...]) con 'titulo' y 'libro'
    public function show(): void
    {
        // tu código aquí
    }

    // TODO 20: Implementa genero().
    //   1. Lee el género de $_GET['g'] (usa ?? '')
    //   2. Si hay género: Libro::porGenero($genero), sino Libro::todos()
    //   3. Obtén los géneros con Libro::generos()
    //   4. View::render('libros/lista', [...]) con
    //      'titulo', 'libros', 'generos' y 'generoActivo'
    public function genero(): void
    {
        // tu código aquí
    }
}
