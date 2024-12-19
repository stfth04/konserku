let currentSlide = 0;

function showSlide(index) {
  const slides = document.querySelectorAll(".slide");
  if (index >= slides.length) {
    currentSlide = 0;
  } else if (index < 0) {
    currentSlide = slides.length - 1;
  } else {
    currentSlide = index;
  }
  const slider = document.querySelector(".slider");
  slider.style.transform = `translateX(-${currentSlide * 100}%)`;
}

function changeSlide(direction) {
  showSlide(currentSlide + direction);
}

// Menampilkan slide pertama
showSlide(currentSlide);

// Sample event data
const events = [
  {
    title: "Dewa 19 Featuring Allstars 2.0",
    date: "Sabtu,18 Januari 2025",
    location: "Gelora Bung Karno,Jakarta",
    image:
      "https://spaces.ilfen.co/assets/image/produk/1727602615-SLIDER_DESKTOP_1008_X_252_PX.png",
  },
  {
    title: "Konser Cosmyc Fest",
    date: "Sabtu,21 Desember 2024",
    location: "GOR Rudy Resnawan, Kota Banjar Baru, Kalimantan Selatan",
    image: "cosmyc.jpg",
  },
  {
    title: "Dialog Cinta Vol.5 Carnival Ambyar",
    date: "Minggu,23 Februari 2025",
    location: "Stadion Merdeka, Jombang",
    image:
      "https://spaces.ilfen.co/assets/image/produk/1733130273-Slider_Desktop_(5).jpg",
  },
  {
    title: "NCT SHOW SOUTH BORNEO",
    date: "18 Januari 2025",
    location: "BANJARMASIN",
    image: "https://via.placeholder.com/300x180?text=NCT",
  },
];

// Populate event cards dynamically
const eventContainer = document.getElementById("eventContainer");

events.forEach((event) => {
  const card = document.createElement("div");
  card.className = "event-card";
  card.innerHTML = `
  <img src="${event.image}" alt="${event.title}">
  <div class="event-details">
    <div class="event-title">${event.title}</div>
    <div class="event-meta">
      <p><i class="fas fa-calendar-alt"></i> <b>Date:</b> ${event.date}</p>
      <p><b>:</b> ${event.location}</p>
    </div>
    <div class="event-button">
      <button onclick="window.location.href='event.html'">Selengkapnya</button>
    </div>
  </div>
`;

  eventContainer.appendChild(card);
});

// Contoh JavaScript (tidak diperlukan untuk footer tetap)
console.log("Footer siap!");
