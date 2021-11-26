(function () {
  ("use strict");

  document.addEventListener("DOMContentLoaded", function (event) {
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());

    if (params.invalid === "true") {
      const title = "Error";
      const message = "Incorrect username or password";
      return eModal.alert(message, title);
    }
  });

  const form = document.getElementById("formLogin");

  form.addEventListener(
    "submit",
    function (event) {
      event.preventDefault();

      if (!form.checkValidity()) {
        event.stopPropagation();
        form.classList.add("was-validated");
        return;
      }

      const formData = new FormData(form);
      let modalContent = "";

      for (let [key, value] of formData.entries()) {
        if (key === "Password") {
          value = "**********";
        }
        modalContent += `<b>${key}</b>: ${value}<br> `;
      }

      const eModalOptions = {
        title: "Are you sure you want to proceed?",
        message: `Here are your inputted data:<br><br>${modalContent}`,
      };

      eModal.confirm(eModalOptions).then(
        () => {
          form.submit();
        },
        () => {}
      );
    },
    false
  );
})();
