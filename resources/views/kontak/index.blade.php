@extends('layouts.template')

@section('judul')
    Kontak
@endsection

@section('main')
    <header class="bg-contact text-white text-center py-5">
        <br><br><h1>Hubungi Kami</h1>
    </header>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Komplek Perkantoran Pemerintahan <br>
                     Kabupaten Bekasi Gedung A IV Lt. 2
                  </p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>diskanlutbekasikab@gmail.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-instagram"></i>
                  <h4>Instagram:</h4>
                  <p>@diskankabbekasi</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126912.0910513495!2d106.95864254335939!3d-6.263353999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6985470911d575%3A0xe631aa58b329f595!2sDinas%20Perikanan!5e0!3m2!1sid!2sid!4v1706490244430!5m2!1sid!2sid" width="100%" height="290px" style="border:0;" allowfullscreen=""></iframe>
                </div>
  
            </div>
  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
@endsection