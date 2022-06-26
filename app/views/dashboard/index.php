<?php require APPROOT . '/views/includes/header.php'; ?>

<body class="row d-flex" style="height: 100vh;">
    <!-- Asidbar -->
    <?php require APPROOT . '/views/includes/sidbar.php'; ?>
    
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