<?php require('header.php'); ?>
    
    <!-- Main -->
    <section>
        <div class="container white-container">
            <h1>Kontakt</h1>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="info">
                                <h3>make up by Jelena Mrkić</h3>    
                                <p class="address">Sterijina 7, 37000 Kruševac</p>
                                <p>Tel: <a href="tel: +381669333549">+381 66 9 333 549</a></p>
                                <p><a href="mailto:jelenamrkic86@gmail.com">jelenamrkic86@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <!-- <p>Profesional makeup artist Jelena Mrkić. Zablistajte na maturskoj večeri ili na Vama vrlo
                                bitan dan!!!</p> -->
                            <div class="map">
                                <div class="videoWrapper">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5781.675921303892!2d21.325463353916188!3d43.56825944514557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47567d5facd2cc01%3A0x92407b401807eb22!2zU3RlcmlqaW5hLCDQmtGA0YPRiNC10LLQsNGG!5e0!3m2!1ssr!2srs!4v1555840649372!5m2!1ssr!2srs" width="600" height="450" allowfullscreen></iframe>
                                    <div class="see-map">
                                        <span>Pogledaj mapu</span>
                                    </div>    
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="hr"></div> -->
    </section>

    <section class="contact">
        <h2>Pišite mi</h2>   
        
        <div class="container cform">
            <div class="row">
                <div class="col-6 offset-3">
                    <!-- Poruka -->
                    <div class="alert alert-success" style="display: none;">
                        <strong>Poruka je uspešno prosleđena!</strong> Hvala na interesovanju
                    </div>
                    <!-- Forma -->
                    <form action="_send-email.php" method="post" id="contact-form">
                        <div class="form-group">
                            <label for="SenderName">Ime i prezime<span>*</span></label>
                            <input type="text" name="SenderName" class="form-control" id="SenderName" required>
                        </div>
                        <div class="form-group">
                            <label for="SenderEmail">E-mail<span>*</span></label>
                            <input type="email" name="SenderEmail" class="form-control" id="SenderEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="SenderPhone">Broj telefona<span>*</span></label>
                            <input type="text" name="Sender[Phone]" class="form-control" id="SenderPhone" required>
                        </div>
        
                        <div class="form-group">
                            <label for="SenderMessage">Poruka<span>*</span></label>
                            <textarea name="SenderMessage" id="SenderMessage" class="form-control" required></textarea>
                        </div>
                        <button class="btn" type="submit">Pošalji</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="hr"></div>
    </section>
    <!-- Main End -->
    
<?php require('footer.php'); ?>   
