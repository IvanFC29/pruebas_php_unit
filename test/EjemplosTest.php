<?php

use PHPUnit\Framework\TestCase;

require_once './src/Ejemplos.php';

class EjemplosTest extends TestCase
{

   public function testCalculadora() {
        $calculadora = new Ejemplos();
        $resultado = $calculadora->calculadora(5,5,'suma');
        $this->assertEquals(0, $resultado);
   }

    public function testEsPrimo(){
        $verificar = new Ejemplos();
        $esPrimo = $verificar->esPrimo(7);
        $this->assertEquals(true, $esPrimo);
    }
/*
    public function testCalculadora(){
        $calculadora = new Ejemplos();
        $resultado = $calculadora->calculadora(2,3,'resta');
        $this->assertEquals(-1, $resultado);
    }

    public function testDivisionPorCero() {
        $calculator = new Ejemplos();
        $this->expectException(InvalidArgumentException::class);
        $calculator->calculadora(10, 0, 'division');
    }

    public function testFactorial() {
        $calculator = new Ejemplos();
        $resultado = $calculator->factorial(1);
        $this->assertEquals(1, $resultado);
    }

   
    

    */

    
}
