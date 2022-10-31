<hr>
<h1>Generador de Numeros impares</h1>

<form 
  method="post" 
>
  Ingresa un numero entero: 
  <input 
    type="number" 
    name="input"
  >
  <input 
    type="submit" 
    value="Enviar"
  >
</form>

<h2>Numeros impares generados:</h2>

<?php
if ($_POST) {
  $count = 0;
  $num = 1;
  $input = $_POST['input'];

  if (!$input && $input > 0) {
    echo 'numero ingresado invalido';
    return;
  }

  for($i = 1; $i <= $input*2; $i += 2)
    echo $i." , ";
}
?>

