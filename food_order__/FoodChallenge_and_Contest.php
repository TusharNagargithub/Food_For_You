<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Challenges & Contests</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .jumbotron {
      background-color: #dc3545;
      color: #fff;
    }
    .card {
      border: none;
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Food Challenges & Contests</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#challenges">Challenges</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contests">Contests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron text-center">
    <h1 class="display-4">Join Our Food Challenges & Contests</h1>
    <p class="lead">Showcase your culinary skills and win exciting prizes!</p>
  </div>

  <!-- Challenges Section -->
  <section id="challenges" class="container">
    <h2>Food Challenges</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Spicy Food Challenge</h5>
            <?php $challenge= "Spicy Food Challenge" ?>
            
            <p class="card-text"><a href="foodchallenge.php?id=<?php echo $challenge;?>">Test your tolerance for spicy food with our spicy challenge. Win vouchers and discounts!</a></p>

          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            
            <h5 class="card-title">Burger Eating Contest</h5>
            <?php $challenge1= "Burger Eating Contest"; ?>
            <?php $des1="Compete in our burger eating contest and win cash prizes and free meals for a month!"; ?>

            <p class="card-text"><a href="foodchallenge.php?id=<?php echo $challenge1; ?>">Compete in our burger eating contest and win cash prizes and free meals for a month!</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pizza Slice Challenge</h5>
            <?php $challenge3 = "Pizza Slice Challenge" ?>
            <p class="card-text"><a href="foodchallenge.php?id=<?php echo $challenge3; ?>">How many pizza slices can you eat in 10 minutes? Compete and win a year's supply of pizza!</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contests Section -->
  <section id="contests" class="container">
    <h2>Food Contests</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Best Burger Recipe Contest</h5>
            <?php $challenge4 = "Best Burger Recipe Contest" ?>
            <p class="card-text"><a href="contestChallenge.php?id=<?php echo $challenge4; ?>">Submit your best burger recipe and win a chance to have it featured on our menu!</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Creative Cake Decoration Contest</h5>
            <?php $challenge5 = "Creative Cake Decoration Contest" ?>
            <p class="card-text"><a href="contestChallenge.php?id=<?php echo $challenge5; ?>">Showcase your cake decorating skills and win a baking essentials kit!</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Best Pasta Dish Contest</h5>
            <?php $challenge6 = "Best Pasta Dish Contest" ?>
            <p class="card-text"><a href="contestChallenge.php?id=<?php echo $challenge6; ?>">Submit your most delicious pasta dish and win a dinner for two at our restaurant!</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="container">
    <h2>Contact Us</h2>
    <p>If you have any questions or would like to participate in our challenges and contests, feel free to reach out to us:</p>
    <ul>
      <li>Email: contests@foodchallenges.com</li>
      <li>Phone: (555) 987-6543</li>
    </ul>
  </section>

  <!-- Footer -->
  <footer class="container text-center py-4">
    <p>&copy; 2024 Food Challenges & Contests</p>
  </footer>

  <!-- Bootstrap JS, jQuery, Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
