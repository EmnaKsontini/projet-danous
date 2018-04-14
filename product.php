<!DOCTYPE html>

<html lang="en">
<head>


    <title>Product  </title>

    <meta charset="utf-8">


    <link rel="stylesheet" href="StyleForProduct.css">

</head>
<body>
<header>
    <nav id="navbar">
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
                <input type="submit" value="Search" id="searchbutton">
            </form>

        </section>
    </nav>

</header>
<main class="container">

    <!-- Left Column / Headphones Image -->
    <div class="left-column">
        <img data-image="black" src="images/3RM82EA.jpg" alt="">
        <img data-image="blue" src="images/3RM82EA.jpg" alt="">
        <img data-image="red" class="active" src="images/3RM82EA.jpg" alt="">
    </div>


    <!-- Right Column -->
    <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
            <span>Headphones</span>
            <h1>HP OMEN</h1>
            <p>With budget gaming laptops, you get what you pay for. The HP Omen 15t ($849 as tested) is a capable machine that can play the latest games at 1080p, and you get this solid performance in a sleek and portable design. But you know HP had to make some sacrifices to reach this price, and those include a dim display and shallow keyboard. The Omen 15t is a solid choice for entry-level gamers, but it's not our top pick under $1,000.</p>
        </div>


        <!-- Product Pricing -->
        <div class="product-price">
            <span>1000$</span>
            <a href="#" class="cart-btn">Add to cart</a>
        </div>
    </div>
</main>



</body>