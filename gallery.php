<?php ;
$page = 'Gallery';
$meta = [
  'title' => "Gallery - Inspiring Moments | AS Charitable Trust support",
  'description' => "Explore the AS Charitable Trust gallery, which showcases heartwarming moments of compassion as dedicated individuals help those in need and transform lives.",
  'keywords' => "Inspiring Stories, Charitable Trust, Food donations for the needy, Acts of Kindness,Blaket donation, Water station establishment in summers",


];
include('includes/header.php')

  ?>


    <div id="home-banner">
      <img src="images/bg_14.png" class=" w-100" alt="banner">
    </div>
    
    
    <section class="ftco-section bg-light">
      <div class="container-fluid">
        <div class="row justify-content-center ">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Gallery</h2>
            <p>Kindness knows no boundaries, ever</p>
          </div>
        </div>
        <!--neely added-->
        <section class="ftco-gallery">
      
          <div class="d-md-flex">
            <a href="image/1.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(image/1.png);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <a href="image/2.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(image/2.png);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <a href="image/3.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(image/3.png);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <a href="image/8.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(image/8.png);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
          <div class="d-md-flex">
            <a href="image/5.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(image/5.png);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <a href="image/18.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(image/18.png);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <a href="image/9.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(image/9.png);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <a href="image/10.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(image/10.png);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
        </section>
  
      </div>
  
    </section>
  


   

    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex">
      <div class="col-md-6 d-flex ftco-animate">
        <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.png);"></div>
      </div>
      <div class="col-md-6 volunteer pl-md-5 ftco-animate">
        <h3 class="mb-3">Be a volunteer</h3>
        <form action="#" class="volunter-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name" required pattern="[A-Za-z ]{2,50}" title="Only letters and spaces, 2-50 characters">
          </div>
          <!-- <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div> -->
            <div class="form-group">
            <!-- ID NAME FOR PHONE NUMBER IS GIVEN BY ME -->
            <input type="phone-number" class="form-control" placeholder="Your Phone Number" id="number" required
              pattern="\d{10}" title="Enter a valid 10-digit phone number">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message" required pattern=".{10,500}" title="Message must be between 10 and 500 characters"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
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

    