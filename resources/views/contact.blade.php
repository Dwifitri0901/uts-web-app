@extends('tema.master')

@section("content")

<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Contact Us</h2>
    </div>

    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-5 mb-5 mb-md-0">
        <div class="info">
          <div class="address">
            <i class="bx bx-map"></i>
            <p>Jalan Arif Rahman Hakim No 10 <br>Kalimantan Timur,Samarinda</p>
          </div>

          <div class="email">
            <i class="bx bx-envelope"></i>
            <p>Dwimusda@gmail.com</p>
          </div>

          <div class="phone">
            <i class="bx bx-phone-call"></i>
            <p>082356985412</p>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>

      <div class="col-lg-5 col-md-7">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Us Section -->

@endsection
