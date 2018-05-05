
<!DOCTYPE html>

<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Danous  </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styleTable.css" media="screen" />
</head>
<body>
<header>
    <nav class="hey" >
        <ul>
            <li class="selected"><a href="#">Home</a></li>


            <li><a href="MyCart.php">MYCART</a></li>
            <li><a href="#bas">Contact us</a></li>
            <li><a href="#bas">About</a></li>
            <?php
            session_start();
            if(!isset($_SESSION['login']))
                echo"<li><a href=\"formulaireLogin.php\"> <img class=\"home\" src=\"images/this2.png\" title=\"LogIn\" ></a></li>";
            else echo"<li><a href=\"profile.php\">my profile</a> </li>";
            ?>
        </ul>


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

    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">

    </body>
    <body>

    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1">
                    <div class="table100-firstcol">
                        <table class="table">
                            <caption>sale summary</caption>

                            <thead>
                            <tr>
                                <th scope="col">Client</th>
                                <th scope="col">Reference</th>
                                <th scope="col">quantity</th>
                                <th scope="col">price</th>
                                <th scope="col">date</th>
                            </tr>
                            </thead>

                            <?php
                            $req="SELECT * FROM achat";
                            try {
                                $pdo = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
                                $stmt = $pdo->query($req);
                                while($rows = $stmt->fetch())
                                { ?>
                            <tbody>
                            <tr>
                            <td data-label="Account"><?php echo $rows["Client"] ?></td>
                            <td data-label="Account"><?php echo $rows["reference"] ?></td>
                            <td data-label="Account"><?php echo $rows["quantity"] ?></td>
                            <td data-label="Account"><?php echo $rows["price"] ?></td>
                            <td data-label="Account"><?php echo $rows["date"] ?></td>
                            </tr>
                            </tbody>

                           <?php
                                } ?>
                                     </table>
                    </div>
                          <?php      $stmt->closeCursor();
                            }
                            catch(Exception $e)
                            {
                               $e->getMessage();
                            } ?>



<footer>
    <div id="bas"></div>
    <div id="privacy">
        <p>
        <table class="colone1">
            <tr>
                <td  width="20%" colspan="2">CONTACTEZ NOUS :</td>
                <td width="20%" colspan="2">SUIVEZ_NOUS:</td>
                <td width="20%"></td>

                <br>


            <tr>
                <td><img src="images/mail.png"></td>
                <td align="center">Danous@Danous.tn</td>
                <td><img src="images/facebook.png" > </td>
                <td>DanousVente</td>
                <td>LOGO</td>

            </tr>
            <tr>
                <td><img src="images/phone.png"></td>
                <td align="center"> 71 777 777</td>
                <td><img src="images/insta.png" > </td>
                <td>DanousVente</td>
                <td><img src="images/c.png"></td>




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

</div>

</body>
