<?php

try{
  $connection = new PDO('mysql:host=localhost;dbname=tentsdb','root','');
  $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $exec){
  echo $exec->getMessage();
  die("Could not connect! Try again.");

}

?>