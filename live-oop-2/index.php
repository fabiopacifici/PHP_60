<?php
/* 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L'e-commerce vende prodotti per gli animali.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
- L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
- Il pagamento avviene con la carta di credito, che non deve essere scaduta.


BONUS: Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).


Models:
- product (String $name, Float $price, Category $category, Bool is_available, Int $quantity )
- category (String $name) 
- customer (String $name, String $lastName, String $address, String is_registered, Int $discount)
- order (Int $number, Array $items, Float $amount, Customer $customer)
- payment (Float $amount, CreditCard $method)
- creditCard (String $number, String $ccv, Date $expirationData)
*/


require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Category.php';



/* DB */
$products = [
  new Product('Crocchette vegetali', 12.00, 'https://picsum.photos/400/200', new Category('Food'), 'https://picsum.photos/400/200', true, 10),
  new Product('Palla gialla', 2.00, 'https://picsum.photos/400/200', new Category('games'), true, 5),
  new Product('Cuccetta comoda comoda', 102.00, 'https://picsum.photos/400/200', new Category('Cucce'), true, 10),
];


$user = json_decode($_COOKIE['user']);
$logged_in = boolval($_COOKIE['loggedIn']);
//var_dump($user, $logged_in);
//die();
//var_dump($user->discount);


require __DIR__ . '/Layout/head.php';
?>




<header class="d-flex justify-content-between p-3 bg-dark text-white">
  <div class="logo">
    PETS
  </div>
  <?php if (!$logged_in) : ?>

    <div class="login">
      <form action="/login.php" method="POST">
        <input type="text" name="name" id="name" placeholder="name">
        <input type="password" name="password" id="password" placeholder="password">
        <button>Log in</button>
      </form>
    </div>
    <a href="/register.php">Register</a>
  <?php else : ?>
    <div>Welcome Back <?= $user->name; ?></div>
  <?php endif; ?>
</header>
<main>
  <div class="p-5 bg-light">
    <div class="container">
      <h1 class="display-3">Pets shop</h1>
      <p class="lead">Buy for your loved pet</p>
    </div>
  </div>
  <div class="container mt-5">
    <div class="products row">
      <?php foreach ($products as $product) : ?>
        <div class="col">
          <div class="card">
            <img class="img-fluid" src="<?= $product->image; ?>" alt="">
            <div class="card-body">
              <h3><?= $product->name; ?></h3>
              <div>€ <?= $product->price; ?></div>
              <small><?= $product->category->name; ?></small>

              <form action="/basket.php" method="POST">
                <input type="hidden" name="product" value="<?= $product->name ?>">
                <input type="hidden" name="price" value="<?= $product->price ?>">
                <div class="form-group d-flex">
                  <input class="form-control" type="number" name="quantity" id="quantity" min="1" max="<?= $product->quantity; ?>" value="1">
                  <button class="btn btn-primary" type="submit">Add to basket</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>


<?php
require __DIR__ . '/Layout/footer.php';
