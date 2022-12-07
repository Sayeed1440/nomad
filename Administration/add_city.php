
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
                        <li><a href="#"><i class="bi bi-arrow-left"></i></a> Add City</li>
                    </div>

                    <form class="add_city_boxes">

                        <div class="add_city_boxes_details">
                            <div class="add_city_form_heading">
                                <h1>Add City Details</h1>
                            </div>
                            <div class="add_city_forms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>City Name</label><br>
                                        <input type="text" placeholder="Enter City Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Choose Country</label><br>
                                        <select class="form-select" id="select">
                                            <option selected>Select Country</option>
                                            <option value="1">India</option>
                                            <option value="2">Japan</option>
                                            <option value="3">America</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Upload City Gallery Images</label><br>
                                        <input class="form-control fileupload" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <div class="add_city_form_heading">
                                <h1>Add Event Details</h1>
                                <div class="heading_delete_icon">
                                    <a href="#"><img src="img/delete.svg" alt="delete"></a>
                                </div>
                            </div>
                            <div class="add_city_forms">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Event Title</label><br>
                                        <input type="text" placeholder="Enter Title">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Date</label><br>
                                        <input type="text" placeholder="Enter Event Date">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Time</label><br>
                                        <input type="text" placeholder="Enter Event Time">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Event Category</label><br>
                                        <select class="form-select" id="select">
                                            <option selected>Choose Event Category</option>
                                            <option value="1">Event 1</option>
                                            <option value="2">Event 2</option>
                                            <option value="3">Event 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Event Location</label><br>
                                        <input type="text" placeholder="Enter Event Location">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Upload Event image</label><br>
                                        <input class="form-control fileupload" type="file" id="formFile">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Event Overview</label><br>
                                        <textarea class="form-control" rows="4" placeholder="Enter Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="add_city_form_heading">
                                <h1>Add Event Details</h1>
                                <div class="heading_delete_icon">
                                    <a href="#"><img src="img/delete.svg" alt="delete"></a>
                                </div>
                            </div>
                            <div class="add_city_forms">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Event Title</label><br>
                                        <input type="text" placeholder="Enter Title">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Date</label><br>
                                        <input type="text" placeholder="Enter Event Date">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Date</label><br>
                                        <input type="text" placeholder="Enter Event Time">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Event Category</label><br>
                                        <select class="form-select" id="select">
                                            <option selected>Choose Event Category</option>
                                            <option value="1">Event 1</option>
                                            <option value="2">Event 2</option>
                                            <option value="3">Event 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Event Location</label><br>
                                        <input type="text" placeholder="Enter Event Location">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Upload Event image</label><br>
                                        <input class="form-control fileupload" type="file" id="formFile">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Event Overview</label><br>
                                        <textarea class="form-control" rows="4" placeholder="Enter Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn_event">ADD MORE EVENTS</button>
                        </div>
                        <button type="submit" class="btn_add_city_box">ADD NEXT CITY <i class="bi bi-plus-circle"></i></button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
    