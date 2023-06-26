//Toogle class active

const navbarCen = document.querySelector(".navbar-cen");

//Hamburger diklik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarCen.classList.toggle("active");
};

//klik diluar sidebar & navbar, sidebar hilang
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarCen.contains(e.target)) {
    navbarCen.classList.remove("active");
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const menuLinks = document.querySelectorAll(".opsimenu a");
  menuLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault(); //Biar ga otomatis ngescroll default(ini yg bikin lgsg gambar)
      const sectionId = link.getAttribute("href"); // semua yg ada href diselect

      const section = document.querySelector(sectionId);
      const sectionOffsetTop = section.offsetTop;
      const scrollPosition = sectionOffsetTop - 100;
      window.scrollTo({
        top: scrollPosition,
        behavior: "smooth",
      });

    
      section.querySelector("h1").scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    });
  });
});


// Pop-up
document.querySelectorAll(".row img").forEach((image) => {
  image.onclick = () => {
    document.querySelector(".popup").style.display = "block";
    document.querySelector(".popup img").src = image.getAttribute("src");
  };
});

document.querySelector(".popup span").onclick = () => {
  document.querySelector(".popup").style.display = "none";
};

