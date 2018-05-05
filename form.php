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
     echo '<script language="JavaScript">
	alert("oopps wrong login!!");
	window.location.replace("formulaireLogin.php");
	</script>';
 }
 else
 { if($rows["passwd"]!=$pd)

     echo '<script language="JavaScript">
	alert("opps wrong password!!");
	window.location.replace("formulaireLogin.php");
	</script>';
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