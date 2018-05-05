<!DOCTYPE html>
<?php session_start();
//a l'achat d un article le client obtient un point danous sachant que un point danous vaut 1% de reduction le client a le choix d'utiliser ses points ou pas

if (isset($_SESSION["login"]))

{   $log=$_SESSION["login"];
    $req = "SELECT * FROM autho WHERE login= \"" . $log . "\"";
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=danousdatabase', 'root', '');
        $stmt = $pdo->query($req);
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        exit('<b>Catched exception at line ' . $e->getLine() . ' (code : ' . $e->getCode() . ') :</b> ' . $e->getMessage());
    }

    $point = $rows["pointdanous"];
}

 ?>

<html>
<head>
<title> Payment </title>
<link href="style1.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<script></script>
	<div class="main">
		<div class="div1">
			<div class="div1_left">
				<div class="div1_left1">
                    <h3>Payment Summary : </h3>
                    <?php
                    $BD_connexion=new PDO('mysql:host=localhost;dbname=danousdatabase','root','');
                        $_SESSION["total"]=0;
                    $_SESSION["nbrpoint"]=0;
                    if(isset($_SESSION["cart_item"]))

                    {  foreach ( $_SESSION["cart_item"] as $key => $value) {



                                        echo "<ul><li > Reference: $key <span></span>";
                                        echo "</li><li> Price:".$_SESSION["cart_item"][$key]["prix"]."DT</li>";
                                        echo "<br><li> quantity : ".$_SESSION["cart_item"][$key]["quantity"]."</li></ul><hr>";
                        $prix=$_SESSION["cart_item"][$key]["prix"];
                        $k1=$_SESSION["cart_item"][$key]["quantity"];
                                $_SESSION["total"] = $_SESSION["total"] + $k1* $prix;
                        $_SESSION["nbrpoint"]= $_SESSION["nbrpoint"]+$_SESSION["cart_item"][$key]["quantity"];

                            }




                    }

                    ?>

				</div>
				<div class="total">

                    <?php
                    if (isset($_GET["click"])) {

                        $_SESSION["total"] = $_SESSION["total"]- $_SESSION["total"] * ($point/100);

                        $req=" UPDATE `autho` SET  pointdanous= '0' WHERE login= \"".$log."\"";
                       $stmt1 = $pdo->query($req);
                       $rows1 = $stmt1->fetch(PDO::FETCH_ASSOC);
                        $point =0 ;

                    }


                    ?>
					<h3> Total Price : <?php if($_SESSION["total"]>0) echo $_SESSION["total"]; else echo "0"?> DT  </h3>
                    <p class="comment">Price includes all taxes</p>
				</div>
			</div>
			<div class="div1_right">
				<div class="payement">
					<h2 id="title">PAYMENT METHOD</h2>
					<div >
						<ul>
                            <form method="post">
                             <div style="float:left">    <input type="checkbox" name="check1" ><img src="images/1.jpg" alt=" "></input> </div>

                                <div style="float:right"> <input type="checkbox" ><img src="images/2.jpg" alt=" " /> </div>
                            </form> <br> <br> <br>

						</ul>
						<div>
							<div>
								<form action="#" method="post" >
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div>
											<div>
												<div >
													<label class="label">Name on Card</label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div>
															<label class="label">Card Number</label>
															<input class="number credit-card-number form-control" type="text" name="number"
																		  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
														</div>
													</div>
													<div class="div2_right">
														<div >
															<label class="label">CVV</label>
															<input class="security-code form-control"Â·
																		  inputmode="numeric"
																		  type="text" name="security-code"
																		  placeholder="&#149;&#149;&#149;">
														</div>
													</div>
													<div> </div>
												</div>
												<div>
													<label class="label">Expiration Date</label>
													<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="">
												</div>
											</div>

										</div>
									</section>
								</form>
							</div>
							<div class="div2_right2">
                                <p class="text"> Click here <a href="?click=1"><img class="logo" src="images/logo.png" width="100px" height="50px"  border="0.1px" ></img></a>to Use your points to get a discount ( you already have <?php if (isset($point)) echo $point; else echo "0"?> points ) <br> <br></p>
                                  <?php
                    if (isset($_GET["click1"])) {
                        $BD_connexion->query("use achat");
                        $str = "INSERT INTO `achat`(`reference`, `price`, `quantity`, `Client`, `date`) VALUES (:val1,:val2,:val3,:val4,:val5)";
                        $req = $BD_connexion->prepare($str);
                            foreach ($_SESSION["cart_item"] as $key => $value) {

                                $prix = $_SESSION["cart_item"][$key]["prix"];
                                $k1 = $_SESSION["cart_item"][$key]["quantity"];
                                $_SESSION["total"] = $_SESSION["total"] + $k1 * $prix;
                                $req->execute(array(
                                    'val1' => $key,
                                    'val2' => $prix,
                                    'val3' => $k1,
                                    'val4' => $_SESSION["login"],
                                    'val5' => date("Y/m/d"),
                                ));

                            $h = $point + $_SESSION["nbrpoint"];
                            $BD_connexion->query("use autho");
                            $str1 = "UPDATE autho SET `pointdanous`=" . $h . " WHERE login=\"" . $_SESSION["login"] . "\"";
                            $req1 = $BD_connexion->prepare($str1);
                            $req1->execute();

                        }
                        header('Location:home.php');
                    }
                    ?>


								</form>
							</div>

						</div>

					</div>

				</div>
                <a href="?click1=1"><submit class="button5" > Make the payment  </submit><a>

			</div>

			<div>  </div>
		</div>
	</div>



</body>
</html>