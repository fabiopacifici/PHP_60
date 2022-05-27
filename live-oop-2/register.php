<?php

//var_dump($_POST, count($_POST) > 0);

if (isset($_POST) && count($_POST) > 0) {
  var_dump($_POST);
  //var_dump($_POST);
  require __DIR__ . '/Models/Customer.php';
  $customer = new Customer($_POST['name'], $_POST['email'], $_POST['password'], $_POST['address']);
  $customer->register();
  //var_dump($customer);


  $jsonCustomer = json_encode($customer);
  var_dump($jsonCustomer);


  //var_dump(gzdeflate($jCustomer));
  setcookie('user', $jsonCustomer);
  setcookie('loggedIn', 'true');

  header('Location: /');
}

require __DIR__ . '/Layout/head.php';

?>

<main>
  <div class="p-5 bg-light">
    <div class="container">
      <h1 class="display-3">
        Register</h1>
      <p class="lead">Get 20% off on all products</p>
    </div>
  </div>
  <div class="container">

    <h1>
      Register
    </h1>
    <form action="/register.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Your name" aria-describedby="nameHelp" required>
        <small id="nameHelp" class="text-muted">Type your name</small>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Your email" aria-describedby="emailHelp" required>
        <small id="emailHelp" class="text-muted">Type your email</small>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Your password" aria-describedby="passwordHelp" required>
        <small id="passwordHelp" class="text-muted">Type your email</small>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" name="address" id="address" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
</main>


<?php
require __DIR__ . '/Layout/footer.php';
