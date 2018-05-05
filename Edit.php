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


            <li><a href="MyCart.php">My Cart</a></li>

            <li><a href="#bas">Contact us</a></li>
            <li><a href="#bas">About</a></li>
            <?php

            echo"<li>";
            echo$_SESSION['login'];
            echo" </li>";
            ?>





    </nav>


</header>
<article>
    <div id="w">
        <div id="contenu" class="clearfix">
            <div id="userphoto"><img src="images/avatar.png" alt="default avatar"></div>


            <h1>User Profile </h1>

            <nav id="profiletabs">
                <ul class="clearfix">



                    <li><a href="#settings">Settings</a></li>
                </ul>
            </nav>
            <br>
            <br>
            <br>
            <br>

            <section id="settings" >
                <p>Edit your user settings:</p>

                <form action="EditCode.php" method="post" >
                <p class="setting"><span>name </span> <input type="text"  placeholder="Name"   name="nom" /></p>

                <p class="setting"><span>Last Name </span><input type="text"  placeholder="last Name"   name="prenom" /></p>

                <p class="setting"><span>E-mail Address </span> <input type="text"  placeholder="Email"   name="mail" /></p>

                <p class="setting"><span>pays </span> <input type="text"  placeholder="pays"   name="pays" /></p>



                <p class="setting"><span>age </span> <input type="text"  placeholder="age"   name="age" /></p>
                    <button class="submit-btn" name="ok" >OK</button>
                </form>



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
