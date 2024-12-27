// JavaScript for Admin Panel - Konserku

document.addEventListener("DOMContentLoaded", () => {
  // Search functionality
  const searchInput = document.querySelector(".search-bar input");
  const searchButton = document.querySelector(".search-bar button");
  const eventCards = document.querySelectorAll(".event-card");

  searchButton.addEventListener("click", () => {
    const searchTerm = searchInput.value.toLowerCase();
    eventCards.forEach((card) => {
      const eventName = card.querySelector("h3").textContent.toLowerCase();
      if (eventName.includes(searchTerm)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });

  // Example dynamic data (replace with API call in a real app)
  const events = [
    { name: "Concert A", location: "Jakarta", date: "2024-12-30" },
    { name: "Concert B", location: "Bandung", date: "2024-12-31" },
    { name: "Concert C", location: "Surabaya", date: "2025-01-01" },
  ];

  const eventCardsContainer = document.querySelector(".event-cards");

  // Function to render events
  function renderEvents(events) {
    eventCardsContainer.innerHTML = ""; // Clear existing content
    events.forEach((event) => {
      const card = document.createElement("div");
      card.className = "event-card";
      card.innerHTML = `
                <h3>${event.name}</h3>
                <p>Location: ${event.location}</p>
                <p>Date: ${event.date}</p>
            `;
      eventCardsContainer.appendChild(card);
    });
  }

  // Render initial events
  renderEvents(events);

  // Add more interactivity here if needed
});
