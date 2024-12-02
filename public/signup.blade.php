<!doctype html>
<html lang="kr">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <section class="container">
    <div class="half">
    <h1>SIGN UP</h1>
    <div class="tabs">
        <span class="tab signin"><a href="login.blade.php">Sign in</a></span>
        <span class="tab signup active"><a href="signup.blade.php">Sign up</a></span>
    </div>

    <div class="home-button">
        <a href="landing" class="btn-home">Home</a>
    </div>

    <form method="post" action="./Login">
        <div class="content">
            <div class="signin-cont cont login">
                <input name="reg_id" type="text" id="reg_id" class="inpt" required="required" placeholder="Your ID" />
                <label for="name">Your ID</label>
                <input name="email" id="email" type="email" class="inpt" required="required" placeholder="Your email" />
                <label for="email">Your email</label>
                <input name="reg_password" id="reg_password" type="password" class="inpt" required="required" placeholder="Your password" />
                <label for="password">Your password</label>
                <input name="nickName" type="text" id="nickName" class="inpt" required="required" placeholder="Your nickName" />
                <label for="name">Your nickName</label>
                <div style="margin: 6% auto;"></div>
                <input type="submit" value="Sign up" class="submit" />
            </div>
        </div>
    </form>
</div>

        <div class="half-2">

        </div>

    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



</body>

</html>