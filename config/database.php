<?php
//database constante
defined('DBHOST') ? null : define('DBHOST','localhost');
defined('DBNAME') ? null : define('DBNAME','tassbih');
defined('DBUSER') ? null : define('DBUSER','root');
defined('DBPASS') ? null : define('DBPASS','');

  try {
    
    $dbd = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);

  } catch (\Exception $e) {

    die($e->getmessage());
    
  }

?>