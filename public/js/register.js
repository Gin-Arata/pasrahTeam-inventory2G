var Form1 = document.getElementById("Form1");
var Form2 = document.getElementById("Form2");
var Next1 = document.getElementById("Next1");
var Back1 = document.getElementById("Back1");
var Submit = document.getElementById("Submit");

// var progress = document.getElementById("progress");

Next1.onclick = function () {
    Form1.style.left = "-450px";
    Form2.style.left = "40px";
    // progress.style.width = "240px";
}

Back1.onclick = function () {
    Form1.style.left = "40px";
    Form2.style.left = "450px";
    // progress.style.width = "120px";
}