<?php
 include 'inc/templete/header.php';
?>

    <div class="container contact-form">
      <div class="contact-image">
        <img src="img/1.jpg" alt="Email Icon" width="3%" />
      </div>
      <form method="post">
        <h3 >Send Us a Message</h3>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" required />
            </div>
            <br />
            <div class="form-group">
              <input type="email" name="txtEmail" class="form-control" placeholder="Your Email *" value="" required />
            </div>
            <br />
            <div class="form-group">
              <input type="tel" name="txtPhone" class="form-control" placeholder="+966" value="" required />
            </div>
            <br />
            <div class="form-group">
              <input type="submit" class="btn btn-success" name="btnSubmit"  value="Send Message" required />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px"></textarea>
              <br />
              <br />
              <div class="contact-formmap">
                <h3>Location</h3>
                <p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228791.7317672436!2d49.992540180581884!3d26.36304025059799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49ef85c961edaf%3A0x7b2db98f2941c78c!2sImam%20Abdulrahman%20Bin%20Faisal%20University!5e0!3m2!1sen!2ssa!4v1672229820933!5m2!1sen!2ssa" width="400" height="300" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!--footer-->
    <footer class="text-center text-black py-3 fixed-bottom" style="background-color: #508f07;">
      © 2024 Copyright: Cilantro Store
      <img src="img/Cilntro_LOGO.png" width="3%">
  </footer>
  <!--footer-->

  </body>
</html>
