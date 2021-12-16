<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    .wrap {
      width: 100%;
      max-width: 400px;
      margin: 40px auto;
    }
  </style>
</head>

<body class="text-center">
  <div class="wrap">
    <h1 class="h3 mb-3">Login</h1>
    <?php if (isset($_GET['incorrect'])) : ?>
      <div class="alert alert-warning">
        Incorrect Email or Password
      </div>
    <?php endif ?>
    <form action="_actions/login.php" method="post">
      <input type="text" name="name" class="form-control mb-2" placeholder="You name" required>
      <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
      <button type="submit" class="w-100 btn btn-lg btn-primary">
        Login
      </button>
    </form>
    <br>
  </div>
</body>

</html>