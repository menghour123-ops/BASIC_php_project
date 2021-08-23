<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ចុះឈ្មោះ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>
<body>
    <div  style="background-image:url(../assets/images/bg.jpg); width: 100%; height: 100vh; background-size:cover; background-position: center;">
        <div class="p-4 ">
            <form action="#" method="post" class="rounded-lg col-lg-5 col-md-4 m-auto bg-white p-3" >
                <div class="d-flex jutify-content-end pb-2">
                    <button class="btn btn-info" onclick="window.history.back();">&#8592; ត្រឡប់</button>
                </div>
                <div class="text-center">
                    <h4>ចុះឈ្មោះដើម្បីចូល</h4>
                </div>
                <div class="form-group">
                    <label for="username">ឈ្មោះ</label>
                    <input type="text" name="userName" required class="form-control" id="username" placeholder="បញ្ចូលឈ្មោះ.....">
                </div>
                <div class="form-row">
                    <div class="col form-group">
                        <label for="pass">ពាក្យសម្ងាត់</label>
                        <input type="password" name="pass" required class="form-control" id="pass" placeholder="ពាក្យសម្ងាត់" length="8">
                    </div>
                    <div class="col form-group">
                        <label for="cfpassword">បញ្ជាក់លេខសំងាត់</label>
                        <input type="password" name="cfpassword" required class="form-control" id="cfpass" placeholder="ពាក្យសម្ងាត់" length="8">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">អាស័យ​ដ្ឋាន​​ & អ៊ី​ម៉េ​ល</label>
                    <input type="email" name="email" required class="form-control" id="email" aria-describedby="emailHelp" placeholder="អ៊ី​ម៉េ​ល.....">
                </div>
                <div class="form-row">
                    <div class="col-5">
                        <a href="http://localhost/basic_php/index.php?page=home"><button type="submit" class="btn btn-secondary w-100 fa fa-user"aria-hidden="true">ចុះឈ្មោះដើម្បីចូល</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>
