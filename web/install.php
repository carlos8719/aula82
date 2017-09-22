<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instalación Contactios</title>
  </head>
  <body>
    <h1>Instalación Contactos</h1>
    <?php
      require_once "../config.php";

      // envez de mysql es pgsql
      $pdo = new PDO("pgsql:host={$host};port={$port}", $user, $pass);
      $sql = "create database $dbname; use $dbname;";
      $pdo->exec($sql);


      // cambiamos integer auto_increment por serial
      $sql = "create table contacto(
        id serial primary key,
        nombre varchar (30),
        mail varchar (70)
        )";
      $pdo->exec($sql);

      $sql = "insert into contacto (nombre, mail) values ('pepe', 'pepe@server.com'),
      ('concha', 'concha@email.net')";
      $pdo->exec($sql);
    ?>

    <p>Base de datos creada. <a href="index.php">Ir a lista de contactos</a></p>
  </body>
</html>
