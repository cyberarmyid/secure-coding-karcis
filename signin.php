<?php
include "header.php";
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="login-clean">
        <form method="post" action="<?php echo $host;?>function/actSignin.php">
             <!-- if signup failed -->
             <?php
                if(@$_GET['status'] == 'failed'){
            ?>
                <b style="display: block;position: relative;text-align:center; color: rgb(244,71,107)">Email dan Password tidak sesuai</b>
            <?php } else if(@$_GET['status'] == 'success'){ ?>
                <b style="display: block;position: relative;text-align:center; color: rgb(244,71,107)">Signup Success</b>
            <?php } ?>
            <!--  -->

            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="fa fa-ticket"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6Lf4A7oUAAAAAA9Rfjee5sUwxK9WJroWXgZpmmQ4"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign In</button></div><a class="forgot" href="forgotPassword.php">Forgot your email or password?</a></form>
</div>

<?php
include "footer.php";
?>