<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#dashHome"><?= $_SESSION["uname"]."'s dashboard" ?></a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./home.php"
            ><i class="fa-solid fa-circle-chevron-left"></i> Go back</a
          >
        </li>
        <li class="nav-item me-2 ms-2">
          <div class="dropdown">
            <a
              class="btn btn-secondary dropdown-toggle w-100"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Sections
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
              <li><a class="dropdown-item" href="#">About</a></li>
              <li><a class="dropdown-item" href="#">Cars</a></li>
              <li><a class="dropdown-item" href="#">Services</a></li>
              <li><a class="dropdown-item" href="#">Contact</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="./logout.php">Logout</a>
        </li> 
      </ul>
    </div>
  </div>
</nav>
