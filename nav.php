<nav class="navbar navbar-expand-lg " style="background-color: #d3d3d3;">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i> HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav">
        <?php if(!isset($_SESSION['id'])){?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php"><i class="bi bi-pencil-square"></i> เข้าสู่ระบบ</a>
        </li>
        <?php }else{?>
        <li class="nav-item dropdown">
          <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" ><i class="bi bi-person-lines-fill"></i> 
            <?php echo $_SESSION['username'];?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-power"></i> ออกจากระบบ</a></li>
          </ul>
        </li>
        <?php }?>
      </ul>
  </div>
</nav>