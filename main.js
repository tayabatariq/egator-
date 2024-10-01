//changenavbar
window.addEventListener("scroll",() => {
    document.querySelector("nav").classList.toggle("window-scroll", window.scrollY > 0 )
});


// Frequently Asked Questions
const faqs = document.querySelectorAll(".faq");

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        // Toggle the 'open' class
        faq.classList.toggle('open');
        
        // Change the icon class
        const icon = faq.querySelector('.faq-icon i');
        if (icon.className === "fa-solid fa-plus") {
            icon.className = "fa-solid fa-minus";
        } else {
            icon.className = "fa-solid fa-plus";
        }
    });
});

// navopenbar

const menu = document.querySelector('.nav-menu');
const menuBtn = document.getElementById("open-menu-btn");
const closeBtn = document.getElementById("close-menu-btn");

menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeBtn.style.display ="inline-block";
    menuBtn.style.display ="none";
  
;
})
closeBtn.addEventListener('click', () => {
    menu.style.display = "none";
    closeBtn.style.display ="none";
    menuBtn.style.display ="inline-block";
})



// aoslibrary
   
    AOS.init({
        offset: 250,
      
        duration: 2000,
        container: '.scroll-container',

        
    }) 
    $(window).on("scroll", function () {
            AOS.init();
        });

    //    end AOS

    