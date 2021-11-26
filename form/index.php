<?php

if (isset($_COOKIE["auth"])) {
  $token = $_COOKIE["auth"];

  if ($token === 'hashedToken') {
    return header("location: home.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <div class="container container-md mt-5">
    <form name="formLogin" id="formLogin" class="form requires-validation" method="post" action="./validateUser.php" novalidate>
      <div class="row mb-5 text-center">
        <h2>Login into our wonderful company</h2>
      </div>

      <div class="row g-3 mb-4">
        <div class="form-group col-md-4">
          <label class="mb-1" for="username">*Username</label>
          <div class="input-group input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input type="text" class="form-control" name="Username" id="username" minlength="4" required />
            <div class="invalid-feedback">Please provide a valid username (>4 chars).</div>
          </div>
        </div>

        <div class="form-group col-md-4">
          <label class="mb-1" for="password">*Password</label>
          <div class="input-group input-group">
            <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
            <input type="password" class="form-control" name="Password" id="password" minlength="6" required />
            <div class="invalid-feedback">Please provide a valid password (>6 chars).</div>
          </div>
        </div>

        <div class="form-group col-md-4">
          <label class="mb-1" for="selectDepartment">*Department</label>
          <div class="input-group">
            <select class="form-select" name="Department" id="selectDepartment" required>
              <option selected disabled value="">Choose...</option>
              <option value="it">IT</option>
              <option value="management">Management</option>
              <option value="maketing">Marketing</option>
              <option value="sales">Sales</option>
            </select>
            <div class="invalid-feedback">Select a valid department.</div>
          </div>
        </div>
      </div>

      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <label class="mb-1">*Are you a:</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="User Type" id="userTypeUser" value="user" checked />
            <label class="form-check-label" for="userTypeUser"> User </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="User Type" id="userTypeAdmin" value="admin" />
            <label class="form-check-label" for="userTypeAdmin"> Admin </label>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-floating">
            <textarea class="form-control textarea" name="Login Reason" placeholder="Why do you want to login?" id="loginReason">
Just because
            </textarea>

            <label for="loginReason">Why do you want to login?</label>
          </div>
        </div>
      </div>

      <div class="row row-cols-lg-3 g-3 mb-3">
        <div class="form-group col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Keep Logged" value="yes" id="keepLogged" />
            <label class="form-check-label" for="keepLogged"> Stay logged in </label>
          </div>
        </div>
      </div>

      <div class="row row-cols-lg-4 g-3">
        <button class="btn btn-primary me-3" type="submit">Submit form</button>
        <button class="btn btn-secondary" type="reset">Reset form</button>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
  <script src="//rawgit.com/saribe/eModal/master/dist/eModal.js"></script>
  <script src="./js/validateForm.js"></script>
</body>

</html>