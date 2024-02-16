<!-- ======= Contact Section ======= -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="section-title">Contacte amb Nosaltres!</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-4">
        <div class="info">
          <div>
            <i class="bi bi-geo-alt"></i>
            <p>Vilafranca</p>
          </div>

          <div>
            <i class="bi bi-envelope"></i>
            <p>jdemosthe@ies-eugeni.cat</p>
          </div>

          <div>
            <i class="bi bi-phone"></i>
            <p>+1 5589 55488 55s</p>
          </div>

        </div>
      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
            </div>
            <div class="form-group mt-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjecte" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Missatge" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Cargant</div>
              <div class="error-message"></div>
              <div class="sent-message">El teu missatge s'ha enviat!!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar Missatge</button></div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section><!-- End Contact Section -->