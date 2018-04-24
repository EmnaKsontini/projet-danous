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
            echo$_SESSION['login'];
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
            <input id="userphoto" type="file"  placeholder="Name"   name="nom" />
            <section id="settings" >
                <p>Edit your user settings:</p>


                <p class="setting"><span>name </span> <input type="text"  placeholder="Name"   name="nom" /></p>
                <p class="setting"><span>Last Name </span><input type="text"  placeholder="last Name"   name="nom" /></p>

                <p class="setting"><span>E-mail Address </span> <input type="text"  placeholder="Email"   name="nom" /></p>

                <p class="setting"><span>Language </span> <input type="text"  placeholder="Language"   name="nom" /></p>





                <p class="setting"><span>age </span> <input type="text"  placeholder="age"   name="nom" /></p>
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
            <tabele class="colone1">





            </tabele>
        </div>
        </p>
    </div>
</footer>
</body>
