<?php      
    session_start();
    
    ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>





        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../css/style.css" />
        <link rel="stylesheet" href="../../css/fontawesome-free-6.2.0-web/css/all.css">
    </head>

    <body>
        <nav class="navbar bg-secondary">
            <div class="container">
                <h3 class="mx-auto">
                    <?php    
                echo $_SESSION['username'];
                ?>
                </h3>
                <a href="../../logout.php"><i class="fa-solid fa-right-from-bracket text-dark"></i></a>
            </div>
        </nav>
        <div class="main-dashboard d-flex">
            <div class="sidebar" id="side_nav">
                <div class="header-box px-2 pt-3 pb-4">
                    <button class="btn d-md-none d-block close-btn px-1 py-0 text-white "><i
                            class="fa-solid fa-bars"></i></button>
                </div>
                <ul class="list-unstyled px-2">
                    <span class="fs-2 fs-bold text-center text-white border border-white border-2 px-3">Dashboard</span>
                    <li class="py-1 border border-top-0 border-start-0 border-end-0 active" data-id="1"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Manager &
                            User</a></li>


                    <li class="py- border border-top-0 border-start-0 border-end-0" data-id="2"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Products</a>
                    </li>

                    <li class="py-1 border border-top-0 border-start-0 border-end-0" data-id="3"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Orders</a>
                    </li>

                    <li class="py-1 border border-top-0 border-start-0 border-end-0" data-id="4"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Accounts</a>
                    </li>

                    <li class="py-1 border border-top-0 border-start-0 border-end-0" data-id="5"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Settings</a>
                    </li>
                </ul>

            </div>
            <div class="content-box">
                <div class="content ms-5 mt-5 content-open" data-id="1">
                    <h3 class="text-primary fs-3 imb-2">Manager & User</h3>
                    <div class="buttons w-25">
                        <button class="btn btn-secondary btn-sm mb-2">Create Manager</button>
                        <button class="btn btn-secondary btn-sm mb-2">Edit Manager</button>
                        <button class="btn btn-secondary btn-sm mb-2">List of User and Profile</button>
                    </div>
                </div>

                <div class="content ms-5 mt-5 content-hidden" data-id="2">
                    <h3 class="fs-bold">List of Products</h3>
                    <h4 class="text-primary">Statistics, graphs and charts</h4>
                    <canvas id="product_chart"></canvas>
                </div>
                <div class="content ms-5 mt-5 content-hidden" data-id="3">
                    <h3 class="fs-bold">List of Order</h3>
                    <h4 class="text-primary">Statistics, graphs and charts</h4>
                    <canvas id="order_chart"></canvas>
                </div>
                <div class="content ms-5 mt-5 content-hidden" data-id="4">
                    <h4 class="text-primary">Statistics, graphs and charts</h4>
                    <canvas id="account_chart"></canvas>
                </div>
                <div class="content ms-5 mt-5 content-hidden" data-id="5">
                    <h3>Settings Content</h3>
                </div>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="../../js/jquery-3.6.1.min.js"></script>
        <script src="../../js/admin_dashboard.js"></script>
        <script src="../../js/bootstrap.min.js"></script>


        </script>
    </body>

</html>
