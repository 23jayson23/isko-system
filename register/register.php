<?php
	session_start();
	require_once '../actions/db_connect.php';
	if (isset($_SESSION['login_userid'])){
		header('location: applyscholar.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="register.scss" />
    <script src="../js/jquery-3.5.1.min.js"></script>
    <link
      rel="shortcut icon"
      href="../assets/image/tesda-center-logo.png"
      type="image/x-icon"
    />
  </head>
  <body>
    <div class="container">
      <div class="right-container">
        <div class="right-child-container">
          <div class="title-container">
            <img src="../assets/image/logo-title.png" width="320px" /><br />
            <strong>Create your Account</strong>
            <p>Please Input your Credentials</p>
          </div>
          <br />
          <form action="" id="signup-frm">
          <div class="input-select-container">
            <div class="input-container">
              <img src="../assets/image/user.png" width="20px" />
              <input class="input" type="text" placeholder="Username" name="username" required="" />
            </div>
            <div class="password-container">
              <img src="../assets/image/padlock.png" width="20px"
              />
              <input class="input" type="password" placeholder="Password" name="password" required="" />
            </div>
            <div class="password-container">
               <img src="../assets/image/padlock.png" width="20px"
                />
                <input class="input" type="password" placeholder="Re-Enter Password" name="retypepassword" required="" />
              </div>
            <div style="width: 100%;">
              <button class="btn" type="submit" >Create Account</button>
            </div>
          </div>
          </form>
            <br>
            
          <div class="or">
            <div>
                <svg
                width="103"
                height="10"
                viewBox="0 0 223 1"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <line y1="0.5" x2="223" y2="0.5" stroke="black" />
              </svg>
            </div>
            <div>OR</div>
            <div>
              <svg
                width="103"
                height="10"
                viewBox="0 0 223 1"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <line y1="0.5" x2="223" y2="0.5" stroke="black" />
              </svg>
            </div>
          </div>
          <Br>
          <div class="foot">
            <p>Already Have Account?<a href = "../log-in/login.php"> Sign In</a></p>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="../js/sweetalert2.all.min.js"></script>
  <script type="text/javascript">
		$(document).ready(function () {
			$('#signup-frm').submit(function (e) {
				e.preventDefault();
				var form = $(this);
				var username = form.find("input[name='username']").val();
				var password = form.find("input[name='password']").val();
                var retypepassword = form.find("input[name='retypepassword']").val();
				if (!username || !password) {
					Swal.fire({
						icon: 'error',
						title: 'Please fill in both fields',
					});
					return;
				} else if (password != retypepassword) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Password does not match',
                    });
                    return;
                }
				$.ajax({
					url: '../actions/signup.php',
					method: 'POST',
					data: $(this).serialize(),
					error: (err) => {
						console.log(err);
						Swal.fire({
							icon: 'error',
							title: 'An error occurred',
						});
					},
					success: function (resp) {
						if (resp == true) {
							$('[name="username"]').val('');
							$('[name="password"]').val('');
                            $('[name="retypepassword"]').val('');
							Swal.fire({
								icon: 'success',
								title: 'Create Account Successful!',
								showConfirmButton: false,
								timer: 1500,
							}).then(() => {
								location.replace('main_dashboard.php');
							});
						} else {
                            console.log(resp);
							Swal.fire({
								icon: 'error',
								title: 'Invalid credentials',
							});
						}
					},
				});
			});
		});
	</script>
</html>
