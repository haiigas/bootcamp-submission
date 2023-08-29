<?php include 'connection.php'; ?>

<!DOCTYPE php>
<php lang="en">
<head>
    <!-- meta -->
    <?php include 'layouts/meta.php'; ?>

    <title>Bootcamp Informatika - Portfolio</title>

    <!-- css -->
    <?php include 'layouts/css.php'; ?>
</head>
<body>
    <!-- header -->
    <?php include 'layouts/header.php'; ?>

    <!-- main body -->
    <main class="flex-shrink-0">
        <div class="position-relative pt-3 overflow-hidden text-center bg-body-tertiary">
            <div class="col-md-6 p-lg-5 mx-auto mt-10">
                <h4 class="fw-bold">Portfolio</h4>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <div class="container">
            <div class="row pt-5">
                <?php
                    $sql = "SELECT * FROM portfolio WHERE deleted_at IS NULL ORDER BY id DESC";
                    $result = mysqli_query($db, $sql);

                    if(mysqli_num_rows($result) > 0):
                        foreach($result as $row):
                ?>
                <div class="col-md-4 pt-4">
                    <div class="card shadow-sm">
                        <img class="thumbnail-article" src="<?php echo $row['image'];?>">
                        <div class="card-body">
                            <p class="card-text"><?php echo $row['title'];?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-body-secondary"><?php echo $row['client'];?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; else: ?>
                <div class="col-md-12">
                    <div class="alert alert-danger">Tidak ada data</div>
                </div>
                <?php endif;?>
            </div>
            <!-- footer -->
            <?php include 'layouts/footer.php'; ?>
        </div>
    </main>
    <!-- js -->
    <?php include 'layouts/js.php'; ?>
</body>
</php>