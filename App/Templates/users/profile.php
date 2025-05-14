<?php

/**@var \App\Data\User\UserDTO $data */
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Profile</title>
</head>

<body>
    <div class="container border-bottom">
        <header class="d-flex justify-content-between">
            <div>
                <h6 class="me-3">Hello, <?php echo $data->getUsername(); ?></h6>
            </div>
            <div class="me-4 d-flex align-items-center">
                <a class="btn btn-primary rounded-pill" href="add_user.php">Add User</a>
                <a class="btn btn-primary rounded-pill mx-2" href="http://192.168.175.34:82/login">WWS BO</a>
                <a class="btn btn-danger rounded-pill" href="logout.php">Log out</a>
            </div>
        </header>
    </div>
    <section class="container d-flex justify-content-between">
    </section>
</body>

</html>