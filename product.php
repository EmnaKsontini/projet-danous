<!DOCTYPE html>

<html lang="en">
<head>


    <title>Product  </title>

    <meta charset="utf-8">


    <link rel="stylesheet" href="StyleForProduct.css">

</head>
<body>
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

</header>
<main class="container">

    <!-- Left Column / Headphones Image -->
    <div class="left-column">
        <img data-image="black" src="images/black.png" alt="">
        <img data-image="blue" src="images/blue.png" alt="">
        <img data-image="red" class="active" src="images/red.png" alt="">
    </div>


    <!-- Right Column -->
    <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
            <span>Headphones</span>
            <h1>Beats EP</h1>
            <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

            <!-- Product Color -->
            <div class="product-color">
                <span>Color</span>

                <div class="color-choose">
                    <div>
                        <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                        <label for="red"><span></span></label>
                    </div>
                    <div>
                        <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                        <label for="blue"><span></span></label>
                    </div>
                    <div>
                        <input data-image="black" type="radio" id="black" name="color" value="black">
                        <label for="black"><span></span></label>
                    </div>
                </div>

            </div>

            <!-- Cable Configuration -->
            <div class="cable-config">
                <span>Cable configuration</span>

                <div class="cable-choose">
                    <button>Straight</button>
                    <button>Coiled</button>
                    <button>Long-coiled</button>
                </div>

                <a href="#">How to configurate your headphones</a>
            </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
            <span>148$</span>
            <a href="#" class="cart-btn">Add to cart</a>
        </div>
    </div>
</main>


</body>