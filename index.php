<?php
include "config.php";
session_start();

if (isset($_SESSION["user_email"])) {
    header("Location: todos.php");
    die();
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php getHead(); ?>
</head>

<body >
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">

        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Sign up to store your todos</h1>
                <p class="col-lg-10 fs-4">Create your free account to manage your todos.</p>
                <img  src="todo7.jpg" align="middle" max-width:90px width="50%" >
            </div>
            
            <div class="col-md-10 mx-auto col-lg-5">
                <form action="login.php" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required >
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Continue</button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                    <small class="text-muted">Easy 30 sec sign up for you!</small>
                </form>
                
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>