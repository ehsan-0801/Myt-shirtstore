<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Shop</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css" />
    </head>

    <body>
        <div class="container form-container">
            <form action="./validation/createshop_validation.php" onsubmit="return validation()" method="POST"
                class="form-style container p-5">
                <h3 class="text-dark text-center mb-3">Create shop</h3>

                <input type="email" class="form-control mb-1
                " id="email" name="email" value="" placeholder="email" />
                <label id="msg1" class="text-danger mb-2"></label>

                <input type="text" class="form-control mb-1
                " id="phone" name="phone" value="" placeholder="phone" />
                <label id="msg2" class="text-danger mb-2"></label>

                <input type="password" class="form-control mb-1
                " id="password" name="password" value="" placeholder="password" />
                <label id="msg3" class="text-danger mb-2"></label>

                <input type="password" class="form-control mb-1
                " id="confirm_password" name="confirm_password" value="" placeholder="confirm password" />
                <label id="msg4" class="text-danger mb-2"></label>

                <input type="text" class="form-control mb-1" id="shopname" name="shopname" value=""
                    placeholder="Shop Name" />
                <label id="msg5" class="text-danger mb-2"></label>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit" name="create">Create</button>
                </div>
            </form>
        </div>
        <script src="./js/jquery-3.6.1.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script>
        function validation() {
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var password = document.getElementById('password').value;
            var shopname = document.getElementById('shopname').value;
            var confirm_password = document.getElementById('confirm_password').value;
            if (email.length == "" && phone.length == "" && password.length == "" && confirm_password.length == "") {
                document.getElementById('msg1').innerHTML = ""
                document.getElementById('msg2').innerHTML = ""
                document.getElementById('msg3').innerHTML = ""
                document.getElementById('msg4').innerHTML = ""
                document.getElementById('msg5').innerHTML = ""
                document.getElementById('msg1').innerHTML = "**email is empty"
                document.getElementById('msg2').innerHTML = "**phone is empty"
                document.getElementById('msg3').innerHTML = "**password is empty"
                document.getElementById('msg4').innerHTML = "**confirm password  is empty"
                document.getElementById('msg5').innerHTML = "**Shop Name is empty"
                return false;
            } else {
                if (email.length == "") {
                    document.getElementById('msg1').innerHTML = ""
                    document.getElementById('msg2').innerHTML = ""
                    document.getElementById('msg3').innerHTML = ""
                    document.getElementById('msg4').innerHTML = ""
                    document.getElementById('msg5').innerHTML = ""
                    document.getElementById('msg1').innerHTML = "**email is empty"
                    return false;
                }

                if (phone.length == "") {
                    document.getElementById('msg1').innerHTML = ""
                    document.getElementById('msg2').innerHTML = ""
                    document.getElementById('msg3').innerHTML = ""
                    document.getElementById('msg4').innerHTML = ""
                    document.getElementById('msg5').innerHTML = ""
                    document.getElementById('msg2').innerHTML = "**phone is empty"
                    return false;
                }
                if (password.length == "") {
                    document.getElementById('msg1').innerHTML = ""
                    document.getElementById('msg2').innerHTML = ""
                    document.getElementById('msg3').innerHTML = ""
                    document.getElementById('msg4').innerHTML = ""
                    document.getElementById('msg5').innerHTML = ""
                    document.getElementById('msg3').innerHTML = "**passoword is empty"
                    return false;
                }
                if (confirm_password.length == "") {
                    document.getElementById('msg1').innerHTML = ""
                    document.getElementById('msg2').innerHTML = ""
                    document.getElementById('msg3').innerHTML = ""
                    document.getElementById('msg4').innerHTML = ""
                    document.getElementById('msg5').innerHTML = ""
                    document.getElementById('msg4').innerHTML = "**confirm passoword is empty"
                    return false;
                }
                if (shopname.length == "") {
                    document.getElementById('msg1').innerHTML = ""
                    document.getElementById('msg2').innerHTML = ""
                    document.getElementById('msg3').innerHTML = ""
                    document.getElementById('msg4').innerHTML = ""
                    document.getElementById('msg5').innerHTML = ""
                    document.getElementById('msg5').innerHTML = "**Shop Name is empty"
                    return false;
                }
                if (phone.length < 8) {
                    document.getElementById('msg1').innerHTML = ""
                    document.getElementById('msg2').innerHTML = ""
                    document.getElementById('msg3').innerHTML = ""
                    document.getElementById('msg4').innerHTML = ""
                    document.getElementById('msg2').innerHTML = "**phone number can not be less than 8 digits"
                    return false;
                }
                if (password != confirm_password) {
                    document.getElementById('msg1').innerHTML = ""
                    document.getElementById('msg2').innerHTML = ""
                    document.getElementById('msg3').innerHTML = ""
                    document.getElementById('msg4').innerHTML = ""
                    document.getElementById('msg3').innerHTML = "password is not matched";
                    document.getElementById('msg4').innerHTML = "password is not matched";
                    return false;
                }
            }
        }
        </script>
    </body>

</html>
