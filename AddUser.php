<?php


/*** first check that both the login, password and form token have been sent ***/
if(!isset( $_POST['login'], $_POST['password']))
{
    $message = 'Please enter a valid login and password';
}


elseif (strlen( $_POST['login']) > 20 || strlen($_POST['login']) < 4)
{
    echo '<script language="JavaScript">
	alert("Votre Login est de taille incorrecte. Merci de recommencer");
	window.location.replace("formulaireLogin.php");
	</script>';
}

elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
    echo '<script language="JavaScript">
	alert("Votre password est de taille incorrecte. Merci de recommencer");
	window.location.replace("formulaireLogin.php");
	</script>';
}

elseif (ctype_alnum($_POST['login']) != true)
{

    echo '<script language="JavaScript">
	alert("Votre Login doit etre alphanumerique. Merci de recommencer");
	window.location.replace("formulaireLogin.php");
	</script>';
}

elseif (ctype_alnum($_POST['password']) != true)
{

    echo '<script language="JavaScript">
	alert("Votre mot de passe doit etre alphanumerique. Merci de recommencer");
	window.location.replace("formulaireLogin.php");
	</script>';
}
else
{

    $login =$_POST['login'];
    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $password =$_POST['password'];






    try
    {
        $BD_connexion=new PDO('mysql:host=localhost;dbname=danousdatabase','root','');

        $BD_connexion->query("use autho");
        $req = $BD_connexion->prepare("INSERT INTO `autho`(`login`, `nom`, `prenom`, `passwd`) VALUES (:val1,:val2,:val3,:val4)");
        $req->execute(array(
            'val1'=>$login,
            'val2'=>$nom,
            'val3'=>$prenom,
            'val4'=>$password,

        ));
        
        $message = 'New user added';
        header('location:profile.php');
    }
    catch(Exception $e)
    {

        if( $e->getCode() == 23000)
        {
            echo '<script language="JavaScript">
	alert("login Existant. Merci de recommencer");
	window.location.replace("formulaireLogin.php");
	</script>';
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            echo '<script language="JavaScript">
	alert("Un probleme est survenu , veuillez telecharger les bases de données correctement les amis !!. Merci de recommencer");
	window.location.replace("formulaireLogin.php");
	</script>';

        }
    }
}
?>


<!-- < ?php echo $message; ?>-->

