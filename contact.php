<?php
include "header.php"
?>
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


<section class="contact">
    <div class="container contact-conatiner">
        <div class="left-contact" data-aos="fade-right">
            <div class="contact-img">
                <img src="image/contact.png" alt="">
            </div>
            <div class="contact-info">
                <h2>Contact Us </h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure, reiciendis eligendi. Exercitationem laborum iure nesciunt?</p>
                <div class="footer-contact">
                    <span><i class="fa-solid fa-phone"></i>+92 3085437544</span>
                    <span><i class="fa-solid fa-envelope"></i>tayabatariq3@gmail.com</span>
                    <span><i class="fa-solid fa-location-dot"></i>pakistan, punjab</span>
            <ul class="footer-social">
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-square-instagram"></i></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-staylinked"></i></i></a>
                            </li>
                </ul>
                </div>
            </div>
        </div>
        <div class="right-contact" data-aos="fade-left">
            <form action="https://formspree.io/f/meojwzjp" method="POST" class="contact-forn">
                <div class="form-name">
                    <input type="text" name="first-name" placeholder="First Name "required>
                    <input type="text" name="last-name" placeholder="Last Name "required>

                </div>
                 <input type="email" name="email" placeholder="Your Email Address" required>
        <textarea name="messege" placeholder="Messege" required rows="7"></textarea>
        <button type="submitt" class="btn btn-primary"> Send Messege</button>
            </form>
        </div>
    </div>
</section>

<script src="main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
       AOS.init({
        offset: 250,
      
        duration: 2000,
        container: '.scroll-container',

        
    }) 
    $(window).on("scroll", function () {
            AOS.init();
        });
 
</script>

<?php
include "footer.php"
?>