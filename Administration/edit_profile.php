
<?php include 'home.php';?>

<section class="cities">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php include 'menu.php';?>
            </div>


            <div class="col-md-10">
                <div class="cities_box">
                    <div class="add_city_head">
                        <li><a href="#"><i class="bi bi-arrow-left"></i></a> Thomas Gilbert</li>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal4">Logout</a>
                    </div>

                    <form class="add_city_boxes edit_profile">
                            
                            <div class="add_city_forms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label><br>
                                        <input type="text" placeholder="Enter Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email Id</label><br>
                                        <input type="text" placeholder="Enter Email Id">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Role</label><br>
                                        <input type="text" placeholder="Enter Your Role">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password</label><br>
                                        <div class="password_box">
                                            <input class="password_box2" type="password" placeholder="Enter Password">
                                            <a class="password_change_box" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3">Change</a>
                                        </div>

                                    </div>
                                </div>
                            </div>  
                      
                        <button class="btn_add_city_box">UPDATE DETAILS</button>

                    </form>
                    <!-- Modal change password -->
                    <div class="modal fade add_countries_modal" id="exampleModal3">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body add_countries_modal_form">
                                    <form action="">
                                        <label>Enter Current Password</label><br>
                                        <input type="text" placeholder="Enter Current Password">
                                        <label>Enter Current Password</label><br>
                                        <input type="text" placeholder="Enter Current Password">
                                        <label>Re-Enter New Password</label><br>
                                        <input type="text" placeholder="Re-Enter New Password">
                                        <button>UPDATE PASSWORD</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal logout-->
                    <div class="modal fade add_countries_modal" id="exampleModal4">
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

        </div>
    </div>
</section>
    