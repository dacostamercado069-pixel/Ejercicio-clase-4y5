<?php

namespace Tests\Unit;

use App\Models\Ejercicio4\Ingrediente;
use App\Models\Ejercicio4\Receta;
use PHPUnit\Framework\TestCase;

class RecetaTest extends TestCase
{
    public function test_crea_receta_con_ingredientes(): void
    {
        $receta = new Receta('Panqueques', 4, 'Mezclar los ingredientes y cocinar en sartén.');
        $receta->agregarIngrediente(new Ingrediente('Harina'), 200, 'g');
        $receta->agregarIngrediente(new Ingrediente('Leche'), 300, 'ml');

        $this->assertSame('Panqueques', $receta->titulo);
        $this->assertCount(2, $receta->getIngredientes());
        $this->assertSame('Harina', $receta->getIngredientes()[0]->ingrediente->nombre);
        $this->assertSame(300.0, $receta->getIngredientes()[1]->cantidad);
    }
}