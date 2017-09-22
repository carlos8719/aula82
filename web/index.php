<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contactos</title>
  </head>
  <body>
    <h1>Contactos</h1>

    <table>


    <?php
      require_once "../config.php";

      // envez de mysql es pgsql
      $pdo = new PDO("pgsql:host={$host};port={$port}; dbname={$dbname}", $user, $pass);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

      $sql = "SELECT * FROM contacto;";
      $res = $pdo->query($sql);

      /* Con dos foreach si amplias columnas se verian igual,
       sin neccesidad de modificar.*/

      foreach ($res as $fila) {
        echo "<tr>";
        foreach ($fila as $value) {
          echo "<td>$value</td>";
        }
        echo "</tr>";
      }
    ?>
  </table>

  </body>
</html>
