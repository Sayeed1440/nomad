<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nomad</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="img/nlogo.png">

    <!-- link styles -->
    <link rel="stylesheet" href="css/styles.css">

     <!-- bootstrap 5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstarp icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>
    <!-- header section  -->
    <header class="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="header_box">
                        <img src="img/logo.png" alt="logo">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="header_box_right">
                        <div class="head_top">
                            <h1>Cities</h1>
                            <p><a href="#">Cities</a> > <a href="#">Add City</a></p>
                        </div>
                        <div class="admin_name">
                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Thomas Gilbert</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="index.php">Dashboard</a></li>
                                <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal5">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Modal logout-->
                <div class="modal fade add_countries_modal" id="exampleModal5">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body logout_modal">
                                    <h1>Are you sure you want to logout ?</h1>
                                    <div class="logout_btn">
                                        <a class="apply_logout" href="#">APPLY</a>
                                        <a class="cancel_logout" href="#">CANCEL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </header>

    




    <!-- script coding -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>