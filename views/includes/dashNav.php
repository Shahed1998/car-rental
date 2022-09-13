<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href=""><?= $_SESSION["uname"]."'s dashboard" ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto" >
        <li class="nav-item">
          <a class="nav-link about" aria-current="page" href="./home.php"><i class="fa-solid fa-circle-chevron-left"></i> Go back</a>
        </li>
        <li class="nav-item">
          <a class="nav-link cars" href="#cars" onclick="setActive('cars')">Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link services" href="#" onclick="setActive('services')">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contact" href="#" onclick="setActive('contact')">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>