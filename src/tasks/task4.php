<hr>
<h1>Verificar que un numero es capicua</h1>

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

<?php
if ($_POST) {
  $input = $_POST['input'];
  $num = $input;
  $cap = 0;

  while ($num > 0)
  {
    $dig = $num % 10;
    $cap = $cap * 10 + $dig;
    $num = round($num / 10);
  }

  $is_cap = ($input == $cap) ? "es" : "no es";

  echo "El numero ingresado {$is_cap} capicua";
}
?>

