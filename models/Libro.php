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
    [
        'id' => 1,
        'titulo' => 'Cien años de soledad',
        'autor' => 'Gabriel García Márquez',
        'genero' => 'Novela',
        'anio' => 1967,
        'precio' => 45000,
        'descripcion' => 'Historia de la familia Buendía en el mítico pueblo de Macondo.',
        'color' => '#16a085'
    ],
    [
        'id' => 2,
        'titulo' => 'El origen de las especies',
        'autor' => 'Charles Darwin',
        'genero' => 'Ciencia',
        'anio' => 1859,
        'precio' => 38000,
        'descripcion' => 'Obra fundamental sobre la teoría de la evolución por selección natural.',
        'color' => '#2980b9'
    ],
    [
        'id' => 3,
        'titulo' => 'Sapiens: De animales a dioses',
        'autor' => 'Yuval Noah Harari',
        'genero' => 'Historia',
        'anio' => 2011,
        'precio' => 52000,
        'descripcion' => 'Un recorrido por la historia de la humanidad desde sus orígenes.',
        'color' => '#8e44ad'
    ],
    [
        'id' => 4,
        'titulo' => 'Clean Code',
        'autor' => 'Robert C. Martin',
        'genero' => 'Tecnología',
        'anio' => 2008,
        'precio' => 67000,
        'descripcion' => 'Guía práctica para escribir código limpio, mantenible y eficiente.',
        'color' => '#27ae60'
    ],
    [
        'id' => 5,
        'titulo' => '1984',
        'autor' => 'George Orwell',
        'genero' => 'Novela',
        'anio' => 1949,
        'precio' => 40000,
        'descripcion' => 'Distopía sobre un régimen totalitario que controla todos los aspectos de la vida.',
        'color' => '#c0392b'
    ]
];

    // TODO 12: Implementa todos() — retorna todo el array $catalogo
    public static function todos(): array
    {
         return self::$catalogo;
    }

    // TODO 13: Implementa buscar($id) — retorna el libro con ese id,
    //          o null si no existe.
    //          Recorre $catalogo con foreach y compara $libro['id'] === $id
    public static function buscar(int $id): ?array
    {
        foreach (self::$catalogo as $libro) {

            if ($libro["id"]===$id){
                return $libro;
            }
            
        }
        return null;
    }

    // TODO 14: Implementa porGenero($genero) — retorna solo los libros
    //          cuyo 'genero' coincida con $genero.
    //          Pista: array_filter() + array_values()
    public static function porGenero(string $genero): array
    {
        
            $valor =array_filter(self ::$catalogo, function ($libro)  use ($genero){
                return $libro['genero'===$genero];
            }
            
            );
            return array_values($valor          
            );
    }

    // TODO 15: Implementa generos() — retorna la lista de géneros únicos.
    //          Pista: array_unique() + array_column()
    public static function generos(): array
    {
        $l_generos =array_unique(array_column(self::$catalogo, 'genero'));
        return $l_generos;
    }

    // Helper: formatea precio como "$ 45.000"
    public static function formatearPrecio(int $precio): string
    {
        return '$ ' . number_format($precio, 0, ',', '.');
    }
}
