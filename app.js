const expandForm = document.querySelector(".green-bkg-btn");
const form = document.querySelector(".form");

// adding event Listener to the btn
expandForm.addEventListener('click', () => {
  const formStyle = window.getComputedStyle(form);
  const formDisplay = formStyle.getPropertyValue('display');

  // display it if it's hidden
  if (formDisplay === "none") {
    expandForm.classList.toggle("change-colour-grey");
    form.classList.toggle('show');
  }

  // hide it if it's shown
  else if (formDisplay === "block") {
    expandForm.classList.toggle("change-colour-white");
    form.classList.toggle('show');
  }

  // just in case there is a bug and introduced another display value
  else {
      form.classList.toggle('show');
  }
});
