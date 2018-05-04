<!DOCTYPE html>

<html lang="en">
<head>


    <title>Product  </title>

    <meta charset="utf-16">


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="StyleForProduct.css">
<style>
    #categorie{
        background-color:#f0f0f0;
        color: #7f1413;
        font-size:20px;
        text-shadow:1px 1px 1px #fff;
    }

</style>

</head>
<body>
<header>
    <nav class="hey" >
        <ul>
            <li class="selected"><a href="home.php">Home</a></li>
            <li><a href="MyCart.php">MyCart</a></li>

            <?php
            if(!isset($_SESSION['login']))
                echo"<li><a href=\"formulaireLogin.php\"> <img class=\"home\" src=\"images/this2.png\" title=\"LogIn\" ></a></li>";
            else echo"<li><a href=\"profile.php\">my profile</a> </li>";
            ?>




        </ul>

    </nav>

    <section id="cat">
        <nav id="submenu">
            <ul>
                <form method="post" action="products.php">
                    <li><input name="type" type="submit" value="laptop" /></li>
                    <li><input name="type" type="submit" value="phone" /></li>

                </form>
            </ul>
        </nav>
    </section>
</header>
<select id ="categorie">
    <option value="pc">choisissez</option>
    <option value="pc">Laptop</option>
    <option value="telephone">Phone</option>
    <option value="ecran">Screen</option>
</select>
 <div id ="forum">

 </div>


</body>
<script src="JS/addProduct.js"></script>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
</html>