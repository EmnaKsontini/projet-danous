<!DOCTYPE html>

<html lang="en"><head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>E-Store  </title>

    <meta charset="utf-8">


    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />






    <header>
        <nav>
            <ul>
                <li class="selected"><a href="#">Home</a></li>
                <li><a href="#">Specials</a></li>
                <li><a href="#">All Products</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">About</a></li>


            </ul>
            <section id="search"><!-- Search form -->
                <form action="#" onsubmit="return false;" method="get">
                    <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                    <input type="submit" value="Search">
                </form>

            </section>
        </nav>
        <div class="top_head">
            <div class="couverture ">
                <!--notre couverture est en background-->
            </div>


        </div>
        <section id="submenu">
            <ul>
                <li><a href="#">Category #1</a></li>
                <li><a href="#">Category #2</a></li>
                <li><a href="#">Category #3</a></li>
                <li><a href="#">Category #4</a></li>
                <li><a href="#">Category #5</a></li>
                <li><a href="#">Category #6</a></li>
            </ul>
        </section>
    </header>
    <div id="slider"><!-- Defining the main content section -->
        <!-- Promo slider -->
        <section id="slider-wrapper">
            <div id="slider" class="nivoSlider">
                <img  src="images/test.jpg" alt="" title="#htmlcaption-1">
                <img style="display: none;" src="images/promo2.jpg" alt="" title="#htmlcaption-2">
                <img style="display: none;" src="images/promo3.jpg" alt="" title="#htmlcaption-3">
                <!--  </div>
                  <div id="htmlcaption-1" class="nivo-html-caption">
                      <h5 class="p2">Welcome to the our E-Shop</h5>
                      <p>Put any description here</p>
                  </div>
                  <div id="htmlcaption-1" class="nivo-html-caption">
                      <h5 class="p2">This is promo area</h5>
                      <p>Put any description here</p>
                  </div>
                  <div id="htmlcaption-2" class="nivo-html-caption">
                      <h5 class="p2">Where you can add any feature products</h5>
                      <p>Put any description here</p>
                  </div>
                  <div id="htmlcaption-3" class="nivo-html-caption">
                      <h5 class="p2">Or something else</h5>
                      <p>Put any description here</p>
                  </div>
              </section>
          </div>
          <div id="main"><!-- Defining submain content section -->
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
            <footer>
                <div id="privacy">
                    Made By GL2 People without BootStrap !!!!!!
                </div>
            </footer>