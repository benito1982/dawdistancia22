<?php
/**
* Función mostrarNombreDias
*
* Al ejecutar esta función se imprimen en pantalla los 
* siete días de la semana 
* @author Alberto Jesús Bazán Benítez <abazanbenitez@gmail.com>
* @version 3.0
* {@internal Este texto es solo visible para desarrolladores} 
* @return String[] Devuelve el nombre de los días de la semana
*/

define ('DIAS_SEMANA',['Lunes','Martes','Miercoles','Jueves',
'Viernes','Sabado','Domingo']);

function mostrarNombreDias() {
	foreach (DIAS_SEMANA as $diaSem) {
		echo $diaSem;
	}
	echo '<br>';
}

/**
* Función suma
*
* Esta función utiliza las variables v1 y v2 para obtener 
* un sumatorio de ambas 
* @author Alberto Jesús Bazán Benítez <abazanbenitez@gmail.com>
* @version 2.1
* {@internal Este texto es solo visible para desarrolladores}
* @param int $num1 Es el primer número
* @param int $num2 ES el segundo número
* @return int  Devuelve el total de los dos números ingresados
*/


function sumarValores($num1,$num2) {
	$resultado = $num1 + $num2;
	echo "EL resultado de la suma es $resultado";
}

?>
