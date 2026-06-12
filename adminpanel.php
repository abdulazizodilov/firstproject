<?php
require './includes/header.php'
?>
<div class="d-flex align-item-center py-4 bg-body-tertiary justify-content-center">
    <form style="max-width: 330px; width:100%; margin:auto;"> 
        <img class="mb-4" src="" alt="bu yerda rasm bor" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <div class="form-floating"> <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div>
        <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> <label for="floatingPassword">Password</label> </div>
        <div class="form-check text-start my-3"> <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault"> <label class="form-check-label" for="checkDefault">
                Remember me
            </label> </div> <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
    </form>
</div>
<?php
require './includes/footer.php'
?>