<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
  <div class="container">
    <a class="navbar-brand fs-4" href="index.php">Php Task</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <?php if (isset($_SESSION['user'])) : ?>
          <a class="nav-link" href="index.php?logout='1'">Logout</a>
        <?php endif ?>
        <?php if (!isset($_SESSION['user'])) : ?>
          <a class="nav-link" href="register.php">Sign Up</a>
          <a class="nav-link" href="login.php">Log In</a>
        <?php endif ?>

      </div>
    </div>
  </div>
</nav>