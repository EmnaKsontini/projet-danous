
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


            <li><a href="MyCart.php">MYCART</a></li>
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

                </form>
            </ul>
        </nav>
    </section>
</header>
<article>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <a href="product.php?code=X541NA-GO017&table=pc"><div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/X541NA-GO017.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div></a>

        <a href="product.php?code=E2016H&table=ecran"><div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/E2016H.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div></a>

        <a href="product.php?code=E2014H&table=ecran"><div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/E2014H.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div></a>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>
</article>

<footer>
    <div id="bas"></div>
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
