<select id ="categorie">
    <option value="pc">Laptop</option>
    <option value="telephone">Phone</option>
    <option value="ecran">Screen</option>
</select>
 <div id ="forum">

 </div>
<?php

  if (isset($_POST)){
         var_dump($_POST);
         $val="(";

         foreach ($_POST as $p=>$v) {
              if (strcmp($p,"table")==0) continue;
             $val = $val.'"' . $v. '",';
         }
          $val=substr($val,0,strlen($val)-1);
          $val=$val.')';
         echo $val;

      try
      {
          $BD_connexion=new PDO('mysql:host=localhost;dbname=danousdatabase','root','');

          $BD_connexion->query("use autho");
        /*  $login=$_SESSION["login"];

          $req ="UPDATE `autho` SET nom=\"".$nom."\",prenom=\"".$prenom."\",mail=\"".$mail."\",pays=\"".$pays."\",age=\"".$age."\" WHERE login= \"".$login.'"';
          echo $req;
          $stmt = $BD_connexion->prepare($req);
          $stmt->execute();
          echo $stmt->rowCount();*/
          $_POST = array();

      }

      catch(Exception $e) {}

  }
?>


<script src="JS/addProduct.js"></script>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>