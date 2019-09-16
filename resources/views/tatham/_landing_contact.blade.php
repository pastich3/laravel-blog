    <section id="contact">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">Contact</h3>
        </br></br>
        <p class="section-description">Offices in Toronto Ontario and Portland Oregon</p>
      </div>
    </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.998348021916!2d-79.40549138406612!3d43.66900417912078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3497e73fff69%3A0xecf090b8db1452c2!2s43%20Madison%20Ave%2C%20Toronto%2C%20ON%20M5R%202S2%2C%20Canada!5e0!3m2!1sen!2sus!4v1568064190263!5m2!1sen!2sus" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
<!--         <div class="d-flex">
          <div class="position-relative w-50 d-flex flex-column justify-content-center align-items-center">
            <img class="w-100" src="/images/toronto.jpeg" alt="picture of Toronto skyline">
            <div class="position-absolute" style="color: white; font-size: 2.5em; font-weight: bold; left: 50%; top: 50%; transform: translate(-50%, -50%);"> Toronto </div>
          </div>
          <div class="position-relative w-50 d-flex flex-column justify-content-center align-items-center">
            <img class="w-100" src="/images/portland.jpeg" alt="picture of Portland skyline">
            <div class="position-absolute" style="color: white; font-size: 2.5em; font-weight: bold; left: 50%; top: 50%; transform: translate(-50%, -50%);"> Portland </div>
          </div>
        </div> -->
      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>43 Madison Avenue<br>Toronto, ON M5R 2S2</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@tathaminc.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 503 710 5173</p>
              </div>
            </div>

            <div class="social-links">
              <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="/contact" method="post" role="form" class="contactForm">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" maxlength="255" data-msg="Please enter at least 4 characters" />
                  <div id="name-error" class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" maxlength="255" data-msg="Please enter a valid email" />
                  <div id="email-error" class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" maxlength="128" data-rule="minlen:4" data-msg="Please enter at least 8 characters of subject" />
                  <div id="subject-error" class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" maxlength="2048" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div id="message-error" class="validation"></div>
                </div>
                <div class="text-center"><button id="submit" type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->
