// ini untuk js nya bagian contener di sebelah kiri
document
  .getElementById("card-dashboard-btn")
  .addEventListener("click", function () {
    document
      .getElementById("card-dashboard-content")
      .classList.remove("hidden");
    document.getElementById("informasi-event-content").classList.add("hidden");
  });

document
  .getElementById("informasi-event-btn")
  .addEventListener("click", function () {
    document.getElementById("card-dashboard-content").classList.add("hidden");
    document
      .getElementById("informasi-event-content")
      .classList.remove("hidden");
  });
