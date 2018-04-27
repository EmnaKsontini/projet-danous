<link rel="stylesheet" href="css/styleform.css">
<?php
if(!empty($_POST))
{   $log=$_POST['login'];
{   $pd=$_POST['password'];

     $req="SELECT * FROM autho WHERE login= \"".$log."\"";
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
        $stmt = $pdo->query($req);
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    }
catch(Exception $e)
{
    exit('<b>Catched exception at line '. $e->getLine() .' (code : '. $e->getCode() .') :</b> '. $e->getMessage());
}

 if(!$rows["login"]) {
     echo "<div class=\"alert\"><span class=\"\" onclick=\"this.parentElement.style.display=\'none\';\"> &times;</span> this is an alert box.\"</div>";
 }
 else
 { if($rows["passwd"]!=$pd)
     echo "le mot de passe saisit ne correspond pas a votre login ";
 else

 {

     session_start();
     $_SESSION['login'] = $log;
        if($log=="ADMIN")
             header('Location:ADMIN.php');
        else
            header('Location:profile.php');
 }
 }

}
 }?>