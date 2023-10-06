document.addEventListener("DOMContentLoaded", function() {
    const checkbox = document.getElementById("signUpForm");
    const formulario2 = document.getElementById("form2");
    const formulario1 = document.getElementById("form1");
    formulario2.style.display = "none";

    checkbox.addEventListener("change", function() {
        if (checkbox.checked) {
            formulario1.style.display = "none";
            formulario2.style.display = "block";
        } else {
            formulario1.style.display = "block";
            formulario2.style.display = "none";
        }
    });
});