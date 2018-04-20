<?php
try{  $pdo=  new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
    $stmt = $pdo->query('SELECT  FROM ecran ');
    $rows = $stmt->fetchAll();
}
catch(Exception $e)
{
    exit('<b>Catched exception at line '. $e->getLine() .' (code : '. $e->getCode() .') :</b> '. $e->getMessage());
}
foreach($rows as $row) {
    var_dump($row);
    echo '<br />'; } ?>