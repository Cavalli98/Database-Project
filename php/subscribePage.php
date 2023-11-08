<!DOCTYPE html>
<html>
    <head>
        <title>Taverna</title>
        <meta charset="utf-8" />
        <meta name="author" content="Dario Cavalli" />
        <meta name="description" content="Progetto di un sistema di vendita online di vini." />
        <meta name="viewport" content="width=device-width, initialscale=1.0" />
        <link rel="stylesheet" type="text/css" href="../css/introPageStyle.css" />
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include "header.html"; ?>

        <main>
            <section class="mainSection">
                <div class="mainDiv">
                    <div class="buttonsDiv">
                        <input type="button" id="loginButton" name="loginButton" value="Login"
                        onclick="location.href='loginPage.php'"/>
                        <input type="button" id="subscribeButton" name="subscribeButton"  value="Subscribe" />
                    </div>
                    <div class="formDiv">
                        <form class="formLogin" action="subscribe.php" method="post">
                            <div class="usernameDiv">
                                <input type="text" id="username" name="username" autocomplete="off" required />
                                <label for="username" class="label-username">
                                    <span class="content-loginInput">Username</span>
                                </label>
                            </div>
                            <div class="passwordDiv">
                                <input type="password" id="password" name="password" autocomplete="off" required />
                                <label for="password" class="label-password">
                                    <span class="content-loginInput">Password</span>
                                </label>
                            </div>
                            <input type="submit" name="submitLogin" id="submitLogin" value="Login"/>
                        </form>
                    </div>
                    <div class="error-text">
                        <?php
                            if(isset($_GET['error'])) {
                                echo $_GET['error'];
                            }
                        ?>
                    </div>
                </div>
            </section>
        </main>

    </body>
</html>
