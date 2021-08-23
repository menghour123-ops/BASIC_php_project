<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ចូលជាអ្នកគ្រប់គ្រង</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>
<body>
    <div  style="background-image:url(https://media.istockphoto.com/photos/lens-flare-space-light-sun-light-abstract-black-background-picture-id1200461833?k=6&m=1200461833&s=170667a&w=0&h=x3LyOXPTqQR1wLjdO0aLfmyN7myXeUYAlSc4Krwr3Lg=); width: 100%; height: auto; background-size:cover; background-position: center;">
        <div class="p-4 ">
            <?php 
                require_once("../database/database.php");
                $message = "";
                if ($_SERVER["REQUEST_METHOD"]=="POST"){
                    $isLogin = login($_POST);
                    if($isLogin){
                        header('Location:http://localhost/basic_php/?page=places');
                    }else{
                        $message = "Email or Password not match";
                    }
                }
            ?>
            <main class="d-flex align-items-center min-vh-100">
                <div class="container">
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="../assets/images/angkor.jpg" style="width: 420px;height:400px;" alt="login" class="login-card-img" >
                            <p class="text-white font-weight-medium text-center flex-grow align-self-end footer-link text-small">
                                <a href="" target="_blank" class="text-primary d-flex align-items-start">អ្នកនឹងអាចកែតម្រូវបានបន្ទាប់ពីបញ្ចូលសិទ្ធជាម្ចាស់</a>
                            </p>
                        </div>
                    <div class="col-md-5">
                        <div class="card-body">
                        <h1 class="login-card-description">ចូលគណនេយ្យ</h1>
                        <form action="" method="post">
                            <div class="form-group" >
                                <label for="username" class="sr-only">ឈ្មោះ</label>
                                <input type="text" name="userName" id="username" class="form-control"placeholder="បញ្ចូលឈ្មោះ....">
                            </div>
                            <div class="form-group mb-2">
                                <label for="password" class="sr-only">ពាក្យសម្ងាត់</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                            </div>
                            <a href="http://localhost/basic_php/index.php?page=place"><input name="login" id="login" class="btn btn-block login-btn mb-4 bg-dark text-white" type="button" value="ចូល"></a>
                            </form>
                            <a href="#!" class="forgot-password-link">បំភ្លេចពាក្យសម្ងាត់?</a>
                            <p class="login-card-footer-text">អ្នកមិនមានសិទ្ធជាម្ចាស់​ ? <a href="register.php" class="text-primary">ចុះឈ្មោះដើម្បីចូល</a></p>
        
                        </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </main>
        </div>
    </div> 
</body>
</html>


