<div class="row justify-content-center mt-4">
    <div class="col-7">
        <h3>Sign in</h3>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-12 col-md-4 col-md-offset-4">
        <form action="auth/login" method="post">
            <?php if(isset($_SESSION['signinEroor'])) { ?>
            <p class="text-danger"><?= $_SESSION['signinEroor'] ?></p>
            <?php } ?>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
    </div>
</div>
