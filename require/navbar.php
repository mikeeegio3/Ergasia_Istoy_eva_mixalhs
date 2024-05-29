<nav class="navbar navbar-expand-sm sticky-top navbar-dark">
    <div class="container">
      <a class="navbar-brand fs-2" href="index.php"><img src="images/logo/logo2.png" alt="" srcset="" style="max-width: 2.5rem; padding:0%; margin:0%" class=" mb-1"> Foodini</a>
      <!-- koubi gia dropdown otan mikrainei to parathuro -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faghta_kai_glyka.php?category=Αλμυρό">Φαγητά</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faghta_kai_glyka.php?category=Γλυκό">Γλυκά</a>
          </li>
        </ul>
        
      </div>
    </div>
    <ul class="navbar-nav mx-4">
          <li class="admin-login">
            <?php
            session_start();
              if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) {
              
              echo "<a href='admin_dashboard.php' class='admin-login'>".$_SESSION['name']." <i class='fa-solid fa-arrow-right-to-bracket'></i></a>";
                
            } else {
                echo "<a href='admin_dashboard.php' class='admin-login'> Admin Login <i class='fa-solid fa-arrow-right-to-bracket'></i></a>";
            }
            ?>
          </li>
        </ul>
  </nav>