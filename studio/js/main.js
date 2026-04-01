function validateEmailForm() {
  event.preventDefault();

  let form = document.querySelector("form#newsletter");
  let email = form.querySelector("input[type='email']");
  let value = email.value;

  const data = {
    email: value
  }

  fetch("http://localhost/studio/newsletter", {
    method: "POST",
    headers: [
      ["Content-Type", "application/json"],
    ],
    body: JSON.stringify(data)
  })
    .then(response => response.json())
    .then(data => {

      let p = form.querySelector("p");
      if (data.message === "OK") {
        form.reset();
        p.className = "success";
        p.textContent = "Ευχαριστούμε για την εγγραφή σας";
      } else {
        p.className = "error";
        p.textContent = "Προέκυψε κάποιο πρόβλημα προσπαθήστε πάλι";
      }
    })
    .catch(error => console.error('Error:', error));
}


const breakPoint = 760;
let mainMenu, burgerMenu;
window.addEventListener('load', () => {
  const mainMenu = document.querySelector("nav.main-menu");
  const burgerMenu = document.querySelector("nav#burger-menu");
  if (!burgerMenu) return;
  burgerMenu.addEventListener("click", () => {
    mainMenu.classList.toggle("block");
    burgerMenu.textContent = (burgerMenu.textContent === "⛌") ? "☰" : "⛌";
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth > breakPoint) {
      mainMenu.classList.remove("block");
      burgerMenu.textContent = "☰";
    }
  });
});