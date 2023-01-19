<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="shortcut icon" href="assets/gambar/ppp.png">

</head>
<body  style="background-color: #6c757d;" >

<div class="container" style="margin-top: 100px;" >
  <div class="row justify-content-center">
    <div class="col-md-6 col-md-offset-3" >
    <div class="card p-4" style="border-radius: 1rem;" >
    <img src="assets/gambar/ppp.png" width="40%" alt="Logo" class="mx-auto d-block" style="margin-bottom: 10px;">
        <h2 class="text-center">Login</h2>
        <form action="login.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
      </div>
    </div>
  </div>
</div>



</body>
</html>
