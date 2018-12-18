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
            <small><small></small><span class="text-danger">* </span>Required fields</small></p>
            <div class="form-group">
                <label class="required" for="email">Email address</label>
                <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label class="required" for="password">Password</label>
                <input required name="password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
    </div>
</div>
