<?php      
    session_start();
    
    ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop Dashboard</title>
        <script src="../../js/jquery-3.6.1.min.js"></script>
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
                echo strtoupper($_SESSION['shopname']);
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

                    <li class="py-1 active" data-id="1"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Dashboard</a></li>

                    <li class="py-1" data-id="2"><a href="#"
                            class="text-decoration-none text-white px-3 py-2 d-block">Profile</a></li>

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
                    <h3 class="fs-bold">Greetings messages to user</h3>
                    <h4 class="text-primary">Statistics, graphs and charts</h4>
                    <canvas id="greetings_chart"></canvas>
                </div>

                <div class="content ms-5 mt-5 content-open" data-id="2">
                    <h3>Update profile data</h3>
                    <form class="row g-3">
                        <div class="col-auto">
                            <label for="inputPassword2">Data1</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Data1">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2">Data2</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Data2">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2">Data3</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Data3">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2">Data4</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Data4">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2">Data5</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Data5">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2">Data6</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Data6">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2">Data7</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Data7">
                        </div>
                        <div class="w-75">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>

                <div class="content ms-5 mt-5 content-hidden" data-id="3">
                    <div class="fs-3 fs-bold mb-5">
                        <h2 class="text-secondary">Products</h2>
                    </div>
                    <h3 class="text-dark">List of Products</h3>
                    <button class="btn btn-secondary btn-sm mb-2 w-25">View products details</button>
                    <button class="btn btn-secondary btn-sm mb-2 w-25">Verify</button>
                </div>
                <div class="content ms-5 mt-5 content-hidden" data-id="4">
                    <div class="fs-3 fs-bold mb-5">
                        <h2 class="text-secondary">Orders</h2>
                    </div>
                    <h3 class="text-dark">List of orders Request</h3>
                    <button class="btn btn-secondary btn-sm mb-2 w-25">View products details</button>
                    <button class="btn btn-secondary btn-sm mb-2 w-25">View Order</button>
                    <button class="btn btn-secondary btn-sm mb-2 w-25">View Order</button>
                    <button class="btn btn-secondary btn-sm mb-2 w-25">Status Update</button>
                </div>
                <div class="content ms-5 mt-5 content-hidden" data-id="5">
                    <div class="fs-3 fs-bold mb-5">
                        <h2 class="text-secondary">Accounts</h2>
                    </div>
                    <h3 class="text-dark">List of pending Withdrawal Request</h3>
                    <button class="btn btn-secondary btn-sm mb-2 w-25">View Request</button>
                    <button class="btn btn-secondary btn-sm mb-2 w-25">process Withdrawal Request</button>
                </div>
                <div class="content ms-5 mt-5 content-hidden" data-id="6">
                    <h3>Settings Content</h3>
                </div>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="../../js/jquery-3.6.1.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>

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
        var greetingsCanvas = document.getElementById("greetings_chart")
        var config = {
            type: "bar",
            data: {
                labels: ["Category_1", "Category_2", "Category_3", "Category_4"],

                datasets: [{
                        label: "T-shirt",
                        backgroundColor: "#023e8a",
                        data: [4.1, 2.5, 3.8, 4.8]
                    },
                    {
                        label: "Polo",
                        backgroundColor: "#ca6702",
                        data: [2.5, 4.8, 1.8, 3]
                    },
                    {
                        label: "Hoody",
                        backgroundColor: "#ccc5b9",
                        data: [2, 2, 3, 7]
                    },
                ]
            }
        }


        var greetings_chart = new Chart(greetingsCanvas, config)
        </script>
    </body>

</html>
