let tabs = document.querySelectorAll(".tabs li");
let tabsArray = Array.from(tabs);
let divs = document.querySelectorAll(".service-content > div");
let divsArray = Array.from(divs);

tabsArray.forEach((ele) => {
  ele.addEventListener("click", function (e) {
    tabsArray.forEach((ele) => {
      ele.classList.remove("active");
    });
    e.currentTarget.classList.add("active");
    divsArray.forEach((div) => {
      div.style.display = "none";
    });
    document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
  });
});

$('#owl-carousel').owlCarousel({
  loop: true,
  margin: 30,
  // dots: false,
  // navText : [`<div class='hero-next-slide'>  التالي <i class="fas fa-fast-forward"></i> </div>`,`<i></i>`],
  nav: true,
  rtl: true,
  items: 1,
  autoplay: true,
  // slideTransition: 'linear',
  autoplayTimeout: 5000,
  autoplaySpeed: 2000,
  autoplayHoverPause: true,
  dots: false,

})

$('#owl-carousel2').owlCarousel({
  autoplay: true,
  slideTransition: 'linear',
  autoplayTimeout: 6000,
  autoplaySpeed: 15000,
  autoplayHoverPause: true,
  loop: true,
  margin: 5,
  dots: false,
  center: true,
  rtl: true,
  responsive: {
    0: {
      items: 3
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})
let preloader = document.getElementById("preloader");
if (preloader) {
  window.addEventListener("load", () => {
    preloader.remove();
  });
}

window.addEventListener("load", () => {
  AOS.init({
    once: true, // whether animation should happen only once - while scrolling down
  });
});

// A $( document ).ready() block.
$(document).ready(function () {

  $("#gallery").load("../../gallery/1");

  //   setInterval(function(){  AOS.init();
  //   },1000);
  console.log("ready!");

  setInterval(function(){  typeWriter();
  },800);



  $(document).on('scroll', function() {
    if( $(this).scrollTop() >= $('#gallery').position().top ){
      AOS.init({
        once: true, // whether animation should happen only once - while scrolling down
      });
        $('body').css('overflow-y','scroll')
        
        

    }
});
  // change is-checked class on buttons
});


document.querySelectorAll('img').forEach((img) => 
img.addEventListener('load',()=>
AOS.refresh())
);

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {

    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

/* ---- particles.js config ---- */

particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 200,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#000"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#000",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 2,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});


/* ---- stats.js config ---- */

var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
  stats.begin();
  stats.end();
  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
  }
  requestAnimationFrame(update);
};
requestAnimationFrame(update);

$('canvas').eq(1).remove();

