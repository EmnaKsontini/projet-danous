<h3>LAPTOP</h3>
<ul>
<?php

try {
    $bdd = new
    PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
}catch (PDOException $e){
    print "Erreur : " . $e->getMessage();
    die();
}


$table="pc";

$req = $bdd ->query("use danousdatabase");
$req = "SELECT * FROM ".$table;
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
                        <input type="text" name="quantity" value="1" size="2" />
                        <input type="submit" name="addtocart" value="Add to cart" />
                        <input type="submit" value="Details" />
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