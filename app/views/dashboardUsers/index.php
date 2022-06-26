<?php require APPROOT . '/views/includes/header.php'; ?>

<body class="row d-flex" style="height: 100vh;">
    <!-- Asidbar -->
    <div class="col-md-2 col-sm-3 col-4 shadow" style="background-color: var(--main-color); color: var(--bg-color);">
        <h1 class="fw-bold text-center my-5" style=""><span style="color: var(--2nd-main-color);">SeY</span>a9a</h1>
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
        <div class="d-flex align-items-center justify-content-between mx-3">
            <h1 class="fw-bold" style="color: var(--2nd-main-color);">User</h1>
            <button type="button" class="border-0 rounded px-4 py-1" style="background-color: var(--main-color); color: var(--bg-color);" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-plus h3"></i></button>
        </div>
        <div class="d-flex justify-content-center">
            <table class="table table-striped align-items-center justify-content-center mb-0 text-center">
                <thead>
                    <tr>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">First Name</th>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Last Name</th>
                      <th class="col-4 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Email</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['users'] as $user) : ?>
                        <tr class="item">
                          <td class="col-3"><?php echo $user->first_name ;?></td>
                          <td class="col-3"><?php echo $user->last_name ;?></td>
                          <td class="col-4"><?php echo $user->email ;?></td>
                          <td class="col-2 h5">
                            <a href="<?php echo URLROOT; ?>/DashboardUsers/edit?id=<?php echo $user->id ;?>"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?php echo URLROOT; ?>/DashboardUsers/delet?id=<?php echo $user->id ;?>"><i class="bi bi-trash"></i></a>
                          </td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row d-flex justify-content-center align-items-center gap-4" method="POST" action="<?php echo URLROOT; ?>/SignUp/signup">
                <div class="col-11 d-flex flex-row-reverse justify-content-center gap-3">
                    <input class="col-6 pe-3" name="first_name" type="text" placeholder="الاسم الشخصي">
                    <input class="col-6 pe-3" name="last_name" type="text" placeholder="الاسم العائلي">
                </div>
                <input class="col-11 pe-3" name="email" type="text" placeholder="البريد الإلكتروني">
                <input class="col-11 pe-3" name="password" type="password" placeholder="كلمة السر">
                <input class="col-11 pe-3" name="conf_password" type="password" placeholder="تأكيد كلمة السر">
                <button type="submit" class="col-11 border-0" style="height: 60px; border-radius: 10px; background-color: var(--main-color); color: var(--bg-color);"> اضافة حساب جديد</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>