<!DOCTYPE html>

<html lang="en">
<head>


    <title>Comparator</title>

    <meta charset="utf-16">


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleForComparatorPage.css">



</head>
<body>

<?php
session_start();
//session_destroy();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
}catch (PDOException $e){
    print "Erreur : " . $e->getMessage();
    die();
}


?>
<header>
    <nav class="hey" >
        <ul>
            <li class="selected"><a href="home.php">Home</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="Products.php">All Products</a></li>
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

    <h1 class="page-heading">Comparator Table</h1>
    <div class="outercontainer">
    <div id="innercontainer">
    <table id="comparator">
        <tr>

        <?php
      //  $table_name;
       // var_dump($_SESSION);

        if (isset($_SESSION['comparator_item'])){
        foreach ($_SESSION['comparator_item'] as $item){
            $table_name = $item["produit"]->type;


        }
        echo ("</tr>");


        $req = "DESCRIBE ".$table_name;
        $query = $bdd -> query($req);
        $tab_attribut = $query -> fetchall();
        //var_dump($tab_attribut);
        //var_dump($tab_attribut);
        foreach ($tab_attribut as $ta){
            echo ("<tr><th>".$ta[0]."</th>");
            foreach ($_SESSION["comparator_item"] as $item){
                //var_dump($item);
                if ($item["produit"]->type==$table_name){
                if($ta[0]=="Reference"){

                    echo ("<td><img class='autoResizeImage' src=\"images/".$item["produit"]->$ta[0].".jpg\" alt = \"".$item["produit"]->$ta[0]."\" >".$item["produit"]->$ta[0]."</td>");
                }
                else echo ("<td>".$item["produit"]->$ta[0]."</td>");
            }}
            echo ("</tr>");
        }}
        else echo("Oops Your comaprator list is empty");
        ?>

    </table>
    </div>
    </div>

</main>
</body>