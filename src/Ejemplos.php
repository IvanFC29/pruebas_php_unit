<?php

class Ejemplos {

    public function calculadora($num_a, $num_b, $operacion) {    
        $resultado = 0;
		switch ($operacion) {
			case 'suma':
				$resultado = $num_a + $num_b; break;
			case 'resta':
				$resultado = $num_a - $num_b; break;
			case 'multiplicacion':
				$resultado = $num_a * $num_b; break;
			case 'division':
				if ($num_b == 0) {
					throw new InvalidArgumentException('División por cero.');
				}else{
					$resultado = $num_a / $num_b;
				}
			    break;
            }
        return $resultado;
    }

    public function factorial($numero){
		if (!empty($numero) and $numero >= 0) {
			$factorial = 1;
			for ($i = 1; $i <= $numero ; $i++) { 		 
				$factorial = $factorial * $i;
			}
			return $factorial;
		}else{
			return 0;
		}
	}

	public function esPrimo($numero) {
		$es_primo = true;

		if ($numero > 0) {
			for ($i = 2; $i <= sqrt($numero); $i++) {
        		if ($numero % $i === 0) {
            		$es_primo = false;
        		}
    		}
		}else{
			$es_primo = false;
		}
		return $es_primo;
	}

	public function convertirMayusculas($cadena) {
        return strtoupper($cadena);
    }  
}
