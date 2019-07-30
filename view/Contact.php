<?php include("header.php"); ?>

<div class="container main-content-container">
    <h3 class="my-4">Contact Details</h3>

    <div class="row">

        <div class="col-lg-8 mb-4">

            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=westville%20mall%20durban&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
            <h3>Contact Details</h3>
            <p>
                <strong>Clinic Address: </strong><br>
               Buckingham Terrace 
                <br>Downcliff, Westiville 3629
                <br>
            </p>
            <p>
                <strong>Phone Number: </strong><br>
                <a href="tel:+270312623456">(031) 2623456</a>
            </p>
            <p>
                <strong>Email Address: </strong><br>
                <a href="mailto:admin@healthlifeispossible.co.za">admin@healthlifeispossible.co.za
                </a>
            </p>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-8 mb-4">
            <h3>Message Us</h3>
            <form>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name">

                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
            </form>
        </div>

    </div>
</div>

<?php include("footer.php"); ?>
