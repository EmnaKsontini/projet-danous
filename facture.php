<!DOCTYPE html>
<?php session_start();
 ?>
<html>
<head>
<title> Payment </title>
<link href="style1.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="main">	
		<h1> Facturation </h1>
		<div class="div1">
			<div class="div1_left">
				<div class="div1_left1">
                    <h3>Payment Summary : </h3>
                    <?php

                    foreach ( $_SESSION["cart_item"] as $key => $value)
                    {
                        foreach ( $value  as $key1 => $value1) {

                            if ($key1 == "produit") {
                                foreach ($value1 as $key2 => $value2) {
                                    if ($key2 == "Reference") {
                                        echo "<ul><li > Reference: $value2<span></span>";
                                    }
                                    if ($key2 == "Prix") {
                                        echo "</li><li> Price: $value2</li>";
                                    }

                                }
                            }
                            if ($key1 == "quantity") {
                                echo "<br><li> quantity : $value1</li></ul> <hr> ";
                            }
                        }

                    }

                    ?>

				</div>
				<div class="total">
					<h3>Total Price</h3>
					<h4>523.63 GBP</h4>					<p>Price includes all taxes</p>
				</div>
			</div>
			<div class="div1_right">
				<div class="payement">
					<h2>Payment Method</h2>
					<div >
						<ul>
							<li><img src="images/1.jpg" alt=" " /></li>
							<li><img src="images/2.jpg" alt=" " /></li>
						</ul>
						<div>
							<div>
								<form action="#" method="post" >
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div>
											<div>
												<div >
													<label class="control-label">Name on Card</label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div>
															<label class="control-label">Card Number</label>
															<input class="number credit-card-number form-control" type="text" name="number"
																		  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
														</div>
													</div>
													<div class="div2_right">
														<div >
															<label class="control-label">CVV</label>
															<input class="security-code form-control"Â·
																		  inputmode="numeric"
																		  type="text" name="security-code"
																		  placeholder="&#149;&#149;&#149;">
														</div>
													</div>
													<div> </div>
												</div>
												<div>
													<label class="control-label">Expiration Date</label>
													<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
												</div>
											</div>
											<button class="submit"><span>Make a payment <i aria-hidden="true"></i></span></button>
										</div>
									</section>
								</form>
							</div>
							<div class="div2_right2">
								<h3>Already have a paypal Account <a href="#">Login here</a></h3>
								<form action="#" method="post">
									<input type="email" name="Email" placeholder="Email" required="">
									<input type="password" name="Password" placeholder="Password" required="">
									<input type="submit" value="Login">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div> </div>
		</div>
	</div>



</body>
</html>