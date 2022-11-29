
<?php include 'home.php';?>

<section class="cities">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php include 'menu.php';?>
            </div>


            <div class="col-md-10">
                <div class="cities_box">
                    <div class="add_city">
                        <input type="text" name="" placeholder="Search Country">
                        <div class="add_button">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD  COUNTRY</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade add_countries_modal" id="exampleModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Country</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body add_countries_modal_form">
                                        <form action="">
                                            <label>Country Name</label><br>
                                            <input type="text" placeholder="Enter Country Name">
                                            <label>Upload Country Flag</label><br>
                                            <input class="form-control fileupload" type="file" id="formFile">
                                            <button>ADD COUNTRY</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="city_body">
                        <table>
                            <tr>
                                <th class="city_checkbox"><input class="form-check-input" type="checkbox" id="" name=""></th>
                                <th class="country_name" style="width: 80%;">Country Name </th>
                                <th class="city_action">Action</th>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" id="" name=""></td>
                                <td>Egypt</td>
                                <td><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="img/edit.svg" alt="edit"></a></td>
                                <!-- Modal -->
                                <div class="modal fade add_countries_modal" id="exampleModal2">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Country</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body add_countries_modal_form">
                                                <form action="">
                                                    <label>Country Name</label><br>
                                                    <input type="text" placeholder="Enter Country Name">
                                                    <label>Upload Country Flag</label><br>
                                                    <input class="form-control fileupload" type="file" id="formFile">
                                                    <button>ADD COUNTRY</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" id="" name=""></td>
                                <td>Egypt</td>
                                <td><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="img/edit.svg" alt="edit"></a></td>
                                <!-- Modal -->
                                <div class="modal fade add_countries_modal" id="exampleModal2">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Country</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body add_countries_modal_form">
                                                <form action="">
                                                    <label>Country Name</label><br>
                                                    <input type="text" placeholder="Enter Country Name">
                                                    <label>Upload Country Flag</label><br>
                                                    <input class="form-control fileupload" type="file" id="formFile">
                                                    <button>ADD COUNTRY</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" id="" name=""></td>
                                <td>Egypt</td>
                                <td><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="img/edit.svg" alt="edit"></a></td>
                                <!-- Modal -->
                                <div class="modal fade add_countries_modal" id="exampleModal2">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Country</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body add_countries_modal_form">
                                                <form action="">
                                                    <label>Country Name</label><br>
                                                    <input type="text" placeholder="Enter Country Name">
                                                    <label>Upload Country Flag</label><br>
                                                    <input class="form-control fileupload" type="file" id="formFile">
                                                    <button>ADD COUNTRY</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" id="" name=""></td>
                                <td>Egypt</td>
                                <td><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="img/edit.svg" alt="edit"></a></td>
                                <!-- Modal -->
                                <div class="modal fade add_countries_modal" id="exampleModal2">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Country</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body add_countries_modal_form">
                                                <form action="">
                                                    <label>Country Name</label><br>
                                                    <input type="text" placeholder="Enter Country Name">
                                                    <label>Upload Country Flag</label><br>
                                                    <input class="form-control fileupload" type="file" id="formFile">
                                                    <button>ADD COUNTRY</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" id="" name=""></td>
                                <td>Egypt</td>
                                <td><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="img/edit.svg" alt="edit"></a></td>
                                <!-- Modal -->
                                <div class="modal fade add_countries_modal" id="exampleModal2">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Country</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body add_countries_modal_form">
                                                <form action="">
                                                    <label>Country Name</label><br>
                                                    <input type="text" placeholder="Enter Country Name">
                                                    <label>Upload Country Flag</label><br>
                                                    <input class="form-control fileupload" type="file" id="formFile">
                                                    <button>ADD COUNTRY</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" id="" name=""></td>
                                <td>Egypt</td>
                                <td><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="img/edit.svg" alt="edit"></a></td>
                                <!-- Modal -->
                                <div class="modal fade add_countries_modal" id="exampleModal2">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Country</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body add_countries_modal_form">
                                                <form action="">
                                                    <label>Country Name</label><br>
                                                    <input type="text" placeholder="Enter Country Name">
                                                    <label>Upload Country Flag</label><br>
                                                    <input class="form-control fileupload" type="file" id="formFile">
                                                    <button>ADD COUNTRY</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
    