<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" type="image/png" href="assets/images/pasha-favicon.png">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    </div>

<section class="container d-flex justify-content-center align-items-center">

    <div class="login-form me-4">
        <div class="img-box mb-4">
            <img src="assets/images/pasha-logo.png" alt="">
        </div>
        <h1 class="text-animation my-5">
            Security Gate Login
        </h1>
        <form action="" method="post" class="w-100 p-2">
            <div class="input-group mb-3 position-relative">
                <input type="text" name="username" class="form-control rounded"
                       value="<?= isset($_POST['username']) ? $_POST['username']:null;?>" placeholder="Username" required>
                <span class="position-absolute top-50 end-0 translate-middle pe-1">
                    <i class="fa-solid fa-user"></i>
                </span>
            </div>
            <div class="input-group mb-3 position-relative">
                <input type="password" name="password" class="form-control rounded" placeholder="Password" required>
                <span class="position-absolute top-50 end-0 translate-middle pe-1">
                    <i class="fa-solid fa-lock"></i>
                </span>
            </div>

            <?php if($error):?>
                <div class="mb-3">
                    <p class='text-danger'><?=$error->getMessage()?></p>
                </div>
            <?php endif;?>
            <div class="mb-3">
                <input type="submit" name="login" class="btn btn-primary w-100" value="Sign in">
            </div>
        </form>

    </div>

</section>
</body>
</html>