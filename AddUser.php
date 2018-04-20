<?php
echo"ena lena";

/*** first check that both the login, password and form token have been sent ***/
if(!isset( $_POST['login'], $_POST['password']))
{
    $message = 'Please enter a valid login and password';
}


elseif (strlen( $_POST['login']) > 20 || strlen($_POST['login']) < 4)
{
    $message = 'Incorrect Length for login';
}

elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
    $message = 'Incorrect Length for Password';
}

elseif (ctype_alnum($_POST['login']) != true)
{

    $message = "login must be alpha numeric";
}

elseif (ctype_alnum($_POST['password']) != true)
{

    $message = "Password must be alpha numeric";
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
    }
    catch(Exception $e)
    {

        if( $e->getCode() == 23000)
        {
            $message = 'login already exists';
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            $message = 'We are unable to process your request. Please try again later"';
        }
    }
}
?>


<?php echo $message; ?>

