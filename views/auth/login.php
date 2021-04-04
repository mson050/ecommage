<?php include './views/partials/header.php' ?>
<div class="container" style="padding-top: 200px;padding-bottom: 200px">
    <div class="row">
        <div class="col-md-6">
            <form action="/?controller=auth&method=loginSubmit" method="POST" onSubmit="return login()" role="form">
                <legend>Login</legend>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Input field">
                    <div id='error_username'></div>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Input field">
                    <div id='error_password'></div>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>
        <div class="col-md-6">
            <img src="https://static.fortytwo.com/assets/wp-content/uploads/2016/08/11082912/icons_2-02.png" class="img-responsive" alt="Image">
        </div>
    </div>
</div>
<?php include './views/partials/footer.php' ?>
