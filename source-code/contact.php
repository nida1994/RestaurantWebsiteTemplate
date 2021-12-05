<?php include 'navbar.php'; ?>

<section class="restaurant-contact-form">

    <div class="container">
        <h2>Contact Us</h2>
        <hr>
        <div class="row contact-form">
            <div class="col-lg-6 contact-info">
                <address><i class="fa fa-map-marker"></i> Address: xxxxxxxxxxx</address>
                <p><i class="fa fa-phone"></i> Phone: xxx-xxx-xxx</p>
                <div class="contact-form-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48329.873742754105!2d-74.14677427088114!3d40.79243111255452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2566d370e88b7%3A0x8613920d905dc78d!2sLyndhurst%2C%20NJ!5e0!3m2!1sen!2sus!4v1633300526299!5m2!1sen!2sus" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                
            </div>   
            <div class="col-lg-6 contact-form-fields">
                <div class="form-field">
                    <input id="name" class="input-text" type="text" name="">
                    <label for="name" class="label">Name</label>
                </div>
                <div class="form-field">
                    <input id="name" class="input-text" type="text" email="">
                    <label for="name" class="label">Email</label>
                </div>
                <div class="form-field">
                    <input id="message" class="input-text" type="text" name="">
                    <label for="message" class="label">Message</label>
                </div>
                <div class="form-field">
                    <input id="submit-btn" class="submit-btn"  value="submit" type="submit" name="">
                </div>
            </div>
        </div>
     </div>
</section>

<?php include 'footer.php'; ?>