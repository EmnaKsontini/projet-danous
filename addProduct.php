<select id ="categorie">
    <option value="pc">Laptop</option>
    <option value="telephone">Phone</option>
    <option value="ecran">Screen</option>
</select>
 <div id ="forum">

 </div>
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
          echo    $req;
          $stmt = $BD_connexion->prepare($req);
          $stmt->execute();
          echo $stmt->rowCount();

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