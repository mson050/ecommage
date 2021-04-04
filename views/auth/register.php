<?php getHeader(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form  action="/?controller=auth&method=registerSubmit" method="POST" onSubmit="return register()" role="form">
                <legend>Register</legend>

                <div class="form-group">
                    <label for="">Fullname</label>
                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="" >
                    <div id='error_fullname'></div>
                </div>
                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" name="job" class="form-control" id="job" placeholder="" >
                    <div id='error_job'></div>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="" >
                    <div id ='error_username'></div>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="" >
                    <div id ='error_password'></div>
                </div>
                <div class="form-group">
                    <label for="">Re password</label>
                    <input type="password" name="repassword" class="form-control" id="repassword" placeholder="" >
                    <div id='error_repassword'></div>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
<?php getFooter(); ?>
