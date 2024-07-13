<?php
// session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        include 'config.php';

        $myusername = $_POST['email']; 
        $mypassword = $_POST['password']; 

        $sql = "SELECT * FROM users WHERE user_email='$myusername' AND user_password='$mypassword'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $sql = "SELECT user_email, user_role FROM users WHERE user_email='$myusername'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $myusername = $row['user_email'];
                $userrole = $row['user_role'];
            }

            $_SESSION["myusername"] = $myusername;
            if ($userrole == 'admin') {
                echo "<script type='text/javascript'>
                          window.location.href='test.php';
                      </script>";
            } elseif ($userrole == 'subscriber') {
                echo "<script type='text/javascript'>
                          alert('Only Admin can login');
                          window.location.href='login.php';
                      </script>";
            } else {
                echo "<script type='text/javascript'>
                          alert('Something went wrong. Contact admin/dev');
                          window.location.href='login.php';
                      </script>";
            }
        } else {
            echo "<script type='text/javascript'>
                      alert('The username or password you entered is incorrect');
                      window.location.href='login.php';
                  </script>";
        }
    } else {
        echo "<script type='text/javascript'>
                  alert('Oops, something went wrong');
                  window.location.href='login.php';
              </script>";
    }
}
?>

<?php include '../pages/header.php'; ?>

<section id="login">
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="form-wrap">
                <h3 class="text-center mt-2"><i class="fas fa-user-circle fa-4x"></i></h3>
                <h2 class="text-center">Login</h2>
                <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="login-form" autocomplete="off">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                    </div>
                    <input type="submit" name="login" id="btn-login" class="btn btn-secondary btn-lg btn-block" value="Login">
                    <div class="form-group">
                        <a href="forgot.php">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include '../pages/footer.php'; ?>
