<?php
require "includes/header.php"
?>

<main>
    <div class="bg-cover">
        <div class="h-100 container center-me">
            <div class="my-auto">
                <div class="signup-form">
                    <form action="includes/signup-helper.php" method="post">
                        <h2>Register</h2>
                        <p class="hint-text">Create your account!</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" name="fname" placeholder="First Name" required="required"/>
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="lname" placeholder="Last Name" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="Username" required="required"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email" required="required"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" required="required"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="con-password" placeholder="Confirm Password" required="required"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="signup-submit" class="btn-success btn-lg btn-block">Register</button>
                        </div>
                    </form>
                    <div class="text-center"><a href="login.html">Already a member?</a></div>
                </div>
            </div>
        </div>
    </div>
</main>