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

 

  <!-- Contests Section -->
  <section id="contests" class="container">
    <h2>Food Contests</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
          <?php $aa=$_GET['id'];?>
            <h5 class="card-title"><?php echo $aa; ?></h5>
            
            <p class="card-text">Submit your <?php echo $aa;?> and win a chance to have it featured on our menu!</p>
            <form>
              <div class="form-group">
                <label for="burgerName">Name</label>
                <input type="text" class="form-control" id="burgerName" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="burgerEmail">Email address</label>
                <input type="email" class="form-control" id="burgerEmail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Other contests -->
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
