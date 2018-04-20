<?php
try{  $pdo=  new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
    $stmt = $pdo->query('SELECT login FROM autho ');
    $rows = $stmt->fetchAll();
}
catch(Exception $e)
{
    exit('<b>Catched exception at line '. $e->getLine() .' (code : '. $e->getCode() .') :</b> '. $e->getMessage());
}


foreach($rows as $row) {
    if ($row["login"]=="emna")  ; }

 ?>