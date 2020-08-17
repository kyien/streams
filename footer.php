<div class="footer clearfix">
        <div class="footer-content">
                <div class="footer-section contactform hidethis">
                        
                </div>
                <?php
                if(!$_SERVER['REQUEST_URI']=='contact.php'){
                
                ?>
                    <div class="footer-section contactform">
                        <h2 id="contactus">Contact Us</h2><br>
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                            <input type="email" name="email" placeholder="Your E-mail Address..." class="text-input contact-input">
                            <input type="tel" name="phonenumber" placeholder="Your Phone Number..." class="text-input contact-input">
                            <textarea name="message" placeholder="Your Message..." class="text-input contact-input" row="5" ></textarea>
                            <button type="submit" value="SEND MESSAGE" class="btn btn-big">
                            SEND <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                <?php
                 }
                ?>
                    <div class="footer-section links">
                        <h2>Quick Links</h2><br>
                        <ul>
                            <a href="index.php"><li> <i class="fas fa-home"></i> Home</li></a>
                            <a href="contact.php"><li><i class="fas fa-address-book"></i> Contact Me</li></a>
                            <a href="downloads.php"><li><i class="fas fa-download"></i> Downloads</li></a>
                        </ul>
                    </div>
                    <div class="footer-section about">
                        <h1 class="logo-text"><span>Dr. </span>Ngotho</h1>
                        <div class="contactfooter">
                            <span><a href=""><i class="fas fa-phone-volume"></i>&nbsp; 070000000</a></span>
                            <span><a href=""><i class="fab fa-whatsapp"></i>&nbsp; 0700000000</a></span>
                            <span><a href=""><i class="fas fa-envelope-open-text"></i>&nbsp; info@</a></span>
                        </div>
                        <div class="socials">
                            <a href=""><i class="fas fa-phone-alt"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    </div>
                <div class="footer-bottom">
                Copyright &#169 2020  -  Dr Ngotho <a href="https://ubunifudigitech.co.ke" target="blank"> <br>|| Designed By UBUNIFU DIGITECH LTD</a>
                </div>

                <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
                <script
                    src="https://code.jquery.com/jquery-3.4.1.min.js"
                    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                    crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
               
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                <!-- <script type="text/javascript" src="js/validation.js"></script> -->
                <script type="text/javascript" src="js/postcontact.js"></script>
                <script type="text/javascript" src="js/main.js"></script>
            </body>
        
        </div>
        
</div>
</html>