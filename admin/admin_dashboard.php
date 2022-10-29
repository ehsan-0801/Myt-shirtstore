<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <script src="../js/jquery-3.6.1.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/fontawesome-free-6.2.0-web/css/all.css">
    </head>

    <body>
        <div class="main-dashboard d-flex">
            <div class="sidebar" id="side_nav">
                <div class="header-box px-2 pt-3 pb-4">
                    <button class="btn d-md-none d-block close-btn px-1 py-0 text-white "><i
                            class="fa-solid fa-bars"></i></button>
                </div>
                <ul class="list-unstyled px-2">

                    <li class="py-1 active" data-id="1"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Dashboard</a></li>

                    <li class="py-1" data-id="2"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Manager &
                            User</a></li>

                    <li class="py-1" data-id="3"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Products</a>
                    </li>

                    <li class="py-1" data-id="4"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Orders</a>
                    </li>

                    <li class="py-1" data-id="5"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Accounts</a>
                    </li>

                    <li class="py-1" data-id="6"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Settings</a>
                    </li>
                </ul>

            </div>
            <div class="content-box">
                <div class="content ms-5 mt-5 content-open" data-id="1">
                    <h3 class="text-primary fs-3">Manager & User</h3>
                    <div class="buttons w-25">
                        <button class="btn btn-secondary btn-sm mb-2">Create Manager</button>
                        <button class="btn btn-secondary btn-sm mb-2">Edit Manager</button>
                        <button class="btn btn-secondary btn-sm mb-2">List of User and Profile</button>
                    </div>
                </div>

                <div class="content ms-5 mt-5 content-hidden" data-id="2">
                    <h3>Manager Content</h3>
                </div>

                <div class="content ms-5 mt-5 content-hidden" data-id="3">
                    <h3>Product Content</h3>
                </div>
                <div class="content ms-5 mt-5 content-hidden" data-id="4">
                    <h3>Order Content</h3>
                </div>
                <div class="content ms-5 mt-5 content-hidden" data-id="5">
                    <h3>Account Content</h3>
                </div>
                <div class="content ms-5 mt-5 content-hidden" data-id="6">
                    <h3>Settings Content</h3>
                </div>

            </div>

        </div>

        <script src=" ../js/bootstrap.min.js">
        </script>

        <script>
        $(".sidebar ul li").on('click', function() {
            $(".sidebar ul li.active").removeClass('active')
            $(this).addClass('active')
            $('.content').addClass('content-hidden').removeClass('content-open');
            $(this).each(function() {
                let id = $(this).data('id');
                $('.content[data-id="' + id + '"]').removeClass('content-hidden').addClass(
                    'content-open');

            });
        });
        </script>
    </body>

</html>
