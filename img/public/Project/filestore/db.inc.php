<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=jhuff', 'jhuff', 'Pa$$W0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '/Project/filestore/error.html.php';
  exit();
}
