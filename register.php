<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php include 'connect.php'; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form method="post" action="register-check.php" class="col-md-6">
                <div class="row justify-content-center">
                    <h1>Register</h1>
                </div>
                <div class="col-md-12">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" name="name" type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="username" class="form-label">Email</label>
                    <input id="username" name="email" type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" type="password" class="form-control">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
                <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>