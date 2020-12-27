// document.getElementById('expand-form').addEventListener('click', expand);
//
// function expand() {
//   document.querySelector('.form').classList.toggle('show');
// }

document.getElementById("expand-form-btn").addEventListener('click', () => {
  document.getElementById("expand-form-btn").classList.toggle("change-colour-grey");
  document.querySelector('.form').classList.toggle('show');
});
