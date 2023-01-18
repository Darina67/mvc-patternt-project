const closeErr = document.querySelector(".closeError");
const message = document.getElementById("message");
setTimeout(function () {
  closeErr.addEventListener("click", function () {
    message.style.display = "none";
  });
}, 1500);
