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
    <h1>SIGN IN</h1>
    <div class="tabs">
        <span class="tab signin active"><a href="login.blade.php">Sign in</a></span>
        <span class="tab signup"><a href="signup.blade.php">Sign up</a></span>
    </div>
    
    <div class="home-button">
        <a href="landing" class="btn-home">Home</a>
    </div>

    <form method="post" action="./Login">
        <div class="content">
            <div class="signin-cont cont login">
                <input name="login_id" type="text" id="login_id" class="inpt" required="required" placeholder="Your ID" />
                <label for="email">Your ID</label>
                <input name="login_password" id="login_password" class="inpt" required="required" placeholder="Your password" type="password" />
                <label for="password">Your password</label>
                <div style="margin: 6% auto;"></div>
                <input type="submit" name="ctl01" value="Sign in" onclick="login();" class="submit" />
            </div>
            <div class="signup-cont cont register">
                <input name="reg_id" type="text" id="reg_id" class="inpt" required="required" placeholder="Your ID" />
                <label for="name">Your ID</label>
                <input name="email" id="email" type="email" class="inpt" required="required" placeholder="Your email" />
                <label for="email">Your email</label>
                <input name="reg_password" id="reg_password" type="password" class="inpt" required="required" placeholder="Your password" />
                <label for="password">Your password</label>
                <input name="nickName" type="text" id="nickName" class="inpt" required="required" placeholder="Your nickName" />
                <label for="name">Your nickName</label>
                <div style="margin: 6% auto;"></div>
                <input type="submit" name="ctl02" value="Sign up" onclick="register();" class="submit" />
            </div>
        </div>
    </form>
</div>

        <div class="half-2">
            
        </div>
        
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- <script type="text/javascript">
        $('.tabs .tab').click(function () {
            if ($(this).hasClass('signin')) {
                $('.tabs .tab').removeClass('active');
                $(this).addClass('active');
                $('.bg').hide();
                $('.b2').show();
                $('.cont').hide();
                $('.signin-cont').show();
            }
            if ($(this).hasClass('signup')) {
                $('.tabs .tab').removeClass('active');
                $(this).addClass('active');
                $('.bg').show();
                $('.b2').hide();
                $('.cont').hide();
                $('.signup-cont').show();
            }
        });
        $('.container .bg').mousemove(function (e) {
            var amountMovedX = (e.pageX * -1 / 30);
            var amountMovedY = (e.pageY * -1 / 9);
            $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
        });

        $('.container .b2').mousemove(function (e) {
            var amountMovedX = (e.pageX * -1 / 30);
            var amountMovedY = (e.pageY * -1 / 9);
            $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
        });
    </script> -->

</body>

</html>