<?php

  //nos permite datos de formulacion de bd
  // parse nos parte la cadena

  $bd = parse_url(getenv('DATABASE_URL'));

  $host = $bd['host'];
  // ltrim nos quita la barra
  $dbname = ltrim($bd['path'], '/');
  $port = $bd['port'];
  $user = $bd['user'];
  $pass = $bd['pass'];

  global $host, $dbname, $port, $user, $pass;

?>
