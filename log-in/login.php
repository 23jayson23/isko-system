
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="stylesheet" href="login.scss" />
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
            <strong>Welcome Back</strong>
            <p>Please Input your Credentials</p>
          </div>
          <br />
          <form action="" id="login-frm">
          <div class="input-select-container">
            <div class="input-container">
              <img src="../assets/image/user.png" width="20px" />
              <input class="input" type="text" placeholder="Username" name="username" />
            </div>
            <div class="password-container">
              <img src="../assets/image/padlock.png" width="20px"
              />
              <input class="input" type="password" placeholder="Password" name="password" />
            </div>
            <button class="btn" type="submit">Log In</button>
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
            <p>Dont Have Account?<a href = "../register/register.php"> Create Account</a></p>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="../js/sweetalert2.all.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#login-frm').submit(function (e) {
				e.preventDefault();
				var form = $(this);
				var username = form.find("input[name='username']").val();
				var password = form.find("input[name='password']").val();
				if (!username || !password) {
					Swal.fire({
						icon: 'error',
						title: 'Please fill in both fields',
					});
					return;
				}
				$.ajax({
					url: '../actions/login.php',
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
            console.log(resp);
            resp = JSON.parse(resp);
						if (resp.status == true) {
							$('[name="username"]').val('');
							$('[name="password"]').val('');
							Swal.fire({
								icon: 'success',
								title: 'Login Successful!',
								showConfirmButton: false,
								timer: 1500,
							}).then(() => {
              if (resp.userType == 1) {
                if (resp.registeredStudent == true) {
                  window.location.href = '../studentDashboard/student.php';
                } else {
                  window.location.href = '../applyscholar.php';
                }
              } else if (resp.userType == 2) {
                window.location.href = '../adminDashboard/admin.php';
              }
            });
						} else {
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
