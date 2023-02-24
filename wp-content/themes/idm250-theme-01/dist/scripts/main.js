let mobileNav = document.getElementById("mobile-menu");
let hamburgerMenu = document.getElementById("hamburgerMenu");

hamburgerMenu.addEventListener("click", () => {
  if (mobileNav.classList.contains("block")) {
    mobileNav.classList.remove("block");
    mobileNav.classList.add("hidden");
  } else {
    mobileNav.classList.add("block");
    mobileNav.classList.remove("hidden");
  }
});

// When we close it do the opposite
