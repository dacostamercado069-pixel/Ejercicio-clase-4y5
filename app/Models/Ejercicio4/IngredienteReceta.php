<?php

namespace App\Models\Ejercicio4;

class IngredienteReceta
{
    public function __construct(
        public Ingrediente $ingrediente,
        public float $cantidad,
        public string $unidadMedida,
    ) {}
}
