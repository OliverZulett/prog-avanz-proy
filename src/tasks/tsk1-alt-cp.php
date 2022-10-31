<h1 class="text-2xl my-5">Generador de Numeros Primos</h1>

<form 
  method="post" 
  class="flex content-center"
>
  Ingresa un numero entero: 
  <input 
    type="number" 
    class="input input-bordered input-secondary mb-5 mr-3 ml-5 h-8" 
    name="input"
  >
  <input 
    type="submit" 
    class="btn btn-outline btn-sm" 
    value="Enviar"
  >
</form>

<h2 class="text-xl mb-2">Numeros primos generados:</h2>

<?php
if ($_POST) {
  $count = 0;
  $num = 2;
  $input = $_POST['input'];

  if (!$input && $input > 0) {
    echo 'numero ingresado invalido';
    return;
  }

  while ($count < $input) {
    $div_count = 0;

    for ($i = 1; $i <= $num; $i++) {
      if (($num % $i) == 0) $div_count++;
      if ($div_count > 2) break;
    }

    if ($div_count == 2) {
      echo $num . " , ";
      $count = $count + 1;
    }

    $num = $num + 1;
  }
}
?>

