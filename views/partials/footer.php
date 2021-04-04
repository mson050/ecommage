
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Footer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, rerum?</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        var timeleft = 10;
        var downloadTimer = setInterval(function(){
        if(timeleft <= 0){
            clearInterval(downloadTimer);
            $.ajax({
                type: "POST",
                url: "/?controller=auth&method=logout",
                success: function (response) {
                    location.reload();
                }
            });
        } else {
            document.getElementById("countdown").innerHTML = timeleft + "s";
        }
        timeleft -= 1;
        }, 1000);
    </script>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
        function register() {
            var fullname = document.getElementById('fullname').value;
            var job = document.getElementById('job').value;
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var repassword = document.getElementById('repassword').value;

            document.getElementById("error_fullname").innerHTML = "";
            document.getElementById("error_job").innerHTML = "";
            document.getElementById("error_username").innerHTML = "";
            document.getElementById("error_password").innerHTML = "";
            document.getElementById("error_repassword").innerHTML = "";

            if (fullname == "") {
                text = "Fullname must be filles out";
                document.getElementById("error_fullname").innerHTML = text;
                return false;
            }
            if (job == "") {
                text = "Job must be filles out";
                document.getElementById("error_job").innerHTML = text;
                return false;
            }
            if (username == "") {
                text = "username must be filles out";
                document.getElementById("error_username").innerHTML = text;
                return false;
            }
            if (username.length < 5) {
                text = "username must be longet than 5 character";
                document.getElementById("error_username").innerHTML = text;
                return false;
            }
            if (password.length < 5) {
                text = "password must be longet than 5 character";
                document.getElementById("error_password").innerHTML = text;
                return false;
            }
            if (password == "") {
                text = "password must be filles out";
                document.getElementById("error_password").innerHTML = text;
                return false;
            }
            if (repassword != password) {
                text = "re-password must be same password";
                document.getElementById("error_repassword").innerHTML = text;
                return false;
            }
        }
        function login() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            
            if (username == "") {
                text = "username must be filles out";
                document.getElementById("error_username").innerHTML = text;
                return false;
            }
            if (username.length < 5) {
                text = "username must be longet than 5 character";
                document.getElementById("error_username").innerHTML = text;
                return false;
            }
            if (password.length < 5) {
                text = "password must be longet than 5 character";
                document.getElementById("error_password").innerHTML = text;
                return false;
            }
            if (password == "") {
                text = "password must be filles out";
                document.getElementById("error_password").innerHTML = text;
                return false;
            }
        }
    </script>
</body>
</html>
