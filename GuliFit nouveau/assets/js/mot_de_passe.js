function togglePasswordVisibility(inputId, toggleId) {
  const input = document.getElementById(inputId);
  const toggle = document.getElementById(toggleId);
  const isPassword = input.type === "password";

  input.type = isPassword ? "text" : "password";
  toggle.src = isPassword
    ? "../assets/image/pictogramme/oeil_fermé_mdp.svg"
    : "../assets/image/pictogramme/oeil_mdp.svg";
}

document.getElementById("toggle-password").addEventListener("click", () => {
  togglePasswordVisibility("password", "toggle-password");
});

document
  .getElementById("toggle-confirm-password")
  .addEventListener("click", () => {
    togglePasswordVisibility("confirm_password", "toggle-confirm-password");
  });
