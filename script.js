console.log(mdp.value);

function checkPassword() {
  const strengthText = document.getElementById("complexite-texte");
  const password = document.getElementById("mdp").value;
  const strengthBar = document.getElementById("complexite");
  const regexStrong =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{2,}$/;
  const regexMedium = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{2,}$/;
  const regexWeak = /^.{8,}$/;
  if (regexStrong.test(password)) {
    strengthBar.value = 100;
    strengthBar.classList.remove("faible", "ok");
    strengthBar.classList.add("fort");
    strengthText.innerHTML = "fort";
    strengthText.style.color = "green";
  } else if (regexMedium.test(password)) {
    strengthBar.value = 50;
    strengthBar.classList.remove("faible", "fort");
    strengthBar.classList.add("ok");
    strengthText.innerHTML = "ok";
    strengthText.style.color = "yellow";
  } else if (regexWeak.test(password)) {
    strengthBar.value = 20;
    strengthBar.classList.remove("ok", "fort");
    strengthBar.classList.add("faible");
    strengthText.innerHTML = "faible";
    strengthText.style.color = "red";
  } else {
    strengthBar.value = 0;
    strengthText.innerHTML = "";
  }
}

function showMdp() {}
