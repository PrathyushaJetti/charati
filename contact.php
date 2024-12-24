<?php ;
$page = 'Contact';
$meta = [
  'title' => "Contact - AS Charitable Trust address Hyderabad Telangana.",
  'description' => "Find AS Charitable Trust located in MS Maqta, Khairtabad, Hyderabad. Contact us at +91 7396047521 and email support@ascharitabletrust.com. Visit our website at ascharitabletrust.com for more details.",
  'keywords' => "AS Charitable trust, Address, Charitable trust address near me,  Nearby  Charity address, Contact AS Charitable Trust, Charitable donations Hyderabad, AS Charitable Trust contact information, Charity Trust in Hyderabad,",


];
include('includes/header.php')

  ?>




  <div id="home-banner">
    <img src="images/bg_15.png" class=" w-100" alt="banner">
  </div>


  <section class="ftco-section contact-section ftco-degree-bg py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="col-md-2 mb-3">
        <a href="https://www.google.com/maps?q=MS+Maqta,+Khairtabad,+Hyderabad,+Telangana+500082" target="_blank">MS Maqta, Khairtabad, Hyderabad, Telangana 500082</a>

        </div>
        <div class="col-md-3 mb-3">
          <p><strong>Phone:</strong> <a href="tel:+917396047521">+91 7396047521</a></p>
        </div>
        <div class="col-md-4 mb-3">
          <p><strong>Email:</strong> <a href="mailto:support@ascharitabletrust.com">support@ascharitabletrust.com</a></p>
        </div>
        <div class="col-md-3 mb-3">
          <p><strong>Website:</strong> <a href="https://ascharitabletrust.com">ascharitabletrust.com</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h4 class="mb-4">Help us sustain our mission with donations.</h4>
          <form action="form.php" method="post" id="contactForm">
            <div class="mb-3">
              <input type="text" name="name" class="form-control" placeholder="Your Name" id="NAME" required pattern="[A-Za-z ]{2,50}" title="Only letters and spaces, 2-50 characters">
            </div>
            <div class="form-group">
            <!-- ID NAME FOR PHONE NUMBER IS GIVEN BY ME -->
            <input type="phone-number" class="form-control" placeholder="Your Phone Number" id="number" required
              pattern="\d{10}" title="Enter a valid 10-digit phone number">
          </div>
            <div class="mb-3">
              <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject" required pattern="[A-Za-z0-9 ]{2,100}" title="Alphanumeric characters and spaces, 2-100 characters">
            </div>
            <div class="mb-3">
              <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" id="MESSAGE" required pattern=".{10,500}" title="Message must be between 10 and 500 characters"></textarea>
            </div>
            <div>
              <button type="submit" class="btn btn-primary py-2 px-4">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <h4 class="mb-4 text-center">Track us</h4>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3806.767455434504!2d78.46092297516574!3d17.42294408347027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDI1JzIyLjYiTiA3OMKwMjcnNDguNiJF!5e0!3m2!1sen!2sin!4v1724841712267!5m2!1sen!2sin"
            class="w-100" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
      event.preventDefault(); 
      const userConfirmed = confirm('Form submitted successfully! Click OK to proceed.');
      if (userConfirmed) {
        window.location.href = 'contact.html'; 
      }
    });
  </script> -->
 
  <?php ;

include('includes/footer.php')

  ?>
  </html>

  
