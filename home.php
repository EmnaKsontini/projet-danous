<?php session_start();?>
<!DOCTYPE html>

<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Danous  </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<header>
    <nav class="hey" >
        <ul>
            <li class="selected"><a href="#">Home</a></li>

            <li><a href="Products.php">All Products</a></li>
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
<article>
    <div id="slider"><!-- Defining the main content section -->
        <!-- Promo slider -->
                <section id="slider-wrapper">
                    <div id="slider" class="nivoSlider">
                <img  src="images/test.jpg" alt="" title="#htmlcaption-1">
                <img style="display: none;" src="images/promo2.jpg" alt="" title="#htmlcaption-2">
                <img style="display: none;" src="images/promo3.jpg" alt="" title="#htmlcaption-3">
            </div>

          <div id="main"> <!-- Defining submain content section -->
                <section id="content"><!-- Defining the content section #2 -->
                    <div id="left">
                        <h3>Last products</h3>
                        <ul>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post1.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 1</a>
                                    <p>on va ecire une description ici1</p>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>dt550.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="#">Details</a>
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post2.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 2</a>
                                    <p>on va ecrire une description ici2</p>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>dt250.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="#">Details</a>
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post3.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 3</a>
                                    <p>on va ecire une description ici3</p>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>dt350.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="#">Details</a>
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post4.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 4</a>
                                    <p>on va ecire une description ici1</p>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>dt550.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="#">Details</a>
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post5.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 5</a>
                                    <p>on va ecire une description ici2</p>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>dt250.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="#">Details</a>
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post6.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 6</a>
                                    <p>on va ecire une description ici3</p>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>dt350.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="#">Details</a>
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="right">
                        <h3>Top sells</h3>
                        <ul>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post6.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 7</a>
                                    <div class="price">
                                        <span class="usual">dt600.00 </span>&nbsp;
                                        <span class="special">dt500.00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post5.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 8</a>
                                    <div class="price">
                                        <span class="usual">dt500.00 </span>&nbsp;
                                        <span class="special">dt400.00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post4.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 9</a>
                                    <div class="price">
                                        <span class="usual">dt700.00 </span>&nbsp;
                                        <span class="special">dt600.25</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post3.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 10</a>
                                    <div class="price">
                                        <span class="usual">dt805.00 </span>&nbsp;
                                        <span class="special">dt714.25</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post2.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 11</a>
                                    <div class="price">
                                        <span class="usual">dt1205.00 </span>&nbsp;
                                        <span class="special">dt1000.25</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="images/post1.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="#">Product 12</a>
                                    <div class="price">
                                        <span class="usual">dt200.00 </span>&nbsp;
                                        <span class="special">dt190.25</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
</article>

        <footer>
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
<div class="bottom" id="alert" >
    <img width="50" class="avatar" src="https://designmodo.com/wp-content/themes/designmodo/assets/img/misc/cookie.png" alt="Cookie Icon">
    <div>We use cookies to give you the best experience on our website.</div>
 <button class="button4" onclick="accpetCookie()" >Nice, I love cookies!</button>
        </div>
    </div>
</div>
<script>
    // if user has already checked the confirmation button
    // the alert panel should be hidden.
     if (getCookie('accepted') === 'yes') {
        document.getElementById("alert").style.display = "none";}


    // user clicks the confirmation -> set the 'yes' value to cookie and set 'accepted' as name
    function accpetCookie() {
        setCookie('accepted', 'yes', 100);
        document.getElementById("alert").style.display = "none";
    }

    // code from :http://stackoverflow.com/a/4825695/191220
    // set cookie method
    function setCookie(c_name, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = c_name + "=" + c_value;
    }

    // get cookie method
    function getCookie(c_name) {
        var i, x, y, ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
            y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
    }
</script>
</body>
