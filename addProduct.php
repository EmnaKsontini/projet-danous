<!DOCTYPE html>

<html lang="en">
<head>


    <title>Product  </title>

    <meta charset="utf-16">


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="StyleForProduct.css">


</head>
<body>
<header>
    <nav class="hey" >
        <ul>
            <li class="selected"><a href="#">Home</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="MyCart.php">MyCart</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About</a></li>
            <?php
            if(!isset($_SESSION['login']))
                echo"<li><a href=\"formulaireLogin.php\"> <img class=\"home\" src=\"images/this2.png\" title=\"LogIn\" ></a></li>";
            else echo"<li><a href=\"profile.php\">my profile</a> </li>";
            ?>




        </ul>
        <section id="search"><!-- Search form -->
            <form action="#" onsubmit="return false;" method="get">
                <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                <input type="submit" value="Search">
            </form>

        </section>
    </nav>

    <section id="cat">
        <nav id="submenu">
            <ul>
                <form method="post" action="products.php">
                    <li><input name="type" type="submit" value="laptop" /></li>
                    <li><input name="type" type="submit" value="phone" /></li>
                    <li><input name="type" type="submit" value="Category 3" /></li>
                    <li><input name="type" type="submit" value="Category 4" /></li>
                    <li><input name="type" type="submit" value="Category 5" /></li>
                    <li><input name="type" type="submit" value="Category 6" /></li>
                </form>
            </ul>
        </nav>
    </section>
</header>
<select id ="categorie">
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