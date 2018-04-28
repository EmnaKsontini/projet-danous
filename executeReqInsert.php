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
<?php
//Remplace _  with esp
function repEsp ($s){
    $ret=str_replace("_"," ",$s);
    return $ret;
}
if (isset($_POST["table"])){
    $val="(";
    $att="(";

    foreach ($_POST as $p=>$v) {
        if (strcmp($p,"table")==0) continue;
        $val = $val.'\'' . $v. '\',';
        $att = $att.' `' . repEsp($p). '`,';
    }
    $val=substr($val,0,strlen($val)-1);
    $att=substr($att,0,strlen($att)-1);
    $val=$val.')';
    $att=$att.')';


    try
    {
        $BD_connexion=new PDO('mysql:host=localhost;dbname=danousdatabase','root','');

        $BD_connexion->query("use autho");
        $req="INSERT INTO ".$_POST["table"]." ".$att.' VALUES '.$val;
        //echo    $req;
        $stmt = $BD_connexion->prepare($req);
        $stmt->execute();
        if ($stmt->rowCount()){
            echo 'New Prodcut is inserted succesfully';
        }else {
            echo 'Error :/';
        }

        $_POST = array();

    }

    catch(Exception $e) {}

}
?>
</body>
