<!DOCTYPE html>
<?php session_start();

if (isset($_SESSION["login"]))
$log=$_SESSION["login"];
{
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
                        $_SESSION["total"]=0;
                       $prix=0;
                    if(isset($_SESSION["cart_item"]))
                    {  foreach ( $_SESSION["cart_item"] as $key => $value) {
                        $prix = 0;
                        foreach ($value as $key1 => $value1) {

                            if ($key1 == "produit") {
                                foreach ($value1 as $key2 => $value2) {
                                    if ($key2 == "Reference") {
                                        echo "<ul><li > Reference: $value2<span></span>";

                                    }
                                    if ($key2 == "Prix") {
                                        echo "</li><li> Price: $value2 DT</li>";
                                        $prix = $value2;
                                    }

                                }
                            }
                            if ($key1 == "quantity") {
                                echo "<br><li> quantity : $value1</li></ul> <hr> ";
                                $_SESSION["total"] = $_SESSION["total"] + $value1 * $prix;

                            }
                        }


                    }}

                    ?>

				</div>
				<div class="total">
                    <?php
                    if (isset($_GET["click"])) {

                        $_SESSION["total"] = $_SESSION["total"]- $_SESSION["total"] * ($point/100);

                        $req=" UPDATE `autho` SET  pointdanous= '0' WHERE login= \"".$log."\"";
                       $stmt1 = $pdo->query($req);
                       $rows1 = $stmt1->fetch(PDO::FETCH_ASSOC);


                    }


                    ?>
					<h3> Total Price : <?php echo $_SESSION["total"]?> DT  </h3>
                    <p class="comment">Price includes all taxes</p>
				</div>
			</div>
			<div class="div1_right">
				<div class="payement">
					<h2 id="title">PAYMENT METHOD</h2>
					<div >
						<ul>
                            <form>
                             <div style="float:left">    <input type="checkbox" ><img src="images/1.jpg" alt=" "></input> </div>

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
                                <p class="text"> Click here <a href="?click=1"><img class="logo" src="images/logo.png" width="100px" height="50px"  border="0.1px" ></img></a>to Use your points to get a discount ( you already have <?php  echo $point ?> points ) <br> <br></p>



								</form>
							</div>

						</div>

					</div>

				</div>
                <button class="button5" > Make the payment  </button>
			</div>

			<div>  </div>
		</div>
	</div>




</body>
</html>