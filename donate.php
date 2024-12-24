<?php ;
$meta = [
  'title' => " ",
  'description' => "",
  'keywords' => "",


];
include('includes/header.php')

  ?>


<div id="home-banner">
    <img src="images/bg_16.jpg" class=" w1-100" alt="banner" >
  </div>
  



<div class="container">
  <div class="row">


    <div class="col-lg-6 d-flex mb-sm-12 ftco-animate">
      <div class="staff">
        <p>Your donation is fueling hope and progress in our community. Every contribution helps drive positive change
          and brings us closer to achieving our shared goals.</p>
        <h3>Scan The QR Code To Donate</h3>
        <img src="./image/donate.jpg" alt="Donate Now" class="qr-code" />
      </div>
    </div>
    <div class="col-lg-6 d-flex mb-sm-12 ftco-animate">
      <div class="staff" style="width:100% !important;flex:1;text-align:center;justify-content:center">
        <h3>Bank Transfer</h3><br>
        <p>AS CHARITABLE TRUST<br>
          A/c.No: 020205008644<br>
          IFSC Code: ICIC0000202<br>
          Nagarjuna Hills,<br>
          Punjagutta,<br>
          Hyderabad-500082.</p>
      </div>
    </div>
  </div>
</div>


<section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex">
      <div class="col-md-6 d-flex ftco-animate">
        <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.png);"></div>
      </div>
      <div class="col-md-6 volunteer pl-md-5 ftco-animate">
        <h3 class="mb-3">Be a Donater</h3>
        <form action="#" class="volunter-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name" id="Fname">
          </div>
          <!-- <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div> -->
          <div class="form-group">
            <input type="phone-number" class="form-control" placeholder="Your Phone Number" id="Pnumber">
          </div>
          <div class="form-group">
            <textarea name="" cols="30" rows="3" class="form-control" placeholder="Message" id="M-message" required pattern=".{10,500}" title="Message must be between 10 and 500 characters"></textarea>
          </div>
          <div class="form-group">
            <input type="button" value="Send Message" class="btn btn-white py-3 px-5" id="Button">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php ;

include('includes/footer.php')

  ?>
  </html>