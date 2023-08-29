<!DOCTYPE php>
<php lang="en">
<head>
    <!-- meta -->
    <?php include 'layouts/meta.php'; ?>

    <title>Bootcamp Informatika - Contact</title>

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
                <h4 class="fw-bold">Contact</h4>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12 text-center">
                    <h1>Send us a <span class="text-body-secondary">message</span></h1>
                    <p class="lead fw-normal">What would you ask. Send us a message now and we will reply to your message.</p>
                </div>
                <div class="col-md-12 mt-10">
                    <div class="row featurette">
                        <div class="col-md-7 d-flex flex-column align-items-center justify-content-center order-md-2">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" class="form-control" placeholder="Your Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>Message</label>
                                        <textarea class="form-control comment" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-md btn-primary send-message">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <img class="company-image" src="https://img.freepik.com/free-vector/flat-design-illustration-customer-support_23-2148887720.jpg?w=1060&t=st=1693062840~exp=1693063440~hmac=9494d89ae7ec035f1f67d9ab85c5cc12b900af6082aeac73d1222135844e7857">
                        </div>
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