<?php
//session_start();

  $dbhost = '127.0.0.1';
  $dbname ='dynamik_car'; //nom de la base de donnee
  $dbuser ='root';
  $dbpwd ='';

  try
  {
  	$db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpwd,array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
  }
  catch (PDOException $e)
  {
  	die("une erreur est survenue lors de la connexion a  la base de données");
  }


  function nav()
  {
    global $db;

       $req = $db->query("SELECT Type_nom FROM type ");

       $results = [];
       while($rows = $req->fetchObject())
       {
         $results[] = $rows;
       }

       return $results;
  }

?>
