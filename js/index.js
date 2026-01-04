function showPopup(popupId) {
  document.getElementById(popupId).style.display = "flex";
}

function closePopup(popupId) {
  document.getElementById(popupId).style.display = "none";
}
window.onclick = function (event) {
  const signupPopup = document.getElementById("signupPopup");
  if (event.target === signupPopup) {
    signupPopup.style.display = "none";
  }
};

function showlogin(popupId) {
  document.getElementById(popupId).style.display = "flex";
}

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".recipe-card").forEach((card) => {
    const unlikedHeart = card.querySelector(".unliked-heart");
    const likedHeart = card.querySelector(".liked-heart");

    if (unlikedHeart && likedHeart) {
      unlikedHeart.addEventListener("click", () => {
        unlikedHeart.style.display = "none";
        likedHeart.style.display = "block";
      });

      likedHeart.addEventListener("click", () => {
        likedHeart.style.display = "none";
        unlikedHeart.style.display = "block";
      });
    }
  });
});
