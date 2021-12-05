<?php include 'navbar.php'; ?>

<head>
    <link rel="stylesheet" href="css/book-reservation.css">
</head>

<section>
    <div class="book-reservation-form">
        <div class="container">
            <h2>Reserve a table</h2>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-img">
                        <img src="images/reservedTable.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <form>
                        <div class="row">
                            <div class="input-group mb-3 book-reservation-form-fields col-md-12">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3 book-reservation-form-fields col-md-12">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                        <div class="input-group mb-3 book-reservation-form-fields col-md-12">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-md-12">
                                <div class="controls">
                                    <div class="input-prepend book-reservation-datepicker">
                                        <label for="datepicker" class="add-on"><i class="icon-calendar"></i></label>
                                        <input id="datepicker" type="text" class="date-picker" placeholder="Select Date"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 book-reservation-timepicker">
                                <input type="text" id="time" placeholder="Enter Time"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 input-group mb-3 book-reservation-form-fields">
                                <input type="text" class="form-control" placeholder="Number of People Attending">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 book-reservation-form-submit">
                                <input id="submit-btn" class="submit-btn"  value="submit" type="submit" name="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
        </div>    
    </div>
</section>

<?php include 'footer.php'; ?>