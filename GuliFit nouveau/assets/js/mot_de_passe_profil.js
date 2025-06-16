function togglePasswordVisibility(inputId, toggleId) {
  const input = document.getElementById(inputId);
  const toggle = document.getElementById(toggleId);
  const isPassword = input.type === "password";

  input.type = isPassword ? "text" : "password";
  toggle.src = isPassword
    ? "../assets/image/pictogramme/oeil_fermé_mdp.svg"
    : "../assets/image/pictogramme/oeil_mdp.svg";
}

document.getElementById("toggle-mot-de-passe").addEventListener("click", () => {
  togglePasswordVisibility("mot-de-passe", "toggle-mot-de-passe");
});

document.getElementById("toggle-confirmation").addEventListener("click", () => {
  togglePasswordVisibility("confirmation", "toggle-confirmation");
});
