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
            <li><a href="#">Specials</a></li>
            <li><a href="Products.php">All Products</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About</a></li>
            <?php

             echo"<li>";
             echo $_SESSION['login'];
             echo" </li>";
            ?>




        </ul>
        <section id="search"><!-- Search form -->
            <form action="#" onsubmit="return false;" method="get">
                <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                <input type="submit" value="Search">
            </form>

        </section>
    </nav>


</header>
<article>
    <div id="w">
        <div id="contenu" class="clearfix">
            <div id="userphoto"><a href ="Edit.php"> <img src="images/avatar.png" alt="default avatar" title="change your AVATAR"></a></div>
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

                <p class=\"setting\"><span>name<a href =\"Edit.php\"> </span> ".$personne->nom."</p>
                <p class=\"setting\"><span>Last Name </span>".$personne->prenom."</p>

                <p class=\"setting\"><span>E-mail Address</span> ".$personne->mail."</p>

                <p class=\"setting\"><span>pays </span> ".$personne->pays."</p>





                <p class=\"setting\"><span>age </span>".$personne->age." </p>";



?>
            </section>



</article>


<footer>
    <div id="privacy">
        <p>
        <table class="colone1">
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

        </div>
        </p>
    </div>
</footer>
</body>
