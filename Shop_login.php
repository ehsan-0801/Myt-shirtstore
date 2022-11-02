<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Myt-shirtstore</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <!-- admin login form -->
        <div class="container form-container">
            <form action="./validation/shop_login_check.php" onsubmit="return validation()" method="POST"
                class="form-style container p-5">
                <h3 class="text-dark text-center mb-3">SHOP LOG IN</h3>

                <input type="text" class="form-control mb-1
                " id="email_or_phone" name="email_or_phone" value="" placeholder="email or phone number" />
                <label id="msg1" class="text-danger mb-2"></label>
                <input type="password" class="form-control mb-1
                " id="password" name="password" value="" placeholder="password" />
                <label id="msg2" class="text-danger mb-2"></label>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
        <script src="../js/bootstrap.min.js"></script>
        <script>
        function validation() {
            var email_or_phone = document.getElementById('email_or_phone').value;
            var password = document.getElementById('password').value
            if (email_or_phone.length == "" && password.length == "") {
                document.getElementById('msg1').innerHTML = ""
                document.getElementById('msg2').innerHTML = ""
                document.getElementById('msg1').innerHTML = "**email or phone number is empty"
                document.getElementById('msg2').innerHTML = "**Password field is empty"
                return false;
            } else {
                if (email_or_phone.length == "") {
                    document.getElementById('msg1').innerHTML = ""
                    document.getElementById('msg2').innerHTML = ""
                    document.getElementById('msg1').innerHTML = "**email or phone number is empty"
                    return false;
                }
                if (password.length == "") {
                    document.getElementById('msg1').innerHTML = ""
                    document.getElementById('msg2').innerHTML = ""
                    document.getElementById('msg2').innerHTML = "**Password field is empty"
                    return false;
                }
            }
        }
        </script>
    </body>

</html>
