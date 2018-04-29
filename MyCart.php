<?php session_start();
if(isset($_POST["remove"])){
    include "remove.php";
    //var_dump( $_SESSION["cart_item"]);//tester si les produits ajouter au chariot sont sauvegarder

}
?>

<!DOCTYPE html>

<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Danous  </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="style_cart.css" media="screen" />
</head>
<body>
<header>
    <nav class="hey" >
        <ul>
            <li class="selected"><a href="home.php">Home</a></li>

            <li><a href="MyCart.php">My Cart</a></li>
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
<article>
    <section id="first">
        <div id="cart">
                <h3>My Cart</h3>
            <?php if(isset($_SESSION["cart_item"])){?>
                <form id="top" method="post" action="facture.php ">
                    <input type="submit" name="BuyNow" value="Buy Now" />
                </form>
            <?php }?>
            <ul>
                <?php if(isset($_SESSION["cart_item"])){?>
                <?php
                foreach($_SESSION["cart_item"] as $k => $v){
                    ?>
                    <li>
                        <div class="img">
                            <a href="#">
                                <img src="images/<?php echo"$k"?>.jpg" alt="<?php echo "$k" ?>" style="width:128px;height:128px">
                            </a>

                        </div>
                        <div class="info">
                            <a class="title" href="#"><?php echo"$k"?></a>
                            <p>on va ecire une description ici1</p>
                            <div class="price">
                                <span class="st">Our price:</span><strong><?php echo $_SESSION["cart_item"][$k]["prix"]."DT" ?></strong>
                                <span class="st">Quantity:</span><strong><?php echo $_SESSION["cart_item"][$k]["quantity"] ?></strong>
                            </div>
                            <div class="actions">
                                <form method="post" action="MyCart.php?code=<?php echo $k; ?> ">
                                    <div>
                                        <input type="submit" name="remove" value="remove" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <?php
                }}
            else echo"<h1>YOUR CART IS EMPTY</h1>" ?>

            </ul>
</article>

</body>