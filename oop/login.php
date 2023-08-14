<?php
include_once('models/Auth.php');

if(isset($_POST['login'])){
    $data = [
        "username" => $_POST['username'],
        "password" => $_POST['password']
    ];

    $result = Auth::login($data);
    // die(var_dump($result));

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <form action="" method="POST">
        <div class="container mt-5">
                <?php if(isset($result)) : ?>
                    <div class="alert alert-<?php $result['status'] === 'error' ? print("danger") : print("success") ?>">
                        <?= $result["message"] ?>
                    </div>
                <?php endif ?>
                <div >
                    <div>
                        <span class="h3">LOGIN</span>
                        <div>
                            <div class="mb-3">
                            <label for="name">Username</label>
                                <input class="form-control" type="text" name="username" id="username">  
                            </div>
                            <div class="mb-3">
                            <label for="name">Password</label>
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="d-grid gap 2">
                                <button type="submit" class="btn btn-primary" name="login">login</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
                <div class="text-center">Not a user? <a href="register.php">Register Now!</a>
            </div>
        </div>
    </form>

</body>
</html>