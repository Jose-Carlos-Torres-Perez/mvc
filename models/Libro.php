<?php
// ============================================================
// MODEL — Libro
// ============================================================
// REGLA DE ORO: Este archivo NO genera HTML, NO hace echo,
// NO conoce $_GET ni $_POST.
// Su único trabajo: gestionar los datos de los libros.
// ============================================================

class Libro
{
    // TODO 11: Define el array estático $catalogo con al menos 5 libros.
    // Cada libro debe tener estas claves:
    //   'id'          → entero único
    //   'titulo'      → string
    //   'autor'       → string
    //   'genero'      → string  (ej: 'Novela', 'Ciencia', 'Historia', 'Tecnología')
    //   'anio'        → entero
    //   'precio'      → entero (en pesos colombianos)
    //   'descripcion' → string
    //   'color'       → string hex (ej: '#16a085') — para el estilo de la tarjeta
    //
    // Sugerencias de libros:
    //   Cien años de soledad (García Márquez), Cosmos (Sagan),
    //   Sapiens (Harari), Clean Code (Martin), El principito (Saint-Exupéry)
    private static array $catalogo = [
        // TODO 11: agrega tus 5+ libros aquí
    ];

    // TODO 12: Implementa todos() — retorna todo el array $catalogo
    public static function todos(): array
    {
        // tu código aquí
    }

    // TODO 13: Implementa buscar($id) — retorna el libro con ese id,
    //          o null si no existe.
    //          Recorre $catalogo con foreach y compara $libro['id'] === $id
    public static function buscar(int $id): ?array
    {
        // tu código aquí
    }

    // TODO 14: Implementa porGenero($genero) — retorna solo los libros
    //          cuyo 'genero' coincida con $genero.
    //          Pista: array_filter() + array_values()
    public static function porGenero(string $genero): array
    {
        // tu código aquí
    }

    // TODO 15: Implementa generos() — retorna la lista de géneros únicos.
    //          Pista: array_unique() + array_column()
    public static function generos(): array
    {
        // tu código aquí
    }

    // Helper: formatea precio como "$ 45.000"
    public static function formatearPrecio(int $precio): string
    {
        return '$ ' . number_format($precio, 0, ',', '.');
    }
}
