
document.addEventListener("DOMContentLoaded", function() {
  const links = document.querySelectorAll("a"); 

  links.forEach(link => {
      // Save de kleur
      link.dataset.originalColor = getComputedStyle(link).color;

      link.addEventListener("click", function() {
          // Reset naar origineel kleur
          links.forEach(link => {
              link.style.color = link.dataset.originalColor;
          });

          // verander kleur
          this.style.color = "#4565C4";
      });
  });
});


//// form validatie

// function validateForm() {
//     var emailInput = document.getElementById("email");
//     var email = emailInput.value.trim();
//
//     // Check voor ".com"
//     if (!email.endsWith(".com" || ".nl")) {
//         alert("Email should end with '.com '");
//         emailInput.focus();
//         return false;
//     }
//
//
//     if (!emailInput.checkValidity()) {
//         alert("Please enter a valid email address");
//         emailInput.focus();
//         return false;
//     }
//
//     return true;
// }

///// thank you message ////
function validateForm() {
    var emailInput = document.getElementById("email");
    var email = emailInput.value.trim();

    // Check for either ".com" or ".nl"
    if (!(email.endsWith(".com") || email.endsWith(".nl"))) {
        alert("Email should end with '.com' or '.nl'");
        emailInput.focus();
        return false;
    }

    if (!emailInput.checkValidity()) {
        alert("Please enter a valid email address");
        emailInput.focus();
        return false;
    }

    alert("Thank you for your message. I will get back to you soon.");

    return true;

}

/////    slide show   //////


var wss_i = 0;
var wss_array = ["<img src='../media/slide1.jpg'>",
    "<img src='../media/slide2.jpg'>",
    "<img src='../media/slide3.jpg'>",
    "<img src='../media/slide4.jpg'>",
    "<img src='../media/slide4-2.jpg'>",
    "<img src='../media/slide5.png'>",
    "<img src='../media/slide6.jpg'>",
    "<img src='../media/slide7.png'>"];
var wss_elem;
function wssNext(){
    wss_i++;
    wss_elem.style.opacity = 0;
    if(wss_i > (wss_array.length - 1)){
        wss_i = 0;
    }
    setTimeout('wssSlide()',1750);
}
function wssSlide(){
    wss_elem.innerHTML = wss_array[wss_i];
    wss_elem.style.opacity = 1;
    setTimeout('wssNext()',1750);
}

//// text loop////


var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff }";
    document.body.appendChild(css);
};

///
function myFunction() {
    document.getElementById("myVideo").controls = true;
}



///////pop up///////////

