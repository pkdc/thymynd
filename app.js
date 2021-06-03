//  code for nav-bar-btn-mob
"use strict";

const navBarBtn = document.getElementById("nav-bar-btn-mob");
const navBar = document.getElementById("nav-bar-links");
console.log(navBarBtn);
console.log(navBar);

navBarBtn.addEventListener("click", () => {
  // can't get in here
  // console.log("added");
  const navStyle = window.getComputedStyle(navBar);
  const navDisplay = navStyle.getPropertyValue("display");

  // console.log(window.getComputedStyle(navBarBtn));
  // navBarBtn.classList.toggle("change-colour-grey");

  navBarBtn.classList.toggle("nav-bar-btn-active");
  // console.log(navBar);
  navBar.classList.toggle("show");

  console.log(navDisplay);
});

// code for expand-form-btn
const expandForm = document.getElementById("expand-form-btn");
const form = document.querySelector(".form");
// adding event Listener to the btn
expandForm.addEventListener("click", () => {
  // const formStyle = window.getComputedStyle(form);
  // const formDisplay = formStyle.getPropertyValue('display');

  expandForm.classList.toggle("change-colour-grey");
  form.classList.toggle("show");
});
