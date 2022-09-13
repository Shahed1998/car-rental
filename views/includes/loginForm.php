<?php if(isset($_SESSION["uid"])){header("location:./dashboard.php");} ?>
<section id="login-page">
    <div class="container">
        <!-- Only works when login fails -->
        <div class="row">
            <div class="col-12">
                <?php
                    if(isset($_SESSION["error"])){
                        echo "<div class='text-center p-3'
                        style='color:#F7F5F2; background: #EC7272'>"
                        .$_SESSION["error"]."</div>";
                        unset($_SESSION["error"]);
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="login ">
                    <h1 class="text-center">Rent a car</h1>
                    <a href="./home.php" class="d-block text-center p-2 text-decoration-none"><i class="fa-solid fa-arrow-left me-2"></i>Previous page</a>
                    <form action="" class="needs-validation" method="POST">
                        <div class="form-group was-validated">
                        <label class="form-label" for="username">Username</label>
                        <input
                            class="form-control"
                            type="text"
                            name="username"
                            id="username"
                            required
                        />
                        <div class="invalid-feedback">Please enter your user name</div>
                        </div>
                        <div class="form-group was-validated">
                        <label class="form-label" for="password">Password</label>
                        <input
                            class="form-control"
                            type="password"
                            name="password"
                            id="password"
                            required
                        />
                        <div class="invalid-feedback">Please enter your password</div>
                        </div>
                        <div class="form-group form-check">
                        <input class="form-check-input" type="checkbox" name="" id="" />
                        <label class="form-check-label" for="check">Remember me</label>
                        </div>
                        <input class="btn btn-primary w-100" name="login" type="submit" value="Sign in" />
                        <input
                        class="btn btn-success w-100 signUp"
                        type="button"
                        value="Sign up"
                        />
                        <input
                        class="btn btn-danger w-100 forgotPass"
                        type="button"
                        value="Forgot password"
                        />
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</section>    