<?php
require_once "head/INIT.PHP";
$title = "SignUp . instagram";
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
                <span style="font-size: 16px; color:#737373;">Sign up to see photos and videos from your friends.</span><br>
                <span class="sept">Or</span>
                <input type="email" placeholder="Mobile number or Email address" class="form_input" name="Email_Username">
                <input type="text" placeholder="Full Name" class="form_input" name="Full_name">
                <input type="text" placeholder="Username" class="form_input" name="Username">
                <div class="password">
                    <input type="password" placeholder="Password" class="form_input" name="password" id="password">
                    <span class="show_hide_text cursor-pointer" id="show_hide_password">Show</span>
                </div>
                <button class="button cursor-pointer" type="submit" name="button">Sign Up</button>
                <p style="font-size: 13px;">People who use our service may have uploaded your contact information to Instagram. <a href="#">Learn More</a></p><br>
                <span style="font-size: 13px;">By signing up, you agree to our Terms, Privacy Policy and Cookies Policy.</span>
            </form>
            <footer class="form_footer">
                Have an account? <a href="login.php">Log In</a>
            </footer>
        </article>

    </main>

</section>
<script src="js/main.js"></script>
</body>

</html>