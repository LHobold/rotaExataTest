(function () {
  const logoutBtn = document.getElementById("logoutButton");

  logoutBtn.addEventListener("click", (ev) => {
    document.cookie = "auth" + "=;expires=Thu, 01 Jan 1970 00:00:01 GMT;";
    window.location.replace("./index.php");
  });
})();
