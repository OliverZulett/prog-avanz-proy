<hr>
<h1>Generador de Multiplos de 3</h1>

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

<h2>Numeros multiplos de 3 generados generados:</h2>

<?php
if ($_POST) {
  $count = 0;
  $num = 1;
  $input = $_POST['input'];

  if (!$input && $input > 0) {
    echo 'numero ingresado invalido';
    return;
  }
  
  for($i = 1; $i <= $input; $i ++)
    echo $i*3 . " , ";
}
?>

