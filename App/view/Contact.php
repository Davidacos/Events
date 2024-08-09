<?php
require '../controllers/Mailer.php'
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Public/css/contact.css">
    <link rel="icon" href="../../Public/images/My first design.ico" type="image/x-icon">
</head>

<body>
    <section class="header">
        <div class="container-fluid" style="background-color: #13172E;">
            <nav class="navbar navbar-dark navbar-expand-lg sticky-top" style="background-color: #13172E;">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="../../Public/images/My first design.png" alt="Guard Military" width="60" height="60">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="Gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link act" href="Contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section class="container-fluid form-contact">
        <div class="container py-3">
            <header class="mb-4">
                <h1 class="fs-4 text-center">Contact</h1>
            </header>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="off">
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
                <div class="col-lg-6 text-center col-md-6 col-sm-6 imagenes">
                        <img src="../Public/images/Guard-Military.png" alt="Guard Military" class="img-fluid">
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
    </section>
    <?php require 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>