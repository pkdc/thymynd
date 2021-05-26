//  code for nav-bar-btn-mob
"use strict";

const navBarBtn = document.querySelector(".nav-bar-btn-mob");
const navBar = document.getElementById("nav");

navBarBtn.addEventListener("click", () => {
  // const navStyle = window.getComputedStyle('navBar');
  // const navDisplay = navStyle.getPropertyValue('display');

  // console.log(window.getComputedStyle(navBarBtn));
  // navBarBtn.classList.toggle("change-colour-grey");
  navBarBtn.classList.toggle("nav-bar-btn-active");
  navBar.classList.toggle("show");

  // console.log(navDisplay);

  // if (navDisplay === "none") {
  //     navBarBtn.style.display = "block";
  //     navBarBtn.style.backgroundColor = "var (--thymynd-green, #2ECC71)";
  //     navBarBtn.style.color = "white";
  // } else {
  //     navBarBtn.style.display = "none";
  //     navBarBtn.style.backgroundColor = "white";
  //     navBarBtn.style.color = "var (--thymynd-green, #2ECC71)";
  // }
});

// code for expand-form-btn
const expandForm = document.querySelector(".green-bkg-btn");
const form = document.querySelector(".form");

// adding event Listener to the btn
expandForm.addEventListener("click", () => {
  // const formStyle = window.getComputedStyle(form);
  // const formDisplay = formStyle.getPropertyValue('display');

  expandForm.classList.toggle("change-colour-grey");
  form.classList.toggle("show");

  // display it if it's hidden
  // if (formDisplay === "none") {
  //   expandForm.classList.toggle("change-colour-grey");
  //   form.classList.toggle('show');
  // }
  //
  // // hide it if it's shown, and also if there is a bug introducing another display value i.e. not none
  // else if (formDisplay === "block") {
  //   expandForm.classList.toggle("change-colour-grey");
  //   form.classList.toggle('show');
  // }
});
