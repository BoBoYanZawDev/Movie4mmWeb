let section = document.querySelectorAll("section");
let navLinks =document.querySelectorAll("header li a");
let downloadLink = document.querySelector('header li a[href*="download"]');
let downloadDropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');

//Scroll animation functions 
const showSection = (entry) => {
    entry.forEach((item) => {
        if (item.isIntersecting) {
            item.target.classList.add('animated'); // Add animation class
        } else {
            item.target.classList.remove('animated'); // Remove animation class when not visible
        }
    });
};
const observer = new IntersectionObserver(showSection, {
    threshold: 0.2 // 20% of the section is visible
});

window.onscroll = ()=>{
        section.forEach(sec=>{
            let top = window.scrollY;
            let offset = sec.offsetTop-150;
            let height = sec.offsetHeight;
            let id=sec.getAttribute("id");

            // for section active link in header
            if(top >= offset && top <= offset +height){
                navLinks.forEach( links =>{
                    links.classList.remove('active');
                });
                document.querySelector('header li a[href*='+ id + ']').classList.add('active');
                if(id === 'Phdownload' || id === 'TVdownload'){
                    downloadLink.classList.add('active');
                    downloadDropdownItems.forEach(item => {
                        if (item.getAttribute('href').includes(id)) {
                            item.classList.add('active');
                        } else {
                            item.classList.remove('active');
                        }
                    });
                }
            }

            //for Section Visible animation obj
            observer.observe(sec);
        });
    }
document.addEventListener("DOMContentLoaded", function () {
        const Section1 = document.querySelector('.section1');
        document.querySelector('header li a[href*="#home"]').classList.add('active');
        Section1.classList.add('animated');
});

// for Text Wave animation
const text = document.querySelectorAll('.Section__Header h2');
text.forEach(char =>{
  char.innerHTML = char.textContent.split('').map((text, wave) =>
  `<span style="transition-delay: ${wave * 50}ms">${text}</span>`).join('');
});

//for Card animation
const card = document.querySelectorAll('.section2 .cardContainer .card');
card.forEach((comp,i)=>{
    comp.style.animationDuration=`${(i+=2)*500}ms`;
}
)
