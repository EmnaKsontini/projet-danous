<link rel="stylesheet" href="addProductStyle.css">
    <p></p>
<div id="content">
    <div id="in">
        <div id="steps">
<legend>Add new Product :</legend>
<fieldset class="step">
    <form id="formElem" action="executeReqInsert.php" method="post" >
    <?php

    //retourne le type d un obj
    function typeObj ($obj){
          if (strcmp($obj->Type,"int(11)")==0)
            return "number";
        return "text";
    }
    try {
    $bdd = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
    }catch (PDOException $e){
    print "Erreur : " . $e->getMessage();
    die();
    }
    $req = "DESCRIBE ".$_POST["tab"];
    $query = $bdd -> query($req);
    $attributs= $query -> fetchAll(PDO::FETCH_OBJ);
    foreach ($attributs as $att)
     echo '<p class="setting"><span>'.$att->Field.'</span> <input type="'.typeObj($att).'"  name="'.$att->Field.'"/></p>';
    ?>

<button class="submit-btn" name="table" value="<?php echo $_POST["tab"]?>" >OK</button>
    </form>
</fieldset>
    </div>
    </div>
    </div>
</section>
