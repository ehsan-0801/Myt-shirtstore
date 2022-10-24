<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Myt-shirtstore</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/style.css" />
    </head>

    <body>
        <!-- admin login form -->
        <div class="container form-container">
            <form action="" class="form-style container p-5">
                <h3 class="text-dark text-center mb-3">Admin Login</h3>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email/Number:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" value=""
                            placeholder="email or phone number" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" value="" placeholder="password" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-3"></div>
                    <button class="btn btn-primary col-sm-9" type="button">Login</button>
                </div>
            </form>
        </div>
        <script src="../js/bootstrap.min.js"></script>
    </body>

</html>
