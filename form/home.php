<?php

if (!isset($_COOKIE["auth"])) {
  return header("location: index.php?unauthorized=true");
}

$token = $_COOKIE["auth"];

if ($token !== 'hashedToken') {
  return header("location: index.php?unauthorized=true");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <style>
    .house {
      width: 200px;
      height: 200px;
    }
  </style>
</head>

<body>
  <div class="container container-sm my-5">
    <div class="col md-6 mb-5 d-flex justify-content-center">
      <button type="button" id="logoutButton" class="btn btn-primary">Logout</button>
    </div>

    <div class="col md-6 d-flex justify-content-center">
      <img class="img-fluid house" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Go-home-2.svg/1200px-Go-home-2.svg.png" alt="Home" />
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
  <script src="./js/logout.js"></script>
</body>

</html>