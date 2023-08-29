
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
          this.style.color = "#4287f5"; 
      });
  });
});


//// form validatie

function validateForm() {
    var emailInput = document.getElementById("email");
    var email = emailInput.value.trim();

    // Check voor ".com"
    if (!email.endsWith(".com")) {
        alert("Email should end with '.com'");
        emailInput.focus();
        return false;
    }


    if (!emailInput.checkValidity()) {
        alert("Please enter a valid email address");
        emailInput.focus();
        return false;
    }

    return true;
}