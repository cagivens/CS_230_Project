<?php
require "includes/header.php"
?>
<main>
  <link rel="stylesheet" href="css/login.css">

  <div class="bg-cover">
    <div class="row">

      <div id="slides" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1"></li>
          <li data-target="#slides" data-slide-to="2"></li>
          <li data-target="#slides" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/sif_1.jpg" class="d-block w-100" alt="sif1">
          </div>
          <div class="carousel-item">
            <img src="images/sif_2.jpg" class="d-block w-100" alt="sif2">
          </div>
          <div class="carousel-item">
            <img src="images/sif_3.jpg" class="d-block w-100" alt="sif3">
          </div>
          <div class="carousel-item">
            <img src="images/sif_4.jpg" class="d-block w-100" alt="sif4">
          </div>
        </div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>

    <div class="h-40 center-me">
      <div class="my-auto">
        <form class="form-signin" style="background: white;" action="includes/login-helper.php" method="post">
          <img class="mb-4" src="images/soof.jpg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="inputEmail" class="sr-only">Username or Email address</label>
          <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username/ Email" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3" style="text-align: left;">
            <label>
              <input type="checkbox" value="remember-me" style="margin: 5px;"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-dark btn-block" type="submit" name="login-submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
        </form>

      </div>

    </div>

  </div>

</main>