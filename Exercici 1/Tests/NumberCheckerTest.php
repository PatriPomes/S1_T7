<?php

namespace App\Tests;

use App\NumberChecker;
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{
    public function testConstructor(){ 
        $number = 42;
        $numberChecker = new NumberChecker($number);
        $this->assertInstanceOf(NumberChecker::class, $numberChecker);
        $this->assertEquals($number, $numberChecker->number);
        
        }

    public function testIsEven() {
   
        $numberCheckerEven = new NumberChecker(2); //instancia de la clase
                
        $resultadoEven = $numberCheckerEven->isEven(); //prueba
                
        $this->assertTrue($resultadoEven); //resultado

        $numberCheckerOdd = new NumberChecker(5); //repetimos proceso con otra opcion(Impar)

        $resultadoOdd = $numberCheckerOdd->isEven();

        $this->assertFalse($resultadoOdd);
}
    public function testIsPositive(){

        $numberCheckerPositive = new NumberChecker(6);
        $resultadoPositive = $numberCheckerPositive->isPositive();
        $this->assertTrue($resultadoPositive);
          
        $numberCheckerNegative = new NumberChecker(-3);
        $resultadoNegative = $numberCheckerNegative->isPositive();
        $this->assertFalse($resultadoNegative);
    }

}
    

    
   
    

?>