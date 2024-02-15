<?php
require_once "head/INIT.PHP";
$title = "Login . instagram";
$keywords = "Instagram,Share and Capture Word's Movements ,Share ,Capture ,Share , Home";
require "head/header.php";
?>
<section class="page">
    <main class="row">
        <div class="col-1">
            <div class="heroImg"></div>
        </div>
        <article class="col-2">
            <form action="<?=h($_SERVER["PHP_SELF"]); ?>"  method="post"  class="form">
                <div class="logoContainer">
                    <img src="img/in.png" width="90px" alt="instagram logo">
                </div>
                <input type="text" placeholder="Email Or Username" class="form_input" name="Email_Username">
                <div class="password">
                    <input type="password" placeholder="Password" class="form_input" name="password" id="password">
                    <span class="show_hide_text cursor-pointer" id="show_hide_password">Show</span>
                </div>
                <button class="button cursor-pointer" type="submit" name="button">Log In</button>
                <span class="sept">Or</span>
                <a href="" class="password_reset">Forgot Password</a>
            </form>
            <footer class="form_footer">
                Don't have an account? <a href="register.php">Sign Up</a>
            </footer>
        </article>

    </main>

</section>
<script src="js/main.js"></script>
</body>

</html>