<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>formulaire</title>



    <link rel="stylesheet" href="styleform.css">


</head>

<body>

<div class="structure">
    <div class="signup">  <!--par defaut la classe sign up est la premiere a etre affichée ( donc pas de slide up ) !-->
        <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
        <div class="form-holder">
            <input type="text" class="input" placeholder="Name" />
            <input type="email" class="input" placeholder="Email" />
            <input type="password" class="input" placeholder="Password" />
            <input type="password" class="input" placeholder="Password" />

        </div>
        <button class="submit-btn">Sign up</button>
    </div>
    <div class="login slide-up">
        <div class="form2">
            <h2 class="form-title" id="login"><span>or</span>Log in</h2>
            <div class="form-holder">
                <input type="email" class="input" placeholder="Email" />
                <input type="password" class="input" placeholder="Password" />
            </div>
            <button class="submit-btn">Log in</button>
        </div>
    </div>
</div>



<script  src="js/index.js"></script>




</body>

</html>