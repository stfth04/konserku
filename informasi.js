function showSection(sectionId) {
  document.getElementById("informasi-pribadi").classList.add("hidden");
  document.getElementById("ubah-sandi").classList.add("hidden");
  document.getElementById("tentang-konserku").classList.add("hidden");
  document.getElementById(sectionId).classList.remove("hidden");

  document
    .getElementById("nav-informasi-pribadi")
    .classList.remove("font-bold");
  document.getElementById("nav-ubah-sandi").classList.remove("font-bold");
  document.getElementById("nav-tentang-konserku").classList.remove("font-bold");
  document.getElementById("nav-logout").classList.remove("font-bold");
  document.getElementById("nav-" + sectionId).classList.add("font-bold");
}
function confirmLogout() {
  if (confirm("Are you sure you want to log out?")) {
    window.location.href = "index.php";
  }
}
