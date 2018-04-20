<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>formulaire</title>



    <link rel="stylesheet" href="styleform.css">


</head>

<body>
<div class="structure">
    <img class="fleche" src="images/fleche.gif"  onclick="red('home.php')" >
    <div class="signup">  <!--par defaut la classe sign up est la premiere a etre affichée ( donc pas de slide up ) !-->
        <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
        <div class="form-holder">
            <form action="AddUser.php" method="post" >
            <input type="text" class="input" placeholder="Name" />
            <input type="email" class="input" placeholder="Email" />
            <input type="password" class="input" placeholder="Password" />
            <input type="password" class="input" placeholder="Password" />

        </div>
        <button class="submit-btn">Sign up</button>
    </div> </form>
    <form action="form.php" method="post" >
    <div class="login slide-up">
        <div class="form2">
            <h2 class="form-title"  id="login"><span>or</span>Log in</h2>
            <div class="form-holder">
               <input type="text" name="login" class="input" placeholder="Email" />
                <input type="password" name="password" class="input" placeholder="Password" />
            </div>
            <button class="submit-btn">Log in</button>
        </div>
    </div>
</div> </form>




<script  src="js/index.js"></script>




</body>

</html>
