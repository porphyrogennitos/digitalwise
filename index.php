<?php
$error = '';
$email = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST["email"])) {
    if (empty($_POST["email"])) {
        $error = '<p class="text-danger">Please enter your email</p>';
    } else {
        $email = clean_text($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= '<p class="text-danger">Invalid email format</p>';
        }
    }

    if ($error == '') {
        $file_open = fopen("contact_data.csv", "a");
        $no_rows = count(file("contact_data.csv"));
        if ($no_rows > 1) {
            $no_rows = ($no_rows - 1) + 1;
        }
        $form_data = array(
            'sr_no' => $no_rows,
            'email' => $email
        );
        fputcsv($file_open, $form_data);
        $error = '<p class="text-success">You have been registered!</p>';
        $email = '';
    }
}
// if(isset($_POST["submit"]))
// {

// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <title>DigitalWise</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
        <div class="container-lg">
            <img class="navbar-brand" src="./images/logo.png" alt="Logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapse">
                <ul class="navbar-nav text-uppercase gap-md-2 gap-ld-3">
                    <li class="nav-item"><a href="#" class="nav-link active">Homepage</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Our Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <main class="container-lg">
        <div class="row flex-column">
            <!-- Your Brand Our Passion -->
            <div class="col pt-lg-5">
                <section class="row flex-column flex-md-row pt-4 mb-5 align-items-lg-center">
                    <div class="col text-center mb-4">
                        <img src="./images/placeholder-0.png" class="img-fluid" alt="A placeholder image">
                    </div>
                    <div class="col">
                        <div class="row flex-column text-capitalize align-items-lg-center">
                            <div class="col-7 col-md-8 col-lg-9 align-self-sm-start align-self-lg-center">
                                <h2 class="fs-1 fw-bold">Your Brand <br> our Passion</h2>
                            </div>
                            <div class="col col-lg-9 fs-5">
                                <p>Born in 2015, in Greece, we are an independent advertising agency with offices in
                                    Athens,
                                    Limassol and Amsterdam.</p>
                                <p>Our mission is to communicate the right message to the right
                                    audience on the right platform, to help brands reach their potential. This is our
                                    passion.
                                </p>
                            </div>
                            <div class="col d-grid d-lg-inline text-center text-lg-start col-lg-9 px-5 px-lg-2">
                                <button type="button" class="btn btn-danger rounded-pill py-2 px-lg-5">Learn
                                    More</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- From Digital To Everywhere, We Go Full Circle -->
            <div class="col">
                <section class="row flex-column flex-md-row-reverse mb-5 align-items-lg-center gap-lg-4">

                    <!-- Image -->
                    <div class="col text-center mb-4">
                        <img src="./images/placeholder-1.png" class="img-fluid" alt="A placeholder image">
                    </div>

                    <!-- Text -->
                    <!-- <div class="col align-self-lg-center"> -->
                    <div class="col">
                        <div class="row flex-column text-capitalize text-md-end align-items-lg-center">
                            <div class="col col-lg-10">
                                <h2 class="fs-1 fw-bold">From digital<br>
                                    to everywhere,<br>
                                    we go full circle</h2>
                            </div>
                            <div class="col col-lg-10">
                                <p class="fs-5">Born in 2015, in Greece, we are an independent advertising agency with
                                    offices in
                                    Athens, <br class="d-none d-xl-block">
                                    Limassol and Amsterdam.</p>
                            </div>
                            <div class="col fs-4 p-md-0 col-lg-10">
                                <ul class="rtl">
                                    <li>Strategy</li>
                                    <li>Creativity</li>
                                    <li>Development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Fullwidth -->
    <section class="fullwidth container-fluid d-flex flex-column justify-content-center align-items-center gap-3">
        <h2 class="fs-1 text-white text-center fw-bold text-capitalize">Our mission is to communicate <br>
            the right message</h2>

        <div class="row align-items-center text-center">
            <div class="col">
                <img src="./images/icon-0.png" class="w-75 rotate" alt="A placeholder image">
            </div>
            <div class="col">
                <img src="./images/icon-1.png" class="w-75 rotate" alt="A placeholder image">
            </div>
            <div class="col">
                <img src="./images/icon-2.png" class="w-75 rotate" alt="A placeholder image">
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark pt-4 py-4">
        <div class="container">
            <div class="row flex-column flex-md-row text-center align-items-center">
            <?php echo $error; ?>
                <div class="col-12 col-lg-6">
                    <div class="row align-items-lg-center justify-content-xl-end">
                        <div class="col-12 col-lg-2 pe-lg-0">
                            <img src="./images/icon-newsletter.png" class="img-fluid img-newsletter" alt="Newsletter icon">
                        </div>
                        <div class="col col-xl-8 ps-lg-0 text-center">
                            <p class="text-white text-capitalize fs-4 mb-lg-0 fw-bold">Subscribe To Our Newsletter</p>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="col">
                    <form method="post" class="row flex-column flex-md-row gap-1 gap-lg-0">
                        <div class="col-12 col-lg-10 pe-lg-0">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>">
                        </div>
                        <div class="col-12 col-lg-1 d-grid ps-lg-0">
                            <button type="submit" class="btn btn-danger">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>