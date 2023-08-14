    <?php
    include_once('models/Auth.php');

    if(isset($_POST['register'])){
        $data = [
            "name" => $_POST["name"],
            "username" => $_POST["username"],
            "password" => $_POST["password"],
            "password_confirm" => $_POST["password_confirm"],
        ];

        $register = Auth::register($data);
        
        if($register["status"] === "success") {
            header("Location: login.php");
        }
        else{
            header("Location: register.php");
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>register</title>
    </head>
    <body>
        <form action="" method="POST">
            <div class="container mt-5">
                <div>
                        <div>
                            <span class="h3">REGISTER</span>
                            <div>
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" id="name">
                                </div>
                                <div class="mb-3">
                                <label for="name">Username</label>
                                    <input class="form-control" type="text" name="username" id="username">  
                                </div>
                                <div class="mb-3">
                                <label for="name">Password</label>
                                    <input class="form-control" type="password" name="password" id="password">
                                </div>
                                <div class="mb-3">
                                <label for="name">Confirm Password</label>
                                    <input class="form-control" type="password" name="password_confirm" id="password_confirm">
                                </div>
                                <div class="d-grid gap 2">
                                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                                </div>
                            </div>
                        </div>
                </div>
                <div >
                    <div class="text-center">Already a user? <a href="login.php">Login Now!</a>
                </div>
            </div>
        </form>

    </body>
    </html>