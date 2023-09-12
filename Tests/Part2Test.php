<?php
namespace Patri;



use PHPUnit\Framework\TestCase;

final class Part2Test extends TestCase {
    public function testVerificarNota_PrimeraDivision() {
        $this->assertEquals("Primera división", grau(60));
        $this->assertEquals("Primera división", grau(71));
        $this->assertEquals("Primera división", grau(84));
        $this->assertEquals("Primera división", grau(100));
    }

    public function testVerificarNota_SegundaDivision() {
        $this->assertEquals("Segunda división", grau(46));
        $this->assertEquals("Segunda división", grau(50));
        $this->assertEquals("Segunda división", grau(59));
    }

    public function testVerificarNota_TerceraDivision() {
        $this->assertEquals("Tercera división", grau(33));
        $this->assertEquals("Tercera división", grau(39));
        $this->assertEquals("Tercera división", grau(44));
    }

    public function testVerificarNota_Suspenso(){
        $this->assertEquals("suspenso", grau(25));
        $this->assertEquals("suspenso", grau(2));
        $this->assertEquals("suspenso", grau(0));
    }
}

?>