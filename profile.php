<!DOCTYPE html>

<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Danous  </title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="profileStyle.css" media="screen" />
</head>
<body>
<header>
    <nav class="hey" >
        <ul>
            <li class="selected"><a href="home.php">Home</a></li>


            <li><a href="MyCart.php"> My Cart </a></li>

            <li><a href="logout.php" title="Please come again">log out</a></li>
            <li><a href="#bas">Contact us</a></li>
            <li><a href="#bas">About</a></li>
            <?php

             echo"<li>";
             echo $_SESSION['login'];
             echo" </li>";
            ?>





    </nav>


</header>
<article>
    <div id="w">
        <div id="contenu" class="clearfix">
            <div id="userphoto"> <img src="images/avatar.png" alt="default avatar" title="change your AVATAR"></div>
            <h1>User Profile </h1>

            <nav id="profiletabs">
                <ul class="clearfix">



                    <li><a href="#settings">Settings</a></li>
                    <a href ="Edit.php"><img src="images/edit.png" alt="*Edit*"> </a>
                </ul>
            </nav>
            <section id="settings" >
                <p>Edit your user settings:</p>
                <?php
                session_start();

    try {
    $bdd=new PDO('mysql:host=localhost;dbname=danousdatabase','root','');
    }
    catch (PDOException $e)
    {
    print "Erreur  " . $e->getMessage();
    die();
    }
    $login=$_SESSION["login"];
    $MaRequette='SELECT * from `autho`  WHERE login= "'.$login.'"';
    //$MaRequette="SELECT * from `autho`  WHERE login= \"".$login.'"';
    //echo $MaRequette;
    $rep=$bdd->query($MaRequette);
   $personne = $rep->fetch(PDO::FETCH_OBJ);




                    echo "

                <p class=\"setting\"><span>name</span> ".$personne->nom."</p>
                <p class=\"setting\"><span>Last Name </span>".$personne->prenom."</p>

                <p class=\"setting\"><span>E-mail Address</span> ".$personne->mail."</p>

                <p class=\"setting\"><span>pays </span> ".$personne->pays."</p>





                <p class=\"setting\"><span>age </span>".$personne->age." </p>
                <p class=\"setting\"><span> point Danous</span>".$personne->pointdanous." </p>";



?>
            </section>



</article>


<footer>

    <div id="privacy">
        <p>
        <table class="colone1">
            <div id="bas"></div>
            <tr>
                <td  width="33%" colspan="2">CONTACTEZ NOUS :</td>
                <td width="33%" colspan="2">SUIVEZ_NOUS:</td>


                <br>


            <tr>
                <td><img src="images/mail.png"></td>
                <td align="center">Danous@Danous.tn</td>
                <td><img src="images/facebook.png" > </td>
                <td>DanousVente</td>

            </tr>
            <tr>
                <td><img src="images/phone.png"></td>
                <td align="center"> 71 777 777</td>
                <td><img src="images/insta.png" > </td>
                <td>DanousVente</td>




            </tr>


            </tr>

        </table>
        <div id="right">
            <tabele class="colone1">





            </tabele>
        </div>
        </p>
    </div>
</footer>
</body>
