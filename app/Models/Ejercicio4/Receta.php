<?php

namespace App\Models\Ejercicio4;

class Receta
{
    /** @var IngredienteReceta[] */
    private array $ingredientes = [];

    public function __construct(
        public string $titulo,
        public int $porciones,
        public string $instrucciones,
    ) {}

    public function agregarIngrediente(Ingrediente $ingrediente, float $cantidad, string $unidadMedida): void
    {
        $this->ingredientes[] = new IngredienteReceta($ingrediente, $cantidad, $unidadMedida);
    }

    /** @return IngredienteReceta[] */
    public function getIngredientes(): array
    {
        return $this->ingredientes;
    }
}