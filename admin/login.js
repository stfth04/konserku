// JavaScript for Login Page - Konserku
document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.getElementById("login-form");
  const loginError = document.getElementById("login-error");

  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // Simulated credentials (replace with real authentication logic)
    const validUsername = "admin";
    const validPassword = "password123";

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === validUsername && password === validPassword) {
      // Redirect to admin panel
      window.location.href = "admin.php";
    } else {
      // Show error message
      loginError.style.display = "block";
      loginError.textContent =
        "Invalid username or password. Please try again.";
    }
  });
});
