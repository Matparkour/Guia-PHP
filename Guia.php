<?php 

//CONCATENACION
 $Name="Amira";
 $place="El salvador";
 $resultado=$Name.$place;
 echo $resultado;
 echo "mi nombre es: ".$nombre;
 echo "mi nombre es {$Name} mi otro nombre es ";// tambien se lo puede poner "mi nombre es $y la variable"  sin corchetes sin nada 




$estudiantes=array("Carlos","jose","vanessa","cati");//array de tipo escalar 
$estudiantes[2]="claudia";//modificar valores del array
echo $estudiantes[2];

$tutor=["nombre"=>" y Carlos","apellido"=>"alfaro","edad"=>"27"];//array de tipo asociativo
echo $tutor["nombre"];

$nombres=["nombre"=>"juan","apellido"=>"Perez","edad"=>"32","cursos"=>["PHP","Python","CSS"]];//array de multiples dimensiones
$nombres["cursos"][1]="java";// cambiar el valor de un array de multiples dimensiones
$nombres[pais]="el salvador";// crear valor desde fuera del array
echo $nombres["cursos"][1];//forma de mostrar el array de multiple dimensiones

 // ej de array 
define("ALUMNOS",array("carlos","alba","jose"));
echo ALUMNOS [2];
//exponenciacion= se usa (**)
//resto o modulo de residuo = se usa (%)
//echo count($asdh , COUNT_RECURSIVE) =sirve para contar cuantos elementos tiene un array
//var_dump me muestra der que tipo son los valores
//double son numeros conn coma y negativos con coma 
//string es texto
//echo es Para escribir 
//PARA definir una variable se usa ($)y despues un (_) nunca un numero 
//$nombre="20";
//$apellido="30";             <---- (suma declarando variables php)
//$dni=$nombre+$apellido;
//echo "$dni";
//VARIABLES PREDEFINIDAS
//1. SGLOBALS - Hace referencia a todas las variables disponibles en el ámbito global
//2. $_ SERVER - Información del entorno del servidor y de ejecución
//3. S_ GET - Variables HTTP GET
//4. $_ POST - Variables POST de HTTP
//5. S_FILES - Variables de subida de ficheros HTTP
//6. S_REQUEST - Variables HTTP Request
//7.S_ SESSION - Variables de sesión
//8. S_ENV - Variables de entorno
//9. S_ COOKIE - Cookies HTTP
//10. Sphp_errormsg - El mensaje de error anterior
//11. SHTTP_RAW_POST_DATA - Datos POST sin tratar
//12. Shttp_response_header - Encabezados de respuesta HTTP
//13. Sargo - El número de argumentos pasados a un script
//14. Sargv - Array de argumentos pasados a un script
//15. Sthis - Palabra reservada utilizada en programación orientada a objetos