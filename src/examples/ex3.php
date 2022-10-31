<h1>Sentencias de Control</h1>
<h2>Uso de IF</h2>
<?php
  $a = 5;
  $b = 10;
  $label = ' es mayor a ';
  if ($a < $b) {
    echo $b.$label.$a;
  }
?>

<? if ($a > $b): ?>
  <p><?= $a.$label.$b ?></p>
<? else: ?>
  <p><?= $b.$label.$a ?></p>
<? endif; ?>

<?
  $a = $b;
?>

<? if ($a > $b): ?>
  <p><?= $a.$label.$b ?></p>
<? elseif ($b > $a): ?>
  <p><?= $b.$label.$a ?></p>
<? else: ?>
  <p>no es numero</p>
<? endif; ?>

<h2>Uso de Switch</h2>

<? 
  $label = 'Hoy es: ';
  $day = date("D"); 
?>
<? switch($day): ?>
<? case 'Mon': ?>
  <p><?= $label ?>Lunes</p>
<? break; ?>
<? case 'Tue': ?>
  <p><?= $label ?>Martes</p>
<? break; ?>
<? case 'Wed': ?>
  <p><?= $label ?>Miercoles</p>
<? break; ?>
<? case 'Thu': ?>
  <p><?= $label ?>Jueves</p>
<? break; ?>
<? case 'Fri': ?>
  <p><?= $label ?>Viernes</p>
<? break; ?>
<? case 'Sat': ?>
  <p><?= $label ?>Sabado</p>
<? break; ?>
<? case 'Sun': ?>
  <p><?= $label ?>Domingo</p>
<? break; ?>
<? endswitch; ?>

