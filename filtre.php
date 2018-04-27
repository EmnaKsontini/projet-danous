<h3>LAPTOP</h3>
<ul>
<?php

try {
    $bdd = new
    PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '0000');
}catch (PDOException $e){
    print "Erreur : " . $e->getMessage();
    die();
}



$req = $bdd ->query("use danousdatabase");
$req = "SELECT * FROM ".$_SESSION["table"];
$str=$_POST["req"];
if (strlen($str)!=0)
    $req=$req." Where ".$_POST["req"];
$query = $bdd -> query($req);
$objs = $query -> fetchAll(PDO::FETCH_OBJ);
foreach ($objs as $el){
    ?>
    <li>
        <div class="img">
            <a href="#">
                <img src="images/<?php echo"$el->Reference"?>.jpg" alt="<?php echo "$el->Reference" ?>" style="width:128px;height:128px">
            </a>
            <form method="post" action="product.php?code=<?php echo $el->Reference; ?> ">
                <div>
                    <input id="Details" type="submit" value="Details" />
                </div>
            </form>
        </div>
        <div class="info">
            <a class="title" href="#"><?php echo"$el->Reference"?></a>
            <p>on va ecire une description ici1</p>
            <div class="price">
                <span class="st">Our price:</span><strong><?php echo "$el->Prix"."DT" ?></strong>
            </div>
            <div class="actions">
                <form method="post" action="products.php?code=<?php echo $el->Reference; ?> ">
                    <div>
                        <input type="submit" name="addtocomparator" value="Add to comparator" />
                        <input type="submit" name="addtocart" value="Add to cart" />
                        <input type="text" id="q" name="quantity" value="1" size="1" />
                    </div>
                </form>
            </div>
        </div>
    </li>
    <?php

};
    if (!sizeof ($objs))
        echo "Il n'y a pas de produit.";

?>