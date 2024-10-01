<?php
include "header.php"
?>
<link rel="stylesheet" href="css/course.css">
<link rel="stylesheet" href="css/home.css.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


<style>
    .courses h2{
    margin-top: 0.1rem  !important;
    }
    @media screen and (max-width:600px) {

         .courses h2{
    margin-top: 4rem ;
    margin-bottom:2rem !important;
    }
    }
</style>

<!-- start courses section -->
<section class="courses">
    <h2  data-aos="fade-up">Our Popular Courses </h2>
    <div class="container courses-container">
<article class="course"  data-aos="zoom-in">
    <div class="course-img">
        <img src="image/course8.jpg" alt="">
    </div>
    <div class="course-info">
        <h4>Responsive Social Media Websites UI Design </h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quam quaerat soluta incidunt fugiat ipsum repudiandae?</p>
        <a href="" class="btn btn-primary">Learn More </a>
    </div>
</article>

<article class="course"  data-aos="zoom-in">
    <div class="course-img">
        <img src="image/course7.jpg" alt="">
    </div>
    <div class="course-info">
        <h4>Responsive Social Media Websites UI Design </h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quam quaerat soluta incidunt fugiat ipsum repudiandae?</p>
        <a href="" class="btn btn-primary">Learn More </a>
    </div>
</article>

<article class="course"  data-aos="zoom-in">
    <div class="course-img">
        <img src="image/course6.jpg" alt="">
    </div>
    <div class="course-info">
    <h4>Responsive Social Media Websites UI Design </h4>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quam quaerat soluta incidunt fugiat ipsum repudiandae?</p>
    <a href="" class="btn btn-primary">Learn More </a>
    </div>
</article>

<article class="course"  data-aos="zoom-in">
    <div class="course-img">
        <img src="image/course1.jpg" alt="">
    </div>
    <div class="course-info">
    <h4>Responsive Social Media Websites UI Design </h4>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quam quaerat soluta incidunt fugiat ipsum repudiandae?</p>
    <a href="" class="btn btn-primary">Learn More </a>
    </div>
</article>

<article class="course"  data-aos="zoom-in">
    <div class="course-img">
        <img src="image/course2.jpg" alt="">
    </div>
    <div class="course-info">
    <h4>Responsive Social Media Websites UI Design </h4>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quam quaerat soluta incidunt fugiat ipsum repudiandae?</p>
    <a href="" class="btn btn-primary">Learn More </a>
    </div>
</article>
<article class="course"  data-aos="zoom-in">
    <div class="course-img">
        <img src="image/course3.jpg" alt="">
    </div>
    <div class="course-info">
    <h4>Responsive Social Media Websites UI Design </h4>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quam quaerat soluta incidunt fugiat ipsum repudiandae?</p>
    <a href="" class="btn btn-primary">Learn More </a>
    </div>
</article>
<article class="course"  data-aos="zoom-in">
    <div class="course-img">
        <img src="image/course4.jpg" alt="">
    </div>
    <div class="course-info">
    <h4>Responsive Social Media Websites UI Design </h4>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quam quaerat soluta incidunt fugiat ipsum repudiandae?</p>
    <a href="" class="btn btn-primary">Learn More </a>
    </div>
</article>
<article class="course"  data-aos="zoom-in">
    <div class="course-img">
        <img src="image/course5.jpg" alt="">
    </div>
    <div class="course-info">
    <h4>Responsive Social Media Websites UI Design </h4>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quam quaerat soluta incidunt fugiat ipsum repudiandae?</p>
    <a href="" class="btn btn-primary">Learn More </a>
    </div>
</article>
<article class="course"  data-aos="zoom-in">
    <div class="course-img">
        <img src="image/course6.jpg" alt="">
    </div>
    <div class="course-info">
    <h4>Responsive Social Media Websites UI Design </h4>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quam quaerat soluta incidunt fugiat ipsum repudiandae?</p>
    <a href="" class="btn btn-primary">Learn More </a>
    </div>
</article>
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