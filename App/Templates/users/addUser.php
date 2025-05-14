<?php

/**@var \App\Data\ErrorDTO\ErrorDTO $error*/ ?>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container border-bottom">
        <header class="d-flex justify-content-between">
            <div>
                <h6 class="me-3"></h6>
            </div>
            <div class="me-4">
                <a class="btn btn-primary rounded-pill" href="profile.php">Home</a>
                <!-- <a class="btn btn-primary rounded-pill mx-2" href="http://192.168.175.34:82/login">WWS BO</a> -->
                <a class="btn btn-danger rounded-pill" href="logout.php">Logout</a>
            </div>
        </header>
    </div>

    <section class="container d-flex justify-content-center align-items-center">
        <div class="register-form">
            <h2 class="mt-2">New User</h2>

            <form action="" method="post" class="w-100 p-2" name="add_user_form">
                <?php if ($error): ?>
                    <div class="mb-3">
                        <p class='text-danger'><?= $error->getMessage() ?></p>
                    </div>
                <?php endif; ?>
                <div class="mt-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="input-group mt-3">
                    <input type="password" name="password" id="pswd" class="form-control border border-end-0" placeholder="Password" minlength="4" pattern="(?=.*[a-z])(?=.*[A-Z]).{4,}" title="Минимум 4 символа с малки и големи букви" required>
                    <button class="input-group-text visiblePass" style="cursor: pointer">
                        <i class="bi bi-eye-fill"></i>
                    </button>
                </div>
                <div class="input-group mt-3">
                    <input type="password" name="confirm_password" class="form-control border border-end-0"
                        placeholder="Confirm password" required>
                    <button class="input-group-text visiblePass" style="cursor: pointer">
                        <i class="bi bi-eye-fill"></i>
                    </button>
                </div>

                <div class="mt-3">
                    <select name="role_id" id="role_id" class="form-select" required>
                        <option value="" disabled selected>-- Избери роля --</option>
                        <option value="1">Администратор</option>
                        <option value="2">Потребител</option>
                    </select>
                </div>

                <div class="mt-3">
                    <input type="submit" name="аdd_new" class="btn btn-primary w-100" value="add">
                </div>
            </form>

        </div>
    </section>

    <script src="assets/js/app.js"></script>
</body>

</html>