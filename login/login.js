const signUpButton = document.getElementById("signUpButton");
const signInButton = document.getElementById("signInButton");
const signInForm = document.getElementById("signIn");
const signUpForm = document.getElementById("signup"); // Ubah dari signUp menjadi signup

signUpButton.addEventListener("click", function () {
  signInForm.style.display = "none";
  signUpForm.style.display = "block"; // Tampilkan form pendaftaran
});

signInButton.addEventListener("click", function () {
  signUpForm.style.display = "none"; // Sembunyikan form pendaftaran
  signInForm.style.display = "block"; // Tampilkan form masuk
});
document.addEventListener("DOMContentLoaded", function () {
  signUpForm.style.display = "none"; // Sembunyikan form pendaftaran saat halaman dimuat
});
