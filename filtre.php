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
$pcs = $query -> fetchAll(PDO::FETCH_OBJ);
foreach ($pcs as $p){
    ?>
    <li>
        <div class="img">
            <a href="#">
                <img src="images/<?php echo"$p->Reference"?>.jpg" alt="<?php echo "$p->Reference" ?>" style="width:128px;height:128px">
            </a>
        </div>
        <div class="info">
            <a class="title" href="#"><?php echo"$p->Reference"?></a>
            <p>on va ecire une description ici1</p>
            <div class="price">
                <span class="st">Our price:</span><strong><?php echo "$p->Prix"."DT" ?></strong>
            </div>
            <div class="actions">
                <form method="post" action="products.php?code=<?php echo $p->Reference; ?> ">
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
};?>