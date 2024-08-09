<?php
require '../controllers/Mailer.php'
    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guard Military</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Public/css/styles.css">
    <link rel="icon" href="../../Public/images/My first design.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../Public/css/services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

    <section class="header">
        <a href="https://api.whatsapp.com/send?phone=Tu-n%C3%B9mero-aqu%C3%AD" class="btn-wsp" target="_blank">
            <i class="bi bi-whatsapp"></i>
        </a>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">

                    <a class="navbar-brand" href="#">
                        <img src="../../Public/images/My first design.png" alt="Guard Military" width="80" height="80">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link act" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="Gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <!-- Navbar ends here-->
            <div class="container">
                <div class="middle d-flex justify-content-between ">
                    <h1 class="text-white fw-bold display-3">Events <span class="theme-text">Guard Military</span></h1>
                    <a class="btn fw-bold text-white boton" href="App/view/Contact.php" role="button">Contact Us</a>

                </div>
            </div>

        </div>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#13172E" fill-opacity="1"
                d="M0,192L80,176C160,160,320,128,480,149.3C640,171,800,245,960,256C1120,267,1280,213,1360,186.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </section>
    <section class="services" style=" background: #13172E;">
        <div class="container-fliud">
            <div class="row">
                <div class="col">
                    <h2 class="text-center" style="color: #f0b30f;">Services</h2>
                </div>
                <?php
                require '../components/services.php'
                    ?>
            </div>

        </div>

    </section>

    <section class="gallery">
        <svg class="sepa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#13172E" fill-opacity="1"
                d="M0,288L40,240C80,192,160,96,240,74.7C320,53,400,107,480,133.3C560,160,640,160,720,144C800,128,880,96,960,101.3C1040,107,1120,149,1200,170.7C1280,192,1360,192,1400,192L1440,192L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
            </path>
        </svg>
        <div class=" container-fluid">
            <div class="container">
                <div class="row">
                    <header class="mb-4">
                        <h1 class="fs-4 text-center">Gallery</h1>
                    </header>
                    <div class="col-lg-4 mb-4">
                        <img class="w-100 mb-4 rounded" src="../../Public/images/img11.jpg" alt="1">
                        <img class="w-100 mb-4 rounded" src="../../Public/images/img17.jpg" alt="1">
                    </div>
                    <div class="col-lg-4 mb-4">
                        <img class="w-100 mb-4 rounded" src="../../Public/images/img16.jpg" alt="1">
                        <img class="w-100 mb-4 rounded" src="../../Public/images/img1.jpg" alt="1">
                    </div>
                    <div class="col-lg-4 mb-4">
                        <img class="w-100 mb-4 rounded" src="../../Public/images/img8.jpg" alt="1">
                        <img class="w-100 mb-4 rounded" src="../../Public/images/img15.jpg" alt="1">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="form-contact">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1"
                d="M0,288L48,261.3C96,235,192,181,288,154.7C384,128,480,128,576,154.7C672,181,768,235,864,250.7C960,267,1056,245,1152,245.3C1248,245,1344,267,1392,277.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container-fluid">
            <div class="container">
                <header class="mb-4">
                    <h1 class="fs-4 text-center">Contact</h1>
                </header>
                <div class="row">
                    <div class="col-lg-6 text-center col-md-6 col-sm-6 imagenes">
                        <img src="../../Public/images/Guard-Military.png" alt="Guard Military" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!-- Display Success Message -->
                        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> Your message has been sent successfully.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                            autocomplete="off;" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="affair" class="form-label">Affair</label>
                                <input type="text" class="form-control" id="affair" name="affair" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>



                            <?php

                            if (isset($errors)) {
                                if (count($errors) > 0) {

                                    ?>

                                    <div class="row">
                                        <div class="col-lg-6" col-md-12>
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <?php
                                                foreach ($errors as $error) {
                                                    echo $error . '<br>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }

                            ?>

                            <div class="mb-3 text-center">
                                <button type="submit" name="submit" class="btn text-white">Send</button>
                            </div>

                        </form>
                    </div>
                </div>
                <?php
                if (isset($answer)) { ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <?php echo $answer; ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

    </section>
    <?php require '../components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>