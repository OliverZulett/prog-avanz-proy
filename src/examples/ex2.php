<html>
  <head>
    <title>Variables</title>
  </head>
  <body>
    <div>
      <?php
        $a = 5;
        $b = 10;
        echo '<h1>VARIABLES:</h1>';  
        echo '<br>';
        echo 'la primera variable tiene un valor de: '.$a;
        echo '<br>';
        echo 'la segunda variable tiene un valor de: '.$b;
      ?>
      <p>la SUMA de las variables es: <?= $a + $b ?></p>
      <p>la RESTA de las variables es: <?= $a - $b ?></p>
      <p>la DIVICION de las variables es: <?= $a / $b ?></p>
      <p>la MULTIPLICACION de las variables es: <?= $a * $b ?></p>
      <p>la MODULO de las variables es: <?= $a % $b ?></p>
    </div>
  </body>
</html>

