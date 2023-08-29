<?php
    include 'connection.php';

    $slug = $_GET['slug'];
    $sql = "SELECT * FROM article WHERE slug = '$slug' AND deleted_at IS NULL";
    $result = mysqli_query($db, $sql);

    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <?php include 'layouts/meta.php'; ?>

    <title><?php echo $row['title']; ?> - Bootcamp Informatika</title>

    <!-- css -->
    <?php include 'layouts/css.php'; ?>
</head>
<body>
    <!-- header -->
    <?php include 'layouts/header.php'; ?>

    <!-- main body -->
    <main class="flex-shrink-0 mt-20">
        <div class="container">
            <div class="row">
                <!-- content -->
                <div class="col-md-9">
                    <img class="thumb-detail" src="<?php echo $row['image'];?>">
                    <h4 class="mt-4"><?php echo $row['title'];?></h4>
                    <p class="text-muted">Oleh Administrator Pada <?php echo $row['created_at'];?></p>
                    <p>
                        <?php echo $row['content'];?>
                    </p>
                    <h5 class="mt-10">0 Komentar</h5>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Komentar</label>
                                <textarea class="form-control comment" name="comment" placeholder="Komentar"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-md btn-primary">Komentar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- sidebar -->
                <div class="col-md-3">
                    <h4>Artikel Populer</h4>
                    <ul class="list-unstyled">
                        <?php
                            $slug = $_GET['slug'];
                            $sql = "SELECT * FROM article WHERE slug != '$slug' AND deleted_at IS NULL";
                            $result = mysqli_query($db, $sql);

                            foreach($result as $row):
                        ?>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="detail.php?slug=<?php echo $row['slug'];?>">
                                <img class="thumb-sidebar" src="<?php echo $row['image'];?>">
                                <div class="col-lg-8">
                                    <h6 class="mb-0 limit-article"><?php echo $row['title'];?></h6>
                                    <small class="text-body-secondary"><?php echo $row['created_at'];?></small>
                                </div>
                            </a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <!-- footer -->
            <?php include 'layouts/footer.php'; ?>
        </div>
    </main>
    <!-- js -->
    <?php include 'layouts/js.php'; ?>
</body>
</html>