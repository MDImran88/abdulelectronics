
<?php
 
  include('include/header.php')

?>


  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h4 class="title" data-aos="fade-down" data-aos-duration="1200">Contact</h4>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1000">
                <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep">-</li>
                  <li>Contact</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="contact-info">
              <div class="info-item">
                <div class="info">
                  <h4 class="title">Address</h4>
                 <p>
                  Showroom:
                  1309, 1st Floor, Pan Mandi, Sadar Bazar, Delhi - 110006
                 </p>
                 <p>
                  Service Center:
                  Shop No. 1416, Street Chulhe Wali, Pan Mandi, Sadar Bazar, Delhi - 110006
                 </p>
                </div>
              </div>
              <div class="info-item">
                <div class="info">
                  <h4 class="title">Phone</h4>
                  <a href="tel:+91 - 9873786112">9873786112, 9210043326</a>
                  <a href="tel:+9210043327">9210043327, 9873461112</a>
                </div>
              </div>
              <div class="info-item">
                <div class="info">
                  <h4 class="title">Web</h4> 
                  <a href="mailto:abdulelectronics39@gmail.com">abdulelectronics39@gmail.com</a>
                  <a href="http://abdulelectronics.com/" target="_blank">www.abdulelectronics.com</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <!--== Start Contact Form ==-->
            <div class="contact-form">
              <h4 class="contact-form-title">Talk To An Expert!</h4>
              <form  id="reused_form">
                <div class="row row-gutter-20">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" required class="form-control" placeholder="Enter Name">

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" name="email" required class="form-control" placeholder="Enter Email">

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" required type="text" name="mobile" placeholder="Mobile No.">
                    </div>
                  </div>
               
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>

                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <button class="btn btn-theme" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
                <div id="error_message" style="width:100%; height:100%; display:none; ">
                  <h4>
                      Error
                  </h4>
                  Sorry there was an error sending your form. 
              </div>
              <div id="success_message" style="width:100%; height:100%; display:none; ">
                <h2>Success! Your Message was Sent Successfully.</h2>
              </div>
            </div>
            <!--== End Contact Form ==-->

            <!--== Message Notification ==-->
            <div class="form-message"></div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area Wrapper ==-->

  

    <!--== Start Feature Area Wrapper ==-->
    <section class="feature-area">
      <div class="feature-container">
        <div class="row no-gutter">
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
                <div class="content">
                  <h3 class="title">Free home delivery</h3>
                  <p>Provide free home delivery for all product over $100</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
                <div class="content">
                  <h3 class="title">Quality Products</h3>
                  <p>We ensure the product quality that is our main goal</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
                <div class="content">
                  <h3 class="title">3 Days Return</h3>
                  <p>Return product within 3 days for any product you buy</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
                <div class="content">
                  <h3 class="title">Online Support</h3>
                  <p>We ensure the product quality that you can trust easily</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Feature Area Wrapper ==-->
  </main>
  <?php 

    include('include/footer.php');

   ?> 