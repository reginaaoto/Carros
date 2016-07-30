<?php

/**
 * Description of MotorTurbo
 *
 * @author aluno
 */
final class MotorTurbo extends Motor implements Turbo
{
    public function acionarTurbina($ligar) {
        if($ligar){
            return $this->acelerar($potencia) * 2;
        }
    }

}
