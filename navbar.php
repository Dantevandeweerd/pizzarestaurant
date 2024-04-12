<nav>
  <img id="giovannilogo" src="assets/img/logo.png" alt="logo" />
  <div class="nav-buttons">
    <a href="index.php"><button>Home</button></a>
    <a href="bestel-online.php"><button>Bestel Online</button></a>
    <button>Over Ons</button>
    <button>Contact</button>
    <a href="inlog.php"><button>Login</button></a>
        <?php
        // Display admin button only if user is logged in as admin
        session_start();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
            echo '<a href="admin.php"><button>Admin</button></a>';
        }
        ?>
  </div>
</nav>
