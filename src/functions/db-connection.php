<?php
  $connection = new PDO('mysql:host=mysql-host;dbname=project;charset=utf8', 'root', 'projectpass');
  $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'project'");
  $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

  if (empty($tables)) {
      echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
  } else {
      echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
      echo '<ul class="center">';
      foreach ($tables as $table) {
          echo "<li>{$table}</li>";
      }
      echo '</ul>';
  }
?>
