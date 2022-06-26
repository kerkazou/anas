<?php require APPROOT . '/views/includes/header.php'; ?>

<body class="row d-flex" style="height: 100vh;">
    <!-- Asidbar -->
    <div class="col-md-2 col-sm-3 col-4 shadow" style="background-color: var(--main-color); color: var(--bg-color);">
        <h2 class="fw-bold text-center my-5" style="">SeYa9a</h2>
        <div class="d-flex flex-column justify-content-center align-items-center gap-5">
            <div class="text-center">
                <h3 class="fw-bold">
                    <?php if(isset($_SESSION['user_id']))echo $_SESSION['first_name']; ?>
                </h3>
            </div>
            <ul class="navbar-nav w-100 h4 text-center d-flex flex-column gap-3">
                <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>" style="color: var(--bg-color);">View Site</a></li>
                <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>/Dashboard" style="color: var(--bg-color);">Dashboard</a></li>
                <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>/DashboardUsers" style="color: var(--bg-color);">Users</a></li>
                <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>/DashboardCours" style="color: var(--bg-color);">Cours</a></li>
                <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>/DashboardQuestion" style="color: var(--bg-color);">Questions</a></li>
            </ul>
            <div class="h4"><a class="dropdown-item" href="<?php echo URLROOT; ?>" style="color: var(--bg-color);">Logout</a></div>
        </div>
    </div>
    <!-- Statistique -->
    <div class="col-md-10 col-sm-9 col-8">
    <div style="height: 10vh;"></div>
        <div class="d-flex flex-wrap justify-content-center gap-5">
            <div class="card col-md-3 col-sm-5 col-10 shadow border-0">
                <div class="card-body">
                    <h1 class="card-title">User</h1>
                    <h1 class="card-text float-end"><?php echo $data['numberuser']; ?></h1>
                </div>
            </div>
            <div class="card col-md-3 col-sm-5 col-10 shadow border-0">
                <div class="card-body">
                    <h1 class="card-title">Cours</h1>
                    <h1 class="card-text float-end"><?php echo $data['numbercour']; ?></h1>
                </div>
            </div>
            <div class="card col-md-3 col-sm-5 col-10 shadow border-0">
                <div class="card-body">
                    <h1 class="card-title">Question</h1>
                    <h1 class="card-text float-end"><?php echo $data['numberquestion']; ?></h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>