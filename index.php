<!DOCTYPE php>
<html lang="en">
<head>
    <!-- meta -->
    <?php include 'layouts/meta.php'; ?>

    <title>Bootcamp Informatika</title>

    <!-- css -->
    <?php include 'layouts/css.php'; ?>
</head>
<body>
    <!-- header -->
    <?php include 'layouts/header.php'; ?>

    <!-- main body -->
    <main class="flex-shrink-0">
        <div class="position-relative pt-3 overflow-hidden text-center bg-body-tertiary">
            <div class="col-md-6 p-lg-5 mx-auto my-5">
                <h1 class="display-5 fw-bold">Bootcamp Informatika</h1>
                <h5 class="fw-normal text-muted mb-3">Becoming a Solutions, Innovative and Creative Information Technology Company is our Vision.</h5>
                <div class="d-flex pt-3 justify-content-center lead fw-normal">
                    <a class="btn btn-primary" href="./contact.php">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <div class="container">
            <div class="row pt-5 text-center">
                <div class="col-md-12">
                    <h1>Our <span class="text-body-secondary">Service</span></h1>
                    <p class="lead fw-normal">We offer the best service for your business, finance and time.</p>
                </div>
                <div class="pt-5 row">
                    <div class="col-lg-4">
                        <img class="web-service" src="https://www.freeiconspng.com/thumbs/website-icon/website-icon-11.png">
                        <h5 class="pt-3">Web Development</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="mobile-service" src="https://bloomdev.ca/wp-content/uploads/2018/10/mob-app-icon.png">
                        <h5 class="pt-3">Mobile Development</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="hpc-service" src="https://cdn-icons-png.flaticon.com/512/3481/3481427.png">
                        <h5 class="pt-3">High Performance Computing</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-md-12 mt-20">
                    <div class="row featurette">
                        <div class="col-md-7 d-flex flex-column align-items-center justify-content-center order-md-2">
                            <h1>What is <span class="text-body-secondary">Bootcamp Informatika</span></h1>
                            <p class="lead fw-normal">Bootcamp Informatika is one of the best application development companies that are most Solutive, <br>Innovative and Creative. We have a team of experts ready to help your business.</p>
                            <p class="lead fw-normal">Currently Bootcamp Informatika has served more than 200 clients throughout Indonesia. <br>Along with the development of the company, Bootcamp Informatika took the initiative to group all its products and services into a system integrated to realize Smart City and Smart Government.</p>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <img class="company-image" src="https://img.freepik.com/free-vector/business-team-discussing-ideas-startup_74855-4380.jpg?w=1800&t=st=1693058799~exp=1693059399~hmac=5e5c9c32769afbeff76b6f892978ea7c2d676c9dab8c4174fe76e841d95abe91">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-20">
                    <div class="row featurette">
                        <div class="col-md-7 d-flex flex-column align-items-center justify-content-center">
                            <h1>200+ Trusted <span class="text-body-secondary">Clients</span></h1>
                            <p class="lead fw-normal">More than two hundred leading businesses and companies, <br>from small to large scale, throughout Indonesia have entrusted us.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="map-image" src="https://img.freepik.com/free-vector/hand-drawn-business-communication-concept_23-2149171107.jpg?w=1800&t=st=1693058708~exp=1693059308~hmac=bce72d5c61faee1500efce7a661ed67cd1103c95700d2a27f9b9fb00f536751b">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-20">
                    <h1>Our <span class="text-body-secondary">Client</span></h1>
                    <p class="lead fw-normal">We are very fortunate to have formed an excellent partnership with our clients.</p>
                </div>
                <div class="pt-5 pb-5 row">
                    <div class="owl-carousel owl-theme">
                        <?php
                            $file_contents = file_get_contents('assets/json/client.json');
                            $data = json_decode($file_contents, true);

                            // looping from json
                            foreach ($data as $item):
                        ?>
                        <div class="item"><img class="client-logo" src="<?php echo $item['logo']; ?>"></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <?php include 'layouts/footer.php'; ?>
        </div>
    </main>
    <!-- js -->
    <?php include 'layouts/js.php'; ?>
</body>
</php>